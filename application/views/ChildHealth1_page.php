<?php
require '../models/ChildHealth1.model.php';
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
        <form action="ChildHealth1_page.php" method="post" >
            <div>
                <div class="caption-container1">
                <div class="caption-container"><h3>ළමා සෞඛ්‍ය සටහන - වගුව I</h3></div>

                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id'];?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search">
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
                            <td ><input type="date" name="day1" value="<?php if (isset($_POST['day1'])) echo $_POST['day1'];?>"></td>
                            <td ><input type="date" name="day2" value="<?php if (isset($_POST['day2'])) echo $_POST['day2'];?>"></td>
                            <td ><input type="date" name="day3" value="<?php if (isset($_POST['day3'])) echo $_POST['day3'];?>"></td>
                            <td ><input type="date" name="day4" value="<?php if (isset($_POST['day4'])) echo $_POST['day4'];?>"></td>
                            <td ><input type="date" name="day5" value="<?php if (isset($_POST['day5'])) echo $_POST['day5'];?>"></td>
                        </tr>
                        <tr>
                            <td >සංජානනීය ආබාධ / Congenital Deformities</td>
                            <td><textarea name="attack1" rows="2"  ><?php if (isset($_POST['attack1'])) echo $_POST['attack1'];?></textarea></td>
                            <td><textarea name="attack2" rows="2" ><?php if (isset($_POST['attack2'])) echo $_POST['attack2'];?></textarea></td>
                            <td><textarea name="attack3" rows="2" ><?php if (isset($_POST['attack3'])) echo $_POST['attack3'];?></textarea></td>
                            <td><textarea name="attack4" rows="2" ><?php if (isset($_POST['attack4'])) echo $_POST['attack4'];?></textarea></td>
                            <td><textarea name="attack5" rows="2"><?php if (isset($_POST['attack5'])) echo $_POST['attack5'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>ඇස් (සුද/වපරය) / Eye (Cataract / Squint)</td>
                            <td><textarea name="eye1" rows="2"><?php if (isset($_POST['eye1'])) echo $_POST['eye1'];?></textarea></td>
                            <td><textarea name="eye2" rows="2"><?php if (isset($_POST['eye2'])) echo $_POST['eye2'];?></textarea></td>
                            <td><textarea name="eye3" rows="2"><?php if (isset($_POST['eye3'])) echo $_POST['eye3'];?></textarea></td>
                            <td><textarea name="eye4" rows="2"><?php if (isset($_POST['eye4'])) echo $_POST['eye4'];?></textarea></td>
                            <td><textarea name="eye5" rows="2"><?php if (isset($_POST['eye5'])) echo $_POST['eye5'];?></textarea></td>     
                        </tr>
                        
                        
                        <tr>
                            <td rowspan="2">වම/Left<br><br><b>පෙනීම?Vision</b><br><br>දකුණ?Right</td>
                            <td><textarea name="left1" rows="2"   ><?php if (isset($_POST['left1'])) echo $_POST['left1'];?></textarea></td>
                            <td><textarea name="left2" rows="2"   ><?php if (isset($_POST['left2'])) echo $_POST['left2'];?></textarea></td>
                            <td><textarea name="left3" rows="2"   ><?php if (isset($_POST['left3'])) echo $_POST['left3'];?></textarea></td>
                            <td><textarea name="left4" rows="2"   ><?php if (isset($_POST['left4'])) echo $_POST['left4'];?></textarea></td>
                            <td><textarea name="left5" rows="2"   ><?php if (isset($_POST['left5'])) echo $_POST['left5'];?></textarea></td>            
                        </tr>
                        <tr>
                            <td ><textarea rows="2"   name="right1"  ><?php if (isset($_POST['right1'])) echo $_POST['right1'];?></textarea></td> 
                            <td ><textarea rows="2"   name="right2" ><?php if (isset($_POST['right2'])) echo $_POST['right2'];?></textarea></td> 
                            <td ><textarea rows="2"   name="right3" ><?php if (isset($_POST['right3'])) echo $_POST['right3'];?></textarea></td> 
                            <td ><textarea rows="2"   name="right4" ><?php if (isset($_POST['right4'])) echo $_POST['right4'];?></textarea></td> 
                            <td ><textarea rows="2"   name="right5" ><?php if (isset($_POST['right5'])) echo $_POST['right5'];?></textarea></td> 
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
                            <td><textarea name="hleft1" rows="2"  ><?php if (isset($_POST['hleft1'])) echo $_POST['hleft1'];?></textarea></td>
                            <td><textarea name="hleft2" rows="2"  ><?php if (isset($_POST['hleft2'])) echo $_POST['hleft2'];?></textarea></td>
                            <td><textarea name="hleft3" rows="2"  ><?php if (isset($_POST['hleft3'])) echo $_POST['hleft3'];?></textarea></td>
                            <td><textarea name="hleft4" rows="2"  ><?php if (isset($_POST['hleft4'])) echo $_POST['hleft4'];?></textarea></td>
                            <td><textarea name="hleft5" rows="2"  ><?php if (isset($_POST['hleft5'])) echo $_POST['hleft5'];?></textarea></td>
                        </tr>
                        <tr>
                            <td ><textarea rows="2"  name="hright1" ><?php if (isset($_POST['hright1'])) echo $_POST['hright1'];?></textarea></td> 
                            <td ><textarea rows="2"  name="hright2" ><?php if (isset($_POST['hright2'])) echo $_POST['hright2'];?></textarea></td> 
                            <td ><textarea rows="2"  name="hright3" ><?php if (isset($_POST['hright3'])) echo $_POST['hright3'];?></textarea></td> 
                            <td ><textarea rows="2"  name="hright4" ><?php if (isset($_POST['hright4'])) echo $_POST['hright4'];?></textarea></td> 
                            <td ><textarea rows="2"  name="hright5" ><?php if (isset($_POST['hright5'])) echo $_POST['hright5'];?></textarea></td> 
                        </tr>
                        <tr>
                            <td>දන්ත ව්‍යසනය / Dental Deformity</td>
                            <td style="background-color: black;"></td><td style="background-color: black;"></td>
                            <td style="background-color: black;"><
                            <td ><textarea rows="2"  name="tooth1" ><?php if (isset($_POST['tooth1'])) echo $_POST['tooth1'];?></textarea></td>
                            <td ><textarea rows="2"  name="tooth2" ><?php if (isset($_POST['tooth2'])) echo $_POST['tooth2'];?></textarea></td>                       
                        </tr>
                        <tr>
                            <td>දන්ත දෝෂ / Dental Problems</td>
                            <td style="background-color: black;"></td><td style="background-color: black;"></td>
                            <td style="background-color: black;"><
                            <td ><textarea rows="2"  name="fault1" ><?php if (isset($_POST['fault1'])) echo $_POST['fault1'];?></textarea></td>
                            <td ><textarea rows="2"  name="fault2" ><?php if (isset($_POST['fault2'])) echo $_POST['fault2'];?></textarea></td>   
                        </tr>
                        <tr>
                            <td rowspan="2">බර තත්වය / Weight<br><br><b>වර්ධනය / Growth</b><br><br>උස තත්වය / Height</td>
                            <td><textarea name="weight1" rows="2"  ><?php if (isset($_POST['weight1'])) echo $_POST['weight1'];?></textarea></td>
                            <td><textarea name="weight2" rows="2"  ><?php if (isset($_POST['weight2'])) echo $_POST['weight2'];?></textarea></td>
                            <td><textarea name="weight3" rows="2"  ><?php if (isset($_POST['weight3'])) echo $_POST['weight3'];?></textarea></td>
                            <td><textarea name="weight4" rows="2"  ><?php if (isset($_POST['weight4'])) echo $_POST['weight4'];?></textarea></td>
                            <td><textarea name="weight5" rows="2"  ><?php if (isset($_POST['weight5'])) echo $_POST['weight5'];?></textarea></td>                  
                        </tr>
                        <tr>
                            <td ><textarea rows="2"  name="height1" ><?php if (isset($_POST['height1'])) echo $_POST['height1'];?></textarea></td> 
                            <td ><textarea rows="2"  name="height2" ><?php if (isset($_POST['height2'])) echo $_POST['height2'];?></textarea></td> 
                            <td ><textarea rows="2"  name="height3" ><?php if (isset($_POST['height3'])) echo $_POST['height3'];?></textarea></td> 
                            <td ><textarea rows="2"  name="height4" ><?php if (isset($_POST['height4'])) echo $_POST['height4'];?></textarea></td> 
                            <td ><textarea rows="2"  name="height5" ><?php if (isset($_POST['height5'])) echo $_POST['height5'];?></textarea></td> 
                        </tr>
                        <tr>
                            <td><b>සංවර්ධනය / Development</b></td>
                            <td><textarea name="develop1" rows="2"  ><?php if (isset($_POST['develop1'])) echo $_POST['develop1'];?></textarea></td>
                            <td><textarea name="develop2" rows="2"  ><?php if (isset($_POST['develop2'])) echo $_POST['develop2'];?></textarea></td>
                            <td><textarea name="develop3" rows="2"  ><?php if (isset($_POST['develop3'])) echo $_POST['develop3'];?></textarea></td>
                            <td><textarea name="develop4" rows="2"  ><?php if (isset($_POST['develop4'])) echo $_POST['develop4'];?></textarea></td>
                            <td><textarea name="develop5" rows="2"  ><?php if (isset($_POST['develop5'])) echo $_POST['develop5'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>හෘදය රෝග / Heart Problems</td>
                            <td><textarea name="heart1" rows="2"  ><?php if (isset($_POST['heart1'])) echo $_POST['heart1'];?></textarea></td>
                            <td><textarea name="heart2" rows="2"  ><?php if (isset($_POST['heart2'])) echo $_POST['heart2'];?></textarea></td>
                            <td><textarea name="heart3" rows="2"  ><?php if (isset($_POST['heart3'])) echo $_POST['heart3'];?></textarea></td>
                            <td><textarea name="heart4" rows="2"  ><?php if (isset($_POST['heart4'])) echo $_POST['heart4'];?></textarea></td>
                            <td><textarea name="heart5" rows="2"  ><?php if (isset($_POST['heart5'])) echo $_POST['heart5'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>උකුල් සන්ධිය / Hip Joint</td>
                            <td><textarea name="joint1" rows="2"  ><?php if (isset($_POST['joint1'])) echo $_POST['joint1'];?></textarea></td>
                            <td><textarea name="joint2" rows="2"  ><?php if (isset($_POST['joint2'])) echo $_POST['joint2'];?></textarea></td>
                            <td><textarea name="joint3" rows="2"  ><?php if (isset($_POST['joint3'])) echo $_POST['joint3'];?></textarea></td>
                            <td><textarea name="joint4" rows="2"  ><?php if (isset($_POST['joint4'])) echo $_POST['joint4'];?></textarea></td>
                            <td><textarea name="joint5" rows="2"  ><?php if (isset($_POST['joint5'])) echo $_POST['joint5'];?></textarea></td>
                        </tr>
                        <tr>
                            <td><b>වෙනත් රෝගී තත්වයන් / Mecellaneous Conditions</b></td>
                            <td><textarea name="disease1" rows="2"  ><?php if (isset($_POST['disease1'])) echo $_POST['disease1'];?></textarea></td>
                            <td><textarea name="disease2" rows="2"  ><?php if (isset($_POST['disease2'])) echo $_POST['disease2'];?></textarea></td>
                            <td><textarea name="disease3" rows="2"  ><?php if (isset($_POST['disease3'])) echo $_POST['disease3'];?></textarea></td>
                            <td><textarea name="disease4" rows="2"  ><?php if (isset($_POST['disease4'])) echo $_POST['disease4'];?></textarea></td>
                            <td><textarea name="disease5" rows="2"  ><?php if (isset($_POST['disease5'])) echo $_POST['disease5'];?></textarea></td>
                        </tr>    
                        <tr>
                            <td><textarea name="adisease0" rows="2"  ><?php if (isset($_POST['adisease0'])) echo $_POST['adisease0'];?></textarea></td>
                            <td><textarea name="adisease1" rows="2"  ><?php if (isset($_POST['adisease1'])) echo $_POST['adisease1'];?></textarea></td>
                            <td><textarea name="adisease2" rows="2"  ><?php if (isset($_POST['adisease2'])) echo $_POST['adisease2'];?></textarea></td>
                            <td><textarea name="adisease3" rows="2"  ><?php if (isset($_POST['adisease3'])) echo $_POST['adisease3'];?></textarea></td>
                            <td><textarea name="adisease4" rows="2"  ><?php if (isset($_POST['adisease4'])) echo $_POST['adisease4'];?></textarea></td> 
                            <td><textarea name="adisease5" rows="2"  ><?php if (isset($_POST['adisease5'])) echo $_POST['adisease5'];?></textarea></td>     
                        </tr>
                        <tr>
                            <td><textarea name="bdisease0" rows="2"  ><?php if (isset($_POST['bdisease0'])) echo $_POST['bdisease0'];?></textarea></td>
                            <td><textarea name="bdisease1" rows="2"  ><?php if (isset($_POST['bdisease1'])) echo $_POST['bdisease1'];?></textarea></td>
                            <td><textarea name="bdisease2" rows="2"  ><?php if (isset($_POST['bdisease2'])) echo $_POST['bdisease2'];?></textarea></td>
                            <td><textarea name="bdisease3" rows="2"  ><?php if (isset($_POST['bdisease3'])) echo $_POST['bdisease3'];?></textarea></td>
                            <td><textarea name="bdisease4" rows="2"  ><?php if (isset($_POST['bdisease4'])) echo $_POST['bdisease4'];?></textarea></td>
                            <td><textarea name="bdisease5" rows="2"  ><?php if (isset($_POST['bdisease5'])) echo $_POST['bdisease5'];?></textarea></td>   
                        </tr>
                        <tr>
                            <td><textarea name="cdisease0" rows="2"  ><?php if (isset($_POST['cdisease0'])) echo $_POST['cdisease0'];?></textarea></td>
                            <td><textarea name="cdisease1" rows="2"  ><?php if (isset($_POST['cdisease1'])) echo $_POST['cdisease1'];?></textarea></td>
                            <td><textarea name="cdisease2" rows="2"  ><?php if (isset($_POST['cdisease2'])) echo $_POST['cdisease2'];?></textarea></td>
                            <td><textarea name="cdisease3" rows="2"  ><?php if (isset($_POST['cdisease3'])) echo $_POST['cdisease3'];?></textarea></td>
                            <td><textarea name="cdisease4" rows="2"  ><?php if (isset($_POST['cdisease4'])) echo $_POST['cdisease4'];?></textarea></td>
                            <td><textarea name="cdisease5" rows="2"  ><?php if (isset($_POST['cdisease5'])) echo $_POST['cdisease5'];?></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="ddisease0" rows="2"  ><?php if (isset($_POST['ddisease0'])) echo $_POST['ddisease0'];?></textarea></td>
                            <td><textarea name="ddisease1" rows="2"  ><?php if (isset($_POST['ddisease1'])) echo $_POST['ddisease1'];?></textarea></td>
                            <td><textarea name="ddisease2" rows="2"  ><?php if (isset($_POST['ddisease2'])) echo $_POST['ddisease2'];?></textarea></td>
                            <td><textarea name="ddisease3" rows="2"  ><?php if (isset($_POST['ddisease3'])) echo $_POST['ddisease3'];?></textarea></td>
                            <td><textarea name="ddisease4" rows="2"  ><?php if (isset($_POST['ddisease4'])) echo $_POST['ddisease4'];?></textarea></td>
                            <td><textarea name="ddisease5" rows="2"  ><?php if (isset($_POST['ddisease5'])) echo $_POST['ddisease5'];?></textarea></td>   
                        </tr>
                        <tr>
                            <td><textarea name="edisease0" rows="2"  ><?php if (isset($_POST['edisease0'])) echo $_POST['edisease0'];?></textarea></td>
                            <td><textarea name="edisease1" rows="2"  ><?php if (isset($_POST['edisease1'])) echo $_POST['edisease1'];?></textarea></td>
                            <td><textarea name="edisease2" rows="2"  ><?php if (isset($_POST['edisease2'])) echo $_POST['edisease2'];?></textarea></td>
                            <td><textarea name="edisease3" rows="2"  ><?php if (isset($_POST['edisease3'])) echo $_POST['edisease3'];?></textarea></td>
                            <td><textarea name="edisease4" rows="2"  ><?php if (isset($_POST['edisease4'])) echo $_POST['edisease4'];?></textarea></td>
                            <td><textarea name="edisease5" rows="2"  ><?php if (isset($_POST['edisease5'])) echo $_POST['edisease5'];?></textarea></td> 
                        </tr>
                        <tr>
                            <td><textarea name="fdisease0" rows="2"  ><?php if (isset($_POST['fdisease0'])) echo $_POST['fdisease0'];?></textarea></td>
                            <td><textarea name="fdisease1" rows="2"  ><?php if (isset($_POST['fdisease1'])) echo $_POST['fdisease1'];?></textarea></td>
                            <td><textarea name="fdisease2" rows="2"  ><?php if (isset($_POST['fdisease2'])) echo $_POST['fdisease2'];?></textarea></td>
                            <td><textarea name="fdisease3" rows="2"  ><?php if (isset($_POST['fdisease3'])) echo $_POST['fdisease3'];?></textarea></td>
                            <td><textarea name="fdisease4" rows="2"  ><?php if (isset($_POST['fdisease4'])) echo $_POST['fdisease4'];?></textarea></td>
                            <td><textarea name="fdisease5" rows="2"  ><?php if (isset($_POST['fdisease5'])) echo $_POST['fdisease5'];?></textarea></td>    
                        </tr>
                        <tr>
                            <td >පරීක්ෂා කල නිලධාරියාගේ නම / Name of Examiner</td>
                            <td ><input type="text" name="name1" style="width:100%" value="<?php if (isset($_POST['name1'])) echo $_POST['name1'];?>"></td>
                            <td ><input type="text" name="name2" style="width:100%" value="<?php if (isset($_POST['name2'])) echo $_POST['name2'];?>"></td>
                            <td ><input type="text" name="name3" style="width:100%" value="<?php if (isset($_POST['name3'])) echo $_POST['name3'];?>"></td>
                            <td ><input type="text" name="name4" style="width:100%" value="<?php if (isset($_POST['name4'])) echo $_POST['name4'];?>"></td>
                            <td ><input type="text" name="name5" style="width:100%" value="<?php if (isset($_POST['name5'])) echo $_POST['name5'];?>"></td>    
                        </tr>
                        <tr>
                            <td >පරීක්ෂා කල නිලධාරියාගේ තනතුර / Post of Examiner</td>
                            <td ><input type="text" name="position1" style="width:100%" value="<?php if (isset($_POST['position1'])) echo $_POST['position1'];?>"></td>
                            <td ><input type="text" name="position2" style="width:100%" value="<?php if (isset($_POST['position2'])) echo $_POST['position2'];?>"></td>
                            <td ><input type="text" name="position3" style="width:100%" value="<?php if (isset($_POST['position3'])) echo $_POST['position3'];?>"></td>
                            <td ><input type="text" name="position4" style="width:100%" value="<?php if (isset($_POST['position4'])) echo $_POST['position4'];?>"></td>
                            <td ><input type="text" name="position5" style="width:100%" value="<?php if (isset($_POST['position5'])) echo $_POST['position5'];?>"></td>
                        </tr>
                    </table>

                    <h4> (වර්ධනය : නියමිත බර = N, අධි බර = OW, වර්ධනය අඩාල = O, අඩුබර = X, උග්‍ර අඩුබර = XX </h4>
                    <h4> අන් සියලුම තත්වයන් සඳහා ආබාධ ඇත්නම් X ලකුණද නැතිනම් O ලකුණද යොදන්න)</h4>
                    <h4>නියමිත උස = NH, මිටි බව = S</h4>
                   <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                   <center><input type="submit" class="link" name="update" style="margin-bottom: 50px; " value="Update"></center>
                    <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->
                </div>
            </div>
        </form>
    </body>
</html>      
