<?php
require '../controllers/login.php';
//echo $_SESSION['success'];
echo'You have logged in with user id: '.($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel = "stylesheet" href ="../../public/css/HomeP.css"/>
    
</head>
<body>
<header>
<div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
<div class="logo">
		<h1>Medical Officer of Health Office</h1>
		<h3>Gampaha</h3>
	</div>
	</div>
</header>



<article>

    <div class="linkbox" id="ViewReport"><span><strong>View Report</strong><br /><br /></span>
        <a href="BasicDetails.php"><img src="../../public/images/report.png" align="center"/></a></div><br />
    <div class="linkbox" id="ClinicDate"><span><strong>Clinic Date</strong><br /><br /></span>
        <a href="BasicDetails.php"><img src="../../public/images/clinicdate.jpg" align="center"/></a></div><br />
    <!-- <div class="linkbox" id="Registration"><span><strong>Add Account</strong><br /><br /></span>
        <a href="BasicDetails.php"><img src="images/Registration.png" align="center"/></a></div><br />
    <div class="linkbox" id="Registration"><span><strong>Add Account</strong><br /><br /></span>
        <a href="BasicDetails.php"><img src="images/Registration.png" align="center"/></a></div><br />
    <div class="linkbox" id="Registration"><span><strong>Add Account</strong><br /><br /></span>
        <a href="BasicDetails.php"><img src="images/Registration.png" align="center"/></a></div><br /> -->


        <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 7</div>
                    <img src="../../public/images/1slide.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 7</div>
                    <img src="../../public/images/2slide.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 7</div>
                    <img src="../../public/images/3slide.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 7</div>
                    <img src="../../public/images/4slide.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 7</div>
                    <img src="../../public/images/5slide.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">6 / 7</div>
                    <img src="../../public/images/6slide.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">7 / 7</div>
                    <img src="../../public/images/7slide.jpg" style="width:100%">
                </div>

                <div style="text-align:center">
                    <br /><br />
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <br>
    

            <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex> slides.length) {slideIndex = 1}
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                    setTimeout(showSlides, 3000); // Changes image every 3 seconds
                }
            </script>
</article>

<div class="para1"><h2 class="heading">Our Mission</h2>
    To contribute to the social and economic development of the province by achieving the highest attainable health status through promotive, preventive, curative and rehabilitative services of high quality made available and accessible to the people of the Western Province.
</div>
<div class="para2"><h2 class="heading">Our Vision</h2>
        Ensuring a healthier population that contributes to the economic, social, mental and spiritual development of the Western Province.<br /><br />
</div>


<footer>
    <p style="text-align: center;">Copyright @ 2020 MOH, Gampaha, Sri Lanka</br>tele: 033-2222278</br>fax: 033-2222278</br>email: gampahamoh@yahoo.com </p>
</footer>
</body>
</html>