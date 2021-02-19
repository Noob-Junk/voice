<?php
  $hostname = "localhost";
  $username = "b6_27967920_";
  $password = "junk...";
  $dbname = "b6_27967920_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
