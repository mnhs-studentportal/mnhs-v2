<?php
session_start();
include_once 'db_connect.php';
$rule_array = [];
if(isset($_SESSION["id"])) {
    $iid = $_SESSION["id"];
    $sql = "select * from users where id = $iid";
        $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               $userid = $row['id'];
               $_SESSION["id"] = $userid;
            }
            } else {
            echo "0 results";
            }
            
    }else{
    
        $sql = "select * from users where id = 2";
        $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               $userid = $row['id'];
               $_SESSION["id"] = $userid;
            }
            } else {
            echo "0 results";
            }
            
    }

?>