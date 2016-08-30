<?php 
	session_start();

	if (!isset($_SESSION["admin"])) {
		header("Location: login-form.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<script src="../js/jquery-3.0.0.js">
	</script>

	<script>
		$(document).ready(function() {
			// Add class active to the current link 
            $(function() {
                var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
                pgurl = pgurl.split("?");
                pgurl = pgurl[0];

                $("ul a").each(function(){
                if($(this).attr("href") == pgurl || $(this).attr("href") == '')
                    $(this).children("li").addClass("active");
                });
            });
		});
	</script>
</head>
<body onload="searchPosts('')">
	<header>
		<div>
			<h2 class="page-name"><?= $page; ?></h2>
			<h2>Добре дошъл <span>Admin</span></h2>
		</div>
	</header>