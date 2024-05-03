<?php
include "connection.php";
$ID = $_GET['ID'];
$connection = mysqli_connect("localhost", "root", "", "WebProgProject");


if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

$delete = mysqli_query($connection, "DELETE FROM facility_list WHERE ID = '$ID'");

if (!$delete) {
  echo mysqli_error($connection);
} else {
  mysqli_close($connection);
  header("Location: view.php");
}
?>