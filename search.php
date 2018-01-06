<?php get_header(); ?>
<div class="clearfix"></div>
<div id="main">
	<div id="content">
	<h1 class="breadcrumbs"><?php echo $wp_query->found_posts; ?><?php _e( ' hasil ditemukan untuk', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>
	<?php $postcounter = 1; if (have_posts()) : ?>
	<?php while (have_posts()) : $postcounter = $postcounter + 1; the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); ?>
	<div class="post post-<?php echo $postcounter ;?>">
	<?php the_post_thumbnail('thumb80', array('class' => 'thumb')); ?>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<p><?php echo excerpt(15); ?></p>
	</div>
	<div class='clearfix'></div>
	<?php endwhile; ?>
	<div class="navigation">
			<div class="pageleft"><?php next_posts_link(); ?></div>
			<div class="pageright"><?php previous_posts_link(); ?></div>
	</div>
	<?php else : ?>
		<h2>Tidak ditemukan</h2>
		<div class="entry">Maaf, sepertinya yang Anda cari tidak ada disini.</div>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<div class='clearfix'></div>
</div>
<?php get_footer(); ?>
