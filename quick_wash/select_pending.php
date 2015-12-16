<?php
    
    $dbhost = "localhost";
    $dbuser = "vingelin_vingel";
    $dbpass = "Thisisntfunmysql";
    $dbname = "vingelin_quickwash";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()) {
        die("db failed : ");
    }

    $query = "SELECT * ";
    $query .= "FROM `order` ";
    $query .= "WHERE status = 0";
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