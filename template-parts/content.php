<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rmx
 */

?>
<div class="rmx-content single-content">
		<header class="page-header">
			<?php the_title( '<div class="title_h1">', '</div>' ); ?>
		</header>
		<?php
		the_content();
		?>
</div><!-- single-content -->