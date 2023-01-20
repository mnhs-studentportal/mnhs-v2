<?php
include_once "db_connect.php";
$data = $_POST['data'];

$data_id= str_replace(' ', '', $data);
$sql = "SELECT * FROM registration
LEFT JOIN enrollment_setup ON enrollment_setup.student_guid = registration.gu_id 
WHERE first_name like '%{$data}%' AND profession = 'Student'"; 

    $result = $conn->query($sql);

        if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $ssql = "SELECT * FROM enrollment_setup WHERE student_guid = '".$row['gu_id']."'"; 
        $results = $conn->query($ssql);
        $stud_status = '';
        if ($results->num_rows > 0) {
            while($rowss = $results->fetch_assoc()){
                $stud_status = $rowss['year_level'];    
            }
        }else{
            $stud_status = 'Not Enrolled';
        }
        echo '

        <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                                                        <h3 class="card-title">
                                                          <i class="fas fa-file"></i>
                                                          Student Information
                                                        </h3>
                                                      </div>
                                                      <!-- /.card-header -->
                                                      <div class="card-body">
                                                        <dl>
                                                          <dt>Student Name</dt>
                                                          <dd>'.$row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].'</dd>
                                                          <dt>Student Address</dt>
                                                          <dd>'.$row['home_address'].', '.$row['province'].', '.$row['country'].'</dd>
                                                          <br>
                                                          <dt>Student Year level</dt>
                                                          <dd>'.$stud_status.'</dd>
                                                          
                                                        </dl>

                                                      </div>
                                                      <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                  </div>
                                                  <div class="col-sm-3">
                                                  <button type="button" class="btn btn-block btn-outline-secondary btn-flat btn_enroll" id="'.$row['user_id'].'">Enroll</button>
                                                 
                                                  </div> 
        ';
    }

} else {
echo "0 results";
}
$conn->close();


?>

<!-- <button type="button" class="btn btn-block btn-outline-secondary btn-flat btn_grades" id="'.$row['user_id'].'">Add grades</button>
                                                  <button type="button" class="btn btn-block btn-outline-secondary btn-flat btn_view" id="'.$row['user_id'].'">View</button> -->