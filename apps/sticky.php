<?php 
$apps_random_home = array (
  'post_type'              => array( 'apps' ),
  'pagination'             => true,
  'posts_per_page'         => '1',
  'ignore_sticky_posts'    => true,
  'order'                  => 'DESC',
  'orderby'                => 'rand',
  'post__in'               => get_option('sticky_posts'),
);
$apps_random_home_else = array (
  'post_type'              => array( 'apps' ),
  'pagination'             => true,
  'posts_per_page'         => '1',
  'ignore_sticky_posts'    => true,
  'order'                  => 'DESC',
  'orderby'                => 'rand',
);

$sticky_apps_random = new WP_Query( $apps_random_home );
$sticky_apps_random_else = new WP_Query( $apps_random_home_else );
if ( $sticky_apps_random->have_posts() ) {
  while ( $sticky_apps_random->have_posts() ) {
  $sticky_apps_random->the_post(); ?>
<article class="col-lg-12 col-md-12 col-sm-12">
 <div id="post-<?php the_ID(); ?>" <?php post_class("apps-index sticky"); ?>>
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-8">
  <figure class="pull-left">
   <a href="<?php the_permalink(); ?>" class="figure">
   <?php if(has_post_thumbnail()):?>
    <?php the_post_thumbnail( 'apps-sing', array( 'alt' => get_the_title() ) ); ?><?php else:?>
    <img widht="128" height="128" src="<?php echo get_template_directory_uri() ?>/img/default/128x128.png" alt="<?php the_title(); ?>">
   <?php endif;?>
   </a>
  </figure>
   <?php the_title( sprintf( '<header><h2 class="entry-title"><a href="%s" rel="bookmark" title="%s">', esc_url( get_permalink() ), get_the_title() ), '</a></h2></header>' );?>
   <footer>
    <ul class="meta">
      <li><?php echo get_the_term_list( $post->ID, 'soft', '', ', ' ); ?></li>
      <li>by <a href="<?php the_field('link_pembuat_apps');?>" target="_blank" rel="nofollow"><?php the_field('pembuat_apps');?></a></li>
    </ul>
   </footer>
   <?php the_excerpt(); ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 text-center">
      <a class="btn btn-primary btn-md btn-block" href="<?php the_field('link_download_apps');?>" target="_blank">Download</a>
      <?php if(get_field('lisensi_apps') == "Paid"){ ?>
        <a class="btn custom btn-success btn-md btn-block" href="<?php the_field('link_download_apps');?>" target="_blank"><div class="font1 text-uppercase">Beli Lisensi</div><div class="font2"><?php the_field('harga_apps');?></div></a>
      <?php }?>
    </div>
  </div>
 </div>
</article>
<?php }

} elseif ( $sticky_apps_random_else->have_posts() ) {
    while ( $sticky_apps_random_else->have_posts() ) {
  $sticky_apps_random_2->the_post(); ?>
<article class="col-lg-12 col-md-12 col-sm-12">
 <div id="post-<?php the_ID(); ?>" <?php post_class("apps-index sticky"); ?>>
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-8">
  <figure class="pull-left">
   <a href="<?php the_permalink(); ?>" class="figure">
   <?php if(has_post_thumbnail()):?>
    <?php the_post_thumbnail( 'apps-sing', array( 'alt' => get_the_title() ) ); ?><?php else:?>
    <img widht="128" height="128" src="<?php echo get_template_directory_uri() ?>/img/default/128x128.png" alt="<?php the_title(); ?>">
   <?php endif;?>
   </a>
  </figure>
   <?php the_title( sprintf( '<header><h2 class="entry-title"><a href="%s" rel="bookmark" title="%s">', esc_url( get_permalink() ), get_the_title() ), '</a></h2></header>' );?>
   <footer>
    <ul class="meta">
      <li><?php echo get_the_term_list( $post->ID, 'soft', '', ', ' ); ?></li>
      <li>by <a href="<?php the_field('link_pembuat_apps');?>" target="_blank" rel="nofollow"><?php the_field('pembuat_apps');?></a></li>
    </ul>
   </footer>
   <?php the_excerpt(); ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 text-center">
      <a class="btn btn-primary btn-md btn-block" href="<?php the_field('link_download_apps');?>" target="_blank">Download</a>
      <?php if(get_field('lisensi_apps') == "Paid"){ ?>
        <a class="btn custom btn-success btn-md btn-block" href="<?php the_field('link_download_apps');?>" target="_blank"><div class="font1 text-uppercase">Beli Lisensi</div><div class="font2"><?php the_field('harga_apps');?></div></a>
      <?php }?>
    </div>
  </div>
 </div>
</article>
<?php }
} wp_reset_postdata(); ?>
