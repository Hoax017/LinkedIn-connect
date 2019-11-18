<?php

	use myPHPNotes\LinkedIn;

	require_once('vendor/autoload.php');
	session_start();
	$linkedinAppId = "CLE API PUBLIQUE LINKEDIN";
	$linkedinAppSecret = "CLE API PRIVE LINKEDIN";

	$li = new LinkedIn($linkedinAppId, $linkedinAppSecret,  'http://localhost/linkedinconnect/linkedinConnect.php', "r_emailaddress r_basicprofile r_liteprofile w_member_social rw_company_admin w_share", false);