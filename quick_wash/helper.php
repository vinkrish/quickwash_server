<?php
include 'config.php';

function update_order_status($id){
$query = "UPDATE `order` SET ";
$query .= "`status` = 1 ";
$query .= "WHERE ";
$query .= "`id` = '$id'";

$result = mysqli_query($connection, $query);
}

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'load_pendingorders'  :
           load_pendingorders();
           break;
    }
}

function load_pendingorders () {

$table="<table class='table table-condensed table-bordered'>
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Mobile</th>
  <th>Alternate_Mobile</th>
  <th>Email</th>
  <th>Address</th>
  <th>Pincode</th>
  <th>Date</th>
  <th>Service</th>
  <th>Status</th>
  </tr>";
  $query="SELECT * FROM `order` WHERE `Status` = 0";
  $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result))
    {
    $button_id = $row['id'];
      $table.="
  <tr>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['mobile']."</td>
    <td>".$row['alternate_mobile']."</td>
    <td>".$row['email']."</td>
    <td>".$row['address']."</td>
    <td>".$row['pincode']."</td>
    <td>".$row['date']."</td>
    <td>".$row['service']."</td>
    <td><span class='editable' data-pk='".$button_id."'data-name='update_order' data-url='editable.php' data-action='update_order'>".$row['status']."</span></td>
    </tr>";
    }
    $table.="</table>";
  
    echo json_encode($table);

}

?>