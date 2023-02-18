
<?php
include "../config/sessions.php";
include_once '../config/db_connect.php';
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
<div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary main-nav navbar-togglable">

      <!-- <a class="navbar-brand d-lg-none d-block" href="index.html">
        <h4 class="h3 mb-0">Rappo</h4>
      </a> -->
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
<div class="collapse navbar-collapse has-dropdown" id="navbarCollapse">
<ul class="navbar-nav " id="navsoutlet">
<?php
//echo $iid;
    $sql = "select * from user_rules
    LEFT JOIN menu_setup on user_rules.rules = menu_setup.id where user_type = $role_id";
        $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               echo '
                        <li class="nav-item navs" " id="'.$row['id'].'" data-url="'.$row['url'].'">
                        <a class="nav-link " href="'.$row['url'].'" data-url="'.$row['url'].'">
                          '.$row['tittle'].'
                        </a>
                        </li>
               
               ';
            }
            } else {
            echo "0 results";
            }
            $conn->close();

?>
        </ul>

        <ul class="ml-sm-auto list-unstyled m-0">
          <li>
            <?php
            if ($iid != 2) {
              echo '
              <button onclick="loginform().preventDefault;" data-attrib="" class="btn btn-white btn-circled">My Profile</button>
              ';
            } else {
              echo '
              <button onclick="loginform().preventDefault;" data-attrib="" class="btn btn-white btn-circled">Log in</button>
              ';
            }
            
            ?>
        </li>
        </ul>
      </div> <!-- / .navbar-collapse -->
    </nav>
  </div> <!-- / .container -->

  <script>
function loginform() {
  let data = '<?php echo $iid?>'; 
    //alert(data)
    if (data == '2') {
        console.log('user not exist in the session storage')
        $("#contents").load("components/log_in.php");
    } else {
        console.log('lofin user')
        $("#contents").load("components/user_profile.php");
    }
  }
$(".navs").on('click',function(e){
    e.preventDefault();
        //   var a = $(this).prop('data-url');
    var a = $(this).attr("data-url");
    // var urls = a.attr('data-url').val();
    //console.log(a);
    selectedUrl(a);
    });

  </script>