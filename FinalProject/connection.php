<?php
$con = mysqli_connect("localhost", "root", "", "testing_facility");

if (mysqli_connect_error()) {
  echo "Failed to connect to MySQL:" . mysqli_connect_error();
  exit();
}

mysqli_select_db($con, "facility_list");
if ($con) {
  echo "";
} else {
  echo "Error Occurred";
}
?>