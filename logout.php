<?php
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['name']);
	unset($_SESSION['email']);

	session_destroy();

	header('Refresh:0;url=project.php');

?>