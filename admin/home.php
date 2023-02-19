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
            <h1 class="m-0">Home / Page Content</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <section class="content">
      <div class="container-fluid">


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Page : About us</h5>
              </div>
             
              <div class="card-body">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#content_list" role="tab" aria-controls="content_list" aria-selected="true">Content List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#content_new" role="tab" aria-controls="content_new" aria-selected="false">New Content</a>
                </li>
        
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="content_list" role="tabpanel" aria-labelledby="home-tab">
                <div class="card">
                    <div class="card-body" >
                      <br>
                    <table class="table table-striped table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col" width="100px">Page Title</th>
                            <th scope="col" width="180px">Content Title</th>
                            <th scope="col">Content Details</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="contentlist">
                          
                        </tbody>
                      </table>
                                          </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="content_new" role="tabpanel" aria-labelledby="profile-tab">
                <br>
                  <div class="card">
                    <div class="card-body">
                    <form>
                    <h2 id="resmessage" class="text-danger"></h2>
                  <div class="form-group">
                   
                        <label for="sel1">Page Title:<span class="text-danger">*</span></label>
                        <select class="form-control" id="pagetitle">
                            <option selected value="About Us">About Us</option>
                        </select>
                    
                  </div>
                 
                  <div class="form-group">
                    <label for="contenttitle">Content Title:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="contenttitle" >
                  </div>
                  <div class="form-group">
                    <label for="contentdetails">Content Details:<span class="text-danger">*</span></label>
                    <textarea class="form-control col-sm-20" id="contentdetails" rows="5"></textarea>
                  </div>
                  <br>
                  <div class="float-right col-3">
                    <button type="button" id="savecontent" class="btn btn-primary btn-lg btn-block">Submit</button>
                  </div>
                  
                </form>
                    </div>
                  </div>
                </div>
            
              </div>

              </div>

              <div class="card-footer">
                
              </div>
              
            </div>
        
            

          </div>
        
        </div>

      </div>
    </section>
   =
    </div>
=
  </div>

  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <!-- Anything you want -->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 MNHS.</strong> All rights reserved.
  </footer>

  <div class="modal fade bd-example-modal-lg" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="content-modal">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save_update">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="../admin/js/bootbox.min.js"></script>
<script>
     $("#home-nav").addClass("active");
     load_list();

     $("#savecontent").on('click', function(e){
      e.preventDefault();
      var datas = {
        pagetitle : document.getElementById("pagetitle").value,
        contenttitle : document.getElementById("contenttitle").value,
        contentdetails : document.getElementById("contentdetails").value,
      }
      $.ajax({
    url : "core/_add_new_content.php",
    method : "POST",
    data : datas,
    success : function (result){
      $("#resmessage").text(result);
      load_list();
    }
  });
     });
      function load_list(){
        $("#contentlist").load("core/_content_list.php");
      }
      $("#save_update").on('click', function(){

const upid = document.getElementById('upid').value;
const uppage = document.getElementById('uppage').value;
const uptittle = document.getElementById('uptittle').value;
const updetails = document.getElementById('updetails').value;

$.ajax({
        url : "core/_save_update_content.php",
        method : "POST",
        data : {upid: upid ,uppage : uppage, uptittle : uptittle, updetails : updetails},
        success : function(res){
            alert(res);
            
            load_list();
        }

    });
    $("#modal-update").hide(); 
});
</script>
</body>
</html>
