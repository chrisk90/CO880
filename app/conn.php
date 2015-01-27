<?php
date_default_timezone_set('Europe/London');
DB::$user = 'usr_taxi';
DB::$password = 'taxi';
DB::$dbName = 'mydb';

$name ="mydb";
$user = 'usr_taxi';
//calendar_id should already be owned by user
$calendar = 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com';

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'usr_taxi');
define('DB_PASS', 'taxi');

$database = new PDO(DB_TYPE.':host='.DB_HOST, DB_USER, DB_PASS);
?>