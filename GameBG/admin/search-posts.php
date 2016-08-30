<?php 
	require 'connection.php';

	if (isset($_GET['q'])) {
		$search = $_GET['q'];

		$sql = 'SELECT * FROM posts WHERE title LIKE "%'.$search.'%"';

		$query = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($query)) { ?>
			<div class="single-post">
				<div class="post-container">
					<h1><?= $row['title']; ?></h1>
					<hr>
					<p><?= $row['content']; ?></p>
				</div>
				<p><span>Добавен на: <?= $row['date']; ?></span> <a href="single-post.php?id=<?= $row['id'] ?>">Виж целия</a> <a href="#" onclick="deletePost(<?= $row['id'] ?>);searchPosts(documentGetElementById('search-field').value)">Изтрий</a></p>
			</div>
<?php	}
	}
?>