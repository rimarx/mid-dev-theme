<?php

add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
	register_taxonomy('project_category', array('portfolio'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Project Categories',
			'singular_name'     => 'Project Category',
			'search_items'      => 'Search Project Category',
			'all_items'         => 'All Project Categories',
			'view_item '        => 'View Project Category',
			'parent_item'       => 'Parent Project Category',
			'parent_item_colon' => 'Parent Project Category:',
			'edit_item'         => 'Edit Project Category',
			'update_item'       => 'Update Project Category',
			'add_new_item'      => 'Add New Project Category',
			'new_item_name'     => 'New Project Category Name',
			'menu_name'         => 'Project Category',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => false,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}

function register_post_types(){

  register_post_type('portfolio', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Portfolio', 
      'singular_name'      => 'portfolio', 
      'add_new'            => 'Add project', 
      'add_new_item'       => 'Added project', 
      'edit_item'          => 'Edit project', 
      'new_item'           => 'New project', 
      'view_item'          => 'View project', 
      'search_items'       => 'Search project', 
      'not_found'          => 'Not found', 
      'not_found_in_trash' => 'Not found in the cart', 
      'parent_item_colon'  => '', 
      'menu_name'          => 'Portfolio', 
    ),
    'description'         => '',
    'public'              => true,
    'show_ui'             => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'show_in_menu'        => true, 
    'menu_position'       => 26,
    'menu_icon'           => 'dashicons-format-gallery', 
    'hierarchical'        => false,
    'supports'            => array('title'),
    'taxonomies'          => array('project_category'),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );


  register_post_type('reviews', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Reviews', 
      'singular_name'      => 'review', 
      'add_new'            => 'Add review', 
      'add_new_item'       => 'Added review', 
      'edit_item'          => 'Edit review', 
      'new_item'           => 'New review', 
      'view_item'          => 'View review', 
      'search_items'       => 'Search review', 
      'not_found'          => 'Not found', 
      'not_found_in_trash' => 'Not found in the cart', 
      'parent_item_colon'  => '', 
      'menu_name'          => 'Reviews', 
    ),
    'description'         => '',
    'public'              => true,
    'show_ui'             => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'show_in_menu'        => true, 
    'menu_position'       => 27,
    'menu_icon'           => 'dashicons-star-half', 
    'hierarchical'        => false,
    'supports'            => array('title'),
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );


  register_post_type('services', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Services', 
      'singular_name'      => 'services', 
      'add_new'            => 'Add service', 
      'add_new_item'       => 'Added service', 
      'edit_item'          => 'Edit service', 
      'new_item'           => 'New service', 
      'view_item'          => 'View service', 
      'search_items'       => 'Search services', 
      'not_found'          => 'Not found', 
      'not_found_in_trash' => 'Not found in the cart', 
      'parent_item_colon'  => '', 
      'menu_name'          => 'Services', 
    ),
    'description'         => '',
    'public'              => true,
    'show_ui'             => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'show_in_menu'        => true, 
    'menu_position'       => 28,
    'menu_icon'           => 'dashicons-screenoptions', 
    'hierarchical'        => false,
    'supports'            => array('title'),
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );



}

add_action('init', 'register_post_types');