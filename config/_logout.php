

<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();
session_start();
if($_SESSION['id'] == '' || $_SESSION['id'] == null){
    $_SESSION['id'] = 2;
}
header('location:../index.php');
?>