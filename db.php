<?php

$serverName = "localhost";
$userName = "root";
$password = "jander";
$dbName = "psm";

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()){
    echo "Failed to connect!";
    exit();
}
echo "Connection success";

?>