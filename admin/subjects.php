<?php 

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
            <h1 class="m-0">Subjects</h1>
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
                  <li class="nav-item"><a class="nav-link active" href="#list" data-toggle="tab">List of subjects</a></li>
                  <li class="nav-item"><a class="nav-link" href="#new" data-toggle="tab">Add New Subject</a></li>
                </ul>
                </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class=" tab-pane active" id="list">
            <div class="">
              <div class="">
                
              </div>
              <!-- /.card-header -->
              <div class="">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sunject Id</th>
                    <th>Subject Tittle</th>
                    <th>Subject Details</th>
                    <th>Subject Year Level</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach($usersdata as $item) : ?>
                        <tr>
                          <td> <?php echo $item['subject_guid']; ?> </td>
                          <td> <?php echo $item['subject_tittle']?> </td>
                          <td> <?php echo $item['subject_details']; ?> </td>
                          <td> <?php echo $item['year_lvl']; ?> </td>
                         
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
          <form id="subjectForm">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">Subject Infomation</h3>
                    <h1 id="resmessage" class="text-danger"></h1>
                  <div class="mb-6 pb-2">
                  <div class="form-group">
                        <label for="sel1">Year Level:<span class="text-danger">*</span></label>
                        <select class="form-control" id="yearlvl">
                            <option selected value="Grade 7">Grade 7</option>
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
                      <label class="form-label" for="subtittle">Subject Tittle<span class="text-danger">*</span></label>
                        <input type="text" id="subtittle" name="subtittle" class="form-control form-control-lg input-forms" required/>
                        
                      </div>

                    </div>
                    <div class="col-md-12 mb-6 pb-2">

                      <div class="form-outline">
                      <label class="form-label" for="subdetails">Subject Details</label>
                        
                        <textarea id="subdetails" name="subdetails" class="form-control form-control-lg input-forms"></textarea>
                      </div>

                    </div>
                  
                   
                  </div>
                  <br><br>
                  <div class="col-md-12 mb-6 pb-2">
                    <button type="button" class="btn btn-success btn-lg btn-block"
                    data-mdb-ripple-color="dark" id="save">Add New Subject</button>
                  </div>
                  
              

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

<script>
$(document).ready(function(){
  $("#subjects-nav").addClass("active");
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
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

$("#save").on('click', function(e){
  e.preventDefault();
  var datas = {
    yearlvl : document.getElementById("yearlvl").value,
    subtittle : document.getElementById("subtittle").value,
    subdetails : document.getElementById("subdetails").value,
  }
  $.ajax({
    url : "core/_add_subject.php",
    method : "POST",
    data : datas,
    success : function (result){
      $("#resmessage").text(result);
    }
  });
});


  //end
});
</script>

</body>
</html>
