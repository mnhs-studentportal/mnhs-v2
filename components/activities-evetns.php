<?php
include "../config/db_connect.php";

?>
        <div class="container">
        <div class="row">
                        <div class="col-md-12 col-lg-12 text-center text-lg-left">              
                    <!-- Updates --><br><br>
                            <h2 class="display-4 mb-4 font-weight-normal">
                            <span class="text-warning">I</span> 
                            <span class="text-success">Updates</span>
                                </h2>      
                            <div class="row" id="loadupdates">
                                
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12 text-center text-lg-left">              
                        <!-- News -->
                                <h2 class="display-4 mb-4 font-weight-normal">
                                <span class="text-warning">I</span> 
                                <span class="text-success">News</span> 
                                </h2>      
                                <div id="loadnews">

                                </div>
                            </div>

                    </div>
        </div> 
<script>
    $("#loadupdates").load("components/_updates.php");
$("#loadnews").load("components/_news.php");
</script>