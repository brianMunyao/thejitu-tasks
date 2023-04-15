<?php
$hostname = 'localhost';
$username = "root";
$password = "";
$database = "thejitudb";

return $conn = mysqli_connect($hostname, $username, $password, $database) or die("Connection to db failed");
