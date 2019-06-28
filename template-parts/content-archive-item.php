<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rmx
 */

?>
<div class="archive_item">
	<a href="<?= get_permalink($post->ID) ?>">
		<div class="archive_item_img_wrap">
			<?php if( has_post_thumbnail( $post->ID ) ) {?>
			<img src="<?=get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt="item img">
			<?php } ?>
		</div>
		<div class="archive_item_title">
			<?php the_title( '<p>', '</p>' ); ?>
		</div>
	</a>
</div>