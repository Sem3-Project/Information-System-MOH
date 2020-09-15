<?php
require '../models/userOptionalD_model.php';
//require '../controllers/login.php';
//echo $_SESSION['success'];
echo'You have logged in with user id: '.($_SESSION['id']);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ClinicDateSelection</title>
        <link rel = "stylesheet" href ="../../public/css/patientView.css">
    </head>
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

    <body>
        <form method="POST" action="optionalDate.php">
        <div>
        <div class="caption-container1">
        <div class="caption-container">
        <h2>Date Selection</h2>
        </div>
        <div class="caption-container">
            <h3 >Search NIC :</h3>
        </div>
            <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo($_SESSION['id'])?>"><br><br>

                <!-- <input type="submit" class="link" name="search" value="Search"> -->
                <input type="submit" class="link" name="Search" value="Search">
                <p ><b>Date/දිනය :</b></p>
                <select name="confirmedDate" style="width:42%; height: 30px; ">
                    <option  selected hidden value=""></option>
                    <option value="<?php echo($date1);?>" <?php if($confirmedDate==$date1) echo 'selected="selected"'; ?>><?php echo($date1);?></option>
                    <option value="<?php echo($date2);?>" <?php if($confirmedDate==$date2) echo 'selected="selected"'; ?>><?php echo($date2);?></option>
                </select>
                <br><br>

                <p ><b>Time/වේලාව:</b></p>

                <select name="time" style="width: 42%; height: 30px; ">
                    <option  selected hidden value=""></option>
                    <option value="<?php echo("8.30 a.m.");?>" <?php if($time=="8.30 a.m.") echo 'selected="selected"'; ?>><?php echo("8.30 a.m.");?></option>
                    <option value="<?php echo("10.30 a.m.");?>" <?php if($time=="10.30 a.m.") echo 'selected="selected"'; ?>><?php echo("10.30 a.m.");?></option>
                </select>
                <br><br><br><br>

                <!-- <input type="submit" class="link" name="update" style="margin-bottom: 50px;" value="Confirmed"></center> -->
                <input type="submit" class="link" name="Confirmed" style="margin-bottom: 50px;" value="Confirmed"></center>
   
   </div>
</div>


    </form>
    </body>
</html>
   