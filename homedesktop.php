<style>
body{
background:#eee;
}
#wrap{
width:900px;
margin:0 auto;
box-sizing:border-box;
background:none;
}
#main, .wrappa, .heading, .breadcrumbs, #footerbar{
width:100%;
box-sizing:border-box;
padding:0px;
margin:0px;
}

.homewrapper a img{
	width: 295px;
	height:166.5px;
	float: left;
	margin-left: 5px;
	margin-bottom: 5px;
}

.homewrapper a:first-child img{
	margin-left: 0px;
	height:338px;
	width: 600px;
}

.homewrapper a:hover img{
	opacity: 0.7;
}

.brandwrapper{
	background: #fff;
	margin-top: 8px;
}

.brandwrapper{
	border: thin solid #ddd;
}

.brandwrapper h3, .wrappa h3{
	padding: 16px;
	color: #777;
	font-weight: normal;
	text-transform: capitalize;
}

.brandwrapper a{
	width: calc(100% / 4);
	float: left;
	text-align: center;
	height: 68px;
	border-right: thin solid #ddd;
	border-top:  thin solid #ddd;
	padding:24px 0px;
	box-sizing: border-box;
}

.brandwrapper a:nth-child(4n+5){
	border-right: none;
}

.brandwrapper img{
	max-width: 168px;
	filter: grayscale(100%);
	opacity: .6;
	-webkit-filter: grayscale(100%);  /* For Webkit browsers */
 	filter: gray;  /* For IE 6 - 9 */
  	-webkit-transition: all .5s ease;  /* Transition for Webkit browsers */
}

.brandwrapper a:hover img{
	filter: grayscale(0%);
	opacity: .9;
    -webkit-filter: grayscale(0%);
    filter: none;
}

.brandwrapper a:nth-child(4) img, .brandwrapper a:nth-child(6) img, .brandwrapper a:nth-child(7) img, .brandwrapper a:nth-child(12) img, .brandwrapper a:nth-child(13) img{
	margin-top: -12px;
}

.brandwrapper a:nth-child(9) img{
	margin-top: -8px;
}

.brandwrapper a:nth-child(5) img{
	margin-top: -14px;
}

.split, .wrappa{
	width: calc(50% - 4px);
	float:left;
	box-sizing: border-box;
}

.split:first-child, .wrappa:nth-child(odd){
	margin-right: 8px;
}


.katbox{
	width: 100%;
	border-top: thin solid #ddd;
	padding: 16px;
	box-sizing: border-box;
}

.split a{
    width: auto;
    padding: 8px 15px;
    height: auto;
    color: #2A9AE0;
    border: thin solid #2A9AE0;
    margin-right: 2%;
    margin-bottom: 2%;
}

.split a:hover{
	color:#fff;
	background:#57DDE6;
	border: thin solid #57DDE6;
	-webkit-transition: all 0.25s ease 0s;
	transition: all 0.25s ease 0s;
}

	.breadcrumbs{
	padding-top:5px;
	text-align:center;
	border-bottom:none;
	font-size:15px;
}

.lsm {
    position: absolute;
    right: 16px;
    top: 14px;
    border: 1px solid #ccc5c5;
    padding: 3px;
    border-radius: 5px;
    color: #ccc5c5 !important;
}

.wrappa{
background: #fff;
margin-top: 8px;
border: thin solid #ddd;
position: relative;
}

.wrappa .post{
box-sizing:border-box;
float:left;
width: 100%;
margin-top: 16px;
background:#fff;
padding:0px;
border: none;
}

.wrappa .post:first-child{
margin-top:0px;
}

.post img.medium{
width:124px;
height:69.75px;
object-fit: cover;
margin-right:8px;
}
.post a{
display:block;
font-size:16px;
color:#61676C;
font-weight: normal;
padding:0px 10px;
text-transform: capitalize;
line-height:30px;
}

.dh4.pro{
	width: calc(100% / 3);
	border: none;
	margin: 0px;
	border-top: thin solid #ddd;
	border-right: thin solid #ddd;
	padding: 16px;
}


.dh4.pro:nth-child(5){
	border-right: none;
}

.pro img{height:110px;}

