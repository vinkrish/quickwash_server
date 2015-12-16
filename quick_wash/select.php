<?php
    
    $dbhost = "localhost";
    $dbuser = "vingelin_vingel";
    $dbpass = "Thisisntfunmysql";
    $dbname = "vingelin_quickwash";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()) {
        die("db failed : ");
    }

?>

<?php
    $query = "SELECT * ";
    $query .= "FROM `order` ";
    $query .= "WHERE status = 0";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("query failed.");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <script type="text/javascript">

    </script>
</head>
<body>

<?php
    
    while($row = mysqli_fetch_assoc($result)){
        //var_dump($row);
        echo $row["id"] . "<br />";
        echo $row["name"] . "<br />";
        echo $row["mobile"] . "<br />";
        echo $row["alternate_mobile"] . "<br />";
        echo $row["email"] . "<br />";
        echo $row["address"] . "<br />";
        echo $row["pincode"] . "<br />";
        echo $row["date"] . "<br />";
        echo $row["service"] . "<br />";
        echo $row["status"] . "<br />";

        echo "<hr />";
    }

?>

<?php
    mysqli_free_result($result);
?>
    
</body>
</html>

<?php
    mysqli_close($connection);
?>