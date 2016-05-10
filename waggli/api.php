<?php
	global $wpdb;
	if (isset($_POST['affiliate_id'])){
		$wpdb->insert( 
			'wp_aff_referrals', 
			array( 
				'referral_id' => 'DEFAULT', 
				'affiliate_id' => $_POST['affiliate_id'],
				'datetime' => 'DEFAULT'
			), 
			array( 
				'%s', 
				'%d',
				'%s' 
			) 
		);
		echo '**************************';
	}
?>