<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rmx
 */

?>

<div style="clear:both;"></div>

<div class="container">
	<div class="row justify-content-center sidebars_wrap">
		<?php 
		switch ( get_theme_mod('footer_layout') ) {
			case 'item_2':
				get_sidebar( '2-col' );
			    break;
			case 'item_3':
				get_sidebar( '3-col' );
			    break;
			case 'item_4':
				get_sidebar( '4-col' );
			    break;
		}
		?>
	</div>
</div>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?= rmx_print_my_menu_item( 'footer-menu' ); ?>
    </ul>
  </div>
</nav>
<div class="bg-dark" style="color: #fff;">
	<?php echo get_theme_mod( 'copyright_textbox', '' ); ?>
	<div><?= date('Y'); ?></div>
</div>
<?php wp_footer(); ?>
</body>
</html>
