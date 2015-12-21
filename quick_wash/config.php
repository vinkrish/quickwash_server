<?php

    $dbhost = "localhost";
    $dbuser = "dbUSER";
    $dbpass = "dbPASSWORD";
    $dbname = "DATABASENAME";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()) {
        die("db failed : ");
    }

?>