<?php
$connect=mysqli_connect("ec2-34-192-122-0.compute-1.amazonaws.com", "jekhvihjinpysr", "f7e0e76751ed35321d32b35763f3d4e0944e7e3a9c64692d49c50842170d164b", "d23m890snar1vf");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
