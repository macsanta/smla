<?php
	define ('DB_HOST', 'localhost');
	define ('DB_LOGIN', 'smla');
	define ('DB_PASSWORD', 'smla123654');
	define ('DB_NAME', 'smla');
	mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ("MySQL Error: " . mysql_error());
	mysql_query("set names utf8") or die ("<br>Invalid query: " . mysql_error());
	mysql_select_db(DB_NAME) or die ("<br>Invalid query: " . mysql_error());
?>