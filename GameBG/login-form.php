<?php 
    include_once 'header.php';
?>
	<div class="forms-container">
		<div class="form login">
			<div class="login-form">
				<h1>Sign in</h1>
				<hr>

				<form>
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
					</div>
				</form>
			</div>
		</div>
		<div class="form register">
			<div class="login-form">
				<h1>Register</h1>
				<hr>

				<form id="registration-form">
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
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="margin-bottom"></div>
<?php 
	include_once 'footer.php';
?>