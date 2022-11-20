<?php
include "db_connect.php";
$strsub = $_POST['guid'];
$data_id = str_replace(' ', '', $strsub);
$sql = "UPDATE curriculumn SET curriculumn_tittle='".$_POST['curtittle']."', curriculumn_details='".$_POST['curdetails']."', curriculumn_guid='".$data_id."', year_lvl='".$_POST['yearlvl']."'WHERE curriculumn_guid='".$data_id."'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


?>