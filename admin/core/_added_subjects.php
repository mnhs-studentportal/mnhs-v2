<?php

include "db_connect.php";
$str = $_POST["data_id"];
$data_id= str_replace(' ', '', $str);
$sql = "SELECT * FROM curriculumn_setup
LEFT JOIN curriculumn ON curriculumn_setup.curriculum_id = curriculumn.curriculumn_guid
LEFT JOIN subjects ON curriculumn_setup.subject_id = subjects.subject_guid WHERE curriculumn_setup.curriculum_id = '$data_id' 
";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

echo '
<tr id="'.$row["cs_guid"].'">
<td>'.$row["subject_guid"].'</td>
<td>'.$row["subject_tittle"].'</td>
<td>'.$row["year_lvl"].'</td>
<td>
<button class="btn btn-info removethis">Remove</button>
</td>
</tr>

';

}
} else {
echo "0 results";
}
$conn->close();
  
                                      
                    ?>
                    

                    