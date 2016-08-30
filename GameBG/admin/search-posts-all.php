<?php 
	require 'connection.php';

	$sql = 'SELECT * FROM posts';

	$query = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($query)) { ?>
			<div class="single-post">
				<div class="post-container">
					<h1><?= $row['title']; ?></h1>
					<hr>
					<p><?= $row['content']; ?></p>
				</div>
				<p><span>Добавен на: <?= $row['date']; ?></span> <!--<a href="">Виж целия</a>--> <a href="delete-post.php?id=<?= $row['id']; ?>">Изтрий</a></p>
			</div>
<?php	}
	}
?>