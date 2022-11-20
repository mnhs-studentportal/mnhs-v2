<?php
include_once "db_connect.php";
$remid = $_POST['remid'];
$sql = "DELETE FROM curriculumn_setup WHERE cs_guid = '$remid'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
?>