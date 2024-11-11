<?php
  $hostname = "localhost";
  $username = "super_admin";
  $password = "StrongPassword123!";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
