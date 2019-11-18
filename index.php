<?php

	require_once('config.php');
	if (!empty($_SESSION['li_token'])) { header("Location: /linkedinconnect/connected.php"); die; }

?>
<a href='<?= $li->getAuthUrl() ?>'>Connexion LinkedIn</a>