
<?php
//session_start();

if(!isset($_SESSION))
    {
        session_start();
    }

ob_start();
?>
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>


    <link rel="icon" type="image/png" href="images/Logo/fav-icon.png">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="styles/home-content.css" type="text/css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- Chat -->
    <link href="chatStyle.css" rel="stylesheet">
    <script src="js/jquery-3.0.0.js"></script>
    <script src="chat.js" rel="script"></script>

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

    <script>
        $(document).ready(function() {
            $(".game-wrapper").css('background-position', '-650px 0');
        });
    </script>
</head>
<body>
<header>
    <nav>
        <ul>
            <div class="menu-div">
                <a href="index.php" class="menu-link"><li>Начало</li></a>
            </div>            
            <div class="menu-div">
                <a href="games.php" class="menu-link"><li>Игри</li></a>
                <div class="dropdown">
                    <ul>
                        <?php 
                            require 'connection.php';

                            $sql = 'SELECT * FROM games ORDER BY time_added DESC LIMIT 5';

                            $query = mysqli_query($connection, $sql);

                            while ($row = mysqli_fetch_assoc($query)) { ?>
                                <li><a href="single-game.php?id=<?= $row['id'] ?>"><?= $row['game_title']; ?></a></li>
                    <?php    }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="menu-div">
                <a href="blog.php" id="blog-menu" class="menu-link"><li>Блог</li></a>
                <div class="dropdown">
                    <ul>
                        <li><a href="pc-gaming.php">PC</a></li>
                        <li><a href="console-gaming.php">Console</a></li>
                        <li><a href="mobile-gaming.php">Mobile</a></li>
                        <?php if (isset($_SESSION['user_level']) && $_SESSION['user_level'] == 1 || isset($_SESSION['user_level']) && $_SESSION['user_level'] == 2) { ?>
                            <li><a href="create-post.php">Качи новина</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="menu-div">
                <a href="#" id="chat-button" class="menu-link"><li>Чат</li></a>
            </div>
            <div class="menu-div">
                <a href="forum_main.php" class="menu-link"><li>Форум</li></a>
            </div>
            <div class="menu-div">
                <a href="about.php" class="menu-link"><li>За нас</li></a>
            </div>
<!--            --><?php //if (!isset($_SESSION['loggedin'])) { ?>
<!--            <div class="menu-div">-->
<!--                <a href="#" id="login-menu" class="menu-link"><li>Account</li></a>-->
<!--                <div class="dropdown">-->
<!--                    <ul>-->
<!--                        <li class="sign-in"><p>Sign in</p></li>-->
<!--                        <li class="register"><p>Register</p></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            --><?php //} ?>


            <?php
            if (!isset($_SESSION['loggedin']))
            {
                echo '<div class="menu-div">
                        <a href="#" id="login-menu" class="menu-link"><li>Акаунт</li></a>
                        <div class="dropdown">
                            <ul>
                             <li class="sign-in"><p>Влез</p></li>
                             <li class="register"><p>Регистрирай се</p></li>
                            </ul>
                        </div>
                      </div>';
            }
            else if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true))
            {
                echo '<div class="menu-div">
                        <a href="logout.php" id="login-menu" class="menu-link"><li>Изход</li></a>
                      </div>';
            }
            ?>
            <?php
            if (isset($_SESSION['loggedin'])) { ?>
                <div class="menu-div-username">
                    <a href="user-profile.php?username=<?= $_SESSION["username"]; ?>"><li><?= $_SESSION["username"]; ?></li></a>
                </div>
            <?php    }
            ?>
        </ul>
    </nav>

</header>
<div class="form-bg login-form">
	<div class="forms-container">
		<div class="form login">
			<div class="login-form">
				<h1>Влез</h1>
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
							<input type="submit" value="Влез">
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
				<h1>Регистрирай се</h1>
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
							<input type="submit" value="Регистрирай се">
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
<div class="header-margin"></div>
<?php
include_once 'chat.php';
?>