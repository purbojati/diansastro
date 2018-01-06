<div itemscope itemtype="http://schema.org/SoftwareApplication">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div id="up-wrapp">
    <div id="apps-container">
      <span>
        <?php if(has_post_thumbnail()):?>
          <?php the_post_thumbnail( 'apps-sing', array( 'alt' => get_the_title() ) ); ?><?php else:?>
          <img src="<?php echo get_template_directory_uri() ?>/img/ads300.jpg" alt="<?php the_title(); ?>">
        <?php endif;?>
      </span>
      <span>
          <h1 class="content-title" itemprop="name"><?php the_title(); ?></h1>
          <div class="col">
        </div>
        <div class="col">
          <?php
          global $wpdb;
          $theid = get_the_ID();
          $restars = $wpdb->get_results("SELECT * FROM wp_ratings WHERE postID = '$theid'", ARRAY_A);
          $cntstar = 0;
          $allrate = 0;
          	foreach($restars as $row){
          	$crate = $row['rating'];
          	$allrate = $allrate+$crate;
          	$cntstar++;
          	}//end while.
          if($cntstar > 0){
          $avgrate = round($allrate/$cntstar,1);
          number_format((float)$avgrate, 2, '.', '');
          }else{
          $avgrate = 0;
          }
          $rateyx = intval($avgrate);
          for($i=1;$i<=5;$i++){
            if($i>$rateyx){
              echo "<img src='".get_template_directory_uri()."/img/staroff.svg' style='width:24px; height:32px' draggable='false'>";
            }else{
              echo "<img src='".get_template_directory_uri()."/img/star.svg' style='width:24px; height:32px' draggable='false'>";
            }
          }
          ?>
        </div>
        <div class="col">
          <small>
            <n itemprop="applicationCategory">
              <?php $terms = get_the_terms(get_the_ID(), 'appx');
              if ( $terms && ! is_wp_error( $terms )){

                $appx_links = array();

                foreach ( $terms as $term ) {
                  $appx_links[] = $term->name;
                }

                $on_cats = join( ", ", $appx_links );
                ?>
                <?php printf($on_cats); ?>
                <?php
              }else{
                ?>
                -
                <?php
              }
              ?>
            </n>
            </small>
          <small>versi : <n itemprop="version"><?php echo the_field('versi_apps');?></n></small>
          <small>update : <n itemprop="datePublished"><?php echo the_field('update_terakhir_apps');?></n></small>
          <small>OS : <n itemprop="operatingSystem"><?php echo the_field('os');?></n></small>
          <small itemprop="offers" itemscope itemtype="http://schema.org/Offer"><n  itemprop="description"><?php echo the_field('offer');?></n><meta itemprop="price" content="0" /><meta itemprop="priceCurrency" content="IDR" /></small>

        </div>
      </span>
      <span>
        <a class="" rel="nofollow" href="<?php echo the_field('link_download_apps');?>" target="_blank">Download (<n itemprop="fileSize"><?php echo the_field('ukuran_file_apps');?></n>)</a>
      </span>
    </div>
  </div>
<?php endwhile; ?>
<div class="clearfix"></div>
<?php else: ?>
 <?php endif;?>
 <div id="main">
 	<div id="content">
 		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 		   <div class="entry">
 			     <?php the_content(); ?>
				<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
    			<meta content="<?php echo the_field('rating');?>" itemprop="ratingValue" />
   				<meta content="1" itemprop="reviewCount" />
    			</div>
 		   </div>
 		<div class='clearfix'></div>
 	<?php endwhile; ?>
 </div>
 <?php else : ?>
 	<h2>Tidak ditemukan.</h2>
 	<div class="entry">Maaf, sepertinya Anda mencari yang tidak ada disini.</div>
 <?php endif; ?>

 <?php get_sidebar(); ?>
 <div class='clearfix'></div>
 </div>
 <?php
 require get_template_directory() . '/apps/related-apps.php';
 ?>
