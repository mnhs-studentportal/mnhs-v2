<?php
include "db_connect.php";

if ($_POST["subtittle"] == null) {
    echo "Please Fill Up the required fields";
}else{


    
    $stmt = $conn->prepare("insert into subjects(subject_tittle,subject_details,subject_guid,year_lvl)values(?,?,?,?)");
    $stmt->bind_param("ssss", $subtittle, $subdetails,$guid_,$yearlvl);

    $guid_ = uniqid("sub-");
    $subtittle = $_POST['subtittle'];
    $subdetails = $_POST['subdetails'];
    $yearlvl = $_POST['yearlvl'];


    if ($stmt->execute()) {
        echo "New Subject Added";
    } else {
        echo "Something went wrong";
    }


}

