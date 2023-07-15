<?php
session_start();
include("../vendor/autoload.php");

use Libs\Database\Mysql;
use Libs\Database\Userstable;
use Helpers\HTTP;

$email = $_POST['email'];
$password = $_POST['password'];
var_dump($email);
var_dump($password);
$table = new Userstable(new Mysql());
$user = $table->findByEmailAndPassword($email, $password);
if ($user) {
    if ($user->suspended) {
        HTTP::redirect("/index.php", "suspended=true");
    }
    $_SESSION['user'] = $user;
    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/index.php?auth=fail");
}
// session_start();
// include("../vendor/autoload.php");

// use Libs\Database\MySQL;
// use Libs\Database\UsersTable;
// use Helpers\HTTP;

// $email = $_POST['email'];
// $password = md5($_POST['password']);
// $table = new UsersTable(new MySQL());
// $user = $table->findByEmailAndPassword($email, $password);
// if ($user) {
//     $_SESSION['user'] = $user;
//     HTTP::redirect("/profile.php");
// } else {
//     HTTP::redirect("/index.php", "incorrect=1");
// }
