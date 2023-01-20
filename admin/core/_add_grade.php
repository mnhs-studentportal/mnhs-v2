<?php
include "db_connect.php";


    
    $stmt = $conn->prepare("insert into grade_setup(enrollment_guid,curriculumn_guid,student_guid,subject_guid,grading_term,grade,status)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$en_ids,$cur_ids,$stud_ids,$sub_ids,$curgrading,$curgrade,$gstatus);
    $en_ids = $_POST['en_ids'];
    $cur_ids= $_POST['cur_ids'];
    $stud_ids= $_POST['stud_ids'];
    $sub_ids= $_POST['sub_ids'];
    $curgrading= $_POST['curgrading'];
    $curgrade= $_POST['curgrade'];
    $gstatus = '';
    $grade= str_replace(' ', '', $curgrade);
    $val = intval($grade);
if ($val > 74) {
    $gstatus = 'Pass';
} else {
    $gstatus = 'Fail';
}
//echo $gstatus;
    if ($stmt->execute()) {
        
        echo "New Subject Added";
    } else {
        echo "Something went wrong";
    }




