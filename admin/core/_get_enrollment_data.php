<?php
$str = $_POST['data']; 

$data_id= str_replace(' ', '', $str);

include "db_connect.php";

$sql   =  "SELECT * FROM enrollment_setup where student_guid = '$data_id'";            
$result =  $conn->query($sql);            
if($result->num_rows > 0) {            
    $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($data);
} else {
    echo 0;
}
  

?>