<?php

date_default_timezone_set('Europe/London');

require_once("classes/meekrodb.2.3.class.php"); // Refer to http://www.meekro.com/quickstart.php

$driver_id = isset($_REQUEST['driver_id'])?$_REQUEST["driver_id"]:"";
$drivername = isset($_REQUEST['name'])?$_REQUEST["name"]:"";
$address = isset($_REQUEST['address'])?$_REQUEST["address"]:"";
$drivernumber = isset($_REQUEST['phone_number'])?$_REQUEST["phone_number"]:"";
$driveremail = isset($_REQUEST['email'])?$_REQUEST["email"]:"";

$customer_id = isset($_REQUEST['customer_id'])?$_REQUEST["customer_id"]:"0";
$passenger_name = isset($_REQUEST['passenger_name'])?$_REQUEST["passenger_name"]:"";
$customer_number = isset($_REQUEST['customer_number'])?$_REQUEST["customer_number"]:"";
$customer_email = isset($_REQUEST['customer_email'])?$_REQUEST["customer_email"]:"";

$company_id = isset($_REQUEST['company_id'])?$_REQUEST["company_id"]:"0";
$company_name = isset($_REQUEST['company_name'])?$_REQUEST["company_name"]:"";
$company_address = isset($_REQUEST['company_address'])?$_REQUEST["company_address"]:"";
$contact_name = isset($_REQUEST['contact_name'])?$_REQUEST["contact_name"]:"";
$company_number = isset($_REQUEST['company_number'])?$_REQUEST["company_number"]:"";
$company_email = isset($_REQUEST['company_email'])?$_REQUEST["company_email"]:"";

$booking_id = isset($_REQUEST['booking_id'])?$_REQUEST["booking_id"]:"0";
$pickup = isset($_REQUEST['pickup'])?$_REQUEST["pickup"]:"";
$pickup_name = isset($_REQUEST['pickup_name'])?$_REQUEST["pickup_name"]:"";
$payment_method = isset($_REQUEST['payment_method'])?$_REQUEST["payment_method"]:"";
$comment = isset($_REQUEST['comment'])?$_REQUEST["comment"]:"";
$cal_id = isset($_REQUEST['cal_id'])?$_REQUEST["cal_id"]:"";
$type_id = isset($_REQUEST['type_id'])?$_REQUEST["type_id"]:"";

$password = isset($_REQUEST['password'])?$_REQUEST["password"]:"";
$fname = isset($_REQUEST['fname'])?$_REQUEST["fname"]:"";
$lname = isset($_REQUEST['lname'])?$_REQUEST["lname"]:"";
$user_email = isset($_REQUEST['user_email'])?$_REQUEST["user_email"]:"";

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