<?php
/**
 * The template for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rmx
 */

get_header();
?>
<?php do_action( 'rmx_page_wrap_start' ); ?>
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'front' );
	endwhile; // End of the loop.
	?>
<?php do_action( 'rmx_page_wrap_end' ); ?>
<?php
//get_sidebar();
get_footer();