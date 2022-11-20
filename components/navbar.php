
<?php
include "../config/sessions.php";

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
    $iid = $_SESSION["id"];
    $sql = "select * from user_rules
    LEFT JOIN menu_setup on user_rules.rules = menu_setup.id where user_id = $iid";
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
            if ($_SESSION['id'] != '2') {
              echo '
              <button onclick="loginform('.$_SESSION["id"].').preventDefault;" data-attrib="" class="btn btn-white btn-circled">My Profile</button>
              ';
            } else {
              echo '
              <button onclick="loginform('.$_SESSION["id"].').preventDefault;" data-attrib="" class="btn btn-white btn-circled">Log in</button>
              ';
            }
            
            ?>
        </li>
        </ul>
      </div> <!-- / .navbar-collapse -->
    </nav>
  </div> <!-- / .container -->

  <script>

$(".navs").on('click',function(e){
    e.preventDefault();
        //   var a = $(this).prop('data-url');
    var a = $(this).attr("data-url");
    // var urls = a.attr('data-url').val();
    //console.log(a);
    selectedUrl(a);
    });

  </script>