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