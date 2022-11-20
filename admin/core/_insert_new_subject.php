<?php
include "db_connect.php";
$str = $_POST["cur_id"];
$strsub = $_POST["sub_id"];
$ii = '';
$data_id = str_replace(' ', '', $strsub);
$sql   =  "SELECT * FROM curriculumn_setup where subject_id = '".$data_id."'";            
$result =  $conn->query($sql);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo 1;
      } else {
            echo $data_id;     
            $stmt = $conn->prepare("insert into curriculumn_setup(cs_guid,curriculum_id,subject_id,year_lvl)values(?,?,?,?)");
            $stmt->bind_param("ssss", $guid_, $cur_id, $sub_id, $yearlvl);

            $guid_ = uniqid("cs-");
            $cur_id = str_replace(' ', '', $str);
            $sub_id = str_replace(' ', '', $strsub);
            $yearlvl = $_POST['yr_lvl'];


            if ($stmt->execute()) {
                echo "New Subject Added";
            } else {
                echo "Something went wrong";
            }
      }
} else {
    # code...
}         

  



