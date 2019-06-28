<?php
/* ACTIONS */

function rmx_print_page_start_wrap(){
  get_template_part( 'template-parts/page-wrap', 'start' );
}
add_action( 'rmx_page_wrap_start', 'rmx_print_page_start_wrap' );

function rmx_print_page_end_wrap(){
  get_template_part( 'template-parts/page-wrap', 'end' );
}
add_action( 'rmx_page_wrap_end', 'rmx_print_page_end_wrap' );


/* ACTIONS END*/
/* FILTERS */
//Gutenberg version 4.1+, and WordPress 5.0+.
// disable for posts
//add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
//add_filter('use_block_editor_for_post_type', '__return_false', 10);

function rmx_artabr_remove_name_cat( $title ){
  if ( is_category() ) {
    $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
    $title = single_tag_title( '', false );
  }
  return $title;
}
add_filter( 'get_the_archive_title', 'rmx_artabr_remove_name_cat' );

/* FILTERS END*/

/* FUNCTIONS */

function rmx_print_my_menu_item( $menu_location ){
  $locations = get_nav_menu_locations();
  
  if( $menu = wp_get_nav_menu_object( $locations[$menu_location] ) ){
    $menu_items = wp_get_nav_menu_items( $menu );
    $menu_list = '';
    foreach ( (array) $menu_items as $key => $menu_item ){

      /*$icon = get_field('icon', $menu_item);
      $icon = get_field('item_id', $menu_item);
      $icon = get_field('item_class', $menu_item);*/

      $menu_list .= '<li><a href="' . $menu_item->url . '" id="' . get_field('item_id', $menu_item) . '" class="nav-link ' . get_field('item_class', $menu_item) . '">' . '<i class="fa '. get_field('icon', $menu_item) .'"></i>' . $menu_item->title . '</a></li>';
    }
  }else 
  $menu_list = '<li class="nav-item active">Меню "' . $menu_name . '" не определено.</li>';
  return $menu_list;
}

function get_custom_post_arr( $post_type_str, $numberposts = -1 ){
  $args = array(
    'numberposts' => $numberposts,
    'order'       => 'ASC',
    'post_type'   => $post_type_str
  );
  return get_posts( $args );
}

//услуги , портфолио, отзывы. 


function portfolio_block_shortcode_rmx(){

  $custom_post_arr = get_custom_post_arr( 'portfolio' );
  set_query_var( 'custom_post_arr', $custom_post_arr );

  ob_start();
    
    get_template_part( 'template-parts/shortcode-block', 'portfolio' );
    $ob_contents = ob_get_contents();
  ob_end_clean();

  return $ob_contents;
  
}
add_shortcode('portfolio_block', 'portfolio_block_shortcode_rmx');

function reviews_block_shortcode_rmx(){

  $custom_post_arr = get_custom_post_arr( 'reviews' );
  set_query_var( 'custom_post_arr', $custom_post_arr );

  ob_start();
    
    get_template_part( 'template-parts/shortcode-block', 'reviews' );
    $ob_contents = ob_get_contents();
  ob_end_clean();

  return $ob_contents;

}
add_shortcode('reviews_block', 'reviews_block_shortcode_rmx');

function services_block_shortcode_rmx(){

  $custom_post_arr = get_custom_post_arr( 'services' );
  set_query_var( 'custom_post_arr', $custom_post_arr );

  ob_start();
    
    get_template_part( 'template-parts/shortcode-block', 'services' );
    $ob_contents = ob_get_contents();
  ob_end_clean();

  return $ob_contents;

}
add_shortcode('services_block', 'services_block_shortcode_rmx');


/* FUNCTIONS END*/