<?php 

require_once 'core/db_cofig.php'; 
require_once 'core/_list_controller.php';
	$db = new dbController();
	$conn = $db->connect();
	$dCtrl  =   new UserListController($conn);
	$usersdata = $dCtrl->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <?php
 include "components/header.php";
 ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?php 
include "components/navbar.php";
//<!-- /.navbar -->

//<!-- Main Sidebar Container -->
include "components/sidenav.php";
?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="col-md-11">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#list" data-toggle="tab">User List</a></li>
                  <li class="nav-item"><a class="nav-link" href="#new" data-toggle="tab">Add New User</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="list">
            <div class="">
              <div class="">
                
              </div>
              <!-- /.card-header -->
              <div class="">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Username</th>
                    <th>Full name</th>
                    <th>User type</th>
                    <th>Age</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach($usersdata as $item) : ?>
                        <tr>
                          <td> <?php echo $item['username']; ?> </td>
                          <td> <?php echo $item['first_name']." ".$item['middle_name']." ".$item['last_name']; ?> </td>
                          <td> <?php echo $item['tittle']; ?> </td>
                          <td> <?php echo $item['age']; ?> </td>
                         
                        </tr>

                      <?php endforeach; ?>	
                    </tbody>	
                  <tfoot>
             
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                  </div>

                  <div class="tab-pane" id="new">
                  <form id="registrationForm">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>
                    <h1 id="resmessage" class="text-danger"></h1>
                  <div class="mb-6 pb-2">
                  <div class="form-group">
                        <label for="sel1">Select User Type:<span class="text-danger">*</span></label>
                        <select class="form-control" id="usertype">
                            <option seelected >Student</option>
                            <option>Faculty</option>
                            <option>Manaagement</option>
                        </select>
                        </div> 
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="fname" class="form-control form-control-lg input-forms" required/>
                        <label class="form-label" for="fname">First name <span class="text-danger">*</span></label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="lname" class="form-control form-control-lg input-forms" required/>
                        <label class="form-label" for="lname">Last name<span class="text-danger">*</span></label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="mname" class="form-control form-control-lg input-forms" />
                        <label class="form-label" for="mname">Middle name</label>
                      </div>

                    </div>

                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input 
                        type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" 
                        id="age" class="form-control form-control-lg input-forms" />
                        <label class="form-label" for="age">Age<span class="text-danger">*</span></label>
                      </div>

                    </div>

                    <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                    <label class="form-label" for="bdate">Birth Date<span class="text-danger">*</span></label>
                        <input type= "text" id="bdate" placeholder= "Select a Date"
                        class="form-control form-control-lg input-forms"
                        >
                    </div>
                    </div>

                   
                   
                  </div>


                  <div class="row">
                        <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                            <div class="form-outline">
                            <label class="form-label" >Gender<span class="text-danger">*</span></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="male" checked value="male">Male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">Female
                                </label>
                            </div>
                            </div>
                            <br><br>
                        </div>
                        <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">

                            <div class="form-outline">
                                <textarea type="text" id="homeadd" class="form-control form-control-lg input-forms" required></textarea>
                                <label class="form-label" for="homeadd">Home Address<span class="text-danger">*</span></label>
                            </div>

                            </div>
                  </div>

                </div>
              </div>
              <div class="col-lg-6 bg-primary text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>


                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input  
                        type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" 
                        id="zipcode" class="form-control form-control-lg input-forms" required/>
                        <label class="form-label" for="zipcode">Zip Code<span class="text-danger">*</span></label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="province" class="form-control form-control-lg input-forms" required/>
                        <label class="form-label" for="province">Province</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="country" class="form-control form-control-lg input-forms" required/>
                      <label class="form-label" for="country">Country</label>
                    </div>
                  </div>

                  
                    
                    <div class="mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input
                        type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" 
                        id="phone_number" class="form-control form-control-lg input-forms" required
                        maxlength = "11"
                        />
                        <label class="form-label" for="phone_number">Phone Number<span class="text-danger">*</span></label>
                      </div>

                    </div>
                  

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input type="email" id="email" class="form-control form-control-lg input-forms" />
                      <label class="form-label" for="email">Email</label>
                    </div>
                  </div>

                    <br><br>
                    <br>
                                      <button type="button" class="btn btn-light btn-lg btn-block"
                    data-mdb-ripple-color="dark" id="register">Register</button>

                </div>
              </div>
            </div>
            </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <!-- Anything you want -->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 MNHS.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../admin/plugins/jszip/jszip.min.js"></script>
<script src="../admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"],
 
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

     $("#users-nav").addClass("active");
    loadUserList();

    flatpickr("#bdate", {});

    $("#register").on('click', function(e){
        e.preventDefault();
        var datas  =  {
            fname : document.getElementById("fname").value,
            lname : document.getElementById("lname").value,
            mname : document.getElementById("mname").value,
            age : document.getElementById("age").value,
            bdate : document.getElementById("bdate").value,
            homeadd : document.getElementById("homeadd").value,
            zipcode : document.getElementById("zipcode").value,
            province : document.getElementById("province").value,
            country : document.getElementById("country").value,
            phonenumber : document.getElementById("phone_number").value,
            email : document.getElementById("email").value,
            usertype : document.querySelector("#usertype").value,
            gender : document.querySelector('input[name="gender"]:checked').value

        }
        $.ajax({
            method : 'post',
            url : '../config/_register.php',
            data : datas,
            success : function (result){
                console.log(result)
                $("#resmessage").text(result);
            }
        });
    });


    function loadUserList(){
      $.ajax({
        url : "core/_user_list.php",
        method : "GET",
        success : function (res){
          console.log(res);
        } 
      });
      
    }
</script>
</body>
</html>
