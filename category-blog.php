<?php
/**
 * The template for displaying blog pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rmx
 */
 ?>
<?php get_header(); ?>
<?php //do_action( 'rmx_page_wrap_start' ); ?>

	<div class="rmx-content">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h2 class="text-center">', '</h2>' );
				//the_archive_description( '<div class="description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="archive_item_wrap">
				<div class="col-12">
					<!-- <div class="container"> -->
						<div class="justify-content-center">
							<?php
							$count = 1;
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Archive-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								set_query_var( 'count', $count );
								get_template_part( 'template-parts/content', 'blog-item' );
								$count++; 
							endwhile;
							?>
						</div>
					<!-- </div> -->
				</div>

			</div>
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div><!-- rmx-content -->

<?php //do_action( 'rmx_page_wrap_end' ); ?>
<?php
//get_sidebar();
get_footer();