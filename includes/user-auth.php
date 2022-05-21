<?
include_once('./db.php');

$userAuth = userAuth($_POST['login'], $_POST['pass']);

if ($userAuth) {
    header("Location:/");
}else {
    header("Location:/?route=login&error=1");
}