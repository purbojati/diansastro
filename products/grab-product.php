<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

if(is_tax()){
	$term_slug = get_queried_object()->slug;
	$related_content = array(
		'post_type' => 'products',
		'post_status' => 'publish',
		'posts_per_page' => 8,
		'order' => 'DESC',
		'orderby' => 'meta_value_num',
		'meta_key' => 'wpb_post_views_count',
		'paged'          => $paged,
		'tax_query' => array(
		   array(
				'taxonomy' => 'productx',
				'field' => 'slug',
				'terms' => $term_slug
			)
		)
	);
}else{
	$related_content = array(
		'post_type' => 'products',
		'post_status' => 'publish',
		'posts_per_page' => 8,
		'order' => 'DESC',
		'orderby' => 'meta_value_num',
		'meta_key' => 'wpb_post_views_count',
		'paged'          => $paged
	);
}
$related_items = new WP_Query( $related_content );
if ($related_items->have_posts()) :
echo "<div id='grab-product-container'>";
echo '<div class="dhoma2">';
while ( $related_items->have_posts() ) : $related_items->the_post();  ?>
<div class="dh4">
   <a href="<?php the_permalink(); ?>">
<?php if(has_post_thumbnail()):?>
<?php the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) ); ?><?php else:?>
<img src="<?php echo get_template_directory_uri() ?>/img/default/180x79.png" alt="<?php the_title(); ?>">
<?php endif;?>
   </a>
     <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<div class="b4">
     <div class="dh5">
       <span>
         CPU
       </span>
       <span>
         :
       </span>
       <span>
         <?php echo the_field('processor'); ?>
       </span>
     </div>
     <div class="dh5">
       <span>
         VGA
       </span>
       <span>
         :
       </span>
       <span>
         <?php echo the_field('kartu_grafis'); ?>
       </span>
     </div>
     <div class="dh5">
       <span>
         LAYAR
       </span>
       <span>
         :
       </span>
       <span>
         <?php echo the_field('ukuranLayar'); ?>"
       </span>
     </div>
     <div class="dh5">
       <span>
         RAM
       </span>
       <span>
         :
       </span>
       <span>
         <?php echo the_field('ram'); ?>
       </span>
     </div>
	</div>
   <a class="harga">Rp. <?php echo the_field('harga');?></a>
</div>

<?php endwhile;
?>

<div class="clearfix"></div>
<?php 
if(ceil($related_items->found_posts / 8) > 1){
?>
<div id="paged">
<?php if (function_exists("paginationTax")) {
    paginationTax(ceil($related_items->found_posts / 8));
} ?>
</div>

<div class="clearfix"></div>
<?php
}
echo '</div>';
echo '<div class=clearfix></div>';
echo '</div>';
endif; wp_reset_postdata();?>
