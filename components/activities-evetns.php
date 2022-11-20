<?php
include "../config/db_connect.php";

?>
        <div class="container">
                <div class="col-md-12 col-lg-12 text-center text-lg-left">              
                  <!-- Updates -->
                       <h2 class="display-4 mb-4 font-weight-normal">
                       <span class="text-warning">I</span> 
                       <span class="text-success">Whats New!</span>
                        </h2>      
                        <div class="col-lg-12" id="featured_images"></div>
                </div>
                <br><br>
                <div class="col-md-12 col-lg-12 text-center text-lg-left">              
                  <!-- News -->
                        <h2 class="display-4 mb-4 font-weight-normal">
                        <span class="text-warning">I</span> 
                        <span class="text-success">Academic</span> 
                        </h2>      
                        <div id="loadnews">

                        </div>
                </div>
                <br><br>
                <div class="col-md-12 col-lg-12 text-center text-lg-left">              
                  <!-- News -->
                        <h2 class="display-4 mb-4 font-weight-normal">
                        <span class="text-warning">I</span> 
                        <span class="text-success">School Calendar</span> 
                        </h2>      
                        <div id="loadnews">

                        </div>
                </div>
                <br><br>
                <div class="col-md-12 col-lg-12 text-center text-lg-left">              
                  <!-- News -->
                        <h2 class="display-4 mb-4 font-weight-normal">
                        <span class="text-warning">I</span> 
                        <span class="text-success">Announcement</span> 
                        </h2>      
                        <div id="loadnews">

                        </div>
                </div>

                <br><br>
                <div class="col-md-12 col-lg-12 text-center text-lg-left">              
                  <!-- News -->
                        <h2 class="display-4 mb-4 font-weight-normal">
                        <span class="text-warning">I</span> 
                        <span class="text-success">Gallery</span> 
                        </h2>      
                        <div id="loadnews">

                        </div>
                </div>
                
        </div> 
<script>
    $("#featured_images").load("components/featured_image.php");
</script>