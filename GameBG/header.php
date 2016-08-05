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
                $(this).children('div').slideDown();
            });
            $(".menu-div").mouseleave(function() {
                $(this).children('div').slideUp();
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
                        <li><a href="#">League of Legends</a></li>
                        <li><a href="#">CS:GO</a></li>
                        <li><a href="#">DOTA 2</a></li>
                        <li><a href="#">Battlefield 1</a></li>
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
                        <li><a href="#">PC</a></li>
                        <li><a href="#">Console</a></li>
                        <li><a href="#">Mobile</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <a href="contacts.php" id="login-menu" class="menu-link"><li>Contacts</li></a>
            </div>
            <div class="menu-div">
                <a href="login-form.php" id="login-menu" class="menu-link"><li>Account</li></a>
                <div class="dropdown">
                    <ul>
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </ul>
    </nav>
</header>