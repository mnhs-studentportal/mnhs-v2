<?php
$data = $_GET['data_id'];

require_once 'core/db_connect.php'; 
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
            <h1 class="m-0">Enrollment/ Grades </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-11">
            <div class="card">
              <div class="card-header p-2">

                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="new">
                        <div class="row">
                        <div class="col-lg-4">
                        <div class="row">
                        <div class="col-md-12">
                        <div class="card card-success">
                        <div class="card-header">
                        <h3 class="card-title">Student Information</h3>
                        </div>
                        <div class="card-body">
                        
                        <?php
                     
                      
                        
                        $data_id= str_replace(' ', '', $data);
                        $sql = "SELECT * FROM registration WHERE gu_id = '".$data."'"; 
                        
                            $result = $conn->query($sql);

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                      
                        ?>
                        <dl>
                            <dt>Name:</dt>
                            <dd> <?php echo $row['first_name']?> <?php echo $row['middle_name']?> <?php echo $row['last_name']?></dd>
                            <dt>Address:</dt>
                            <dd><?php echo $row['home_address']?>, <?php echo $row['province']?>, <?php echo $row['country']?> <?php echo $row['zipcode']?></dd>
                           
                            <dt>Age:</dt>
                            <dd><?php echo $row['age']?></dd>
                            
                            <dt>Birth Date:</dt>
                            <dd><?php echo $row['bdate']?></dd>

                            <dt>Gender:</dt>
                            <dd><?php echo $row['gender']?></dd>
                            
                            <dt>Year level:</dt>
                            <dd><?php echo $row['year_level']?></dd>
                            
                        </dl>
                        <?php
                        }
                    }
                        ?>
                       
                        </div>
                        <div class="card-footer">
                        <button class="btn btn-lg btn-success"id="new_enrollment" style="display: none;">New Enrollment</button>
                        </div>
                        </div>
                        </div>
                        
                        
                        </div>
                        </div>
                        <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                            <div>
                            <div class="card card-success">
                            <div class="card-header">
                            <h3 class="card-title">Enrollment Information</h3>
                            </div>
                            <div style="text-align: center;" >
                            <img src="../images/loading.gif" style="width: 50%;display: none;" id="loading">
                            </div>
                        
                            
                            
        
                            </div>
                            <div class="card-footer" style="text-align: center;">
                            <div class="card-body" id="loadEnrollmentData" style="display: none;">
                            </div>
                            </div>
                            </div>
                            </div>
                            
                           
                        
                        </div>
                        </div>
                        <div class="col-lg-12" style="display: none;" id="cur_list">
                        <?php 

                        require_once 'core/db_cofig.php'; 
                        require_once 'core/_list_controller.php';
                            $db = new dbController();
                            $conn = $db->connect();
                            $dCtrl  =   new CurriculumnListController($conn);
                            $usersdata = $dCtrl->index();
                        ?>
                            <div class="card card-success">
                            <div class="card-header">
                            <h3 class="card-title">List of Curriculumn</h3>
                            </div>
                            <div style="text-align: center;" >
                            </div>
                            </div>
                            <div class="card-footer" style="text-align: center;">
                            <div class="card-body" id="loadEnrollmentData" >
                            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Curriculumn Id</th>
                    <th>Curriculumn Tittle</th>
                    <th>Curriculumn Details</th>
                    <th>Curriculumn Year Level</th>
                    <th>Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach($usersdata as $item) : ?>
                        <tr id="<?php echo $item['curriculumn_guid']; ?>">
                          <td><?php echo $item['curriculumn_guid']; ?></td>
                          <td><?php echo $item['curriculumn_tittle']?></td>
                          <td><?php echo $item['curriculumn_details']; ?></td>
                          <td><?php echo $item['year_lvl']; ?></td>
                          <td>
                          <button type="button" class="btn btn-block btn-outline-primary btn_enroll_">Enroll</button>
                          </td>
                        </tr>

                      <?php endforeach; ?>	
                    </tbody>	
                  <tfoot>
             
                  </tfoot>
                </table>
                            </div>
                            </div>
                            </div>
                        </div>

                      </div>
                  <!-- /.tab-pane -->
                    </div>
                <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>

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
     $('#loading').show();
     $('#loadEnrollmentData').hide(); 
    loadEnrollmentData_();
   
        
      function loadEnrollmentData_(){
        var data = '<?php echo $data?>';
          $.ajax({
            url : "core/_get_enrollment_data.php",
            method: "POST",
            data : {data : data},
            success : function (res){
              
                if (res == 0) {
                    
                    $('#loadEnrollmentData').load("core/_note_enrolled.php");
                    new_enrollment();
                    setTimeout(function() {
                        $("#new_enrollment").show();
                        $("#loading").hide();
                        $('#loadEnrollmentData').show();
                            }, 2000);
                } else {
                    $('#loadEnrollmentData').html(res);
                    console.log(res);
                }
            }
        });
      }
     
    function new_enrollment(){
        $("#new_enrollment").on('click',function(){
        
            $("#cur_list").show();
        });

        $(".btn_enroll_").on('click',function(){
            var stud_id =  '<?php echo $data?>';
            var cur_yearlvl = $(this).closest('tr').children('td:eq(3)').text();
            var cur_id = $(this).closest('tr').attr('id');
            var status = 'New';
            
            $.ajax({
                url : "core/_add_new_enrollment.php",
                method : "POST",
                data : {stud_id : stud_id , cur_yearlvl : cur_yearlvl , cur_id : cur_id , status : status},
                success : function(res){
                    console.log(res);
                    loadEnrollmentData_();
                }
            });
            
        });
    }
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
   
 
      
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

     $("#enrollment-nav").addClass("active");
   

    flatpickr("#bdate", {});

</script>
</body>
</html>
