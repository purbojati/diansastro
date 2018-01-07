<div id="main">
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="entry">
      <h1 class="stitle"><?php the_title(); ?></h1>

 					<?php if (function_exists ('adinserter')) echo adinserter (5); ?>
 					<?php the_content(); ?>
 					<?php if( function_exists( 'wptopc' ) ){ wptopc("","<table><tr><th>DAFTAR ISI :</table></tr></th>"); } ?>
<div><?php if (function_exists ('adinserter')) echo adinserter (4); ?>
<?php if (function_exists ('adinserter')) echo adinserter (10); ?></div>
 				</div>

		<?php if (function_exists ('adinserter')) echo adinserter (6); ?>
		<?php if (function_exists ('adinserter')) echo adinserter (9); ?>
		<div id="author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?></div>
			<div id="author-description">
				<h3><?php the_author_link(); ?></h3>
				<?php the_author_meta('description'); ?>
			</div>
		</div>
		<div class='clearfix'></div>
	<?php endwhile; ?>
	<div class="kit">
		<h3 class="htiga">Kamu pasti juga suka..</h3>
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-format="autorelaxed"
		     data-ad-client="ca-pub-4668668459160481"
		     data-ad-slot="2617635850"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<div class="kit">
		<div class="related_posts">
			<?php get_template_part( 'related' ); ?>
		</div>
	
		<div class='clearfix'></div>
	</div>
	<div class="kit">
		<h3 class="htiga">Kasih komentar gan</h3>
		<?php comments_template(); ?>
	</div>
</div>
<?php else : ?>
	<h2>Tidak ditemukan.</h2>
	<div class="entry">Maaf, sepertinya Anda mencari yang tidak ada disini.</div>
<?php endif; ?>

<?php get_sidebar(); ?>
<div class='clearfix'></div>
</div>
