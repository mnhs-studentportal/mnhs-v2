<?php
session_start();


    if($_SESSION['id'] == '' || $_SESSION['id'] == null){
        $_SESSION['id'] = 2;
    }


?>