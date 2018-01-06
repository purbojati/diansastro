<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-load.php');
	$rating = $_POST['rate'];
	$postID = $_POST['pid'];
	if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
	}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
	    $ip = $_SERVER['REMOTE_ADDR'];
	}
global $wpdb;
$restars = $wpdb->get_results("SELECT * FROM wp_ratings WHERE postID = '$postID' AND ipc = '$ip'");
$rowcount = count($restars);
if($rowcount == 0){
	$wpdb->insert('wp_ratings', array(
    'postID' => $postID,
    'rating' => $rating,
    'ipc' => $ip
	));
	echo "Terima Kasih!";
}else{
	echo "sudah memberi rating";
}
?>
