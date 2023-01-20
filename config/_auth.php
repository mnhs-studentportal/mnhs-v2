<?php
include "db_connect.php";
include "sessions.php";


$user = $_POST['user'];
$pass = $_POST['pass'];

if (!$user & !$pass) {
    echo "All fields are required";
} else if(!$user){
    echo "Username is required";
}else if(!$pass){
    echo "Password is required";
}else{

    $sql = "select * from users where username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

        if ($result) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $_SESSION["id"] = $row['user_guid'];
          
        }

        echo '
        <script>
        $("#contents").load("components/user_profile.php");
        </script>
        ';
        } else {
        $_SESSION["id"] = 2;
            echo "Incorrenct Credetials";
        }
    
}

?>

