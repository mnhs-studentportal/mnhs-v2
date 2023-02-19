<?php
include "db_connect.php";
$upid = $_POST['upid'];
$uppage = $_POST['uppage'];
$uptittle = $_POST['uptittle'];
$updetails = $_POST['updetails'];

$sql = "UPDATE page_content SET page_tittle='".$uppage."', content_tittle='".$uptittle."', content_details='".$updetails."' WHERE id='".$upid."'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
