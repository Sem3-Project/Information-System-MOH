<?php
require '../models/userOptionalD_model.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinic Date Selection</title>
        <link rel = "stylesheet" href ="../../public/css/patientView.css">
        <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/logo.png">
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
        <h2>සායන දිනය වෙන් කිරීම - Reservation of Clinical Date</h2>
        </div><br><br>
        <!-- <div class="caption-container">
            <h3 >Search NIC :</h3>
        </div> -->
            <center><input type="text" text-align="center" readonly placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo($_SESSION['id'])?>"><br><br>

                <!-- <input type="submit" class="link" name="search" value="Search"> -->
                <input type="submit" class="link" name="Search" value="සායන දින ලබා ගැනීමට පිවිසෙන්න">
                <br><br><p ><b>දිනය / Date:</b></p>
                <select name="confirmedDate" style="width:42%; height: 30px; ">
                    <option  selected hidden value=""></option>
                    <option value="<?php echo($date1);?>" <?php if($confirmedDate==$date1) echo 'selected="selected"'; ?>><?php echo($date1);?></option>
                    <option value="<?php echo($date2);?>" <?php if($confirmedDate==$date2) echo 'selected="selected"'; ?>><?php echo($date2);?></option>
                </select>
                <br><br>

                <p ><b>වේලාව / Time:</b></p>

                <select name="time" style="width: 42%; height: 30px; ">
                    <option  selected hidden value=""></option>
                    <option value="<?php echo("8.30 a.m.");?>" <?php if($time=="8.30 a.m.") echo 'selected="selected"'; ?>><?php echo("8.30 a.m.");?></option>
                    <option value="<?php echo("10.30 a.m.");?>" <?php if($time=="10.30 a.m.") echo 'selected="selected"'; ?>><?php echo("10.30 a.m.");?></option>
                </select>
                <br><br><br><br>

                <!-- <input type="submit" class="link" name="update" style="margin-bottom: 50px;" value="Confirmed"></center> -->
                <input type="submit" class="link" name="Confirmed" style="margin-bottom: 50px;" value="තහවුරු කිරීමට පිවිසෙන්න"></center>
   
   </div>
</div>


    </form>
    </body>
</html>
   