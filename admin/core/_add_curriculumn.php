<?php
include "db_connect.php";

if ($_POST["curtittle"] == null) {
    echo "Please Fill Up the required fields";
}else{

    $stmt = $conn->prepare("insert into curriculumn(curriculumn_tittle,curriculumn_details,curriculumn_guid,year_lvl)values(?,?,?,?)");
    $stmt->bind_param("ssss", $curtittle, $curdetails,$guid_,$yearlvl);

    $guid_ = uniqid("cur-");
    $curtittle = $_POST['curtittle'];
    $curdetails = $_POST['curdetails'];
    $yearlvl = $_POST['yearlvl'];


    if ($stmt->execute()) {
        echo "New Curriculumn Added";
    } else {
        echo "Something went wrong";
    }


}

