<?php
include 'config.php';

$json = file_get_contents('php://input');

function logToFile($filename,$msg) {
      $fd=fopen($filename,"a");
      $str="[".date("Y/m/d h:i:s")."]".$msg;
      fwrite($fd,$str."\n");
      fclose($fd);
  }

$updateRequest = json_decode($json,true);

//$id = $updateRequest['id'];
$id = 1;

$query = "UPDATE `order` SET ";
$query .= "`status` = 1 ";
$query .= "WHERE ";
$query .= "`id` = '$id'";

$result = mysqli_query($connection, $query);

$response = array();
$response["OrderResponse"] = array();
$order = array();

if ($result && mysqli_affected_rows($connection == 1) {
	$order["status"] = "success";
	array_push($response["OrderResponse"], $order);
} else {
	$order["status"] = "failed";
	array_push($response["OrderResponse"], $order);
	die("query failed. " . mysqli_error($connection));
}

echo json_encode($order);

?>
