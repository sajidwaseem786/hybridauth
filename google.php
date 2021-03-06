<?php

$provider_name = "Google";


	// inlcude HybridAuth library
	// change the following paths if necessary
	 $config   = dirname(__FILE__) . '/hybridauth/config.php';
	require_once( "hybridauth/Hybrid/Auth.php" );

	// initialize Hybrid_Auth class with the config file

	$hybridauth = new Hybrid_Auth($config);

	// try to authenticate with the selected provider

	$adapter = $hybridauth->authenticate($provider_name);

	// then grab the user profile
	$user_profile = $adapter->getUserProfile();

// something went wrong?

echo "<pre>";
print_r($user_profile);	
