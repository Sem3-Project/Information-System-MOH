<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculate your BMI</title>
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
    <form method="POST" align="center">
    <header class="mt-3 text-center row">
  
  <div class="col-sm-10 align-right">
  <div class="caption-container1">
                <div class="caption-container"><h2>Calculate Body Mass Index</h2></div>
  


      <div class="form-group row">
      <div class="caption-container"><h4>Weight in kg.</h4></div>
          <input type="text" style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " class="form-control" id="weight" name="weight" placeholder="Enter your weight in kilograms.">
        
      </div>
      <div class="form-group row">
      <div class="caption-container"><h4>Height in cm.</h4></div>
          <input type="text" style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " class="form-control" id="height" name="height" placeholder="Enter your height in centimeters.">
          
      </div>
      <br><br>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <input type="submit"  class="link"  style="margin-bottom: 50px; " name="calculate" value="Calculate">
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right"></div>

      <?php

      

        function calculateBMI($weight, $height){
          $bmi = ($weight / $height / $height) * 10000;
          $bmiRounded = round($bmi, 1);
          
            if($bmiRounded <= 18.4){
              $output = "UNDERWEIGHT";
            }
            else if($bmiRounded >= 18.5 && $bmiRounded <= 24.9){
              $output = "NORMAL WEIGHT";
            }
            else if($bmiRounded >= 25 && $bmiRounded <= 29.9){
              $output = "OVERWEIGHT";
            }
            else if($bmiRounded >= 30 && $bmiRounded <= 39.9){
              $output = "OBESE";
            }
            echo "<h2 >Your BMI value is  ${bmiRounded}   and you are : "; 
echo "$output";

        }


        if(isset($_POST['calculate'])){
          if (!isset($_POST['weight'])) {
            return 'Please enter your weight';
            exit();
          }
          if (!isset($_POST['height'])) {
            return 'Please enter your height';
            exit();
          }
          $weight = filter_var(htmlentities(floatval($_POST['weight'])),FILTER_SANITIZE_NUMBER_FLOAT);

          $height = filter_var(htmlentities(floatval($_POST['height'])),FILTER_SANITIZE_NUMBER_FLOAT);

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
