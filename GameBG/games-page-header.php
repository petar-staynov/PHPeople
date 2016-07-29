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
                        minlength: 3
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
                        minlength: "Името трябва да бъде с минимална дължина 3 символа"
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

                $("nav ul a").each(function(){
                    if($(this).attr("href") == pgurl || $(this).attr("href") == '')
                        $(this).addClass("active");
                });
            });

            // Add class to the body
            let page = window.location.href.substr(window.location.href.lastIndexOf("/")+1);

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
            $("ul > a:not(#games-menu)").mouseover(function() {
                $("#games").fadeOut('slow');
            });
            $("ul > a:not(#about-menu)").mouseover(function() {
                $("#about").fadeOut('slow');
            });
            $("ul > a:not(#blog-menu)").mouseover(function() {
                $("#blog").fadeOut('slow');
            });

            $("header").mouseleave(function() {
                $("header > div:not(.logo)").css('display', 'none');
            });
            $("#games-menu").mouseover(function() {
                $(":animated").promise().done(function() {
                    $("#games").fadeIn('slow');
                });
            });
            $("#about-menu").mouseover(function() {
                $(":animated").promise().done(function() {
                    $("#about").fadeIn('slow');
                });
            });
            $("#blog-menu").mouseover(function() {
                $(":animated").promise().done(function() {
                    $("#blog").fadeIn('slow');
                });
            });
        });
    </script>
</head>
<body>
<header>
    <div class="logo">
        <img src="images/Logo/controller-logo-test2.png">
        <h1 class="logo-text">Game<span>BG</span></h1>
    </div>
    <nav>
        <ul>
            <a href="index.php" id="home-menu"><li>Home</li></a>
            <a href="login-form.php" id="login-menu"><li>Sign in/Register</li></a>
            <a href="pc-gaming.php" id="login-menu"><li>PC Gaming</li></a>
            <a href="console-gaming.php" id="login-menu"><li>Console Gaming</li></a>
            <a href="mobile-gaming.php" id="login-menu"><li>Mobile Gaming</li></a>
        </ul>
    </nav>
    <div class="games" id="games">
        <div class="single-game">
            <img src="images/battlefield-bg-1.jpg">
        </div>
        <div class="single-game">
            <img src="images/battlefield-bg-1.jpg">
        </div>
        <div class="single-game">
            <img src="images/battlefield-bg-1.jpg">
        </div>
        <div class="single-game">
            <img src="images/battlefield-bg-1.jpg">
        </div>
        <div class="single-game">
            <img src="images/battlefield-bg-1.jpg">
        </div>
    </div>
    <div class="nav-text" id="about">
        <h1>Научете повече за нас</h1>
    </div>
    <div class="nav-text" id="blog">
        <h1>Посетете нашия блог</h1>
        <!-- Последни статии -->
    </div>
</header>