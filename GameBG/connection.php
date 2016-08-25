<?php
	$connection = mysqli_connect('localhost', 'root', '', 'gamebg');

	if (!$connection) {
		die('Something went wrong');
	}

	mysqli_set_charset($connection, 'utf8');
?>