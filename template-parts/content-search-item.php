<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rmx
 */

?>
<div class="search-content">
	<header class="page-header">
		<?php the_title( sprintf( '<div class="title_h2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .page-header -->

	<div>
		<?php the_excerpt(); ?>
	</div>
</div>