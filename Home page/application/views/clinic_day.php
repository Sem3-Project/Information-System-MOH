<?php
require '../models/clinic_day_model.php';
?>
<html>
    <head>
        <title>Clinic Care</title>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" href="../../public/css/clinic style.css">
        <h2 class="title">Clinic Care</h2>
    </head>
    <body>
    <form action="clinic_day.php" method="POST">
    <input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here"  value="<?php echo $id;?>"><br>
        

        <select name="day"></option>
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
        </select>
        
        <button type="submit" name="search" value="Find">Search</button><br><br>
        <div>
        

        <label>සායනයට පැමිණි දිනය/Date of visit</label><br>
        <input type="date" name="dov" value="<?php echo $dov;?>"><br><br>

        <label>ගර්භයට සති/POA</label><br>
        <input type="number" name="poa" value=<?php echo $poa;?>><br><br>

        <label>මුත්‍රා - සීනි/Urine - Sugar</label><br>

        <select name="sugar"></option>
                <option value="not done">---Select---</option>
                <option value="NIL" <?php if($sugar=="NIL") echo 'selected="selected"'; ?>>NIL</option>
                <option value="green" <?php if($sugar=="green") echo 'selected="selected"'; ?>>green</option>
                <option value="yellow" <?php if($sugar=="yellow") echo 'selected="selected"'; ?>>yellow</option>
                <option value="orange" <?php if($sugar=="orange") echo 'selected="selected"'; ?>>orange</option>
                <option value="brick red" <?php if($sugar=="brick red") echo 'selected="selected"'; ?>>brick red</option>
        </select>


        <label>මුත්‍රා - ඇල්බියුමින්/Sugar - Albumin</label>
        <select name="alb"></option>
                <option value="not done">---Select---</option>
                <option value="+" <?php if($alb=="+") echo 'selected="selected"'; ?>>+</option>
                <option value="++" <?php if($alb=="++") echo 'selected="selected"'; ?>>++</option>
                <option value="+++" <?php if($alb=="+++") echo 'selected="selected"'; ?>>+++</option>
        </select>

        <label>සුදුමැලි බව/Pallor</label><br>
        <select name="pallor"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($pallor=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($pallor=="+") echo 'selected="selected"'; ?>>+</option>
        </select>

        <label>ඉදිමුම - වළලුකර/Oedema - Ankle</label><br>
        <select name="ankle"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($ankle=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($ankle=="+") echo 'selected="selected"'; ?>>+</option>
        </select>

        <label>ඉදිමුම - මුහුණ/Oedema - Facial</label><br>
        <select name="facial"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($facial=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($facial=="+") echo 'selected="selected"'; ?>>+</option>
        </select>

        <label>රුධිර පීඩනය/BP - Systolic</label><br>
        <input type="number" name="sys" value=<?php echo $sys;?>><br><br>

        <label>රුධිර පීඩනය/BP - Diastolic</label><br>
        <input type="number" name="dia" value=<?php echo $dia;?>><br><br>

        <label>බුධ්නයේ උස/Fundal Height(cm)</label><br>
        <input type="number" name="fundalh" value="<?php echo $fundalh;?>"><br><br>

        <label>බර/Weight(kg)</label><br>
        <input type="number" name="weight" value="<?php echo $weight;?>"><br><br>

        <label>භ්‍රෑණයේ ලීලාව/Foetal Lie</label><br>
        <select name="lie"></option>
            <option value="not done">---Select---</option>
            <option value="LL" <?php if($lie=="LL") echo 'selected="selected"'; ?>>LL</option>
            <option value="TL" <?php if($lie=="TL") echo 'selected="selected"'; ?>>TL</option>
            <option value="OL" <?php if($lie=="OL") echo 'selected="selected"'; ?>>OL</option>
            <option value="Other" <?php if($lie=="Other") echo 'selected="selected"'; ?>>Other</option>
        </select>

        <label>භ්‍රෑණයේ පිහිටීම/Presentation</label><br>
        <select name="presen"></option>
            <option value="not done">---Select---</option>
            <option value="Cephalic" <?php if($presen=="Cephalic") echo 'selected="selected"'; ?>>Cephalic</option>
            <option value="Breech" <?php if($presen=="Breech") echo 'selected="selected"'; ?>>Breech</option>
            <option value="Other" <?php if($presen=="Other") echo 'selected="selected"'; ?>>Other</option>
        </select> 

        <label>ප්‍රමුඛ කොටස ශ්‍රෝණි කුහරය තුල පිහිටීම/Engagement of the presenting part</label><br>
        <select name="engage"></option>
            <option value="not done">---Select---</option>
            <option value="HNE" <?php if($engage=="HNE") echo 'selected="selected"'; ?>>HNE</option>
            <option value="HE" <?php if($engage=="HE") echo 'selected="selected"'; ?>>HE</option>
            <option value="Other" <?php if($engage=="Other") echo 'selected="selected"'; ?>>Other</option>
        </select>        
        
        <label>භ්‍රෑණ චලන/FM</label><br>
        <select name="fm"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($fm=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($fm=="+") echo 'selected="selected"'; ?>>+</option>
        </select>

        <label>හෘද ශබ්ද/FHS</label><br>
        <select name="fhs"></option>
                <option value="not done">---Select---</option>
                <option value="0" <?php if($fhs=="0") echo 'selected="selected"'; ?>>0</option>
                <option value="+" <?php if($fhs=="+") echo 'selected="selected"'; ?>>+</option>
        </select> 

        <label>යකඩ/Iron</label><br>
        <input type="number" name="iron" value=<?php echo $iron;?>><br><br>

        <label>ෆෝලේට්/Folate</label><br>
        <input type="number" name="fol" value=<?php echo $fol;?>><br><br>

        <label>කැල්සියම්/Calcium</label><br>
        <input type="number" name="cal" value=<?php echo $cal;?>><br><br>

        <label>විටමින් සී/Vitamin C</label><br>
        <input type="number" name="vitc" value=<?php echo $vitc;?>><br><br>

        <label>පෝෂණ අතිරේක/Food Supplement</label><br>
        <input type="number" name="food" value=<?php echo $food;?>><br><br>

        <label>පරීක්ෂා කරන ලද නිලධාරියාගේ නම/Name of the officer examined</label><br>
        <input type="text" name="officer" value="<?php echo $officer;?>""><br><br>

        <label>නිල නාමය/Desigation</label><br>
        <input type="text" name="post" value="<?php echo $post;?>""><br><br>
       
        <button type="submit" name="save" >Save</button>

        </form>
</div>
    </body>
</html>