<div class="col-12 category_wrap">
  <div class="container">
    <div class="row justify-content-center">
      <div id="carouselControls" class="carousel slide col-10 mx-auto" data-ride="carousel" data-interval="6000">
        <div class="carousel-inner col-9 mx-auto">
            <?php
            foreach( $custom_post_arr as $custom_post ){
            ?>
              <div class="carousel-item">
                <?php $img_arr = get_field('photo', $custom_post->ID) ?>
                <div class="img_wrap"><img src="<?= $img_arr['sizes']['thumbnail']; ?>" alt="<?= $img_arr['alt']; ?>" class="mx-auto d-block"></div>
                <div><p class="text-justify"><?= get_field('text', $custom_post->ID) ?></p></div> 
                <div>
                <?php if ( get_field('facebook', $custom_post->ID) ){ ?><span><a href="<?= get_field('facebook', $custom_post->ID) ?>"><i class="fa fa-facebook-square" style="font-size:20px;color:blue;"></i></a></span> <?php } ?>
                <?php if ( get_field('twitter', $custom_post->ID) ){ ?><span><a href="<?= get_field('twitter', $custom_post->ID) ?>"><i class="fa fa-twitter" style="font-size:20px;color:blue;"></i></a></span> <?php } ?>
                <?php if ( get_field('instagram', $custom_post->ID) ){ ?><span><a href="<?= get_field('instagram', $custom_post->ID) ?>"><i class="fa fa-instagram" style="font-size:20px;color:blue;"></i></a></span> <?php } ?>
                </div>
              </div>
            <?php 
            } //foreach
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>