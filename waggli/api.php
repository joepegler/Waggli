<?php
	global $wpdb;
	if (isset($_POST['id'])){
		echo 'weeeee';
	}
	else{
		$referrals = $wpdb->get_results("SELECT * FROM wp_aff_referrals");
		// echo '<br/><br/><br/><br/><br/><br/><br/>';
		// print_r($referrals);
	}
?>