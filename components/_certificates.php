<?php
include "../config/db_connect.php";
include "../config/sessions.php";

$iid = $_SESSION["id"];
$data_id= str_replace(' ', '', $iid);

//echo $data_id;
$sql = "select * from registration where gu_id = '".$data_id."'";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
       $fullname = $row['middle_name'] == null ? $row['last_name']." ,".$row['first_name']: $row['last_name']." ,".$row['first_name']." ".$row['middle_name'];
       $firstname = $row['first_name'];
       $profesion = $row['profession'];
       $address = $row['home_address'];
       $email = $row['email'];
       $contactnum = $row['contact_num'];
    }
        } else {
        echo "0 results";
        }
        $conn->close();

?>
<div class="card mb-4">
<div class="card-header">
  <h3><i>Certificates</i></h3>
</div>
<div class="card-body">
  <div class="row">
    <div class="col-sm-3">
      <p class="mb-0">Full Name</p>
    </div>
    <div class="col-sm-9">
      <p class="text-muted mb-0"><?php echo $fullname?></p>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-3">
      <p class="mb-0">Email</p>
    </div>
    <div class="col-sm-9">
      <p class="text-muted mb-0"><?php echo $email?></p>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-3">
      <p class="mb-0">Phone</p>
    </div>
    <div class="col-sm-9">
      <p class="text-muted mb-0"><?php echo $contactnum?></p>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-3">
      <p class="mb-0">Mobile</p>
    </div>
    <div class="col-sm-9">
    <p class="text-muted mb-0"><?php echo $contactnum?></p>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-3">
      <p class="mb-0">Address</p>
    </div>
    <div class="col-sm-9">
      <p class="text-muted mb-0"><?php echo $address?></p>
    </div>
  </div>
</div>
</div>
<script>
    $('.profilee_nav').removeClass('active');
    $('#_certificates').addClass('active');
    
</script>