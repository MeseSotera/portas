<?php 

session_start();

$path = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$root = str_replace("index.php", "",$path);

define('ROOT', $root);
define('ASSETS', $root . "assets/");


include "../app/init.php";

$router = new Router();