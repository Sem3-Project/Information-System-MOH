<!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href ="css/newHome.css">
    </head>
    <head>
        <body>
            <div class="hero-image">
                <img src="images/logo.png" class="logo-image"/>
                <img src="images/line.jpg" class="line-image"/>
               
                <div class="hero-text">
                    <h1 style="font-size:25px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Office of the Medical Officer of Health</h1>
                    <!-- <h1 style="font-size:25px">Medical Officer of Health Office</h1> -->

                    <h3 style="font-size:25px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gampaha</h3>
                </div>
            </div>
            
        </body>
    </head>

    
    <div class="caption-container1">
      <p id="caption"></p>
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 7</div>
          <img src="images/slider1.png" style="width:100%">  
        </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 7</div>
        <img src="images/slider2.jpg" style="width:100%">       
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 7</div>
        <img src="images/slider3.jpg" style="width:100%"> 
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 7</div>
        <img src="images/slider4.jpg" style="width:100%">        
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 7</div>
        <img src="images/slider5.jpg" style="width:100%">       
      </div>

      <div class="mySlides fade">
        <div class="numbertext">6 / 7</div>
        <img src="images/slider6.jpg" style="width:100%">       
      </div>

      <div class="mySlides fade">
        <div class="numbertext">7 / 7</div>
        <img src="images/slider7.jpeg" style="width:100%">  
      </div>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span>
      <span class="dot"></span>
    </div>



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
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>

  </div>
  <div class="caption-container">
      <p id="caption"></p>
      <div class="icon-image">
      <a href="BasicDetails.php">
        <img src="images/newadd.png" onmouseover ="src='images/newadd1.png'" onmouseout ="src='images/newadd.png'" style="width:12%;height:200%;" />
      </a>
      <a href="BasicDetails.php">
        <img src="images/newedit.png" onmouseover ="src='images/newedit1.png'" onmouseout ="src='images/newedit.png'" style="width:12%;height:200%;"/>
      </a>
      <a href="BasicDetails.php">
        <img src="images/newdelete.png" onmouseover ="src='images/newdelete1.png'" onmouseout ="src='images/newdelete.png'" style="width:12%;height:200%;"/>
      </a>
      <a href="BasicDetails.php">
        <img src="images/newview.png" onmouseover ="src='images/newview1.png'" onmouseout ="src='images/newview.png'" style="width:12%;height:200%;"/>
      </a>
      <a href="BasicDetails.php">
        <img src="images/newdate.png" onmouseover ="src='images/newdate1.png'" onmouseout ="src='images/newdate.png'" style="width:12%;height:200%;"/>
      </a>
    </div>   
      </div>

      <div class="layer">
      <fieldset class="mission">
                <legend height="100%;"><h2 class="heading">අපගේ මෙහෙවර(Our Mission)</h2></legend>
                කායික මානසික සමාජයීය හා ආධ්‍යාත්මික වශයෙන් සෞඛ්‍ය සම්පන්න වූ මාතෘ, ළදරු, ළමා ප්‍රමුඛ පවුලේ මෙන්ම සමාජයේ සෞඛ්‍ය සංරක්ෂණය සිදු කරමින් සුවදායක වූ පරිසරයක් තුල යහපත් ජීවන තත්ත්වයක් පවත්වා ගැනීම සඳහා වෙහෙසීම හා කැපවීම.         <br /><br />
                </fieldset>       
            
            <fieldset class="vission">
                <legend height="100%;"><h2 class="heading" >අපගේ දැක්ම (Our Vision)</h2></legend>
                පරිසර හිතකාමී සෞඛ්‍ය සම්පන්න වූ ජනතාවක් ප්‍රදේශයෙන් බිහි කිරීම.
            </fieldset>
           
      </div>

  <footer>
    <p style="text-align: center;">Copyright @ 2020 MOH, Gampaha, Sri Lanka</br>tele: 033-2222278</br>fax: 033-2222278</br>email: gampahamoh@yahoo.com </p>
  </footer>
</html>

  

