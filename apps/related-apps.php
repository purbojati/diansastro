<?php

$custom_taxterms = wp_get_object_terms( $post->ID, 'appx', array('fields' => 'ids') );
$related_content = array(
'post_type' => 'apps',
'post_status' => 'publish',
'posts_per_page' => 5,
'tax_query' => array(
    array(
        'taxonomy' => 'appx',
        'field' => 'id',
        'terms' => $custom_taxterms
    )
),
'post__not_in' => array ($post->ID),
);
$related_items = new WP_Query( $related_content );
if ($related_items->have_posts()) :
echo "<div id='related-apps-container'>";
echo "<h3>Download Juga :</h3>";
echo '<div class="dhoma">';
while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
<div id="post-<?php the_ID(); ?>"  class="dh4">
   <a href="<?php the_permalink(); ?>">
<?php if(has_post_thumbnail()):?>
<?php the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) ); ?><?php else:?>
<img src="<?php echo get_template_directory_uri() ?>/img/default/180x79.png" alt="<?php the_title(); ?>">
<?php endif;?>
   </a>
   <?php the_title( sprintf( '<a href="%s" rel="bookmark" title="%s">', esc_url( get_permalink() ), get_the_title() ), '</a>' );?>

</div>

<?php endwhile;
echo '</div>';
echo '<div class=clearfix></div>';
echo '</div>';
endif; wp_reset_postdata();?>
