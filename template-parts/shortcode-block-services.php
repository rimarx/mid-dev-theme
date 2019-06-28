<div class="col-12 category_wrap">
	<div class="container">
		<div class="row justify-content-center">
	
			<?php
			foreach( $custom_post_arr as $custom_post ){
			?>
				<div class="cast_categor_item col-md-3 col-12">
					<h3 class="text-center"><?= $custom_post->post_title; ?></h3>

					<?php $img_arr = get_field('service_icon', $custom_post->ID) ?>

					<div class="img_wrap"><img src="<?= $img_arr['sizes']['thumbnail']; ?>" alt="<?= $img_arr['alt']; ?>" class="mx-auto d-block"></div>
					
					<div><p class="text-justify"><?= get_field('short_description', $custom_post->ID) ?></p></div>					
				</div>
			<?php 
			} //foreach
			?>
		</div>
	</div>
</div>