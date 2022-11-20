<?php
include "../config/db_connect.php";
include "../config/sessions.php";
$userid = $_SESSION["id"];
if ( $_SESSION["id"] == 1) {
    header('Location:home.php');
} else {
    header('Location:../index.php');
}

?>