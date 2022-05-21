<?
include_once("./db.php");


echo "<pre>";
// print_r($_POST);
// print_r($_FILES['photo']['name']);
// print_r(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
echo "</pre>";

$rand_name = md5(time());
$photo = $_FILES['photo'];
$photoExt = print_r(pathinfo($photo['name'], PATHINFO_EXTENSION));
$photoName = is_uploaded_file($photo['tmp_name']) ? "{$_POST['login']} - $rand_name.$photoExt" : "default.png";
$photoDir = "../img/users/$photoName";


$userReg = userReg($_POST['login'], $_POST['name'], $_POST['pass'], $photoDir);

if ($userReg && is_uploaded_file($photo['tmp_name'])) {
    move_uploaded_file($photo['tmp_name'], $photoDir);
    
}
header("Location:/");
            //      _     _  
            //     / \___/ \
            //    /         \
            //   / $$$    $$$\
            //  /      |      \  
            //  \     _|_     /  
            //   \   \___/   /
            //    \_________/