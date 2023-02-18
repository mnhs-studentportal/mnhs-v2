<?php
include "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(0 < $_FILES['image']['error']){
        echo 'error :'. $_FILES['image']['error'].'<br>' ;
    } else {
        move_uploaded_file($_FILES['image']['tmp_name'],'../../images/' . $_FILES['image']['name']);
    }

    $stmt = $conn->prepare("insert into carousel(img_url)values(?)");
    $stmt->bind_param("s",$image);

    $image = $_FILES['image']['name'];

    if ($stmt->execute()) {
        echo 1;
    } else {
        echo 0;
    }
} 