<?php

include 'config.php';

    $query = "SELECT * ";
    $query .= "FROM `order` ";
    $query .= "WHERE status = 1";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("query failed.");
    }

    $array = array();

    while($row = mysqli_fetch_assoc($result)){
        $array[] = $row;
    }

    echo json_encode($array);

    mysqli_free_result($result);
    mysqli_close($connection);
?>