

<div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
<?php
include "../config/db_connect.php";


    $result = $conn->query("select * from carousel");
?>
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <?php
                            $i = 0;
                            foreach($result as $row){
                                $actives = '';
                                if($i == 0){
                                    $actives = 'active'; 
                            }
                            ?>
                        <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives;?>"></li>
                       <?php $i++; }?>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                        <?php
                            $i = 0;
                        foreach ($result as $row) {
                            $actives = '';
                            if ($i == 0) {
                                $actives = 'active';
                            }
                            ?>
                        <div class="carousel-item <?= $actives ?>">
                            <img src="images/<?= $row['img_url'];?>" width="100%" height="500">
                        </div>
                        <?php $i++; }?>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        </a>
                </div>