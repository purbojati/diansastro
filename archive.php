<?php get_header(); ?>
<div class="clearfix"></div>
	<?php
	if(get_post_type()=="apps"){
		require get_template_directory() . '/apps/front.php';
	}else if(get_post_type()=="products"){
		require get_template_directory() . '/products/front.php';
	}else if(get_post_type()=="archives"){
		require get_template_directory() . '/archive/front.php';
	}else{
		require get_template_directory() . '/post/front.php';
	}

get_footer(); ?>
