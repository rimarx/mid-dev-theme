<div class="col-12">
	<div class="container">
		<div class="row justify-content-center">
	
			<?php
			foreach( $custom_post_arr as $custom_post ){
			?>
				<div class="cast_categor_item col-md-5 col-12">
					<!-- <h3 class="text-center"><?php //echo $custom_post->post_title; ?></h3> -->

					<?php $img_arr = get_field('picture', $custom_post->ID) ?>

					<div class="img_wrap"><img src="<?= $img_arr['sizes']['medium']; ?>" alt="<?= $img_arr['alt']; ?>" class="mx-auto d-block"></div>
					
					<div><p class="text-center"><?= mb_strimwidth( get_field('description', $custom_post->ID), 0, 53, '...' ); ?></p></div>
					<!-- <span class="date_field"><?php //echo get_field('date', $custom_post->ID) ?></span> -->
				</div>
			<?php 
			} //foreach date link
			?>
		</div>
	</div>
</div>