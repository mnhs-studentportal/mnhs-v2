
<?php
include "db_connect.php";


    $stmt = $conn->prepare("insert into enrollment_setup(enrollment_guid,student_guid,curriculumn_setup_guid,year_level,status)values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $guid_,$stud_id,$cur_id,$yearlvl,$stat);

    $guid_ = uniqid("en-");
    $stud_id = str_replace(' ', '',$_POST['stud_id']);
    $cur_id = str_replace(' ','',$_POST['cur_id']);
    $yearlvl = $_POST['cur_yearlvl'];
    $stat = $_POST['status'];


    if ($stmt->execute()) {
        echo "New Curriculumn Added";
    } else {
        echo "Something went wrong";
    }