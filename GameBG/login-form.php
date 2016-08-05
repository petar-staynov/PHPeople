<?php 
    include_once 'header.php';
?>
	<div class="login-wrapper">
		<div class="forms-container">
			<div class="form login">
				<div class="login-form">
					<h1>Sign in</h1>
					<hr>

					<form method="POST" action="login.php">
						<div class="form-container">
							<div>
								<input type="text" name="username" placeholder="Username or Email">
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
			<div class="form register">
				<div class="login-form">
					<h1>Register</h1>
					<hr>

					<form id="registration-form" method="POST" action="register.php">
						<div class="form-container">
							<div>
								<input type="email" name="email" placeholder="Email*">
							</div>
							<div>
								<input type="text" name="username" placeholder="Username*">
							</div>
							<div>
								<input type="password" name="password" id="password" placeholder="Password*">
							</div>
							<div>
								<input type="password" name="confirm_password" placeholder="Repeat password*">
							</div>
							<div class="submit">
								<input type="submit" value="Register">
							</div>
							<?php 
								if (isset($_GET['reg-error'])) {
									$registered = $_GET['reg-error'];

									if ($registered == 0) { ?>
										<label class="error register-error">Вече съществува потребирел с такъв Username или Email</label>
							<?php	}

									if ($registered == 1) { ?>
										<label class="error register-error">Възникна грешка, моля опитайте по-късно</label>
							<?php	}
								}
							?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php 
	include_once 'footer.php';
?>