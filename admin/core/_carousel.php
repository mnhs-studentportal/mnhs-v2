<?php
include "db_connect.php";

$sql = "select * from carousel";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           echo '
           <div class="col-sm-3">
            <div class="card">
            <div class="card-header" style="text-align: center;">

            <button type="button" class="btn btn-tool btn-xl btn-delete" id="'.$row['id'].'">
            <p class="text-danger">Delete</p>
        </button>
            
</div>

                    <img class="card-img-top" src="../images/'.$row['img_url'].'" alt="Card image" style="height: 200px;">
                    <div class="card-body cscroll">
                        
                    </div>
                </div> 
            </div>
            
           ';
        }
        } else {
        echo '';
        }
        $conn->close();



?>

<script>
     $(".btn-delete").on("click", function(){
            var item_id = $(this).attr("id");
            bootbox.confirm({
                message: "Are you sure to delete this item?",
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
                    $.ajax({
                        url: "core/_delete_activity.php",
                        method : "POST",
                        data : {item_id : item_id},
                        success : function(res){
                            bootbox.alert(res);
                            $("#loadupdates").load("core/_updates.php");
                        }
                     });
                  } else {
                    bootbox.cancel
                  }
                    console.log('This was logged in the callback: ' + result);
                    $("#loadupdates").load("core/_updates.php");
                }
            });
            
            
      });

      $(".btn-update").on('click', function(e){
        e.preventDefault();

        var update_id = $(this).attr('id')
        $.ajax({
            url : "core/_view_update_activity.php",
            method : "POST",
            data : {update_id : update_id},
            success : function (res){
                $('#loadupdate').html(res);
            }
        });
        $("#modal-update").modal('toggle');
      });
         
  
</script>

   <!-- <button type="button" class="btn btn-tool btn-xl" >
        <p class="text-info">View</p>
    </button> 

data-target="#modal-xl"
-->
