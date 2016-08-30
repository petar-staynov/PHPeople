<?php 
	$title = "Admin";
	$page = "Блог";
	include_once 'posts-header.php';
?>
<?php 
	include_once 'sidebar.php';
?>
	<div class="margin-help"></div>

	<div class="blog-container" id="blog-container">
		<?php 
			if (isset($_GET['id'])) {
				require 'connection.php';

				$id = $_GET['id'];
				
				$sql = 'SELECT * FROM posts WHERE id = "'.$id.'"';

				$query = mysqli_query($connection, $sql);

				if (!$query) {
					header("Location: posts.php?error=1");
				}

				else {
					while ($row = mysqli_fetch_assoc($query)) { ?>
						<div class="single-post-container">
							<h1><?= $row['title']; ?></h1>
							<hr>
							<p><?= $row['content']; ?></p>
						</div>
			<?php	}
				}
			}
		?>
	</div>
</body>
</html>