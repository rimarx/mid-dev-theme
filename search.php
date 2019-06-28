<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package rmx
 */

get_header();
?>
<?php do_action( 'rmx_page_wrap_start' ); ?>

	<div class="rmx-content">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="title_h3">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Результаты поиска для: %s', 'rmx' ), '<span>' . get_search_query() . '</span>' );
					?>
				</div>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search-item' );

			endwhile;

			the_posts_navigation( array(
				'prev_text'          => 'Следующие записи',
				'next_text'          => 'Предыдущие записи',
				'screen_reader_text' => 'Навигация',
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
	
<?php do_action( 'rmx_page_wrap_end' ); ?>
<?php
//get_sidebar();
get_footer();