<div class="container">
            <div class="row  align-items-center">
                <!-- featured images -->
                <div class="col-lg-12">
                <?php include "featured_image.php";?>
                </div>
                <br><br><br>
                <hr>
                <div class="col-md-12 col-lg-9">
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
                <div class="col-md-12 col-lg-3">
                <div id="pst-container">
                    <div>Philippine Standard Time:</div>
                    <div id="pst-time"></div>
                    <div><a href="https://gwhs.i.gov.ph/pst/" id="pst-source" target="_blank">PST Source</a></div>
                    </div>
                </div>
                           
            </div> <!-- / .row -->
        </div> 
<script>
//load featured images
$('.carousel').carousel({
  interval: 3000
})
$("#featured_images").load("components/featured_image.php");
$("#loadupdates").load("components/_updates.php");
$("#loadnews").load("components/_news.php");
</script>
<script type="text/javascript">
(function(d, eId) {
	var js, gjs = d.getElementById(eId);
	js = d.createElement('script'); js.id = 'gwt-pst-jsdk';
	js.src = "//gwhs.i.gov.ph/pst/gwtpst.js?"+new Date().getTime();
	gjs.parentNode.insertBefore(js, gjs);
}(document, 'pst-container'));

var gwtpstReady = function(){
	new gwtpstTime('pst-time');
}
</script>