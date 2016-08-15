<?php
session_start();
ob_start();?>
<!DOCTYPE html>
<html lang="bg">
<head>
    <title>Home</title>
    <meta charset="utf-8">

    <link rel="icon" type="image/png" href="images/Logo/fav-icon.png">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <script src="js/jquery-3.0.0.js">
    </script>
    <script src="js/jquery.validate.js">
    </script>
    <script>
        $(document).ready(function() {
            $("#registration-form").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    username: {
                        required: true,
                        minlength: 3,
                        maxlength: 40
                    },
                    password: {
                        required: true,
                        minlength: 4
                    },
                    confirm_password: {
                        required: true,
                        equalTo: "#password"
                    }
                },
                messages: {
                    email: {
                        required: "Моля въведете Еmail",
                        email: "Невалиден Email"
                    },
                    username: {
                        required: "Моля въведете име",
                        minlength: "Името трябва да бъде с минимална дължина 3 символа",
                        maxlength: "Името не може да бъде с по-голяма дължина от 40 символа"
                    },
                    password: {
                        required: "Моля въведете парола",
                        minlength: "Паролата не може да бъде по-къса от 4 символа"
                    },
                    confirm_password: {
                        required: "Моля потвърдете парола",
                        equalTo: "Паролите не съвпадат"
                    }
                }
            })
        });
    </script>
    <script>
        $(document).ready(function() { 
            // Add class active to the current link 
            $(function() {
                var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
                pgurl = pgurl.split("?");
                pgurl = pgurl[0];

                $("nav ul a").each(function(){
                if($(this).attr("href") == pgurl || $(this).attr("href") == '')
                    $(this).addClass("active");
                });
            });

            // Add class to the body
            let page = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
            page = page.split("?");
            page = page[0];
            page = page.split("#");
            page = page[0];

            switch(page) {
                case "":
                    document.title = "Home";
                    $("body").addClass('home-page');
                    break;

                case "index.php":
                    document.title = "Home";
                    $("body").addClass('home-page');
                    break;

                case "games.php":
                    document.title = "Games";
                    $("body").addClass('games-page');
                    break;

                case "login-form.php": 
                    document.title = "Login";
                    $("body").addClass('login-page');
                    break;

            }

            // Menu hover effects
	        $(".menu-div").mouseover(function() {
                $(this).children('div').stop().slideDown();
            });
        	$(".menu-div").mouseleave(function() {
            	$(this).children('div').stop().slideUp();
        	});

        	//Login and register
        	$(".sign-in").click(function() {
        		$(".login-form").fadeIn('slow');
        	});
        	$(".register").click(function() {
        		$(".register-form").fadeIn('slow');
        	});

        	$(".form-bg").click(function() {
        		$(".form-bg").fadeOut('slow');
        	});
        	$(".form").click(function(event) {
        		event.stopPropagation();
        	});
        });
    </script>
</head>
<body>
<header>
    <nav>
        <ul>
            <div class="menu-div">
                <a href="index.php" class="menu-link"><li>Home</li></a>
            </div>            
            <div class="menu-div">
                <a href="games.php" class="menu-link"><li>Games</li></a>
                <div class="dropdown">
                    <ul>
                        <li><a href="lol.php">League of Legends</a></li>
                        <li><a href="csgo.php">CS:GO</a></li>
                        <li><a href="dota-2.php">DOTA 2</a></li>
                        <li><a href="battlefield-1.php">Battlefield 1</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-div">
                <a href="about.php" class="menu-link"><li>About</li></a>
            </div>
            <div class="menu-div">
                <a href="blog.php" id="blog-menu" class="menu-link"><li>Blog</li></a>
                <div class="dropdown">
                    <ul>
                        <li><a href="pc-gaming.php">PC</a></li>
                        <li><a href="console-gaming.php">Console</a></li>
                        <li><a href="mobile-gaming.php">Mobile</a></li>
                     <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                     <li><a href="create-post.php">Create Post</a></li>
                     <?php } ?>
                    </ul>
                </div>
            </div>
            <div>
                <a href="contacts.php" id="login-menu" class="menu-link"><li>Contacts</li></a>
            </div>
            <div class="menu-div">
                <a href="#" id="login-menu" class="menu-link"><li>Account</li></a>
                <div class="dropdown">
                    <ul>
                        <li class="sign-in"><p>Sign in</p></li>
                        <li class="register"><p>Register</p></li>
                    </ul>
                </div>
            </div>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                <div class="menu-div">
                    <a href="logout.php" id="login-menu" class="menu-link"><li>Logout</li></a>
                </div>
            <?php } ?>
        </ul>
    </nav>
</header>
<div class="form-bg login-form">
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
	</div>
</div>
<div class="form-bg register-form">
	<div class="forms-container">
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