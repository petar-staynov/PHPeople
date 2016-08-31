<?php
    $title = "About";
	include_once 'header.php';
?>
    <head>
        <style>
            .helpers:hover {
                animation: shake 2s cubic-bezier(.36,.07,.19,.97) both;
                transform: translate3d(0, 0, 0);
                backface-visibility: hidden;
                perspective: 1000px;
            }

            @keyframes shake {
                10%, 90% {
                    transform: translate3d(-1px, 0, 0);
                }

                20%, 80% {
                    transform: translate3d(-1px, 0, 0);
                }

                30%, 50%, 70% {
                    transform: translate3d(-3px, 0, 0);
                }

                40%, 60% {
                    transform: translate3d(-2px, 0, 0);
                }
            }
            #scrollReminder{
                position: absolute;
                font-size: 500%;
                left: 9%;
                text-align: center;
                top: 75%;
                color: white;
            }
        </style>
    </head>
    <body style="height: 2000px; background-color: #2d377b">
    <footer>
        <div class="footer-1">
            <div class="footer-col">
                <div>
                    <img src="images/footer-about.png">
                    <h1>За нас</h1>
                    <p>Ние от <span>GameBG</span> искаме да свържем хората, които играят, за да се забавляват заедно</p>
                </div>
            </div>
            <div class="footer-col">
                <div>
                    <img src="images/footer-message.png">
                    <h1>Нужда от помощ?</h1>
                    <p>support@gamebg.com</p>
                </div>
            </div>
            <div class="footer-col">
                <div>
                    <img src="images/footer-phone.png">
                    <h1>Обадете ни се</h1>
                    <p>+359 123 456 789</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </footer>
    <div id="scrollReminder">Scroll for more Information.</div>
    <div class="helpers" id="hi" style="position: absolute; color:white; top: 450px; opacity: 0; width: 90%;">
        <p style="padding-right: 30px; padding-left: 30px; font-size: 222%;"><img src="images/info.png" alt="About Image" width="444" height="444" style="float: left; margin-right: 30px;"><h1 style="text-align: center">PHPeople is found by:</h1><h1 style="font-size: "></h1></p><h1>-Petar Staynov</h1><br><h1>-Angel Miladinov</h1><br><h1>-Hristo Bogoev</h1><br><h1>-Lyubomir Borisov</h1></div>
    <div class="helpers" id="hi2" style="position: absolute; color:white; top: 1000px; opacity: 0; right: 1px; width: 90%;">
        <p style="padding-left: 30px; padding-right: 30px;"><img src="images/help-us.png" alt="About Image" width="444" height="444" style="float: right; margin-left: 30px;"><h1 style="text-align: center">This is:</h1><h1 style="text-align: center">Our SoftUni Software technologies project. The idea of this whole website is to create a better community of gamers who share the same interests. There are three categories from which you can choose: <br>-PC Games <br>-Console Games <br>-Mobile Games <br> </h1></p></div>
    <div class="helpers" id="hi3" style="position: absolute; color:white; top: 1550px; opacity: 0; width: 90%;">
        <p style="padding-right: 30px; padding-left: 30px; font-size: 222%;"><img src="images/email-pic.png" alt="About Image" width="444" height="444" style="float: left; margin-right: 30px;"><h1 style="text-align: center">Contact Us via E-mail:</h1><h1 style="font-size: "></h1></p><h1>First: gamebg@gmail.com</h1><h1>Secondary: phpeople@gmail.com</h1><br></div>
    <script>
        window.addEventListener('scroll', myFunction);
        function myFunction() {
            var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
            if (scrollpercent > 0.06){
                    $('#scrollReminder').animate({left: '300px', opacity: '0'}, 420);
                    $('#hi').animate({left: '5%', opacity: '1'},420);
            }
            if (scrollpercent > 0.2){
                $('#hi2').animate({right: '5%', opacity: '1'},420);
            }
            if (scrollpercent > 0.6){
                $('#hi3').animate({left: '5%', opacity: '1'},420);
            }

        }

    </script>
</body>

<?php 
	include_once 'footer.php';
?>