<?php

date_default_timezone_set('Europe/London');

require_once("classes/meekrodb.2.3.class.php"); // Refer to http://www.meekro.com/quickstart.php

DB::$user = 'usr_taxi';
DB::$password = 'taxi';
DB::$dbName = 'mydb';

$name ="mydb";
$user = 'usr_taxi';

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'usr_taxi');
define('DB_PASS', 'taxi');

$database = new PDO(DB_TYPE.':host='.DB_HOST, DB_USER, DB_PASS);
?>