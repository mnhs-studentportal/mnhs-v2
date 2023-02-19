<?php
include "db_connect.php";
$item_id = $_POST['item_id'];

$sql = "DELETE FROM carousel WHERE id='".$item_id."'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
