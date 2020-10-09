<?php
$connect=mysqli_connect("192.185.57.117", "capitosi_safebin", "safebin", "capitosi_safebin");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
