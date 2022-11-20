<?php 


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
            <h1 class="m-0">Enrollment/ Student Profile</h1>
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
                <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#new" data-toggle="tab">Search Student</a></li>
                      <!-- <li class="nav-item"><a class="nav-link " href="#list" data-toggle="tab">Enrollment List</a></li> -->
                      
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="new">
                        <div class="col-lg-11">
                        <div class="row">
                        <div class="col-md-6">
                        <div class="input-group input-group-lg" >
                              <input type="text" class="form-control" id="searchBar" onkeypress="enterKeyPressed(event)">
                              <span class="input-group-append">
                                
                                <button type="button" class="btn btn-lg btn-default" id="btnSearch">
                                    <i class="fa fa-search"> Search</i>
                                </button>
                              </span>
                        </div>
                        </div>
                        
                        
                        </div>
                        </div>

                        <br><br><br><br>
                        <div class="col-md-11" >
                        <img src="../images/loading.gif" style="display: none;" id="loading">
                              <div class="card" id="searchpanel">
                                  <div class="card-body" >
                                    
                                    <div class="row" id="searchResults">
                                           
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
  $("#searchpanel").hide();
 function enterKeyPressed(event) {
  $("#loading").show();
  var dataset = document.getElementById('searchBar').value;
      if (event.keyCode == 13) {
         console.log("Enter key is pressed");
         
         searchData(data);
         return true;
      } else {
         return false;
      }
   }
  $("#searchBar").keyup(function(){
    var data = $(this).val();
    if (data != '') {
      searchData(data);
    } 
  });
  $("#btnSearch").on('click',function(){
    var data = $("#searchBar").val();
    if (data != '') {
      searchData(data);
    } 
  });
  function searchData(data){
    $("#loading").show();
    $.ajax({
      url : "core/_search_student.php",
      method : "POST",
      data : {data : data},
      success : function (resdata){
      
        $("#searchResults").html(resdata);
        student_options();
        //document.getElementById('searchBar').value = '';
        setTimeout(function() {
          $("#searchpanel").show();
          $("#loading").hide();
            }, 1000);
      }
    });
  }

  function student_options(){
    $('.btn_enroll').on('click',function(){
      var en_id = $(this).attr('id');
      alert("enroll"+ en_id);
    });

    $('.btn_grades').on('click',function(){
      var gd_id = $(this).attr('id');
      alert("grades"+ gd_id);
    });

    $('.btn_view').on('click',function(){
      var vw_id = $(this).attr('id');
      alert("view"+ vw_id);
    });
    
  }
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

     $("#enrollment-nav").addClass("active");
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
            type : 'post',
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
