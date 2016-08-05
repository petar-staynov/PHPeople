<?php
	$connection = mysqli_connect('localhost', 'Djimi', 'rounders', 'GameBG');

	if (!$connection) {
		die('Something went wrong');
	}

	mysqli_set_charset($connection, 'utf-8');
?>