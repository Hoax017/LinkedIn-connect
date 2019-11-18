<?php
	require_once('config.php');
	if (empty($_SESSION['li_token'])) {
		unset($_SESSION['li_token']);
		header("Location: /linkedinconnect/"); die;
	}

	try {
		if (empty($_SESSION['li_token'])) {
			unset($_SESSION['li_token']);
			throw new Exception("error");
		}
		$user = $li->getPerson($_SESSION['li_token']);
		var_dump($user);
		// Envoie d'une photo
		$post = $li->linkedInPhotoPost($_SESSION['li_token'], $user->id, "Test post en PHP", __DIR__."/logo.png", "Test upload image en PHP", "Description de l'upload");
		var_dump($post);
	} catch (Exception $e) {
		unset($_SESSION['li_token']);
		header("Location: /linkedinconnect/"); die;
	}
