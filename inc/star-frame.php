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
?>

<div class="ratings" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
  <b itemprop="ratingValue"><?php echo $avgrate;?></b><br>
  rating pengguna <small>(<n itemprop="ratingCount" itemscope itemtype="http://schema.org/ratingCount"><?php echo $cntstar;?></n> vote)</small>
	<input type="hidden" name="pid" class="pid" value="<?php echo get_the_ID(); ?>">
</div>
<div class="ratings">
  <?php
  for($i=1; $i<=5; $i++){
    ?>
    <a id="star<?php echo $i ?>" onclick="rate(this,'<?php echo $i ?>')">
      <img src='<?php echo get_template_directory_uri() ?>/img/staroff.svg' style='width:37px; height:48px'>
    </a>
    <?php
  }
  ?>
  <div class="descrate">
    Berikan Rating!
  </div>
</div>
