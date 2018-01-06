<?php get_header(); ?>
<div class="clearfix"></div>
<div id="main">
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="entry">
		<?php echo dimox_breadcrumbs(); ?>
	<h1 class="stitle"><?php the_title(); ?></h1>
	<?php the_content(); ?>
	</div>
	<div class='clearfix'></div>
	<?php endwhile; ?>
	<div class='clearfix'></div>
<?php comments_template(); ?>
	</div>
	<?php else : ?>
		<h2>Not Found</h2>
		<div class="entry">Sorry, but you are looking for something that isn't here.</div>
	<?php endif; ?>
<?php get_sidebar(); ?>
<div class='clearfix'></div>
</div>
<?php get_footer(); ?>