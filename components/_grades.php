<?php
include "../config/db_connect.php";
include "../config/sessions.php";

$iid = $_SESSION["id"];
$data_id= str_replace(' ', '', $iid);

//echo $data_id;
$sql = "
select * from enrollment_setup 
LEFT JOIN curriculumn on enrollment_setup.curriculumn_setup_guid = curriculumn.curriculumn_guid
WHERE student_guid = '".$data_id."' AND `status` = 'New'";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
       $en_id = $row['enrollment_guid'];
    $cur_title = $row['curriculumn_tittle'];
    }
        } else {
        echo "0 results";
        }
        

?>
<div class="card mb-4">
<div class="card-header">
  <h3><i>Grades</i></h3>
</div>
<div class="card-body">
  <div class="row">
    <div class="col-sm-3">
      <p class="mb-0">Curriculumn Title:</p>
    </div>
    <div class="col-sm-9">
      <p class="text-muted mb-0"><b><i><?php echo $cur_title?></i></b></p>
    </div>
    <br>
    <hr>
    <div class="col-sm-12">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject Title</th>
      <th scope="col">Grading Term</th>
      <th scope="col">Grade</th>
      <th scope="col">Grade Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    $sql = "
    SELECT * FROM grade_setup
LEFT JOIN subjects ON grade_setup.subject_guid = subjects.subject_guid
    WHERE enrollment_guid = '".$en_id."' ORDER BY subject_tittle";
        $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        echo '
        <tr>
        <th scope="row">'.$i++.'</th>
        <td>'.$row['subject_tittle'].'</td>
        <td>'.$row['grading_term'].'</td>
        <td>'.$row['grade'].'</td>
        <td>'.$row['status'].'</td>
      </tr>
        
        ';
        }
            } else {
            echo "0 results";
            }
            
    ?>

  </tbody>
</table>

    </div>
  </div>
 
</div>
</div>
<script>
    $('.profilee_nav').removeClass('active');
    $('#_grades').addClass('active');
    
</script>