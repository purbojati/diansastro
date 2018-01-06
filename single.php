<?php get_header(); ?>
<div class="clearfix"></div>
	<?php
	if(get_post_type()=="apps"){
		require get_template_directory() . '/apps/post.php';
	}else if(get_post_type()=="products"){
		require get_template_directory() . '/products/post.php';
	}else if(get_post_type()=="archives"){
		require get_template_directory() . '/archive/post.php';
	}else{
		require get_template_directory() . '/post/post.php';
	}
get_footer(); ?>
