<?php
include("../vendor/autoload.php");

use Libs\Database\Mysql;
use Libs\Database\Userstable;
use Helpers\HTTP;

$id = $_GET['id'];
$table = new Userstable(new Mysql);
$table->unsuspend($id);

HTTP::redirect('/admin.php');
