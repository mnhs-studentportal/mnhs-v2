<?php
include "db_connect.php";


if (!$_POST['usertype'] & !$_POST['fname'] & !$_POST['lname'] & !$_POST['age'] & !$_POST['bdate'] & !$_POST['gender'] & !$_POST['homeadd'] & !$_POST['zipcode'] & !$_POST['phonenumber']) {
    echo "Please Fill Up the required fields";
} else if(!$_POST['fname'] & !$_POST['lname'] & !$_POST['age'] & !$_POST['bdate'] & !$_POST['gender'] & !$_POST['homeadd'] & !$_POST['zipcode'] & !$_POST['phonenumber']) {
    echo "Please Fill Up the required fields";
}else if(!$_POST['lname'] & !$_POST['age'] & !$_POST['bdate'] & !$_POST['gender'] & !$_POST['homeadd'] & !$_POST['zipcode'] & !$_POST['phonenumber']) {
    echo "Please Fill Up the required fields";
}else if(!$_POST['age'] & !$_POST['bdate'] & !$_POST['gender'] & !$_POST['homeadd'] & !$_POST['zipcode'] & !$_POST['phonenumber']) {
    echo "Please Fill Up the required fields";
}else if(!$_POST['bdate'] & !$_POST['gender'] & !$_POST['homeadd'] & !$_POST['zipcode'] & !$_POST['phonenumber']) {
    echo "Please Fill Up the required fields";
}else if(!$_POST['gender'] & !$_POST['homeadd'] & !$_POST['zipcode'] & !$_POST['phonenumber']) {
    echo "Please Fill Up the required fields";
}else if(!$_POST['homeadd'] & !$_POST['zipcode'] & !$_POST['phonenumber']) {
    echo "Please Fill Up the required fields";
}else if(!$_POST['zipcode'] & !$_POST['phonenumber']) {
    echo "Please Fill Up the required fields";
}else if(!$_POST['phonenumber']) {
    echo "Please Fill Up the required fields";
}else{

    $guid_ = uniqid("rg");
    $userid_ = 1;
    $usertype_id ;
    $stringFname = preg_replace('/\s+/', '_', $_POST["fname"]);
    if ($_POST['usertype'] == 'Student') {
        $usertype_id  = 3;
    } else if($_POST['usertype'] == 'Faculty'){
        $usertype_id = 4;
    }else{
        $usertype_id = 2;
    }
    
$sql = "INSERT INTO registration (
    gu_id,
    user_id,
    first_name,
    last_name,
    middle_name,
    age,
    bdate,
    gender,
    home_address,
    zipcode,
    province,
    country,
    contact_num,
    email,
    profession,
    user_type
    )
VALUES (
'".$guid_."',
'".$guid_."',
'".$_POST["fname"]."',
'".$_POST["lname"]."',
'".$_POST["mname"]."',
'".$_POST["age"]."',
'".$_POST["bdate"]."',
'".$_POST["gender"]."',
'".$_POST["homeadd"]."',
'".$_POST["zipcode"]."',
'".$_POST["province"]."',
'".$_POST["country"]."',
'".$_POST["phonenumber"]."',
'".$_POST["email"]."',
'".$_POST["usertype"]."',
'".$usertype_id."'
);";

$sql .= "INSERT INTO users (username, password, role_type,user_guid)
VALUES ('".$stringFname.".".$_POST["lname"]."', 'password', '".$usertype_id."','".$guid_."')";
if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
