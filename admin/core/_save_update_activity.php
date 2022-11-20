<?php
include "db_connect.php";
$upid = $_POST['upid'];
$uptype = $_POST['uptype'];
$uptittle = $_POST['uptittle'];
$updetails = $_POST['updetails'];

$sql = "UPDATE updates SET tittle='".$uptittle."', type='".$uptype."', details='".$updetails."' WHERE id='".$upid."'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
