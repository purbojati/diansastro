<style>
#main{
	margin-top: 0px;
}
.homewrapper a img{
	width: calc(100% + 32px);
	margin: 0px -16px;
	margin-top: -16px;
}

.brandwrapper{
	background: #fff;
}

.brandwrapper{
	border-bottom: thin solid #ddd;
	margin: 5px 0px;
}

.brandwrapper h3, .wrappa h3{
	padding-bottom: 8px;
	color: #aaa;
	text-transform: capitalize;
	text-align: center;
	font-weight: 600;
	margin-top:5px;
}

.brandwrapper a{
	width: calc(100% / 3);
	float: left;
	text-align: center;
	height: 68px;
	border-right: thin solid #ddd;
	border-top:  thin solid #ddd;
	padding:24px 0px;
	box-sizing: border-box;
}

.brand a:nth-child(3), .brand a:nth-child(6), .brand a:nth-child(8), .brand a:nth-child(11),.brand a:nth-child(13){
	border-right: none;
}

.brand a:nth-child(2), .brand a:nth-child(3), .brand a:nth-child(7), .brand a:nth-child(8), .brand a:nth-child(12), .brand a:nth-child(13){
		width: calc(100% / 2);
}

.brandwrapper img{
	max-width: 168px;
	height: -20px;
}

.brandwrapper a:nth-child(5) img, .brandwrapper a:nth-child(6) img, .brandwrapper a:nth-child(9) img, .brandwrapper a:nth-child(10) img, .brandwrapper a:nth-child(11) img{
	margin-top: -12px;
}

.brandwrapper a:nth-child(2) img{
	margin-top: -8px;
}

.brandwrapper a:nth-child(7) img{
	margin-top: -14px;
}

.split, .wrappa{
	width: 100%;
	float:left;
	box-sizing: border-box;
}

.katbox{
	width: 100%;
	border-top: thin solid #ddd;
	box-sizing: border-box;
}

.split .katbox{
	padding: 16px 0px;
	text-align: center;
}

.split a{
	width: auto;
	padding: 8px 16px;
	height: auto;
	color: #2A9AE0;
	border: thin solid #2A9AE0;
	margin-right: 5px;
    margin-top: 5px;
}

.split a:hover{
	color:#fff;
	background:#57DDE6;
	border: thin solid #57DDE6;
	-webkit-transition: all 0.25s ease 0s;
	transition: all 0.25s ease 0s;
}

.wrappa{
margin-bottom: 10px;
position: relative;
}

.wrappa .post{
box-sizing:broder-box;
float:left;
width: 100%;
background:#fff;
border: none;
border-top:thin solid #ddd;
}

.wrappa .post:first-child{
border-top: none;
}

.post img.medium{
width:112px;
height:63px;
object-fit: cover;
}
.post a{
display:block;
font-size:14px;
line-height: 30px;
color:#444;
font-weight: normal;
padding-right:10px;
text-transform: capitalize;
}

.wrappa h3.biru {
    color: #3BA1E1;
    margin-top: 10px;
}

.wrappa h3.merah{
	color: #D01759;
}

.dh4.pro{
	width: calc(100% / 3);
	border: none;
	margin: 0px;
	border-top: thin solid #ddd;
	border-bottom: thin solid #ddd;
	padding-right: 0px;
	padding-left: 4px;
    padding-top: 8px;
    padding-bottom: 10px;
}


.dh4.pro{
	border-right: thin solid #ddd;
	padding-right: 4px;
}


.dh4.pro:nth-child(3n+4){
	border-right: none;
}

.dh4.pro:nth-child(-n+4){border-bottom:none}

.pro img{height:50px;object-fit:contain}

