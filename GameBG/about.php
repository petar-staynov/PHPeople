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
        <p style="padding-right: 30px; padding-left: 30px; font-size: 222%;"><img src="images/info.png" alt="About Image" width="444" height="444" style="float: left; margin-right: 30px;"><h1 style="text-align: center">About Us</h1>Tesla Motors, Inc. is an American automotive and energy storage company that designs, manufactures, and sells electric cars, electric vehicle powertrain components, and battery products.[5][6][7] Tesla Motors is a public company that trades on the NASDAQ stock exchange under the symbol TSLA.[8] During the first quarter of 2013, Tesla posted profits for the first time in its history.[9]
        Tesla first gained widespread attention following their production of the Tesla Roadster, the first fully electric sports car.[10] The company's second vehicle is the Model S, a fully electric luxury sedan, which was followed by the Model X, a crossover. Its next vehicle is the Model 3.[11] Global Model S sales passed the 100,000 unit milestone in December 2015, three and a half years after its introduction.[12] The Model S was the world's best selling plug-in electric vehicle in 2015.[13] As of June 2016, the Model S ranks as the world's second best selling plug-in car in history after the Nissan Leaf.[14] As of 30 June 2016, Tesla Motors has sold almost 140,000 electric cars worldwide since delivery of its first Tesla Roadster in 2008.[15][16]
        Tesla manufactures equipment for home and office battery charging, and has installed a network of high-powered Superchargers across North America, Europe and Asia.[17] The company also operates a Destination Charging program, under which shops, restaurants and other venues are offered fast chargers for their customers.[18]
        CEO Elon Musk has said that he envisions Tesla Motors as an independent automaker,[19] aimed at eventually offering electric cars at prices affordable to the average consumer.[20][21] Pricing for the Tesla Model 3 in the United States, slated to begin retail deliveries by the end of 2017, will start at US$35,000 before any government incentives.[22][23]</p></div>
    <div class="helpers" id="hi2" style="position: absolute; color:white; top: 1000px; opacity: 0; right: 1px; width: 90%;">
        <p style="padding-left: 30px; padding-right: 30px;"><img src="images/help-us.png" alt="About Image" width="444" height="444" style="float: right; margin-left: 30px;"><h1 style="text-align: center">Need Help?</h1>Found in applications as diverse as industrial fans, blowers and pumps, machine tools, household appliances, power tools, and disk drives, electric motors can be powered by direct current (DC) sources, such as from batteries, motor vehicles or rectifiers, or by alternating current (AC) sources, such as from the power grid, inverters or generators. Small motors may be found in electric watches. General-purpose motors with highly standardized dimensions and characteristics provide convenient mechanical power for industrial use. The largest of electric motors are used for ship propulsion, pipeline compression and pumped-storage applications with ratings reaching 100 megawatts. Electric motors may be classified by electric power source type, internal construction, application, type of motion output, and so on.

        Electric motors are used to produce linear or rotary force (torque), and should be distinguished from devices such as magnetic solenoids and loudspeakers that convert electricity into motion but do not generate usable mechanical powers, which are respectively referred to as actuators and transducers.</p></div>
    <div class="helpers" id="hi3" style="position: absolute; color:white; top: 1500px; opacity: 0; width: 90%;">
        <p style="padding-right: 30px; padding-left: 30px;"><img src="images/call-us.png" alt="About Image" width="444" height="444" style="float: left; margin-right: 30px;"><h1 style="text-align: center">Call Us</h1>Perhaps the first electric motors were simple electrostatic devices created by the Scottish monk Andrew Gordon in the 1740s.[2] The theoretical principle behind production of mechanical force by the interactions of an electric current and a magnetic field, Ampère's force law, was discovered later by André-Marie Ampère in 1820. The conversion of electrical energy into mechanical energy by electromagnetic means was demonstrated by the British scientist Michael Faraday in 1821. A free-hanging wire was dipped into a pool of mercury, on which a permanent magnet (PM) was placed. When a current was passed through the wire, the wire rotated around the magnet, showing that the current gave rise to a close circular magnetic field around the wire.[3] This motor is often demonstrated in physics experiments, brine substituting for toxic mercury. Though Barlow's wheel was an early refinement to this Faraday demonstration, these and similar homopolar motors were to remain unsuited to practical application until late in the century.</p></div>
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