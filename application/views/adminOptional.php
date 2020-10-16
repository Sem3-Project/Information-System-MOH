<?php
require '../models/adminOptionalD_model.php';
//echo'You have logged in with user id: '.($_SESSION['id']);
?>

<html>
<head>
<meta charset="UTF-8">
<title>Clinic Date</title>
<link rel = "stylesheet" href ="../../public/css/patientView.css">
<link rel="icon" type="image/png" sizes="32x32" href="../../public/images/logo.png">

</head>
        <head>
            <body>
                <div class="hero-image">
                    <img src="../../public/images/logo.png" class="logo-image"/>
                    <img src="../../public/images/line.jpg" class="line-image"/>
                    <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/logo.png">
                    <a href="login_test.php"><img src="../../public/images/logout.png" class="logout-image"></a>
                    <a href="newHome.php"><img src="../../public/images/home.png" class="home-image"></a>
                    <div class="hero-text">
                        <h1 style="font-size:25px">Office of the Medical Officer of Health</h1>
                        <h3 style="font-size:25px">Gampaha</h3>
                    </div>
                </div>
            </body>
        </head>

        <body>
        <form method="POST" action="adminOptional.php">
        <div>
        <div class="caption-container1">
        <div class="caption-container">
        <h2>Clinic Date</h2>
        </div>
        <div class="caption-container">
        <br>
        <a href="visitDetails.php" style='font-size:20px; color: rgb(8, 184, 125); font-family:Arial,Suns-serif;text-align: center;font-weight: bold;'>List of Attendees</a>
        <br><br>
    </div>
    <br>
            <!-- <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo($_SESSION['id'])?>"><br><br> -->
            <center><input type="text" text-align="center" name="id" style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's id here" value="<?php echo($id);?>"><br><br>

            <p ><b>Date 1 :</b></p>
            <input type="date" name="date1"style="width:42%; height: 30px; " value="<?php echo($date1);?>">
            <br><br>

            <p ><b>Date 2 :</b></p>
            <input type="date" name="date2"style="width:42%; height: 30px; " value="<?php echo($date2);?>">
            <br><br><br><br>

            <!-- <input type="submit" class="link" name="update" style="margin-bottom: 50px;" value="Save"></center> -->
            <input type="submit" class="link" name="Insert" style="margin-bottom: 50px;" value="Save"> </center>
        </div>
    </div>


    </form>
    </body>
</html>