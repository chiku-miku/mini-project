<?php
date_default_timezone_set('Asia/Calcutta');
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "mini_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>