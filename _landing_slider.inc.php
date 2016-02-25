<div class="widget-container widget_gallery">
    <div class="inner">
        <div id="myCarousel" class="carousel slide" data-interval="1000">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <?php for($i=1;$i<=10;$i++){ $img_suffix= $i<10 ? "0".$i : $i; ?>
                <div class="<?php echo $i==1 ? "active": "";?> item">
                    <img src="/assets/images/meri/activities_<?php echo $img_suffix; ?>.jpg" alt="" />
                </div>
              <?php } ?>
            </div>
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <?php for($i=0;$i<10;$i++){?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="<?php echo $i==0 ? "active": "";?>"></li>
              <?php }   ?>
            </ol>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel"  data-slide="prev"></a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
        </div>
    </div>
</div>
