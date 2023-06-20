<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8'); 
	
	$host = getenv('DB_HOST');
	$db_name   = getenv('DB_NAME');
	$user = getenv('DB_USER');
	$pass = getenv('DB_PASS');
	$charset = 'utf8mb4';
	$db = new mysqli($host,$user,$pass,$db_name);
	#$db = new mysqli("200.200.200.33","web","Keroro2424.","kh_db");
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>
