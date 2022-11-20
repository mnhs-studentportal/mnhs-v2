<?php
require_once 'db_cofig.php'; 
require_once '_list_controller.php';
	$db = new dbController();
	$conn = $db->connect();
	$dCtrl  =   new SubjectListController($conn);
	$usersdata = $dCtrl->index();


    foreach($usersdata as $item) : ?>
        <tr>
          <td> <?php echo $item['subject_guid']; ?> </td>
          <td> <?php echo $item['subject_tittle']?> </td>
          <td> <?php echo $item['year_lvl']; ?> </td>
          <td>  <button class="btn btn-danger add_subject"> Add</button></td>
         
        </tr>

      <?php endforeach; ?>	
?>

