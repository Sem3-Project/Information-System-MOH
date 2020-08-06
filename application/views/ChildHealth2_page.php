<?php
require '../models/ChildHealth2_model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Child Health Record - II</title>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm.css">
    </head>
    <head>
        <body>
            <div class="hero-image">
                <img src="../../public/images/logo.png" class="logo-image"/>
                <img src="../../public/images/line.jpg" class="line-image"/>
                <a href="login_page.php"><img src="../../public/images/logout.png" class="logout-image"></a>
                <a href="home.php"><img src="../../public/images/home.png" class="home-image"></a>
                <div class="hero-text">
                    <h1 style="font-size:25px">Office of the Medical Officer of Health</h1>
                    <h3 style="font-size:25px">Gampaha</h3>
                </div>
            </div>
        </body>
    </head>
    <body>
        <form action="ChildHealth2_page.php" method="post" >
            <div>
                <div class="caption-container1">
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search">
                    <div class="caption-container"><h3>ළමා සෞඛ්‍ය සටහන - වගුව II</h3></div>
                    <table style="width:100% ;margin-bottom: 50px;" >
                        <tr>
                            <td>දරුවාගේ වයස / Child's Age</td> 
                            <td>මාස 18 / Month 18</td> <td>අවු 3 / Year 3 </td> <td>අවු 4 / Year 4</td> <td>අවු 5 / Year 5</td> 
                        </tr>
                        <tr>
                            <td >සායනයට පැමිණි දිනය / Clinic Attendance</td>
                            <td ><input type="date" style="width:100%;" name="day6" value="<?php echo $day6;?>"></td>
                            <td ><input type="date" style="width:100%;" name="day7" value="<?php echo $day7;?>"></td>
                            <td ><input type="date" style="width:100%;" name="day8" value="<?php echo $day8;?>"></td>
                            <td ><input type="date" style="width:100%;" name="day9" value="<?php echo $day9;?>"></td>
                        </tr>
                        <tr>
                            <td >සංජානනීය ආබාධ / Congenital Deformities</td>
                            <td><textarea name="attack6" rows="2" cols="25" ><?php echo $attack6;?></textarea></td>
                            <td><textarea name="attack7" rows="2" cols="25" ><?php echo $attack7;?></textarea></td>
                            <td><textarea name="attack8" rows="2" cols="25" ><?php echo $attack8;?></textarea></td>
                            <td><textarea name="attack9" rows="2" cols="25" ><?php echo $attack9;?></textarea></td>
                        </tr>
                        <tr>
                            <td>ඇස් (සුද/වපරය) / Eye(Cataract/Squint)</td>
                            <td><textarea name="eye6" rows="2" cols="25" ><?php echo $eye6;?></textarea></td>
                            <td><textarea name="eye7" rows="2" cols="25" ><?php echo $eye7;?></textarea></td>
                            <td><textarea name="eye8" rows="2" cols="25" ><?php echo $eye8;?></textarea></td>
                            <td><textarea name="eye9" rows="2" cols="25" ><?php echo $eye9;?></textarea></td>
                        </tr>
                        <tr>
                            <td rowspan="2">වම/Left<br><br><b>පෙනීම/Vision</b><br><br>දකුණ/Right</td>
                            <td><textarea name="left6" rows="2" cols="25" ><?php echo $left6;?></textarea></td>
                            <td><textarea name="left7" rows="2" cols="25" ><?php echo $left7;?></textarea></td>
                            <td><textarea name="left8" rows="2" cols="25" ><?php echo $left8;?></textarea></td>
                            <td><textarea name="left9" rows="2" cols="25" ><?php echo $left9;?></textarea></td>
                        </tr>
                        <tr>
                            <td ><textarea rows="2" cols="25" name="right6" ><?php echo $right6;?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="right7" ><?php echo $right7;?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="right8" ><?php echo $right8;?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="right9" ><?php echo $right9;?></textarea></td> 
                        </tr>
                        <tr>
                            <td>රාත්‍රී අන්ධතාවය / Night Blindness</td>
                            <td style="background-color: black;"></td>
                            <td ><textarea rows="2" cols="25" name="blind1" ><?php echo $blind1;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="blind2" ><?php echo $blind2;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="blind3" ><?php echo $blind3;?></textarea></td>
                        </tr>
                        <tr>
                            <td>බිටෝ ලප / Bito Spots</td>
                            <td style="background-color: black;"></td>
                            <td ><textarea rows="2" cols="25" name="bito1" ><?php echo $bito1;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="bito2" ><?php echo $bito2;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="bito3" ><?php echo $bito3;?></textarea></td>
                        </tr>
                        <tr>
                            <td rowspan="2">වම/Left<br><br><b>ඇසීම/Hearing</b><br><br>දකුණ/Right</td>
                            <td><textarea name="hleft6" rows="2" cols="25" ><?php echo $hleft6;?></textarea></td>
                            <td><textarea name="hleft7" rows="2" cols="25" ><?php echo $hleft7;?></textarea></td>
                            <td><textarea name="hleft8" rows="2" cols="25" ><?php echo $hleft8;?></textarea></td>
                            <td><textarea name="hleft9" rows="2" cols="25" ><?php echo $hleft9;?></textarea></td>
                        </tr>
                        <tr>
                            <td ><textarea rows="2" cols="25" name="hright6" ><?php echo $hright6;?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="hright7" ><?php echo $hright7;?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="hright8" ><?php echo $hright8;?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="hright9" ><?php echo $hright9;?></textarea></td> 
                        </tr>
                        <tr>
                            <td>දන්ත ව්‍යසනය / Dental Deformity</td>
                            <td ><textarea rows="2" cols="25" name="tooth3" ><?php echo $tooth3;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="tooth4" ><?php echo $tooth4;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="tooth5" ><?php echo $tooth5;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="tooth6" ><?php echo $tooth6;?></textarea></td>
                        </tr>
                        <tr>
                            <td>දන්ත දෝෂ / Dental Problems</td>
                            <td ><textarea rows="2" cols="25" name="fault3" ><?php echo $fault3;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="fault4" ><?php echo $fault4;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="fault5" ><?php echo $fault5;?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="fault6" ><?php echo $fault6;?></textarea></td>
                        </tr>
                        <tr>
                            <td rowspan="2">බර තත්වය/Weight <br><br><b>වර්ධනය/Growth</b><br><br>උස තත්වය/Height</td>
                            <td><textarea name="weight6" rows="2" cols="25" ><?php echo $weight6;?></textarea></td>
                            <td><textarea name="weight7" rows="2" cols="25" ><?php echo $weight7;?></textarea></td>
                            <td><textarea name="weight8" rows="2" cols="25" ><?php echo $weight8;?></textarea></td>
                            <td><textarea name="weight9" rows="2" cols="25" ><?php echo $weight9;?></textarea></td>
                        </tr>
                        <tr>
                            <td ><textarea rows="2" cols="25" name="height6" ><?php echo $height6;?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="height7" ><?php echo $height7;?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="height8" ><?php echo $height8;?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="height9" ><?php echo $height9;?></textarea></td> 
                        </tr>
                        <tr>
                            <td><b>සංවර්ධනය / Development</b></td>
                            <td><textarea name="develop6" rows="2" cols="25" ><?php echo $develop6;?></textarea></td>
                            <td><textarea name="develop7" rows="2" cols="25" ><?php echo $develop7;?></textarea></td>
                            <td><textarea name="develop8" rows="2" cols="25" ><?php echo $develop8;?></textarea></td>
                            <td><textarea name="develop9" rows="2" cols="25" ><?php echo $develop9;?></textarea></td>
                        </tr>
                        <tr>
                            <td>හෘදය රෝග / Heart Problems</td>
                            <td><textarea name="heart6" rows="2" cols="25" ><?php echo $heart6;?></textarea></td>
                            <td><textarea name="heart7" rows="2" cols="25" ><?php echo $heart7;?></textarea></td>
                            <td><textarea name="heart8" rows="2" cols="25" ><?php echo $heart8;?></textarea></td>
                            <td><textarea name="heart9" rows="2" cols="25" ><?php echo $heart9;?></textarea></td>
                        </tr>
                        <tr>
                            <td>උකුල් සන්ධිය / Hip Joint</td>
                            <td><textarea name="joint6" rows="2" cols="25" ><?php echo $joint6;?></textarea></td>
                            <td><textarea name="joint7" rows="2" cols="25" ><?php echo $joint7;?></textarea></td>
                            <td><textarea name="joint8" rows="2" cols="25" ><?php echo $joint8;?></textarea></td>
                            <td><textarea name="joint9" rows="2" cols="25" ><?php echo $joint9;?></textarea></td>
                        </tr>
                        <tr>
                            <td><b>වෙනත් රෝගී තත්වයන් / Mecellaneous Conditions</b></td>
                            <td><textarea name="disease6" rows="2" cols="25" ><?php echo $disease6;?></textarea></td>
                            <td><textarea name="disease7" rows="2" cols="25" ><?php echo $disease7;?></textarea></td>
                            <td><textarea name="disease8" rows="2" cols="25" ><?php echo $disease8;?></textarea></td>
                            <td><textarea name="disease9" rows="2" cols="25" ><?php echo $disease9;?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><textarea name="adisease6" rows="2" cols="25" ><?php echo $adisease6;?></textarea></td>
                            <td><textarea name="adisease7" rows="2" cols="25" ><?php echo $adisease7;?></textarea></td>
                            <td><textarea name="adisease8" rows="2" cols="25" ><?php echo $adisease8;?></textarea></td>
                            <td><textarea name="adisease9" rows="2" cols="25" ><?php echo $adisease9;?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><textarea name="bdisease6" rows="2" cols="25" ><?php echo $bdisease6;?></textarea></td>
                            <td><textarea name="bdisease7" rows="2" cols="25" ><?php echo $bdisease7;?></textarea></td>
                            <td><textarea name="bdisease8" rows="2" cols="25" ><?php echo $bdisease8;?></textarea></td>
                            <td><textarea name="bdisease9" rows="2" cols="25" ><?php echo $bdisease9;?></textarea></td>
                        </tr>
                        <tr>
                            <td></td> 
                            <td><textarea name="cdisease6" rows="2" cols="25" ><?php echo $cdisease6;?></textarea></td>
                            <td><textarea name="cdisease7" rows="2" cols="25" ><?php echo $cdisease7;?></textarea></td>
                            <td><textarea name="cdisease8" rows="2" cols="25" ><?php echo $cdisease8;?></textarea></td>
                            <td><textarea name="cdisease9" rows="2" cols="25" ><?php echo $cdisease9;?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>     
                            <td><textarea name="ddisease6" rows="2" cols="25" ><?php echo $ddisease6;?></textarea></td>
                            <td><textarea name="ddisease7" rows="2" cols="25" ><?php echo $ddisease7;?></textarea></td>
                            <td><textarea name="ddisease8" rows="2" cols="25" ><?php echo $ddisease8;?></textarea></td>
                            <td><textarea name="ddisease9" rows="2" cols="25" ><?php echo $ddisease9;?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>  
                            <td><textarea name="edisease6" rows="2" cols="25" ><?php echo $edisease6;?></textarea></td>
                            <td><textarea name="edisease7" rows="2" cols="25" ><?php echo $edisease7;?></textarea></td>
                            <td><textarea name="edisease8" rows="2" cols="25" ><?php echo $edisease8;?></textarea></td>
                            <td><textarea name="edisease9" rows="2" cols="25" ><?php echo $edisease9;?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>  
                            <td><textarea name="fdisease6" rows="2" cols="25" ><?php echo $fdisease6;?></textarea></td>
                            <td><textarea name="fdisease7" rows="2" cols="25" ><?php echo $fdisease7;?></textarea></td>
                            <td><textarea name="fdisease8" rows="2" cols="25" ><?php echo $fdisease8;?></textarea></td>
                            <td><textarea name="fdisease9" rows="2" cols="25" ><?php echo $fdisease9;?></textarea></td>
                        </tr>
                        <tr>
                            <td >පරීක්ෂා කල නිලධාරියාගේ නම / Name of Examiner</td> 
                            <td ><input type="text" name="name6" style="width:100%" value="<?php echo $name6;?>"></td>
                            <td ><input type="text" name="name7" style="width:100%" value="<?php echo $name7;?>"></td>
                            <td ><input type="text" name="name8" style="width:100%" value="<?php echo $name8;?>"></td>
                            <td ><input type="text" name="name9" style="width:100%" value="<?php echo $name9;?>"></td>
                        </tr>
                        <tr>
                            <td >පරීක්ෂා කල නිලධාරියාගේ තනතුර / Post of Examiner</td>
                            <td ><input type="text" name="position6" style="width:100%" value="<?php echo $position6;?>"></td>
                            <td ><input type="text" name="position7" style="width:100%" value="<?php echo $position7;?>"></td>
                            <td ><input type="text" name="position8" style="width:100%" value="<?php echo $position8;?>"></td>
                            <td ><input type="text" name="position9" style="width:100%" value="<?php echo $position9;?>"></td>
                        </tr>
                    </table>
                    <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                    <center><input type="submit" class="link" name="update" style="margin-bottom: 50px;" value="Update"></center>
                    <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->
                </div>
            </div>
        </form>
    </body>
</html>

