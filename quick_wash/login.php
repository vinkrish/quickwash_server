<?php
include 'config.php';

$json = file_get_contents('php://input');

function logToFile($filename,$msg) {
      $fd=fopen($filename,"a");
      $str="[".date("Y/m/d h:i:s")."]".$msg;
      fwrite($fd,$str."\n");
      fclose($fd);
  }

$orderRequest = json_decode($json,true);

$username = $orderRequest['username'];
$password = $orderRequest['password'];

$query = "SELECT * ";
$query .= "FROM `employee` ";
$query .= "WHERE employee_id = '$username' and password = '$password'";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("query failed.");
  }

$response = array();
$response["LoginResponse"] = array();
$order = array();

if (mysqli_num_rows($result) > 0) {
	$order["status"] = "success";
	array_push($response["LoginResponse"], $order);
} else {
	$order["status"] = "failed";
	array_push($response["LoginResponse"], $order);
	//die("query failed. " . mysqli_error($connection));
}
echo json_encode($order);

?>