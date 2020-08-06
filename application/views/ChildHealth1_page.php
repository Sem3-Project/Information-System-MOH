<?php
require '../models/ChildHealth1_model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Child Health Record - I</title>
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
        <form action="ChildHealth1.php" method="post" >
            <div>
                <div class="caption-container1">
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search">
                    
                    <div class="caption-container"><h3>ළමා සෞඛ්‍ය සටහන - වගුව I</h3></div>
                    <table style="width:100% ;margin-bottom: 50px;" >
                        <tr>
                            <td style="width:20%">දරුවාගේ වයස / Child's Age</td> 
                            <td style="width:15%">මාස 1 / Month 1</td> 
                            <td style="width:15%">මාස 2 / Month 2</td> 
                            <td style="width:15%">මාස 4 / Month 4</td> 
                            <td style="width:15%">මාස 6 / Month 6</td> 
                            <td style="width:15%">මාස 9 / Month 9</td> 
                        </tr>
                        <tr>
                            <td >සායනයට පැමිණි දිනය / Clinic Attendance</td>
                            <td ><input type="date" name="day1" value="<?php echo $day1;?>"></td>
                            <td ><input type="date" name="day2" value="<?php echo $day2;?>"></td>
                            <td ><input type="date" name="day3" value="<?php echo $day3;?>"></td>
                            <td ><input type="date" name="day4" value="<?php echo $day4;?>"></td>
                            <td ><input type="date" name="day5" value="<?php echo $day5;?>"></td>
                        </tr>
                        <tr>
                            <td >සංජානනීය ආබාධ / Congenital Deformities</td>
                            <td><textarea name="attack1" rows="2"  ><?php echo $attack1;?></textarea></td>
                            <td><textarea name="attack2" rows="2" ><?php echo $attack2;?></textarea></td>
                            <td><textarea name="attack3" rows="2" ><?php echo $attack3;?></textarea></td>
                            <td><textarea name="attack4" rows="2" ><?php echo $attack4;?></textarea></td>
                            <td><textarea name="attack5" rows="2"><?php echo $attack5;?></textarea></td>
                        </tr>
                        <tr>
                            <td>ඇස් (සුද/වපරය) / Eye (Cataract / Squint)</td>
                            <td><textarea name="eye1" rows="2"><?php echo $eye1;?></textarea></td>
                            <td><textarea name="eye2" rows="2"><?php echo $eye2;?></textarea></td>
                            <td><textarea name="eye3" rows="2"><?php echo $eye3;?></textarea></td>
                            <td><textarea name="eye4" rows="2"><?php echo $eye4;?></textarea></td>
                            <td><textarea name="eye5" rows="2"><?php echo $eye5;?></textarea></td>     
                        </tr>
                        
                        
                        <tr>
                            <td rowspan="2">වම/Left<br><br><b>පෙනීම?Vision</b><br><br>දකුණ?Right</td>
                            <td><textarea name="left1" rows="2"   ><?php echo $left1;?></textarea></td>
                            <td><textarea name="left2" rows="2"   ><?php echo $left2;?></textarea></td>
                            <td><textarea name="left3" rows="2"   ><?php echo $left3;?></textarea></td>
                            <td><textarea name="left4" rows="2"   ><?php echo $left4;?></textarea></td>
                            <td><textarea name="left5" rows="2"   ><?php echo $left5;?></textarea></td>            
                        </tr>
                        <tr>
                            <td ><textarea rows="2"   name="right1"  ><?php echo $right1;?></textarea></td> 
                            <td ><textarea rows="2"   name="right2" ><?php echo $right2;?></textarea></td> 
                            <td ><textarea rows="2"   name="right3" ><?php echo $right3;?></textarea></td> 
                            <td ><textarea rows="2"   name="right4" ><?php echo $right4;?></textarea></td> 
                            <td ><textarea rows="2"   name="right5" ><?php echo $right5;?></textarea></td> 
                        </tr>
                        <tr>
                            <td>රාත්‍රී අන්ධතාවය / Night Blindness</td>
                            <td style="background-color: black;"></td><td style="background-color: black;"></td>
                            <td style="background-color: black;"></td><td style="background-color: black;"></td>
                            <td style="background-color: black;"></td>
                        </tr>
                        <tr>
                            <td>බිටෝ ලප / Bito Spots</td>
                            <td style="background-color: black;"></td><td style="background-color: black;"></td>
                            <td style="background-color: black;"></td><td style="background-color: black;"></td>
                            <td style="background-color: black;"></td>
                        </tr>
                        <tr>
                            <td rowspan="2">වම/Left<br><br><b>ඇසීම/Hearing</b><br><br>දකුණ/Right</td>
                            <td><textarea name="hleft1" rows="2"  ><?php echo $hleft1;?></textarea></td>
                            <td><textarea name="hleft2" rows="2"  ><?php echo $hleft2;?></textarea></td>
                            <td><textarea name="hleft3" rows="2"  ><?php echo $hleft3;?></textarea></td>
                            <td><textarea name="hleft4" rows="2"  ><?php echo $hleft4;?></textarea></td>
                            <td><textarea name="hleft5" rows="2"  ><?php echo $hleft5;?></textarea></td>
                        </tr>
                        <tr>
                            <td ><textarea rows="2"  name="hright1" ><?php echo $hright1;?></textarea></td> 
                            <td ><textarea rows="2"  name="hright2" ><?php echo $hright2;?></textarea></td> 
                            <td ><textarea rows="2"  name="hright3" ><?php echo $hright3;?></textarea></td> 
                            <td ><textarea rows="2"  name="hright4" ><?php echo $hright4;?></textarea></td> 
                            <td ><textarea rows="2"  name="hright5" ><?php echo $hright5;?></textarea></td> 
                        </tr>
                        <tr>
                            <td>දන්ත ව්‍යසනය / Dental Deformity</td>
                            <td style="background-color: black;"></td><td style="background-color: black;"></td>
                            <td style="background-color: black;"><
                            <td ><textarea rows="2"  name="tooth1" ><?php echo $tooth1;?></textarea></td>
                            <td ><textarea rows="2"  name="tooth2" ><?php echo $tooth2;?></textarea></td>                       
                        </tr>
                        <tr>
                            <td>දන්ත දෝෂ / Dental Problems</td>
                            <td style="background-color: black;"></td><td style="background-color: black;"></td>
                            <td style="background-color: black;"><
                            <td ><textarea rows="2"  name="fault1" ><?php echo $fault1;?></textarea></td>
                            <td ><textarea rows="2"  name="fault2" ><?php echo $fault2;?></textarea></td>   
                        </tr>
                        <tr>
                            <td rowspan="2">බර තත්වය / Weight<br><br><b>වර්ධනය / Growth</b><br><br>උස තත්වය / Height</td>
                            <td><textarea name="weight1" rows="2"  ><?php echo $weight1;?></textarea></td>
                            <td><textarea name="weight2" rows="2"  ><?php echo $weight2;?></textarea></td>
                            <td><textarea name="weight3" rows="2"  ><?php echo $weight3;?></textarea></td>
                            <td><textarea name="weight4" rows="2"  ><?php echo $weight4;?></textarea></td>
                            <td><textarea name="weight5" rows="2"  ><?php echo $weight5;?></textarea></td>                  
                        </tr>
                        <tr>
                            <td ><textarea rows="2"  name="height1" ><?php echo $height1;?></textarea></td> 
                            <td ><textarea rows="2"  name="height2" ><?php echo $height2;?></textarea></td> 
                            <td ><textarea rows="2"  name="height3" ><?php echo $height3;?></textarea></td> 
                            <td ><textarea rows="2"  name="height4" ><?php echo $height4;?></textarea></td> 
                            <td ><textarea rows="2"  name="height5" ><?php echo $height5;?></textarea></td> 
                        </tr>
                        <tr>
                            <td><b>සංවර්ධනය / Development</b></td>
                            <td><textarea name="develop1" rows="2"  ><?php echo $develop1;?></textarea></td>
                            <td><textarea name="develop2" rows="2"  ><?php echo $develop2;?></textarea></td>
                            <td><textarea name="develop3" rows="2"  ><?php echo $develop3;?></textarea></td>
                            <td><textarea name="develop4" rows="2"  ><?php echo $develop4;?></textarea></td>
                            <td><textarea name="develop5" rows="2"  ><?php echo $develop5;?></textarea></td>
                        </tr>
                        <tr>
                            <td>හෘදය රෝග / Heart Problems</td>
                            <td><textarea name="heart1" rows="2"  ><?php echo $heart1;?></textarea></td>
                            <td><textarea name="heart2" rows="2"  ><?php echo $heart2;?></textarea></td>
                            <td><textarea name="heart3" rows="2"  ><?php echo $heart3;?></textarea></td>
                            <td><textarea name="heart4" rows="2"  ><?php echo $heart4;?></textarea></td>
                            <td><textarea name="heart5" rows="2"  ><?php echo $heart5;?></textarea></td>
                        </tr>
                        <tr>
                            <td>උකුල් සන්ධිය / Hip Joint</td>
                            <td><textarea name="joint1" rows="2"  ><?php echo $joint1;?></textarea></td>
                            <td><textarea name="joint2" rows="2"  ><?php echo $joint2;?></textarea></td>
                            <td><textarea name="joint3" rows="2"  ><?php echo $joint3;?></textarea></td>
                            <td><textarea name="joint4" rows="2"  ><?php echo $joint4;?></textarea></td>
                            <td><textarea name="joint5" rows="2"  ><?php echo $joint5;?></textarea></td>
                        </tr>
                        <tr>
                            <td><b>වෙනත් රෝගී තත්වයන් / Mecellaneous Conditions</b></td>
                            <td><textarea name="disease1" rows="2"  ><?php echo $disease1;?></textarea></td>
                            <td><textarea name="disease2" rows="2"  ><?php echo $disease2;?></textarea></td>
                            <td><textarea name="disease3" rows="2"  ><?php echo $disease3;?></textarea></td>
                            <td><textarea name="disease4" rows="2"  ><?php echo $disease4;?></textarea></td>
                            <td><textarea name="disease5" rows="2"  ><?php echo $disease5;?></textarea></td>
                        </tr>    
                        <tr>
                            <td><textarea name="adisease0" rows="2"  ><?php echo $adisease0;?></textarea></td>
                            <td><textarea name="adisease1" rows="2"  ><?php echo $adisease1;?></textarea></td>
                            <td><textarea name="adisease2" rows="2"  ><?php echo $adisease2;?></textarea></td>
                            <td><textarea name="adisease3" rows="2"  ><?php echo $adisease3;?></textarea></td>
                            <td><textarea name="adisease4" rows="2"  ><?php echo $adisease4;?></textarea></td> 
                            <td><textarea name="adisease5" rows="2"  ><?php echo $adisease5;?></textarea></td>     
                        </tr>
                        <tr>
                            <td><textarea name="bdisease0" rows="2"  ><?php echo $bdisease0;?></textarea></td>
                            <td><textarea name="bdisease1" rows="2"  ><?php echo $bdisease1;?></textarea></td>
                            <td><textarea name="bdisease2" rows="2"  ><?php echo $bdisease2;?></textarea></td>
                            <td><textarea name="bdisease3" rows="2"  ><?php echo $bdisease3;?></textarea></td>
                            <td><textarea name="bdisease4" rows="2"  ><?php echo $bdisease4;?></textarea></td>
                            <td><textarea name="bdisease5" rows="2"  ><?php echo $bdisease5;?></textarea></td>   
                        </tr>
                        <tr>
                            <td><textarea name="cdisease0" rows="2"  ><?php echo $cdisease0;?></textarea></td>
                            <td><textarea name="cdisease1" rows="2"  ><?php echo $cdisease1;?></textarea></td>
                            <td><textarea name="cdisease2" rows="2"  ><?php echo $cdisease2;?></textarea></td>
                            <td><textarea name="cdisease3" rows="2"  ><?php echo $cdisease3;?></textarea></td>
                            <td><textarea name="cdisease4" rows="2"  ><?php echo $cdisease4;?></textarea></td>
                            <td><textarea name="cdisease5" rows="2"  ><?php echo $cdisease5;?></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="ddisease0" rows="2"  ><?php echo $ddisease0;?></textarea></td>
                            <td><textarea name="ddisease1" rows="2"  ><?php echo $ddisease1;?></textarea></td>
                            <td><textarea name="ddisease2" rows="2"  ><?php echo $ddisease2;?></textarea></td>
                            <td><textarea name="ddisease3" rows="2"  ><?php echo $ddisease3;?></textarea></td>
                            <td><textarea name="ddisease4" rows="2"  ><?php echo $ddisease4;?></textarea></td>
                            <td><textarea name="ddisease5" rows="2"  ><?php echo $ddisease5;?></textarea></td>   
                        </tr>
                        <tr>
                            <td><textarea name="edisease0" rows="2"  ><?php echo $edisease0;?></textarea></td>
                            <td><textarea name="edisease1" rows="2"  ><?php echo $edisease1;?></textarea></td>
                            <td><textarea name="edisease2" rows="2"  ><?php echo $edisease2;?></textarea></td>
                            <td><textarea name="edisease3" rows="2"  ><?php echo $edisease3;?></textarea></td>
                            <td><textarea name="edisease4" rows="2"  ><?php echo $edisease4;?></textarea></td>
                            <td><textarea name="edisease5" rows="2"  ><?php echo $edisease5;?></textarea></td> 
                        </tr>
                        <tr>
                            <td><textarea name="fdisease0" rows="2"  ><?php echo $fdisease0;?></textarea></td>
                            <td><textarea name="fdisease1" rows="2"  ><?php echo $fdisease1;?></textarea></td>
                            <td><textarea name="fdisease2" rows="2"  ><?php echo $fdisease2;?></textarea></td>
                            <td><textarea name="fdisease3" rows="2"  ><?php echo $fdisease3;?></textarea></td>
                            <td><textarea name="fdisease4" rows="2"  ><?php echo $fdisease4;?></textarea></td>
                            <td><textarea name="fdisease5" rows="2"  ><?php echo $fdisease5;?></textarea></td>    
                        </tr>
                        <tr>
                            <td >පරීක්ෂා කල නිලධාරියාගේ නම / Name of Examiner</td>
                            <td ><input type="text" name="name1" style="width:100%" value="<?php echo $name1;?>"></td>
                            <td ><input type="text" name="name2" style="width:100%" value="<?php echo $name2;?>"></td>
                            <td ><input type="text" name="name3" style="width:100%" value="<?php echo $name3;?>"></td>
                            <td ><input type="text" name="name4" style="width:100%" value="<?php echo $name4;?>"></td>
                            <td ><input type="text" name="name5" style="width:100%" value="<?php echo $name5;?>"></td>    
                        </tr>
                        <tr>
                            <td >පරීක්ෂා කල නිලධාරියාගේ තනතුර / Post of Examiner</td>
                            <td ><input type="text" name="position1" style="width:100%" value="<?php echo $position1;?>"></td>
                            <td ><input type="text" name="position2" style="width:100%" value="<?php echo $position2;?>"></td>
                            <td ><input type="text" name="position3" style="width:100%" value="<?php echo $position3;?>"></td>
                            <td ><input type="text" name="position4" style="width:100%" value="<?php echo $position4;?>"></td>
                            <td ><input type="text" name="position5" style="width:100%" value="<?php echo $position5;?>"></td>
                        </tr>
                    </table>
                    <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                    <center><input type="submit" class="link" name="update" style="margin-bottom: 50px; " value="Update"></center>
                    <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->
                </div>
            </div>
        </form>
    </body>
</html>                
