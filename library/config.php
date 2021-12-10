<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
header("Content-Type: application/json; charset=utf-8");

define('DB_NAME', 'restaurant_db'); // DATABASE
define('DB_USER', 'root'); // ROOT DEFAULT MYSQL
define('DB_PASSWORD', '');  // PASSOWORD
define('DB_HOST', 'localhost'); // LOCAL IF YOU USE LOCAL.

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>