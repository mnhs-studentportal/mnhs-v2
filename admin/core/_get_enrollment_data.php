<?php
$str = $_POST['data']; 

$data_id= str_replace(' ', '', $str);

include "db_connect.php";

$sql   =  "SELECT * FROM enrollment_setup
LEFT JOIN curriculumn ON curriculumn.curriculumn_guid = enrollment_setup.curriculumn_setup_guid
 where student_guid = '$data_id'";            
$result =  $conn->query($sql);            
if($result->num_rows > 0) {            
  
    while($row = $result->fetch_assoc()){
        echo '

                <div>
                <dl>
                    <dt>Title</dt>
                    <dd><h2>'.$row['curriculumn_tittle'].'</h2></dd>
                    <dt>Year Level</dt>
                    <dd>'.$row['year_lvl'].'</dd>
                    <br>
                </dl>

                </div>
        
        ';
    }
} else {
    echo 0;
}
  

?>
                        
                        
                        