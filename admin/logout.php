<?php
	session_start();
	ob_start();
	
	/*echo '<pre>';
	var_dump($_SESSION);
	echo '</pre>';*/

	$_SESSION = array();

	foreach(array_keys($_SESSION) as $k) unset($_SESSION[$k]);

	session_destroy();
	header("Location: ../index.php");
	exit;
?>