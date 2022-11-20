<?php
include "db_connect.php";
if(isset($_SESSION["id"]) == '2') {
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
            $conn->close();
        }else{

        }


?>