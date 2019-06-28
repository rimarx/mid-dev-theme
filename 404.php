<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rmx
 */

get_header();
?>
<?php do_action( 'rmx_page_wrap_start' ); ?>

	<div class="rmx-content content_404">
		<header class="page-header">
			<div class="title_h1"><?php esc_html_e( 'Такой страницы не найдено.', 'rmx' ); ?></div>
		</header>
		<p><?php esc_html_e( 'Тут ничего нет. Попробуйте другие ссылки.', 'rmx' ); ?></p>
	</div><!-- .rmx-content -->
	
<?php do_action( 'rmx_page_wrap_end' ); ?>
<?php
//get_sidebar();
get_footer();