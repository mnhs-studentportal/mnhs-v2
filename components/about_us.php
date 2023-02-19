<?php
include "../config/db_connect.php";
?>


<div class="container">
    <?php
    $sql = "select * from page_content";
        $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '
                <div class="col-md-12 col-lg-12 text-center text-lg-left">              
                    <br><br>
                    <h2 class="display-4 mb-4 font-weight-normal">
                    <span class="text-warning">I</span> 
                    <span class="text-success">'.$row['content_tittle'].'</span>
                        </h2>      
                    <div class="row">
                        <p>'.$row['content_details'].'</p>
                    </div>
                </div>
                ';
            }
            } else {
            echo "No Content yet";
            }
            $conn->close();
    
    
    ?>
</div> 