<?php
	require_once('config.php');

	try {
		if (isset($_GET['error']) || !isset($_GET['code']) || $_GET['state'] != $_SESSION['linkedincsrf']) throw new Exception("error");
		$token = $li->getAccessToken($_GET['code']);
		if(!$token) throw new Exception("error");
		$_SESSION['li_token'] = $token;
		header("Location: /linkedinconnect/connected.php"); die;
	} catch (Exception $e) {
		unset($_SESSION['li_token']);
		header("Location: /linkedinconnect/"); die;
	}
