<?php
add_action( 'init', 'arena_post_type_apps' );
function arena_post_type_apps() {
  register_post_type( 'apps', array(
    'labels' => array(
		'name'                => __( 'Software dan Aplikasi', 'arena' ),
		'singular_name'       => __( 'Apps', 'arena' ),
		'menu_name'           => __( 'Apps', 'arena' ),
		'name_admin_bar'      => __( 'Apps', 'arena' ),
		'parent_item_colon'   => __( 'Parent Item:', 'arena' ),
		'all_items'           => __( 'All Apps', 'arena' ),
		'add_new_item'        => __( 'Add New Apps', 'arena' ),
		'add_new'             => __( 'Add New', 'arena' ),
		'new_item'            => __( 'New Apps', 'arena' ),
		'edit_item'           => __( 'Edit Apps', 'arena' ),
		'update_item'         => __( 'Update Apps', 'arena' ),
		'view_item'           => __( 'View Apps', 'arena' ),
		'search_items'        => __( 'Search Apps', 'arena' ),
		'not_found'           => __( 'Not found', 'arena' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'arena' ),
   ),
      'public'              => true,
      'has_archive'         => true,
      'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', ),
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'menu_position'       => 6,
      'taxonomies'          => array( 'appx' ),
      'rewrite'             => array('slug' => 'apps'),
    )
  );
}

/**
 * Function Loop Custom Post Type
*/
add_action( 'pre_get_posts', 'arena_post_types_query' );

function arena_post_types_query( $query ) {
  if ( is_category() || is_tag() || is_search() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'apps','nav_menu_item') );
  return $query;
}

add_action( 'init', 'arena_post_type_products' );
function arena_post_type_products() {
  register_post_type( 'products', array(
    'labels' => array(
		'name'                => __( 'Harga', 'arena' ),
		'singular_name'       => __( 'Products', 'arena' ),
		'menu_name'           => __( 'Products', 'arena' ),
		'name_admin_bar'      => __( 'Products', 'arena' ),
		'parent_item_colon'   => __( 'Parent Item:', 'arena' ),
		'all_items'           => __( 'All products', 'arena' ),
		'add_new_item'        => __( 'Add New products', 'arena' ),
		'add_new'             => __( 'Add New', 'arena' ),
		'new_item'            => __( 'New products', 'arena' ),
		'edit_item'           => __( 'Edit products', 'arena' ),
		'update_item'         => __( 'Update products', 'arena' ),
		'view_item'           => __( 'View products', 'arena' ),
		'search_items'        => __( 'Search products', 'arena' ),
		'not_found'           => __( 'Not found', 'arena' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'arena' ),
   ),
      'public'              => true,
      'has_archive'         => true,
      'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', ),
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'menu_position'       => 4,
      'taxonomies'          => array( 'productx' ),
      'rewrite'             => array('slug' => 'harga'),
    )
  );
}

/**
 * Function Loop Custom Post Type
*/
add_action( 'pre_get_posts', 'arena_post_types_query2' );

function arena_post_types_query2( $query ) {
  if ( is_category() || is_tag() || is_search() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'products','nav_menu_item') );
  return $query;
}

add_action( 'init', 'arena_post_type_archives' );
function arena_post_type_archives() {
  register_post_type( 'archives', array(
    'labels' => array(
		'name'                => __( 'List', 'arena' ),
		'singular_name'       => __( 'Archives', 'arena' ),
		'menu_name'           => __( 'Archives', 'arena' ),
		'name_admin_bar'      => __( 'Archives', 'arena' ),
		'parent_item_colon'   => __( 'Parent Item:', 'arena' ),
		'all_items'           => __( 'All archives', 'arena' ),
		'add_new_item'        => __( 'Add New archives', 'arena' ),
		'add_new'             => __( 'Add New', 'arena' ),
		'new_item'            => __( 'New archives', 'arena' ),
		'edit_item'           => __( 'Edit archives', 'arena' ),
		'update_item'         => __( 'Update archives', 'arena' ),
		'view_item'           => __( 'View archives', 'arena' ),
		'search_items'        => __( 'Search archives', 'arena' ),
		'not_found'           => __( 'Not found', 'arena' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'arena' ),
   ),
      'public'              => true,
      'has_archive'         => true,
      'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', ),
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'menu_position'       => 4,
      'taxonomies'          => array( 'archivex' ),
      'rewrite'             => array('slug' => 'list'),
    )
  );
}

/**
 * Function Loop Custom Post Type
*/
add_action( 'pre_get_posts', 'arena_post_types_query3' );

function arena_post_types_query3( $query ) {
  if ( is_category() || is_tag() || is_search() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'archives','nav_menu_item') );
  return $query;
}
