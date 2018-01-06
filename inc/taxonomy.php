<?php
function apps_taxonomy() {
  $labels = array(
    'name'                       => __( 'Category Apps', 'arena' ),
    'singular_name'              => __( 'Category Apps', 'arena' ),
    'menu_name'                  => __( 'Category Apps', 'arena' ),
    'all_items'                  => __( 'All Items', 'arena' ),
    'parent_item'                => __( 'Parent Item', 'arena' ),
    'parent_item_colon'          => __( 'Parent Item:', 'arena' ),
    'new_item_name'              => __( 'New Item Name', 'arena' ),
    'add_new_item'               => __( 'Add New Item', 'arena' ),
    'edit_item'                  => __( 'Edit Item', 'arena' ),
    'update_item'                => __( 'Update Item', 'arena' ),
    'view_item'                  => __( 'View Item', 'arena' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'arena' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'arena' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'arena' ),
    'popular_items'              => __( 'Popular Items', 'arena' ),
    'search_items'               => __( 'Search Items', 'arena' ),
    'not_found'                  => __( 'Not Found', 'arena' ),
  );
  $rewrite = array(
    'slug'                       => 'apps-category',
    'with_front'                 => true,
    'hierarchical'               => false,
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_in_rest'               => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'rewrite'                    => $rewrite,
  );
  register_taxonomy( 'appx', array( 'apps' ), $args );
}
add_action( 'init', 'apps_taxonomy', 0 );

function products_taxonomy() {
  $labels = array(
    'name'                       => __( 'Category Products', 'arena' ),
    'singular_name'              => __( 'Category Products', 'arena' ),
    'menu_name'                  => __( 'Category Products', 'arena' ),
    'all_items'                  => __( 'All Items', 'arena' ),
    'parent_item'                => __( 'Parent Item', 'arena' ),
    'parent_item_colon'          => __( 'Parent Item:', 'arena' ),
    'new_item_name'              => __( 'New Item Name', 'arena' ),
    'add_new_item'               => __( 'Add New Item', 'arena' ),
    'edit_item'                  => __( 'Edit Item', 'arena' ),
    'update_item'                => __( 'Update Item', 'arena' ),
    'view_item'                  => __( 'View Item', 'arena' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'arena' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'arena' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'arena' ),
    'popular_items'              => __( 'Popular Items', 'arena' ),
    'search_items'               => __( 'Search Items', 'arena' ),
    'not_found'                  => __( 'Not Found', 'arena' ),
  );
  $rewrite = array(
    'slug'                       => 'sort',
    'with_front'                 => true,
    'hierarchical'               => false,
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_in_rest'               => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'rewrite'                    => $rewrite,
  );
  register_taxonomy( 'productx', array( 'products' ), $args );
}
add_action( 'init', 'products_taxonomy', 0 );

function wpsd_add_products_args() {
    global $wp_post_types;

    $wp_post_types['products']->show_in_rest = true;
    $wp_post_types['products']->rest_base = 'products';
    $wp_post_types['products']->rest_controller_class = 'WP_REST_Posts_Controller';
}
add_action( 'init', 'wpsd_add_products_args', 30 );

function sb_add_cpts_to_api( $args, $post_type ) {
    if ( 'products' === $post_type ) {
        $args['show_in_rest'] = true;
        $args['rest_base'] = 'products';
        // $args['rest_controller_class'] = 'WP_REST_Posts_Controller';
    }
    return $args;
}
add_filter( 'register_post_type_args', 'sb_add_cpts_to_api', 10, 2 );

add_action( 'rest_api_init', 'slug_register_meta_product' );
function slug_register_meta_product() {
  for($c=0; $c<3; $c++){
    if($c == 0){
      $f = 'brand';
    }else if($c == 1){
      $f = 'rating';
    }else if($c == 2){
      $f = 'harga';
    }
    register_rest_field(
      'products',
      $f,
      array(
        'get_callback' => 'slug_get_meta_product',
        'update_callback' => null,
        'schema' => null,
      )
    );
  }
}

function slug_get_meta_product($post, $field_name, $request){
    return get_post_meta($post['id'], $field_name, true);
}

function archives_taxonomy() {
  $labels = array(
    'name'                       => __( 'Category Archives', 'arena' ),
    'singular_name'              => __( 'Category Archives', 'arena' ),
    'menu_name'                  => __( 'Category Archives', 'arena' ),
    'all_items'                  => __( 'All Items', 'arena' ),
    'parent_item'                => __( 'Parent Item', 'arena' ),
    'parent_item_colon'          => __( 'Parent Item:', 'arena' ),
    'new_item_name'              => __( 'New Item Name', 'arena' ),
    'add_new_item'               => __( 'Add New Item', 'arena' ),
    'edit_item'                  => __( 'Edit Item', 'arena' ),
    'update_item'                => __( 'Update Item', 'arena' ),
    'view_item'                  => __( 'View Item', 'arena' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'arena' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'arena' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'arena' ),
    'popular_items'              => __( 'Popular Items', 'arena' ),
    'search_items'               => __( 'Search Items', 'arena' ),
    'not_found'                  => __( 'Not Found', 'arena' ),
  );
  $rewrite = array(
    'slug'                       => 'archives-category',
    'with_front'                 => true,
    'hierarchical'               => false,
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_in_rest'               => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'rewrite'                    => $rewrite,
  );
  register_taxonomy( 'archivex', array( 'archives' ), $args );
}
add_action( 'init', 'archives_taxonomy', 0 );
