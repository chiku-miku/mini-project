<?php
date_default_timezone_set('asia/kolkata');
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "mini_project";

//create connection

$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(mysqli_connect_error()){
    echo "failed to connect database";
    die();
}

?>


