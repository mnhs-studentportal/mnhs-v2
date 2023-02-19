<?php
require_once 'db_cofig.php'; 
require_once '_list_controller.php';
	$db = new dbController();
	$conn = $db->connect();
	$dCtrl  =   new ContentListController($conn);
	$usersdata = $dCtrl->index();
$i = 1;

    foreach($usersdata as $item) : ?>
    
        <tr id="<?php echo $item['id']?>">
          <td><?php echo $i++;?></td>
          <td> <?php echo $item['page_tittle']; ?> </td>
          <td> <?php echo $item['content_tittle']?> </td>
          <td> <?php echo $item['content_details']; ?> </td>
          <td>
            <button class="btn btn-info edit_content" data-toggle="modal" > Edit</button><br>
            <button class="btn btn-danger delete_content" data-toggle="modal" > Delete</button>
          </td>
         
        </tr>

      <?php endforeach; ?>	
?>

<script>
   $(".delete_content").on("click", function(){
            var item_id = $(this).closest('tr').attr('id');
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
                        url: "core/_delete_content.php",
                        method : "POST",
                        data : {item_id : item_id},
                        success : function(res){
                            bootbox.alert(res);
                            $("#contentlist").load("core/_content_list.php");
                        }
                     });
                  } else {
                    bootbox.cancel
                  }
                    console.log('This was logged in the callback: ' + result);
                    $("#contentlist").load("core/_content_list.php");
                }
            });
            
            
      });
   $(".edit_content").on('click',function(e){
      e.preventDefault();
      var a = $(this).closest('tr').attr('id');
      $.ajax({
            url : "core/_view_update_content.php",
            method : "POST",
            data : {update_id : a},
            success : function (res){
                $('#content-modal').html(res);
            }
        });
        $("#modal-update").modal('toggle');
     });
</script>