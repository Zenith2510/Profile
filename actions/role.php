<?php
include("../vendor/autoload.php");

use Libs\Database\Mysql;
use Libs\Database\Userstable;
use Helpers\HTTP;

$id = $_GET['id'];
$role = $_GET['role'];

$table = new Userstable(new Mysql);
$table->changeRole($id, $role);

HTTP::redirect('/admin.php');
