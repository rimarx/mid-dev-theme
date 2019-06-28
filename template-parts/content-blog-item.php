<div class="blog_categor_item cast_categor_item archive_item align-self-start"> <!-- col-md-5 col-12 -->
	<div class="archive_item_img_wrap">
		<?php if( has_post_thumbnail( $post->ID ) ) {?>
		<div class="img_wrap"><img src="<?=get_the_post_thumbnail_url($post->ID, 'medium'); ?>" class="mx-auto d-block"></div>
		<?php } ?>
	</div>
<span class="count_wrap"><?= $count; ?></span>
	<div class="archive_item_descr"><p class="text-justify"><?php echo wp_trim_words( get_the_content(), 20, ' ...' ); ?></p></div>

</div>