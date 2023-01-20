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
            <h1 class="m-0">Enrollment/ New Enrollment </h1>
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
                        $sql = "SELECT * FROM registration
                        LEFT JOIN enrollment_setup ON enrollment_setup.student_guid = registration.gu_id 
                        WHERE gu_id = '".$data."'"; 
                        
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
                        <div class="card-footer">
                        <button class="btn btn-lg btn-info"id="view_subjects" style="display: none;" onclick="viewSubjects()">Load Subjects</button>
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

                           <div class="col-lg-12">
                           <div class="card card-success">
                              <div class="card-header">
                                Subjects
                              </div>
                              <div class="card-body">
                              <div class="container">
                                  <div class="col-md-12">
                                    <div class="tabbable">
                                    <ul class="nav justify-content-center sub-tabs" id="load_subject_title">
                                         
                                        </ul>
                                      <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                          <div class="d-flex justify-content-between">
                                          <div id="load_gradedsubjects">
                                            
                                            </div>
                                            <div class="pull-right">
                                                <button id="btn_add_grade" onclick="checkGradeTerm()"
                                                type="button" class="btn btn-primary" data-target="#gradeModal"
                                                >Add Grade</button>
                                              </div>
                                          </div>
                                          
                                        </div>
                                       
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                        </div>

                      </div>
                      
<!-- Grades Modal -->
<div class="modal fade" id="gradeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add grade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="form-group">
          <label for="exampleInputEmail1">Grading Term</label>
          <input type="text" class="form-control" id="curGrading" readonly>
          <br>
          <label for="exampleInputEmail1">Grade</label>
          <input type="number" class="form-control" id="curGrade"
          oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
          />
        </div>
        
        
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addGrades()">Save changes</button>
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
    // $('#loading').show();
     //$('#loadEnrollmentData').hide(); 
    loadEnrollmentData_();
    $('#btn_add_grade').hide();
        
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
                    $("#new_enrollment").show();
                    // setTimeout(function() {
                    //     $("#new_enrollment").show();
                    //     $("#loading").hide();
                    //     $('#loadEnrollmentData').show();
                    //         }, 2000);
                } else {
                  $('#loadEnrollmentData').show();
                    $('#loadEnrollmentData').html(res);
                    $("#new_enrollment").hide();
                    $("#view_subjects").show();
                    //var ress = JSON.parse(res);
                    //alert(res);
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
    function viewSubjects(){
      var stud_id_sub = '<?php echo $data?>';
      $.ajax({
        url : "core/_get_enrollment_subjects.php",
        method : 'POST',
        data : {data : stud_id_sub},
        success : function(res){
          $("#load_subject_title").html(res);
         // alert(res);
         loadSubjects();
         $('#btn_add_grade').show();
        }

      });
    }

    let set_sub_ids, set_en_ids, set_cur_ids, set_stud_id;
    function loadSubjects(){
      $(".load_subjects").on('click', function(){
        var student_id = '<?php echo $data?>';
        var sub_id = $(this).attr('data-subid');
        var en_id = $(this).attr('data-enid');
        var cur_id = $(this).attr('data-curid');
        set_sub_ids = sub_id;
        set_en_ids = en_id;
        set_cur_ids = cur_id;
        set_stud_id = student_id;
      $.ajax({
        url : 'core/_get_enrollment_subjects_data.php',
        method : 'POST',
        data : { sub_id : sub_id , en_id : en_id},
        success : function (res){
          if (!res == 0) {
            $('#load_gradedsubjects').html(res);
           // checkGradeTerm(sub_id, en_id);
          } else {
            alert(res);  
          }
          
        }
      });
      });
    }
    function checkGradeTerm(){

      //alert(set_en_ids);
      if (set_sub_ids == null && set_en_ids == null) {
        alert("Please select a subject")
      } else {
        $.ajax({
        url : 'core/_get_enrollment_subjects_gradeterm.php',
        method : 'POST',
        data : { sub_id : set_sub_ids , en_id : set_en_ids},
        success : function (res){
       // alert(res);
        document.getElementById('curGrading').value = res;
        // $("#curGrading").value(res);
        if (!res == 0) {
          $("#gradeModal").modal('show');    
        } else {
          alert("Grades are complete in this subject");
        }
              }
      });
      }
    }
    function addGrades(){
    //alert(set_stud_id +" | "+ set_cur_ids);
      var curgrading = document.getElementById('curGrading').value;
      var curgrade = document.getElementById('curGrade').value;
      if (curgrade.length == 0) {
        alert('Please input a grade');
      } else {
        $.ajax({
          url : 'core/_add_grade.php',
          method : 'POST',
          data : {en_ids : set_en_ids, cur_ids : set_cur_ids, stud_ids : set_stud_id, sub_ids : set_sub_ids, curgrading : curgrading, curgrade: curgrade},
          success : function(res){
            $("#gradeModal").modal('hide');  
            alert(res);
            reloadSubjects();
          }
        });
      }
      
    }

    function reloadSubjects(){
      $.ajax({
        url : 'core/_get_enrollment_subjects_data.php',
        method : 'POST',
        data : { sub_id : set_sub_ids , en_id : set_en_ids},
        success : function (res){
          if (!res == 0) {
            $('#load_gradedsubjects').html(res);
           // checkGradeTerm(sub_id, en_id);
          } else {
            alert(res);  
          }
          
        }
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
