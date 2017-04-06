<?php
	session_start();
	$pageNo = "1";
	$pageTitle = "Home";
	require_once("genfunctions.php");
	
	validate_login();

	require_once("common_header.php");

	/*echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";*/
?>

<?php
	require_once("common_footer.php");
?>
