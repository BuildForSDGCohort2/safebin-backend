<?php
$connect=mysqli_connect("remotemysql.com", "ov37lSw5Yu", "LJmoNpjuGg", "ov37lSw5Yu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
