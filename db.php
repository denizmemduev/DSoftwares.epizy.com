<?php
	$db_host='localhost';
	$db_user='user';
	$db_pass='d8tvwmAcI3PB5ofY';
	$db_database='dsoftwares-database';

	$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
	
	//проверка на връзката
	if (!$link)
		die('Неуспешно свързване с базата от данни: '. mysqli_error($link));
	
	mysqli_set_charset($link, 'utf8');
?>