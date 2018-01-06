<?php
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar',
'before_widget' => '<div class="widget"><div class="inner">', // Removes <li>
'after_widget' => '</div></div>', // Removes </li>
'before_title' => '<h3 class="title"><span>', // Replaces <h2>
'after_title' => '</span></h3>', // Replaces </h2>
));

register_sidebar( array(
        'name'          => __( 'Footer 1', 'diansastro' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'diansastro' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'diansastro' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'diansastro' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 3', 'diansastro' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'diansastro' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 4', 'diansastro' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'diansastro' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
?>
<?php
if( !function_exists('theme_setup') ) {
	function theme_setup() {
        register_nav_menus( array( 'main-menu 1' => __( 'Main Navigation 1' ), 'main-menu 2' => __( 'Main Navigation 2' ) ) );
	}
}
add_action( 'after_setup_theme', 'theme_setup' );
?>
<?php
define( 'BASE_DIR', TEMPLATEPATH . '/' );
include( BASE_DIR . 'inc/tools.php' );
?>
<?php
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	//default thumbnail size
	add_image_size( 'thumb80', 100, 80, true );
	add_image_size( 'thumb585', 585, 320, true );
};
?>
<?php
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}
add_action('wp_print_scripts', 'jquery_script',8);
function jquery_script(){
	if ( function_exists('esc_attr') ) wp_enqueue_script('jquery');
	else {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js', false, '1.3.2');
	}
}

add_action( 'wp_enqueue_scripts', 'post_product_enqueue_scripts' );
function post_product_enqueue_scripts() {
	wp_enqueue_script( 'products', get_template_directory_uri().'/js/post-product.js', array('jquery'), '1.0', true );
	wp_localize_script( 'products', 'post_product', array(
		'ajax_url' => admin_url( 'admin-ajax.php' )
	));
}

add_action( 'wp_ajax_nopriv_post_show_product', 'post_show_product' );
add_action( 'wp_ajax_post_show_product', 'post_show_product' );

function post_show_product() {
	
    require get_template_directory().'/archive/post-product.php';
	
    die();
}


function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

add_action('wp_insert_post', 'set_default_custom_fields');
function set_default_custom_fields($post_id){
if ( $_GET['post_type'] == 'products' ) {
add_post_meta($post_id, 'wpb_post_views_count', '1', true);
}
return true;
}

function paginationArchive($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = ceil($wp_query->found_posts / 8);
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {	
         echo '<div class="pagination" id="product-pagination"><span>Page '.$paged.' of '.$pages.'</span>';
         if($paged > 2) echo "<a data-offset='1'>&laquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<a data-offset='".$i."' class=\"current\">".$i."</a>":"<a data-offset='".$i."'  class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages-1) echo "<a data-offset='".$pages."' >&raquo;</a>";
         echo "</div>\n";
     }
}


function paginationTax($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = ceil($wp_query->found_posts / 8);
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {	
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages-1) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}


function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

function add_post_product_url() {
  add_rewrite_rule('^grab/product/?', 'archive/post-product.php', 'top');
}
add_action('init', 'add_post_product_url');

function minify($file){
    $css = file_get_contents($file);
    $pre = array('/\s+/', '/:\s+/', '/;\s+/', '/{\s+/', '/}\s+/', '/\s+}/');
    $pro = array(' ', ':', ';', '{', '}', '}');
    echo preg_replace($pre, $pro, $css);
  }

function check_device(){
	$result = "false";
	$ua = $_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$ua)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($ua,0,4))){
		$result = "true";
	}
	return $result;
}

function my_scripts_method() {
wp_enqueue_script('myscript2', get_template_directory_uri() . '/js/js-mainmenu.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');
if ( ! class_exists( 'acf' ) && 'plugins.php' !== $GLOBALS['pagenow'] ) { require get_template_directory() . '/inc/acf-plugin.php'; }
require get_template_directory() . '/inc/post-type.php';
require get_template_directory() . '/inc/taxonomy.php';
require get_template_directory() . '/inc/post-type-field.php';
require get_template_directory() . '/inc/related-product.php';
flush_rewrite_rules( false );
?>
