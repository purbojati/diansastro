<?php get_header(); ?>
<div class="clearfix"></div>
<div id="main">
<div id="content">

<h1 class="stitle"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
<div class="entry">
					<h2><?php _e( 'Maaf bosku, halaman yang Anda cari tidak ada.'); ?></h2>
					<p><?php _e( 'Coba gunakan pencarian berikut ini'); ?></p>

					<?php get_search_form(); ?>
</div>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>