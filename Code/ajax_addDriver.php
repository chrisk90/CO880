<?php

include "conn.php";

$driver_id = isset($_REQUEST['driverid'])?$_REQUEST["driver_id"]:'';
$drivername = isset($_REQUEST['drivername'])?$_REQUEST["drivername"]:'';
$driverphone = isset($_REQUEST['driverphone'])?$_REQUEST["drivernumber"]:'';
$address = isset($_REQUEST['address'])?$_REQUEST["address"]:'';
$email = isset($_REQUEST['driveremail'])?$_REQUEST["driveremail"]:'';
//calendar_id should already be owned by user
$calendar = 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com';

// // IF ($method == 'AddDriver'){
// $sql = "INSERT INTO 'driver' ('driver_id', 'name', 'address', 'phone_number', 'email_address', 'calendar_id', 'holiday_id', 'active') VALUES
// ('".$driver_id."', '".$drivername."', '".$address."', '".$drivernumber."', '".$driveremail."', '".$calendar."', 1)";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// }
$dbformdata = array(
	array("dbname"=>"driver_id", "postname"=>"driverid", "mand"=>1, "type"=>"int"),
	array("dbname"=>"name", "postname"=>"drivername", "mand"=>1, "type"=>"txt"),
	array("dbname"=>"address", "postname"=>"address", "mand"=>1, "type"=>"txt"),
	array("dbname"=>"phone_number", "postname"=>"drivernumber", "mand"=>1, "type"=>"int"),
	array("dbname"=>"email_address", "postname"=>"driveremail", "mand"=>1, "type"=>"txt"),
	);

for ($i=0;$i<count($dbformdata);$i++){
	$dbname = $dbformdata[$i]["dbname"];
	$postname = $dbformdata[$i]["postname"];
	$friendlyname = $dbformdata[$i]["friendly"];
	$mand = $dbformdata[$i]["mand"];
	$reqPostName = isset($_REQUEST[$postname])?$_REQUEST[$postname]:"";
	if (strlen($reqPostName) > 0){
		$sqlFields = array_merge($sqlFields, array($dbname=>$_REQUEST[$postname]));
	} else {
		if ($mand == 1){
			$registerErrors = 1;
			$resArr["overview"]["msg"] .= "\n".$friendlyname." - Field missing! - Please provide a\n".$friendlyname."\nfor your comment<br />";
			array_push($resArr["overview"]["missingfields"], $postname);
		}
	}
}

$dbres_insert = DB::insert('feedback', $sqlFields);
$db_id = DB::insertId();
?>