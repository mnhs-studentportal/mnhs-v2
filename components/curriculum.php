<?php
require_once '../admin/core/db_cofig.php';
require_once '../admin/core/_list_controller.php';
	$db = new dbController();
	$conn = $db->connect();
	$dCtrl  =   new CurriculumnListController($conn);
	$usersdata = $dCtrl->index();
?>
        <div class="container">
            
                <hr>
                <div class="col-md-12 col-lg-8 text-center text-lg-left">              
                  <!-- Updates --><br><br>
                       <h2 class="display-4 mb-4 font-weight-normal">
                       <span class="text-warning">I</span> 
                       <span class="text-success">Curriculum</span>
                        </h2>      
                    <div class="row">
                        <ul class="list-group list-group-flush">
                        <?php 
                      foreach($usersdata as $item) : ?>
                        <li class="list-group-item"><?php echo $item['curriculumn_tittle']?> </li>
                
                      <?php endforeach; ?>	
                        </ul>
                    </div>
                </div>
                <br><br>
                <div class="col-md-12 col-lg-8 text-center text-lg-left">              
                  <!-- News -->
                        <h2 class="display-4 mb-4 font-weight-normal">
                        <span class="text-warning">I</span> 
                        <span class="text-success">Grading Period</span> 
                        </h2>      
                        <div id="loadnews">

                        </div>
                </div>
                <br><br>
                <div class="col-md-12 col-lg-8 text-center text-lg-left">              
                  <!-- News -->
                        <h2 class="display-4 mb-4 font-weight-normal">
                        <span class="text-warning">I</span> 
                        <span class="text-success">Programs</span> 
                        </h2>      
                        <div class="row">
                        <ul class="list-group list-group-flush">
                        <?php 
                      foreach($usersdata as $item) : ?>
                        <li class="list-group-item"><?php echo $item['curriculumn_tittle']?> </li>
                
                      <?php endforeach; ?>	
                        </ul>
                    </div>
                </div>
                
        </div> 