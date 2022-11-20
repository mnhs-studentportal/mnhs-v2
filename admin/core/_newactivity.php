<?php
include "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(0 < $_FILES['image']['error']){
        echo 'error :'. $_FILES['image']['error'].'<br>' ;
    } else {
        move_uploaded_file($_FILES['image']['tmp_name'],'../../images/' . $_FILES['image']['name']);
    }

    $stmt = $conn->prepare("insert into updates(tittle,details,type,img_url)values(?,?,?,?)");
    $stmt->bind_param("ssss", $tittle, $details,$type, $image);

    $tittle = $_POST['tittle'];
    $details = $_POST['details'];
    $type = $_POST['type'];
    $image = $_FILES['image']['name'];

    if ($stmt->execute()) {
        echo 1;
    } else {
        echo 0;
    }
} 