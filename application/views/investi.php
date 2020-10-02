<?php
// require '../models/investigation_model.php';
require '../models/inves.model.php';
?>
<html>
    <head>
        <title>Investigations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm.css">
        <!-- <link rel="stylesheet" type="text/css" href="../../public/css/formsCommon.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/clinic style.css"> -->
        <link rel="stylesheet" type="text/css" href="../../public/css/table.css">

        
    </head>
    <head>
        <body>
            <div class="hero-image">
                <img src="../../public/images/logo.png" class="logo-image"/>
                <img src="../../public/images/line.jpg" class="line-image"/>
                <a href="../controllers/logout.php"><img src="../../public/images/logout.png" class="logout-image"></a>
                <a href="newHome.php"><img src="../../public/images/home.png" class="home-image"></a>
                <div class="hero-text">
                    <h1 style="font-size:25px">Office of the Medical Officer of Health</h1>
                    <h3 style="font-size:25px">Gampaha</h3>
                </div>
            </div>
</body>
</head>
    <body>
        <div>
        <div class="caption-container1">
        <form action="investi.php" method="post">
        <h2 class="title" align="center">පරීක්ෂණ / Investigations</h2>
        <div class="caption-container">
            <h3 >Search NIC :</h3>
        </div>
           

            <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id']; ?>"><br><br>
            <!-- style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<--?php if (isset($_POST['memberID'])) echo $_POST['memberID']; echo $id;?>"><br><br> -->

                <input type="submit" class="link" name="search" value="search"></center>


            <div class="caption-container"><h3 >හෘද පරීක්ෂාව / Auscutation</h3></div>
            <!-- <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT1" placeholder="T1" value="<--?php echo $ausT1;?>"><br><br>
            <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT2" placeholder="T2" value="<--?php echo $ausT2;?>"><br><br>
            <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT3" placeholder="T3" value="<--?php echo $ausT3;?>"><br><br>
             -->
             <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT1" placeholder="T1" value="<?php if (isset($_POST['ausT1'])) echo $_POST['ausT1'];?>"><br><br>

            <!-- <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT1" placeholder="T1" value="<--?php if (isset($_POST['ausT1'])) echo $_POST['ausT1'];?>"><br><br> -->
            <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT2" placeholder="T2" value="<?php if (isset($_POST['ausT2'])) echo $_POST['ausT2'];?>"><br><br>
            <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT3" placeholder="T3" value="<?php if (isset($_POST['ausT3'])) echo $_POST['ausT3'];?>"><br><br>
            <center><input type="submit" class="link" name="update" style="margin-bottom: 50px;" id="update" value="update"></center>

            
        </form>
    </body>
</html>