.pro a:last-child{
	font-size: 13px;
    color: #444;
	padding:0px;
    font-weight: normal;
    text-transform: capitalize;
	background:none;
	min-height:40px;
	margin:0px
}
.breadcrumbs{
border-bottom:none;
text-align:center;
}
</style>
<div id="main">
	<div class="homewrapper">
		<a href="<?php echo of_get_option('link1'); ?>"><img src="<?php echo of_get_option('img1'); ?>"></a>
	</div>
	<div id="content">
	<div class="clearfix"></div>
	<div class="brandwrapper brand">
		<h3>Berdasarkan Brand</h3>
		<a href="https://www.arenalaptop.com/category/msi/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-msi.png"></a>
		<a href="https://www.arenalaptop.com/list/harga-laptop-asus/"><img src="<?php echo get_template_directory_uri() ?>/img/ico/brand-asus.png"></a>
		<a href="https://www.arenalaptop.com/list/laptop-acer/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-acer.png"></a>
		<a href="https://www.arenalaptop.com/category/apple/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-apple.png"></a>
		<a href="https://www.arenalaptop.com/category/dell/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-dell.png"></a>
		<a href="https://www.arenalaptop.com/454/harga-laptop-asus-rog-gaming/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/10/rog-logo.png"></a>
		<a href="https://www.arenalaptop.com/list/harga-laptop-lenovo-3/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-lenovo.png"></a>
		<a href="https://www.arenalaptop.com/category/hp/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-hp.png"></a>
		<a href="https://www.arenalaptop.com/category/xenom/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-xenom.png"></a>
		<a href="https://www.arenalaptop.com/category/xiaomi/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-xiaomi.png"></a>
		<a href="https://www.arenalaptop.com/#"><img src="<?php echo get_template_directory_uri() ?>/img/ico/brand-samsung.png"></a>
		<a href="https://www.arenalaptop.com/#"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-toshiba.png"></a>
		<div class="clearfix"></div>
	</div>
	<div>
		<div class="brandwrapper split">
			<h3>Kategori</h3>
			<div class="katbox">
				<a href="https://www.arenalaptop.com/sort/intel-celeron/">Celeron</a>
				<a href="https://www.arenalaptop.com/sort/intel-core-i3/">Core i3</a>
				<a href="https://www.arenalaptop.com/sort/intel-core-i5/">Core i5</a>
				<a href="https://www.arenalaptop.com/sort/intel-core-i7/">Core i7</a>
				<a href="https://www.arenalaptop.com/sort/vga-intel-hd/">VGA Intel HD</a>
				<a href="https://www.arenalaptop.com/sort/vga-nvidia/">VGA Nvidia</a>
				<a href="https://www.arenalaptop.com/list/harga-laptop-13-inch/">Layar 13"</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

	<div>
		<div class="wrappa">
			<h3 class="biru">tips dan trik</h3>
			<div class="katbox">
				<?php

				global $post;
				$args = array( 'posts_per_page' => 5, 'category' => 360 );

				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="post post-<?php echo $postcounter ;?>">
					<?php the_post_thumbnail('medium', array('class' => 'medium')); ?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				<?php endforeach;
				wp_reset_postdata();?>

				<div class="clearfix"></div>
			</div>
		</div>

		<div class="wrappa">
			<h3 class="merah">untuk gamers</h3>
			<div class="katbox">
				<?php

				global $post;
				$args = array( 'posts_per_page' => 5, 'category' => 12 );

				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="post post-<?php echo $postcounter ;?>">
					<?php the_post_thumbnail('medium', array('class' => 'medium')); ?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				<?php endforeach;
				wp_reset_postdata();?>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>

<div>
		<?php
		$custom_taxterms = wp_get_object_terms( $post->ID, 'productx', array('fields' => 'ids') );
		$related_content = array(
		'post_type' => 'products',
		'post_status' => 'publish',
		'posts_per_page' => 6
		);
		$related_items = new WP_Query( $related_content );
		if ($related_items->have_posts()) :
		echo "<div class=wrappa>";
		echo "<h3>Spesifikasi Laptop</h3>";
		while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
		<div id="post-<?php the_ID(); ?>"  class="dh4 pro">
		   <a href="<?php the_permalink(); ?>">
		<?php if(has_post_thumbnail()):?>
		<?php the_post_thumbnail( 'related-thumb', array( 'alt' => get_the_title() ) ); ?><?php else:?>
		<img src="<?php echo get_template_directory_uri() ?>/img/default/180x79.png" alt="<?php the_title(); ?>">
		<?php endif;?>
		   </a>
		   <?php the_title( sprintf( '<a href="%s" rel="bookmark" title="%s">', esc_url( get_permalink() ), get_the_title() ), '</a>' );?>
		</div>

		<?php endwhile;
		echo '</div>';
		endif; wp_reset_postdata();

		$custom_taxterms = wp_get_object_terms( $post->ID, 'appx', array('fields' => 'ids') );
		$related_content = array(
		'post_type' => 'apps',
		'post_status' => 'publish',
		'posts_per_page' => 6
		);
		$related_items = new WP_Query( $related_content );
		if ($related_items->have_posts()) :
		echo "<div class=wrappa>";
		echo "<h3>Download Software</h3>";
		while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
		<div id="post-<?php the_ID(); ?>"  class="dh4 pro">
		   <a href="<?php the_permalink(); ?>">
		<?php if(has_post_thumbnail()):?>
		<?php the_post_thumbnail( 'related-thumb', array( 'alt' => get_the_title() ) ); ?><?php else:?>
		<img src="<?php echo get_template_directory_uri() ?>/img/default/180x79.png" alt="<?php the_title(); ?>">
		<?php endif;?>
		   </a>
		   <?php the_title( sprintf( '<a href="%s" rel="bookmark" title="%s">', esc_url( get_permalink() ), get_the_title() ), '</a>' );?>
		</div>

		<?php endwhile;
		echo '</div>';
		endif; wp_reset_postdata();?>

	</div>
	<div class="clearfix"></div>

	</div>
	<div class="clearfix"></div>
</div>