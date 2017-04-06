<?php
	$con=mysql_connect("localhost","root","") or die("Server Connection Error : ".mysql_error());
	$db=mysql_select_db("ofr",$con) or die("DB Connection Error : ".mysql_error());
?>