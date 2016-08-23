<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body class="login-page">
<div class="forms-container">
	<div class="form login">
		<div class="login-form">
			<h1>Sign in</h1>
			<hr>

			<form method="POST" action="login.php">
				<div class="form-container">
					<div>
						<input type="text" name="username" placeholder="Username">
					</div>
					<div>
						<input type="password" name="password" placeholder="Password">
					</div>
					<div class="login-submit">
						<input type="submit" value="Sign in">
					</div>
					<?php 
						if (isset($_GET['login-error'])) {
							$login = $_GET['login-error'];

							if ($login == 0) { ?>
								<label class="error login-error">Невалиден Username или парола</label>
					<?php	}
						}
					?>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>