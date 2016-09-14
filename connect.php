<?php
	$con = mysqli_connect('127.0.0.1', 'root', '');
	$db = mysqli_select_db($con, 'survey');
	if(!$db){die(mysqli_error($con));}
?>