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
            <h1 class="m-0">Activities / Events</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
    <div class="container-fluid">
      <div class="col-md-11">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#list" data-toggle="tab">Current Activities & Events</a></li>
                  <li class="nav-item"><a class="nav-link" href="#new" data-toggle="tab">Add New Activities / Events</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#featured_images" data-toggle="tab">Featured Images / Carousel</a></li> -->
                </ul>
              </div><!-- /.card-header -->
<div class="card-body">
    <div class="tab-content">
        <div class="active tab-pane" id="list">
            <div class="row" id="loadupdates">
              
            </div>
        </div>

                  <div class="tab-pane" id="new">
                    <h3 class="text-danger" id="error"></h3>
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" id="actForm">
                      <div class="col-sm-6">
                      <!-- select -->
                        <div class="form-group">
                            <label>Select Update Type</label>
                            <select class="form-control" id="type" name="type" required>
                            <option value="School Event">School Event</option>
                            <option value="News">News</option>
                            </select>
                        </div>
                    </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Tittle</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Activity / Event Tittle" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Details</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="10" name="details" id="details" placeholder="Activity / Event Details" required></textarea>
                          
                        </div>
                  
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Photo/Image</label>
                        <div class="col-sm-10 custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Photo/Image Preview</label>
                        <div class="col-sm-10 custom-file" style="height: 500px;" id="preview">
                        
                      </div>
                      </div>
                     <br>
                     <hr>
                      <div class="form-group row">
                        <div class="offset-sm-11 col-sm-12">
                          <button name="submit" id="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane" id="featured_images">
                    <div class="float-right">
                    <button type="button" class="btn btn-success" id="addNewImage"><i class="nav-icon fas fa-plus"></i> Add Image</button>
                    </div>
                    <br>
                      <div class="row" id="loadcarousel">
                        
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
  <div class="modal fade" id="modal-update">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Activity</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> 
            <div class="modal-body" id="loadupdate">
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="save_update">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="modal-carousel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Featured Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> 
            <div class="modal-body" id="modal_content">

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/js/bootbox.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"],
      order : [],
      paging : true,
      searching : true,
      info : true,
      ajax : {
        url: "core/_updates.php",
        method : "GET",
        data : {
          data_table : ""
        },
        dataSrc : ""
      },
      columns: [
        {data : "username"}
      ]

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
</script>
<script>
    $(document).ready(function(){

     $("#activity-nav").addClass("active");
     loadPosts();
     loadCarousel();

     const tittle = document.getElementById("tittle");
     const details = document.getElementById("details");
     const image = document.getElementById("image");
     const form = document.getElementById('actForm');
     const carouselform = document.getElementById('carouselForm');
     const errorElement = document.getElementById('error')

     form.addEventListener('submit', (e) => {
        let messages = []
        if (tittle.value == '' || tittle.value == null) {
          messages.push('tittle is required');
          return false;
        }
        if (details.value == '' || details.value == null) {
          messages.push('details is required')
          return false;
        }
        if (image.value == '' || image.value == null) {
          messages.push('image is required')
          return false;
        }


        if (messages.length > 0) {
          
          errorElement.innerText = messages.join(', ')
        }else{
          e.preventDefault();
          bootbox.confirm({
                message: "Are you sure to add this item?",
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                  if (result) {
                    var vals = $("#actForm")[0];
                        var form_data = new FormData(vals);
                        $.ajax({
                            url: "core/_newactivity.php",
                            method : "POST",
                            // dataType : "JSON",
                            data : form_data,
                            contentType : false,
                            processData : false,
                            success : function(res){  
                                console.log(res);
                                if (res == 1) {
                                    bootbox.alert("New Activity/ Event is  created");
                                    document.getElementById("actForm").reset();
                                    $("#actForm")[0].reset();
                                    $('#preview').html('');
                                } else {
                                    bootbox.alert("Something went wrong"+res)
                                }
                                loadPosts();
                                $("#actForm")[0].reset();
                            }
                        });
                  } else {
                    bootbox.cancel
                  }
                    console.log('This was logged in the callback: ' + result);
                    $("#loadupdates").load("core/_updates.php");
                }
            });
        }
      });
        
      $('#saveNewFimage').on('click',(e) => {
        var vals = $('#carouselForm')[0];
        var from_datas = new FormData(vals);
        alert(form_datas);
      });

     function imagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('#preview').html('<img src="'+event.target.result+'" width="550" height="auto"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
    }
    function fimagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('#fpreview').html('<img src="'+event.target.result+'" width="550" height="auto"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
    }

        function loadPosts(){
            $("#loadupdates").load("core/_updates.php");
        }
        function loadCarousel(){
            $("#loadcarousel").load("core/_carousel.php");
        }
        $("#image").change(function () {
            imagePreview(this);
        });
        $("#fimage").change(function () {
            fimagePreview(this);
        });




        $("#save_update").on('click', function(){

const upid = document.getElementById('upid').value;
const uptype = document.getElementById('uptype').value;
const uptittle = document.getElementById('uptittle').value;
const updetails = document.getElementById('updetails').value;
    $.ajax({
        url : "core/_save_update_activity.php",
        method : "POST",
        data : {upid: upid ,uptype : uptype, uptittle : uptittle, updetails : updetails},
        success : function(res){
            alert(res);
            //$("#modal-update").hide();  
               $("#loadupdates").load("core/_updates.php");
        }

    });
 
});
        

  $('#addNewImage').on('click',function(e){
    e.preventDefault();
    $("#modal_content").load("core/_new_image_modal.php");
    $("#modal-carousel").modal('toggle');
  });
  
  
     

        //end
    });


</script>
</body>
</html>
