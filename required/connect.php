<?php
$connect=mysqli_connect("ns541.domainhosting.com.ng", "capitosi_safebin", "safebin", "capitosi_safebin");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
