<?php
$hostname = 'localhost';
$username = "root";
$password = "";
$database = "contact_management_system";

return $conn = mysqli_connect($hostname, $username, $password, $database) or die("Connection to db failed");
