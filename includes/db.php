    <?
    session_start();
function db(){
    return new PDO("mysql:host=127.0.0.1;dbname=gr1500chorshan", 'root', '');
}

function userReg($login, $name, $pass, $photoDir){
    $login = strip_tags($login);
    $name = strip_tags($name);
    $pass = password_hash($pass, PASSWORD_BCRYPT);
    $db = db();
    $query = "INSERT INTO `users`(`user_login`, `user_name`, `user_pass`) VALUES (?,?,?)";
    $userDriver = $db->prepare($query);
    $result = $userDriver->execute([$login, $name, $pass]);

    if ($result) {
        $userId = $db->lastInsertId();
        $query = "INSERT INTO `images`(`user_id`, `img_path`, `img_select`) VALUES (?,?,?)";
        $imgDriver = $db->prepare($query);
        $result = $imgDriver->execute([$userId, $photoDir, 1]);
    }
    return $result;
}

function userAuth($login, $pass) {
    $db = db();
    $login = strip_tags($login);
    $query = "SELECT * FROM `users` INNER JOIN `images` USING(user_id) WHERE `user_login`=?";
    $userDriver = $db->prepare($query);
    $user = $userDriver->execute([$login]);
    $user = $userDriver->fetch(PDO::FETCH_ASSOC);

    if ($login == $user['user_login'] && password_verify($pass, $user['user_pass'])) {
        $_SESSION['id'] = $user['user_id'];
        return true;
    }
    return false;
}


function userInfo() {
    $db = db();
    $query = "SELECT  `user_login`, `user_name`, images.img_path FROM `users` INNER JOIN images USING(user_id) WHERE user_id=? AND images.img_select=1";
    $userDriver = $db->prepare($query);
    $userDriver->execute([isset($_SESSION['id'])? $_SESSION['id'] : ""]);
    return $userDriver->fetch(PDO::FETCH_ASSOC);
        
}