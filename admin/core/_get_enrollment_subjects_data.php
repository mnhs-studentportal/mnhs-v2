<?php
$sub_id = $_POST['sub_id'];
$en_id = $_POST['en_id']; 

$subs_id= str_replace(' ', '', $sub_id);
$ens_id= str_replace(' ', '', $en_id);

//echo $subs_id ." | ". $ens_id;

include "db_connect.php";

$sql   =  "SELECT * FROM grade_setup
LEFT JOIN subjects ON grade_setup.subject_guid = subjects.subject_guid
WHERE grade_setup.subject_guid = '$subs_id' AND grade_setup.enrollment_guid = '$ens_id'";            
$result =  $conn->query($sql);            
if($result->num_rows > 0) {            
  
    while($row = $result->fetch_assoc()){
       // echo $row['subject_tittle'];
        echo '

    <li class="nav-item">
        <a class="nav-link active load_subjects" aria-current="page"  data-subid="'.$row['subject_guid'].'" data-enid="'.$row['enrollment_guid'].'">
        
        '.$row['grading_term'] .' Grading : '.$row['grade'].'</a>
      </li>
        
        ';
    }
} else {
    echo "No grade";
}
  

?>
                        
                        
                        