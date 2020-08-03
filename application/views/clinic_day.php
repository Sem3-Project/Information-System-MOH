<?php
require '../models/clinic_day_model.php';
?>
<html>
    <head>
        <title>Clinic Care</title>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm.css">
        <!-- <link rel="stylesheet" href="../../public/css/clinic style.css"> -->
     
    </head>

    <head>
        <body>
            <div class="hero-image">
                <img src="../../public/images/logo.png" class="logo-image"/>
                <img src="../../public/images/line.jpg" class="line-image"/>
                <a href="login_test.php"><img src="../../public/images/logout.png" class="logout-image"></a>
                <a href="home.php"><img src="../../public/images/home.png" class="home-image"></a>
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
        <h2 class="title" align="center">සායනික සංරක්ෂණය / Clinic Care</h2>
    <form action="clinic_day.php" method="POST">
    <div class="caption-container">
            <h3 >Search NIC :</h3>
        </div>
    <!-- <input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here"  value="<--?php echo $id;?>"><br> -->
    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>">

            <div class="caption-container">
            <h3 >Search Clinic Day :</h3>
        </div>

        <select name="day" style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; "></option>
                <option value="day1" <?php if($day=="day1") echo 'selected="selected"'; ?>>day1</option>
                <option value="day2" <?php if($day=="day2") echo 'selected="selected"'; ?>>day2</option>
                <option value="day3" <?php if($day=="day3") echo 'selected="selected"'; ?>>day3</option>
                <option value="day4" <?php if($day=="day4") echo 'selected="selected"'; ?>>day4</option>
                <option value="day5" <?php if($day=="day5") echo 'selected="selected"'; ?>>day5</option>
                <option value="day6" <?php if($day=="day6") echo 'selected="selected"'; ?>>day6</option>
                <option value="day7" <?php if($day=="day7") echo 'selected="selected"'; ?>>day7</option>
                <option value="day8" <?php if($day=="day8") echo 'selected="selected"'; ?>>day8</option>
                <option value="day9" <?php if($day=="day9") echo 'selected="selected"'; ?>>day9</option>
                <option value="day10" <?php if($day=="day10") echo 'selected="selected"'; ?>>day10</option>
        </select><br><br>
        
        <!-- <button type="submit" name="search" value="Find">Search</button><br><br> -->

        <input type="submit" class="link" name="search" value="Search"></center><br><br>
    
        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>සායනයට පැමිණි දිනය / Date of visit</b></div>
        <input type="date" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"  name="dov" value="<?php echo $dov;?>"><br><br>

        <div style="text-align:left; width: 50%; height: 20px; padding:10px; font-size:15px;"><b>ගර්භයට සති / POA</b></div>
        <input style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" type="number" name="poa" value=<?php echo $poa;?>>
     
        <!-- <div class="caption-container"><h3>මුත්‍රා / Urine</h3></div> -->

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>මුත්‍රා - සීනි / Urine - Sugar</b></div>

        <select name="sugar" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
                <option value="not done">---Select---</option>
                <option value="NIL" <?php if($sugar=="NIL") echo 'selected="selected"'; ?>>NIL</option>
                <option value="green" <?php if($sugar=="green") echo 'selected="selected"'; ?>>green</option>
                <option value="yellow" <?php if($sugar=="yellow") echo 'selected="selected"'; ?>>yellow</option>
                <option value="orange" <?php if($sugar=="orange") echo 'selected="selected"'; ?>>orange</option>
                <option value="brick red" <?php if($sugar=="brick red") echo 'selected="selected"'; ?>>brick red</option>
        </select><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>මුත්‍රා - ඇල්බියුමින් / Sugar - Albumin</b></div>      
        <select name="alb" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
                <option value="not done">---Select---</option>
                <option value="+" <?php if($alb=="+") echo 'selected="selected"'; ?>>+</option>
                <option value="++" <?php if($alb=="++") echo 'selected="selected"'; ?>>++</option>
                <option value="+++" <?php if($alb=="+++") echo 'selected="selected"'; ?>>+++</option>
        </select><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>සුදුමැලි බව / Pallor</b></div>
        <select name="pallor" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($pallor=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($pallor=="+") echo 'selected="selected"'; ?>>+</option>
        </select><br><br>

        <!-- <div class="caption-container"><h3>ඉදිමුම / Oedema</h3></div> -->

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>ඉදිමුම - වළලුකර / Oedema - Ankle</b></div>

        <select name="ankle" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($ankle=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($ankle=="+") echo 'selected="selected"'; ?>>+</option>
        </select><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>ඉදිමුම - මුහුණ / Oedema - Facial</b></div>

        <select name="facial" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($facial=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($facial=="+") echo 'selected="selected"'; ?>>+</option>
        </select><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>රුධිර පීඩනය / BP - Systolic</b></div>
        <input type="number" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="sys" value=<?php echo $sys;?>><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>රුධිර පීඩනය / BP - Diastolic</b></div>
        <input type="number" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"name="dia" value=<?php echo $dia;?>><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>බුධ්නයේ උස / Fundal Height(cm)</b></div>
        <input type="number" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="fundalh" value="<?php echo $fundalh;?>"><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>බර / Weight(kg)</b></div>
        <input type="number" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="weight" value="<?php echo $weight;?>"><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>භ්‍රෑණයේ ලීලාව / Foetal Lie</b></div>
        <select name="lie" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
            <option value="not done">---Select---</option>
            <option value="LL" <?php if($lie=="LL") echo 'selected="selected"'; ?>>LL</option>
            <option value="TL" <?php if($lie=="TL") echo 'selected="selected"'; ?>>TL</option>
            <option value="OL" <?php if($lie=="OL") echo 'selected="selected"'; ?>>OL</option>
            <option value="Other" <?php if($lie=="Other") echo 'selected="selected"'; ?>>Other</option>
        </select><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>භ්‍රෑණයේ පිහිටීම / Presentation</b></div>
        <select name="presen" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
            <option value="not done">---Select---</option>
            <option value="Cephalic" <?php if($presen=="Cephalic") echo 'selected="selected"'; ?>>Cephalic</option>
            <option value="Breech" <?php if($presen=="Breech") echo 'selected="selected"'; ?>>Breech</option>
            <option value="Other" <?php if($presen=="Other") echo 'selected="selected"'; ?>>Other</option>
        </select><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>ප්‍රමුඛ කොටස ශ්‍රෝණි කුහරය තුල පිහිටීම / Engagement of the presenting part</b></div>
        <select name="engage" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
            <option value="not done">---Select---</option>
            <option value="HNE" <?php if($engage=="HNE") echo 'selected="selected"'; ?>>HNE</option>
            <option value="HE" <?php if($engage=="HE") echo 'selected="selected"'; ?>>HE</option>
            <option value="Other" <?php if($engage=="Other") echo 'selected="selected"'; ?>>Other</option>
        </select><br><br>        
        
        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>භ්‍රෑණ චලන / FM</b></div>
        <select name="fm" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($fm=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($fm=="+") echo 'selected="selected"'; ?>>+</option>
        </select><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>හෘද ශබ්ද / FHS</b></div>
        <select name="fhs" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($fhs=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($fhs=="+") echo 'selected="selected"'; ?>>+</option>
        </select><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>යකඩ / Iron</b></div>
        <input type="number" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="iron" value=<?php echo $iron;?>><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>ෆෝලේට් / Folate</b></div>
        <input type="number" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="fol" value=<?php echo $fol;?>><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>කැල්සියම් / Calcium</b></div>
        <input type="number" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="cal" value=<?php echo $cal;?>><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>විටමින් සී / Vitamin C</b></div>
        <input type="number" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="vitc" value=<?php echo $vitc;?>><br><br>
 
        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>පෝෂණ අතිරේක / Food Supplement</b></div>
        <input type="number" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="food" value=<?php echo $food;?>><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>පරීක්ෂා කරන ලද නිලධාරියාගේ නම / Name of the officer examined</b></div>
        <input type="text" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="officer" value="<?php echo $officer;?>""><br><br>

        <div style="text-align:left; width: 100%; height: 20px; padding:10px; font-size:15px;"><b>නිල නාමය / Desigation</b></div>
        <input type="text" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="post" value="<?php echo $post;?>""><br><br>
    
        <center><input type="submit" class="link" name="save" style="margin-bottom: 50px; margin-right: 50px;" value="Update"></center>
        </form>
</div>
    </body>
</html>