.pro a:last-child{
	font-size: 14px;
    color: #61676C;
	padding:0px;
    font-weight: normal;
    text-transform: capitalize;
	background:none;
	min-height:40px;
	margin:0px;
	text-align: center;
}
#footerbar{
margin-top:50px;
}
</style>
<div id="main">
	<div class="homewrapper">
		<a href="<?php echo of_get_option('link1'); ?>"><img src="<?php echo of_get_option('img1'); ?>"></a>
		<a href="<?php echo of_get_option('link2'); ?>"><img src="<?php echo of_get_option('img2'); ?>"></a>
		<a href="<?php echo of_get_option('link3'); ?>"><img src="<?php echo of_get_option('img3'); ?>"></a>
	</div>
	<div class="clearfix"></div>
	<div class="brandwrapper">
		<h3>Produk Berdasarkan Brand</h3>
		<a href="https://www.arenalaptop.com/list/laptop-acer/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-acer.png"></a>
		<a href="https://www.arenalaptop.com/list/harga-laptop-asus/"><img src="<?php echo get_template_directory_uri() ?>/img/ico/brand-asus.png"></a>
		<a href="https://www.arenalaptop.com/1139/harga-laptop-apple/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-apple.png"></a>
		<a href="https://www.arenalaptop.com/454/harga-laptop-asus-rog-gaming/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/10/rog-logo.png"></a>
		<a href="https://www.arenalaptop.com/379/harga-laptop-dell/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-dell.png"></a>
		<a href="https://www.arenalaptop.com/524/harga-laptop-hp/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-hp.png"></a>
		<a href="https://www.arenalaptop.com/list/harga-laptop-lenovo-3/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-lenovo.png"></a>
		<a href="https://www.arenalaptop.com/469/harga-laptop-msi-gaming/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-msi.png"></a>
		<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/ico/brand-samsung.png"></a>
		<a href="#"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-toshiba.png"></a>
		<a href="https://www.arenalaptop.com/507/harga-laptop-xenom-gaming/"><img src="https://www.arenalaptop.com/wp-content/uploads/2017/07/brand-xenom.png"></a>
		<a href="https://www.arenalaptop.com/category/xiaomi/"><img src="<?php echo get_template_directory_uri() ?>/img/ico/brand-xiaomi.png"></a>
		<div class="clearfix"></div>
	</div>
	<div>
		<div class="brandwrapper split">
			<h3>Berdasarkan Processor</h3>
			<div class="katbox">
<a href="https://www.arenalaptop.com/sort/intel-celeron/">Celeron</a>
<a href="https://www.arenalaptop.com/sort/intel-core-i3/">Core i3</a>
<a href="https://www.arenalaptop.com/sort/intel-core-i5/">Core i5</a>
<a href="https://www.arenalaptop.com/sort/intel-core-i7/">Core i7</a>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="brandwrapper split">
			<h3>Berdasarkan Grafis</h3>
			<div class="katbox">
				<a href="https://www.arenalaptop.com/sort/vga-intel-hd/">VGA Intel HD</a>
				<a href="https://www.arenalaptop.com/sort/vga-nvidia/">VGA Nvidia</a>
				<a href="https://www.arenalaptop.com/sort/vga-amd/">VGA AMD</a>
				<a href="https://www.arenalaptop.com/list/harga-laptop-13-inch/">Layar 13"</a>
				<a href="https://www.arenalaptop.com/sort/layar-14/">Layar 14"</a>
				<a href="https://www.arenalaptop.com/sort/layar-15/">Layar 15"</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>

	<div>
		<?php
		$custom_taxterms = wp_get_object_terms( $post->ID, 'productx', array('fields' => 'ids') );
		$related_content = array(
		'post_type' => 'products',
		'post_status' => 'publish',
		'posts_per_page' => 3
		);
		$related_items = new WP_Query( $related_content );
		if ($related_items->have_posts()) :
		echo "<div class=wrappa>";
		echo "<h3>Spesifikasi Laptop</h3>
		<a href=https://www.arenalaptop.com/harga/ class=lsm>lihat semua</a>";
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
		'posts_per_page' => 3
		);
		$related_items = new WP_Query( $related_content );
		if ($related_items->have_posts()) :
		echo "<div class=wrappa>";
		echo "<h3>Download Software</h3>
		<a href=https://www.arenalaptop.com/apps/ class=lsm>lihat semua</a>";
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
	<div>
		<div class="wrappa">
			<h3>Artikel Terbaru</h3>
			<div class="katbox">
				<?php $postcounter = 1; if (have_posts()) : ?>
				<?php while (have_posts()) : $postcounter = $postcounter + 1; the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); ?>
				<div class="post post-<?php echo $postcounter ;?>">
				<?php the_post_thumbnail('medium', array('class' => 'medium')); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
				</div>
				<?php endwhile; ?>
				<div class="clearfix"></div>
				<?php else : ?>
					<h3>Tidak ditemukan</h3>
					<div class="entry">Maaf, apa yang Anda cari tidak ada disini.</div>
				<?php endif; ?>
			</div>
		</div>

<div class="wrappa">
			<h3>Tips dan Trik</h3>
			<a href="https://www.arenalaptop.com/category/tips/" class="lsm">lihat semua</a>
			<div class="katbox">
				<?php

				global $post;
				$args = array( 'posts_per_page' => 7, 'category' => 360 );

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

	<div class="wrappa">
			<h3>Untuk Gamers</h3>
			<a href="https://www.arenalaptop.com/category/gamers/" class="lsm">lihat semua</a>
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

	<div class="wrappa">
			<h3>Untuk Mahasiswa</h3>
			<a href="https://www.arenalaptop.com/category/mahasiswa/" class="lsm">lihat semua</a>
			<div class="katbox">
				<?php

				global $post;
				$args = array( 'posts_per_page' => 5, 'category' => 969 );

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

	<div class="clearfix"></div>
</div>
</div>
<h1 class="breadcrumbs"><?php bloginfo('name'); ?></h1> <h2 class="breadcrumbs"><?php bloginfo('description'); ?></h2>