<?php
	include_once ('auth_check.php');
	
	echo 'Привет! '.$userdata['users_login'];
	
	include ('logout.php');
?>