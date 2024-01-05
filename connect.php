<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "friend";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
}

?>