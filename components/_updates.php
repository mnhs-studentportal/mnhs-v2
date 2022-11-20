<?php
include "../config/db_connect.php";


$sql = "select * from updates ORDER BY logs";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           echo '
           <div class="col-sm-6">
            <div class="card">
                    <img class="card-img-top" src="images/'.$row['img_url'].'" alt="Card image" style="height: 200px;">
                    <div class="card-body cscroll">
                        <h4 class="card-title">'.$row['tittle'].'</h4>
                        <p class="card-text">'.$row['details'].'</p>
                        
                    </div>
                </div> 
            </div>
           ';
        }
        } else {
        echo "0 results";
        }
        $conn->close();



?>

