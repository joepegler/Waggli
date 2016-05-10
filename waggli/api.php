<?php
	global $wpdb;
	if (isset($_POST['referral_id'])){
		$wpdb->insert( 
			'wp_aff_referrals', 
			array( 
				'referral_id' => $_POST['referral_id'], 
				'affiliate_id' => 0,
				datetime => 'NOW()'
			), 
			array( 
				'%s', 
				'%d',
				'%s' 
			) 
		);
	}
?>