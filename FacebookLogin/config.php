<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '2088552364492197',
		'app_secret' => '475e03324bb4acbfc8e593b2fc049a1d',
		'default_graph_version' => 'v2.5'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>