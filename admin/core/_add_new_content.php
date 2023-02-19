<?php
include "db_connect.php";
// echo $_POST["pagetitle"];

if ($_POST["pagetitle"] == null) {
    echo "Please Fill Up the required fields";

} else if($_POST["contenttitle"] == null){
    echo "Please Fill Up the required fields";
} else if($_POST["contentdetails"] == null){
    echo "Please Fill Up the required fields";
}else{


    
    $stmt = $conn->prepare("insert into page_content(page_tittle,content_tittle,content_details)values(?,?,?)");
    $stmt->bind_param("sss", $page, $content,$deatils);

    $page = $_POST['pagetitle'];
    $content = $_POST['contenttitle'];
    $deatils = $_POST['contentdetails'];


    if ($stmt->execute()) {
        echo "New Content Added";
    } else {
        echo "Something went wrong";
    }


}

