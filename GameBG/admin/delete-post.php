<?php 
	require 'connection.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = 'DELETE FROM posts WHERE id = "'.$id.'"';

		mysqli_query($connection, $sql);
	}
?>