<?php
include_once 'helper.php';

if(isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
    $action = $_REQUEST['name'];
    switch($action) {
        case 'update_order'  :
           update_order();
           break;
    }
}

function update_order()
{
	$id = $_REQUEST['pk'];
	update_order_status($id);
	echo "Order Updated Succesfully";
}

?>