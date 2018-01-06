<?php
function relatedProduct( $atts ) {
    $attribute = shortcode_atts( array (
		'brand' => $brand,
		'processor' => $processor,
		'vga' => $vga
   		 ), $atts);
	
	$a = array (
		'brand' => $attribute['brand'],
		'processor' => $attribute['processor'],
		'vga' => $attribute['vga']
   		 );
	
    $output = array (
			'post_type' => 'products',
			'post_status' => 'publish',
			'posts_per_page' => 6,
			'order' => 'DESC',
			'orderby' => 'rand',
			'meta_query' => array(
				'relation' => 'AND'
			 )
		 );
	
	foreach($a as $k => $v) {
		if($v != ""){			
			$output['meta_query'][] = array('key' => $k, 'value' => $v);
		}
	}

		 
	$o = '';
	$o .= '<div style="clear:both"></div>';
    $queryReProduct = new WP_Query($output);
		
	if ($queryReProduct->have_posts()) :
		while ( $queryReProduct->have_posts() ) : $queryReProduct->the_post();
			$o .= '<div class="repro">';
		 	$o .= get_the_post_thumbnail(get_the_id(), 'medium', array( 'alt' => get_the_title() ) );
			$o .= '<a href="'.get_the_permalink().'">'.get_the_title().'</a>';
			$o .= '<a>Rp. '.the_field('harga').'</a>';
		  
			$o .= '</div>';
	 
		endwhile;
		$o .= '<div style="clear:both"></div>';

	 endif;
	 wp_reset_postdata();
return $o;
}

add_shortcode('reProduct', 'relatedProduct');
?>