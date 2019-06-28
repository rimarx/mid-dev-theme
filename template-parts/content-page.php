<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rmx
 */

?>
<div class="rmx-content">
<header class="page-header">
	<?php the_title( '<div class="title_h1">', '</div>' ); ?>
</header>
	<?php
	the_content();
	?>
</div><!-- .rmx-content -->