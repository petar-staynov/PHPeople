<?php
    $title = "About";
	include_once 'header.php';
?>
    <body style="height: 3000px; background-color: #0F7DC1">
    <footer>
        <div class="footer-1">
            <div class="footer-col">
                <div>
                    <img src="images/footer-about.png">
                    <h1>За нас</h1>
                    <p>Ние от <span>GameBG</span> искаме да свържем хората които играят за да се забавляват заедно</p>
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
    <h1 id="hi" style="position: absolute; color:white; top: 420px; opacity: 0;">Some stuff about us HERE..</h1>
    <h1 id="hi2" style="position: absolute; color:white; top: 820px; right: 20px; opacity: 0;">Also HERE...</h1>
    <h1 id="hi3" style="position: absolute; color:white; top: 1300px; opacity: 0;">And of course HERE...</h1>
    <script>
        window.addEventListener('scroll', myFunction);
        function myFunction() {
            var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
            var isdone = false;
            if (scrollpercent > 0.05){
                $('#hi').animate({left: '200px', opacity: '1'},690);
            }
            if (scrollpercent > 0.1){
                $('#hi2').animate({right: '200px', opacity: '1'},690);
            }
            if (scrollpercent > 0.18){
                $('#hi3').animate({left: '200px', opacity: '1'},690);
            }

        }

    </script>
</body>

<?php 
	include_once 'footer.php';
?>