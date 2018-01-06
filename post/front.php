<?php get_header(); ?>
<?php if (function_exists ('adinserter')) echo adinserter (8); ?>
<div class="clearfix"></div>
<div id="main">
	<div id="content">
		<div class="entry">
			<h1 class="breadcrumbs"><p>Kategori: <?php single_cat_title(); ?></p></h1>
			<?php $postcounter = 1; if (have_posts()) : ?>
			<?php while (have_posts()) : $postcounter = $postcounter + 1; the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); ?>
			<div class="post post-<?php echo $postcounter ;?>">

			<?php the_post_thumbnail('thumb80', array('class' => 'thumb')); ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</div>
			<div class='clearfix'></div>
			<?php endwhile; ?>
			<div class="navigation">
					<div class="pageleft"><?php next_posts_link(); ?></div>
					<div class="pageright"><?php previous_posts_link(); ?></div>
					<div class='clearfix'></div>
			</div>
		</div>
	</div>
	<?php else : ?>
		<h2>Not Found</h2>
		<div class="entry">Maaf, link yang Anda cari tidak ditemukan.</div>
	<?php endif; ?>
	<?php get_sidebar(); ?>
<div class='clearfix'></div>
	</div>
<?php get_footer(); ?>