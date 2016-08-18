<?php
	$connection = mysqli_connect('localhost', 'Djimi', 'rounders', 'gamebg');

	if (!$connection) {
		die('Something went wrong');
	}

	mysqli_set_charset($connection, 'utf-8');
?>