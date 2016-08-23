<?php 
	session_start();

	if (!isset($_SESSION["admin"])) {
		header("Location: login-form.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div>
			<h2>Добре дошъл <span>Admin</span></h2>
		</div>
	</header>
	<div class="margin-help"></div>
	<?php  
		include_once 'sidebar.php';
	?>

	<div class="game-form">
		<h1>Добави игра</h1>
		<hr>

		<form method="POST" action="post-game.php" enctype="multipart/form-data">
			<div>
				<input type="text" name="game" placeholder="Име на играта">
			</div>
			<div>
				<input type="file" name="game-img">
			</div>
			<div>
				<textarea name="game-desc" placeholder="Описание на играта"></textarea>
			</div>
			<div>
				<select name="device">
					<option value="PC">PC</option>
					<option value="Playstation">Playstation</option>
					<option value="Xbox">Xbox</option>
				</select>
			</div>
			<div>
				<input type="submit" value="Качи">
			</div>
		</form>
	</div>
</body>
</html>