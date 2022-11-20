<?php
  $value = $_GET["data_id"];
  require_once 'core/db_cofig.php'; 
require_once 'core/_list_controller.php';
	$db = new dbController();
	$conn = $db->connect();
	$dCtrl  =   new SubjectListController($conn);
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
            <h1 class="m-0">Curriculum / Add Subjects </h1>
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
                  <li class="nav-item"><a class="nav-link active" href="#list" data-toggle="tab">Curriculum info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#new" data-toggle="tab">Subjects</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class=" tab-pane active" id="list">
            <div class="">
            <form id="subjectForm">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">Curriculumn Infomation</h3>
                    <h1 id="resmessage" class="text-danger"></h1>
                  <div class="mb-6 pb-2">
                  <div class="form-group">
                        <label for="sel1">Year Level:<span class="text-danger">*</span></label>
                        <select class="form-control" id="yearlvl">
                            <option value="Grade 7">Grade 7</option>
                            <option value="Grade 8">Grade 8</option>
                            <option value="Grade 9">Grade 9</option>
                            <option value="Grade 10">Grade 10</option>
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>
                        </select>
                        </div> 
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-6 pb-2">

                      <div class="form-outline">
                      <label class="form-label" for="curtittle">Curriculumn Tittle<span class="text-danger">*</span></label>
                        <input type="text" id="curtittle" name="curtittle" class="form-control form-control-lg input-forms" required/>
                        
                      </div>

                    </div>
                    <div class="col-md-12 mb-6 pb-2">

                      <div class="form-outline">
                      <label class="form-label" for="curdetails">Curriculumn Details</label>
                        
                        <textarea id="curdetails" name="curdetails" class="form-control form-control-lg input-forms"></textarea>
                      </div>

                    </div>
                  
                   
                  </div>
                  <br><br>
                  <div class="col-md-12 mb-6 pb-2">
                    <button type="button" class="btn btn-success btn-lg btn-block"
                    data-mdb-ripple-color="dark" id="update">Update Curriculumn?</button>
                  </div>
                  
              

                </div>
              </div>


            </div>
            </form>
            </div>
                  </div>

                  <div class="tab-pane" id="new">
                  <div class="col-lg-12">
                    <div class="row justify-content-around" style="margin: 20px;">
                        <div class="col-lg-5">
                        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Added Subjects</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0 " id="example2">
                    <thead>
                    <tr>
                      <th>Subject ID</th>
                      <th>Subject Title</th>
                      <th>Year Level</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="loadAdedSubjects">
                    
                </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
     
              </div>
              <!-- /.card-footer -->
            </div>
                        </div>
                        <div class="col-lg-5">
                        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Subject List</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0" id="example3">
                    <thead>
                    <tr>
                        <th>Subject ID</th>
                      <th>Subject Title</th>
                      <th>Year Level</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody >
               <?php     foreach($usersdata as $item) : ?>
                            <tr id="<?php echo $item['subject_guid']; ?> ">
                            <td><?php echo $item['subject_guid']; ?> </td>
                            <td><?php echo $item['subject_tittle']?> </td>
                            <td><?php echo $item['year_lvl']; ?> </td>
                            <td>  <button class="btn btn-danger add_subject"> Add</button></td>
                            
                            </tr>

                        <?php endforeach; ?>	
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
          
              </div>
              <!-- /.card-footer -->
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
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
<script src="../admin/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/bootbox.all.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>

var data_id = '<?php echo $value?>';
    $.ajax({
        url : "core/_get_curriculumn_data.php",
        method : "POST",
        data : {data_id : data_id},
        success : function(result){
           var b = JSON.parse(result);
           $('#curtittle').val(b[0]['curriculumn_tittle']); 
           $('#curdetails').text(b[0]['curriculumn_details']); 
           $('#yearlvl').val(b[0]['year_lvl']);

           console.log(b[0]);         
           loadSelectedSubjects();
           loadSubjects();
        }
    });
    

    $('.add_subject').on('click', function(e){
        e.preventDefault();
        var cur_id = '<?php echo $value?>';
        var sub_id = $(this).closest('tr').attr('id');
        var yr_lvl = $(this).closest('tr').children('td:eq(2)').text();
        
        $.ajax({
            url : "core/_insert_new_subject.php",
            method : "POST",
            data : {cur_id : cur_id , sub_id : sub_id , yr_lvl : yr_lvl},
            success : function (res){
                if (res == 1) {
                    bootbox.alert("Subject Already Added");
                    loadSelectedSubjects();    
                } else {
                    loadSelectedSubjects();
                document.getElementById(sub_id).remove();
                }
                
            }
        });
    });

    

    function loadSelectedSubjects(){
        var sub_id = '<?php echo $value?>';
        $.ajax({
            url: "core/_added_subjects.php",
            method : "POST",
            data : {data_id : sub_id},
            success : function (res){
                $("#loadAdedSubjects").html(res);
                $(".removethis").on('click', function(){
                    var rem_id = $(this).closest('tr').attr('id');
                   removeAddedSubject(rem_id);
                });
            }
            
        });

        function removeAddedSubject(remid){
            
            $.ajax({
                        url : 'core/_delete_added_subject.php',
                        method : "POST",
                        data : {remid : remid},
                        success : function(res){
                            loadSelectedSubjects();  
                        }
                    });
        }
       
    }
    function loadSubjects(){
        var sub_id = '<?php echo $value?>';
        $.ajax({
            url: "core/_subject_list.php",
            method : "POST",
            data : {data_id : sub_id},
            success : function (res){
                $("#loadSubjects").load("core/_subject_list.php");
            }
        });
       
    }

 $(document).ready(function(){
 
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });

     $("#curriculum-nav").addClass("active");

     $("#update").on('click', function(e){
  e.preventDefault();
  var datas = {
    guid : '<?php echo $value?>',
    yearlvl : document.getElementById("yearlvl").value,
    curtittle : document.getElementById("curtittle").value,
    curdetails : document.getElementById("curdetails").value,
  }
  console.log(datas);
  $.ajax({
    url : "core/_update_curriculumn.php",
    method : "POST",
    data : datas,
    success : function (result){
      $("#resmessage").text(result);
    }
  });
});


 });
</script>
</body>
</html>
