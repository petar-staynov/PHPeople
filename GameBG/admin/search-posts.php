<?php 
	require 'connection.php';

	if (isset($_GET['q'])) {
		$search = $_GET['q'];

		$sqlCheck = 'SELECT * FROM posts';

		$queryCheck = mysqli_query($connection, $sqlCheck);
		$allRows = mysqli_num_rows($queryCheck);
		$pages = ceil($allRows / 8);

		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}

		else {
			$page = 1;
		}

		$start_from = ($page - 1) * 8;

		$sql = 'SELECT * FROM posts WHERE title LIKE "%'.$search.'%" LIMIT '.$start_from.', 8';

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
<?php	} ?>

	<div class="page-holder">
	<?php	for ($i=1; $i <= $pages; $i++) { ?>
			<a href="posts.php?page=<?=$i?>"><?=$i?></a>
<?php	}
	?>
	</div>
<?php	}
?>