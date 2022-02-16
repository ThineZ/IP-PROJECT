<!-- DATEBASE INPUT -->
<?php
// Create connection
$con = mysqli_connect("localhost", "Zenith", "OZCK5h@)jd0!F_ls", "dbhygge");

// Check connection
if (mysqli_connect_error()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
