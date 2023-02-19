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
    $utype = $row['user_type'];
    }
        } else {
        echo "0 results";
        }
        $conn->close();

?>
    <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="images/default.jpg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 200px;">
            <h5 class="my-3"><?php echo $firstname;?></h5>
            <p class="text-muted mb-1"><?php echo $profesion == null ? "None" : $profesion ?></p>
            <p class="text-muted mb-4"><?php echo $address == null ? "None" : $address ?></p>
            <div class="d-flex justify-content-center mb-2">
                <a class="btn btn-danger " href="config/_logout.php">Logout?</a>
            </div>
            <?php
            if ($utype == 1 || $utype == 4 ) {
              echo '
              <div class="d-flex justify-content-center mb-2">
              <a class="btn btn-info " href="admin">Go to Admin Panel ?</a>
              </div>

              <div class="card mb-4 mb-lg-0">
              <div class="card-body p-0">
                <ul class="list-group list-group-flush rounded-3">
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 profilee_nav" id="_profile">
                    <i class="fas fa-user fa-lg text-warning"></i>
                    <p class="mb-0">My Profile</p>
                  </li>
                </ul>
              </div>
            </div>
              ';
            } else {
              echo '
              <div class="card mb-4 mb-lg-0">
              <div class="card-body p-0">
                <ul class="list-group list-group-flush rounded-3">
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 profilee_nav" id="_profile">
                    <i class="fas fa-user fa-lg text-warning"></i>
                    <p class="mb-0">My Profile</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 profilee_nav" id="_grades">
                    <i class="fas fa-address-book  fa-lg" style="color: #333333;"></i>
                    <p class="mb-0">My Grades</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 profilee_nav" id="_classschedule">
                    <i class="fas fa-calendar  fa-lg" style="color: #55acee;"></i>
                    <p class="mb-0">My Class Schedule</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 profilee_nav" id="_certificates">
                    <i class="fas fa-folder-open fa-lg" style="color: #ac2bac;"></i>
                    <p class="mb-0">My Certificates</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 profilee_nav" id="_availablesubject">
                    <i class="fas fa-list-alt  fa-lg" style="color: #3b5998;"></i>
                    <p class="mb-0">Available Subject</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3 profilee_nav" id="_downloadables">
                    <i class="fas fa-print  fa-lg" style="color: #3b5998;"></i>
                    <p class="mb-0">Downloadables</p>
                  </li>
                </ul>
              </div>
            </div>
              ';
            }
            
            ?>
          </div>
        </div>
      </div>
      <div class="col-lg-8" id="contentloader">

     
      </div>
    </div>
  </div>
</section><!-- / .row -->

<script>
   $("#contentloader").load("components/_profile.php");
  $('.profilee_nav').on('click',function(e){
    e.preventDefault();
    let navs = $(this).attr('id');
    $("#contentloader").load("components/"+navs+".php");
  });
</script>