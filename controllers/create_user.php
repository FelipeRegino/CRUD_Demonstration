<?php
	require_once('../helpers/connect.php');
	require_once('../models/User.php');

	if (isset($_POST)) {
		$user = new User($_POST);
		$user->insert($pdo);
		header('Location: ../index.php');
	}
?>
