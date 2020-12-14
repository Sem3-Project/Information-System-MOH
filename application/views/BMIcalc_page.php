<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculate child's BMI</title>
  <link rel ="stylesheet" type="text/css" href="../../public/css/newForm.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/logo.png">


  <!--<link rel="stylesheet" href="../../public/css/bootstrap.min.css">-->
  <!-- <link rel = "stylesheet" href ="../../public/css/BasicDetails.css"/> -->

</head>
<!-- <body style="background-color:maroon;" > -->
<head>
        <body>
            <div class="hero-image">
                <img src="../../public/images/logo.png" class="logo-image"/>
                <img src="../../public/images/line.jpg" class="line-image"/>
                <a href="../controllers/logout.php"><img src="../../public/images/logout.png" class="logout-image"></a>
                <a href="user.php"><img src="../../public/images/home.png" class="home-image"></a>
                <div class="hero-text">
                    <h1 style="font-size:25px">Office of the Medical Officer of Health</h1>
                    <h3 style="font-size:25px">Gampaha</h3>
                </div>
            </div>
        </body>
    </head>
<!-- </header>
  <header class="mt-3 text-center row">
  
    <div class="col-sm-10 align-right">
	<hr>
      <h1 class="text-secondary">Calculate Body Mass Index</h1>
	  <hr>
    </div>
	
  </header> -->
  <div class="container mt-3">
    <form method="POST" align="center" autocomplete="off">
    <header class="mt-3 text-center row">
  
  <div class="col-sm-10 align-right">
  <div class="caption-container1">
                <div class="caption-container"><h2>Calculate Body Mass Index</h2></div>
  


      <div class="form-group row">
      <div class="caption-container"><h4>ස්කන්ධය කි.ග්‍රෑ. මගින්  / Weight in kg.</h4></div>
          <input type="float" style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " class="form-control" id="weight" name="weight" placeholder="Enter child's weight in kilograms.">
        
      </div>
      <div class="form-group row">
      <div class="caption-container"><h4>උස සෙ.මි. මගින් / Height in cm.</h4></div>
          <input type="float" style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " class="form-control" id="height" name="height" placeholder="Enter child's height in centimeters.">
          
      </div>
      <br><br>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <input type="submit"  class="link"  style="margin-bottom: 50px; " name="calculate" value="ස්කන්ධ දර්ශකය ලබා ගැනීමට පිවිසෙන්න ">
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right"></div>

      <?php
        function calculateBMI($weight, $height){
          if ($weight==0 || $height==0){
            $output = "<h3>අගයන් ඇතුලත් කරන්න.</h3>";
          }
          
          else{
          $heightInm = $height/100;
          $bmi =$weight/ ($heightInm * $heightInm);
          $bmiRounded = round($bmi, 1);

            if($bmiRounded <= 18.4){
              $output = "අඩු බර / UNDERWEIGHT";
            }
            else if($bmiRounded >= 18.5 && $bmiRounded <= 24.9){
              $output = "සාමාන්‍ය / NORMAL WEIGHT";
            }
            else if($bmiRounded >= 25 && $bmiRounded <= 29.9){
              $output = "අධි බර / OVERWEIGHT";
            }
            else if($bmiRounded >= 30 ){
              $output = "ස්ථුල / OBESE";
            }
            echo "<h3 >ස්කන්ධ දර්ශක අගය  ${bmiRounded}  වන අතර දරුවා අයත්වන ස්කන්ධ කාණ්ඩය  : ";
          }
        echo "$output";
        }

        if(isset($_POST['calculate'])){
          
          $weight = filter_var(htmlentities(floatval($_POST['weight'])));

          $height = filter_var(htmlentities(floatval($_POST['height'])));

          calculateBMI($weight, $height);
        }
    ?>
    <br><br>
    </div>
    </div>
  </div>
  </div> 
</body>
</html>
