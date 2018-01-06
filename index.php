<?php get_header(); ?>
<div class="clearfix"></div>
<?php
if(check_device()=="true"){
include "homemobile.php";
}else{
include "homedesktop.php";
}
?>
<div class='clearfix'></div>
<?php get_footer(); ?>