<div id="main">
    <?php if (have_posts()) : while (have_posts()) : the_post();
	$terms = get_the_terms(get_the_ID(), "archivex");
	?>
    <h1 class="atit"><?php the_title(); ?></h1>
    <div id="link-box">
        <?php $v = strip_tags(the_field('wild_grass'), '<ul><li><a>'); echo $v; ?>
        <div class="clearfix"></div>
    </div>

	<div id="product-wrapper" data-terms='<?php echo htmlspecialchars(json_encode($terms)); ?>'></div>

	<?php
	$appx_links = [];

	for($i = 0; $i < sizeof($terms); $i++){
		$appx_links[$i] = $terms[$i]->slug;
	}
	
	$on_cats = join( ",", $appx_links );
	$on_cats = explode(",", $on_cats);
	$b = sizeof($on_cats);

	$post_query = array(
		'post_type' => 'products',
		'post_status' => 'publish',
		'posts_per_page' => 8,
		'order' => 'DESC',
		'orderby' => 'meta_value_num',
		'meta_key' => 'wpb_post_views_count',
		'paged' => 1,
		'tax_query' => array(
			array(
				'taxonomy' => 'productx',
				'field' => 'slug',
				'terms' => array(),
				'operator' => 'AND',
			)
		)
	);

	for ($i = 0; $i < $b; $i++) {
		$post_query['tax_query'][0]['terms'][] = $on_cats[$i];
	}

	$post_content = new WP_Query( $post_query );

	if(ceil($post_content->found_posts / 8) > 1){
		?>
		<div id="paged">
			<?php if (function_exists("paginationArchive")) {
				paginationArchive(ceil($post_content->found_posts / 8));
			} ?>
		</div>

		<div class="clearfix"></div>
		<?php
	}
	?>

    <div class="entry cage">
        <?php the_content();?>
    </div>
    <?php endwhile; ?>

    <div class="entry blk cage">
        <?php
        $queryArchives = array(
            'post_type'       => 'archives',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
        query_posts($queryArchives); while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <br>
        <?php endwhile;?>
    </div>

    <?php else : ?>
    <h2>Tidak ditemukan.</h2>

    <div class="entry">Maaf, sepertinya Anda mencari yang tidak ada disini.</div>

    <div class='clearfix'></div>
    <?php endif; ?>

    <div class='clearfix'></div>
</div>
