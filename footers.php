<?php

include_once 'config/db_connect.php';
  $iid = $_SESSION['id'];
$sql = "select * from registration where gu_id = '".$iid."'";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
       $role_id = $row['user_type'];
    }
        } else {
        echo "0 results";
        }
?>
<div class="overlay footer-overlay"></div>
   <!--Content -->

     <div class="row justify-content-md-center">
      <div>
        <div class="container">

          <div class="row">
            <div class="col">
              <img src="images/logo1.png" width="100px">
             
            </div>
            <div class="col-md-auto">
              <p><b>Malangas National High School (MNHS)</b></p>
              
              <p><i class="fa fa-map-marker" aria-hidden="true"></i> Address</p>

                <p>Fr. Larea St. Malangas, Zamboanga Sibugay </p>
            </div>
            <div class="col">
              <p>Links:</p>
              <?php
//echo $iid;
              $sql = "select * from user_rules
              LEFT JOIN menu_setup on user_rules.rules = menu_setup.id where user_type = $role_id";
                  $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo '
                          <p>
                          <a class="navs" href="#" id="'.$row['id'].'" data-url="'.$row['url'].'">
                          '.$row['tittle'].'
                        </a>
                          </p>
                        ';
                      }
                      } else {
                      echo "0 results";
                      }
                      $conn->close();

          ?>
            </div>
            <div class="col">
              <p>Find Us:</p>
              <p><i class="fa fa-facebook" aria-hidden="true"></i> <a href="https://www.facebook.com/pages/Malangas-National-High-School/133521990377240"> Facebook.com</a></p>
            </div>
          </div>
        </div>
      </div>

  <!-- / .container -->
   <script>

$(".navs").on('click',function(e){
    e.preventDefault();
        //   var a = $(this).prop('data-url');
    var a = $(this).attr("data-url");
    // var urls = a.attr('data-url').val();
    //console.log(a);
    selectedUrl(a);
    });
    function selectedUrl(data){
    $("#contents").load("/components/"+data+".php");
  } 
  </script>