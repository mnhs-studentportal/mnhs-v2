<?php
$str = $_POST['data']; 

$data_id= str_replace(' ', '', $str);

include "db_connect.php";

$sql   =  "SELECT * FROM enrollment_setup
LEFT JOIN curriculumn_setup ON enrollment_setup.curriculumn_setup_guid = curriculumn_setup.curriculum_id
LEFT JOIN subjects ON curriculumn_setup.subject_id = subjects.subject_guid
WHERE enrollment_setup.student_guid= '$data_id'";            
$result =  $conn->query($sql);            
if($result->num_rows > 0) {            
  
    while($row = $result->fetch_assoc()){
       // echo $row['subject_tittle'];
        echo '

    <li class="nav-item">
        <a class="nav-link active load_subjects" aria-current="page" href="#" data-curid="'.$row['curriculum_id'].'" data-subid="'.$row['subject_guid'].'" data-enid="'.$row['enrollment_guid'].'">'.$row['subject_tittle'].'</a>
      </li>
        
        ';
    }
} else {
    echo 0;
}
  

?>
                        
                        
                        