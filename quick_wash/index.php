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

$name = $orderRequest['name'];
$mobile = $orderRequest['mobile'];
$alternateMobile = $orderRequest['alternateMobile'];
$email = $orderRequest['email'];
$address = $orderRequest['address'];
$pincode = $orderRequest['pincode'];
$dateOrder = $orderRequest['date'];
$service = $orderRequest['service'];

$query = "INSERT INTO `order` (";
$query .= "`name`, `mobile`, `alternate_mobile`, `email`, `address`, `pincode`, `date`, `service`";
$query .= ") VALUES (";
$query .= "'$name','$mobile','$alternateMobile','$email','$address','$pincode','$dateOrder ','$service'";
$query .= ")";

$result = mysqli_query($connection, $query);

$response = array();
$response["OrderResponse"] = array();
$order = array();

if ($result) {
	$order["status"] = "success";
	array_push($response["OrderResponse"], $order);
} else {
	$order["status"] = "failed";
	array_push($response["OrderResponse"], $order);
	//die("query failed. " . mysqli_error($connection));
}

echo json_encode($order);

?>
