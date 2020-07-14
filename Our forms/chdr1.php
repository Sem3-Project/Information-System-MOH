<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="cssClinic/newStyle.css">
    </head>
    <body>
        <form action="moh.php" method="post" >
            <div>
                <h3>Search NIC :</h3>
                <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="id" value="<?php echo $id;?>">
                <br><br>
                <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">
                
                <h3>ළමා සෞඛ්‍ය සටහන</h3>
                <table style="width:100% ;margin-bottom: 50px;" >
                    <tr>
                        <td>දරුවාගේ වයස</td> 
                        <td>මාස 1</td> <td>මාස 2</td> <td>මාස 4</td> <td>මාස 6</td> <td>මාස 9</td> 
                        <td>මාස 18</td> <td>අවු 3</td> <td>අවු 4</td> <td>අවු 5</td> 
                    </tr>
                    <tr>
                        <td >සායනයට පැමිණි දිනය</td>
                        <td ><input type="date" style="width:85%;" name="day1" value="<?php echo $day1;?>"></td>
                        <td ><input type="date" style="width:85%;" name="day2" value="<?php echo $day2;?>"></td>
                        <td ><input type="date" style="width:85%;" name="day3" value="<?php echo $day3;?>"></td>
                        <td ><input type="date" style="width:85%;" name="day4" value="<?php echo $day4;?>"></td>
                        <td ><input type="date" style="width:85%;" name="day5" value="<?php echo $day5;?>"></td>
                        <td ><input type="date" style="width:85%;" name="day6" value="<?php echo $day6;?>"></td>
                        <td ><input type="date" style="width:85%;" name="day7" value="<?php echo $day7;?>"></td>
                        <td ><input type="date" style="width:85%;" name="day8" value="<?php echo $day8;?>"></td>
                        <td ><input type="date" style="width:85%;" name="day9" value="<?php echo $day9;?>"></td>
                    </tr>
                    <tr>
                        <td >සංජානනීය ආබාධ</td>
                        <td><textarea name="attack1" rows="2" cols="15" ><?php echo $attack1;?></textarea></td>
                        <td><textarea name="attack2" rows="2" cols="15" ><?php echo $attack2;?></textarea></td>
                        <td><textarea name="attack3" rows="2" cols="15" ><?php echo $attack3;?></textarea></td>
                        <td><textarea name="attack4" rows="2" cols="15" ><?php echo $attack4;?></textarea></td>
                        <td><textarea name="attack5" rows="2" cols="15" ><?php echo $attack5;?></textarea></td>
                        <td><textarea name="attack6" rows="2" cols="15" ><?php echo $attack6;?></textarea></td>
                        <td><textarea name="attack7" rows="2" cols="15" ><?php echo $attack7;?></textarea></td>
                        <td><textarea name="attack8" rows="2" cols="15" ><?php echo $attack8;?></textarea></td>
                        <td><textarea name="attack9" rows="2" cols="15" ><?php echo $attack9;?></textarea></td>
                    </tr>
                    <tr>
                        <td>ඇස් (සුද/වපරය)</td>
                        <td><textarea name="eye1" rows="2" cols="15" ><?php echo $eye1;?></textarea></td>
                        <td><textarea name="eye2" rows="2" cols="15" ><?php echo $eye2;?></textarea></td>
                        <td><textarea name="eye3" rows="2" cols="15" ><?php echo $eye3;?></textarea></td>
                        <td><textarea name="eye4" rows="2" cols="15" ><?php echo $eye4;?></textarea></td>
                        <td><textarea name="eye5" rows="2" cols="15" ><?php echo $eye5;?></textarea></td>
                        <td><textarea name="eye6" rows="2" cols="15" ><?php echo $eye6;?></textarea></td>
                        <td><textarea name="eye7" rows="2" cols="15" ><?php echo $eye7;?></textarea></td>
                        <td><textarea name="eye8" rows="2" cols="15" ><?php echo $eye8;?></textarea></td>
                        <td><textarea name="eye9" rows="2" cols="15" ><?php echo $eye9;?></textarea></td>
                    </tr>
                    <tr>
                        <td rowspan="2">----------වම<br><br>පෙනීම<br><br>-------දකුණ</td>
                        <td><textarea name="left1" rows="2" cols="15" ><?php echo $left1;?></textarea></td>
                        <td><textarea name="left2" rows="2" cols="15" ><?php echo $left2;?></textarea></td>
                        <td><textarea name="left3" rows="2" cols="15" ><?php echo $left3;?></textarea></td>
                        <td><textarea name="left4" rows="2" cols="15" ><?php echo $left4;?></textarea></td>
                        <td><textarea name="left5" rows="2" cols="15" ><?php echo $left5;?></textarea></td>
                        <td><textarea name="left6" rows="2" cols="15" ><?php echo $left6;?></textarea></td>
                        <td><textarea name="left7" rows="2" cols="15" ><?php echo $left7;?></textarea></td>
                        <td><textarea name="left8" rows="2" cols="15" ><?php echo $left8;?></textarea></td>
                        <td><textarea name="left9" rows="2" cols="15" ><?php echo $left9;?></textarea></td>
                    </tr>
                    <tr>
                        <td ><textarea rows="2" cols="15" name="right1"  ><?php echo $right1;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="right2" ><?php echo $right2;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="right3" ><?php echo $right3;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="right4" ><?php echo $right4;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="right5" ><?php echo $right5;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="right6" ><?php echo $right6;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="right7" ><?php echo $right7;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="right8" ><?php echo $right8;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="right9" ><?php echo $right9;?></textarea></td> 
                    </tr>
                    <tr>
                        <td>රාත්‍රී අන්ධතාවය</td>
                        <td style="background-color: black;"></td><td style="background-color: black;"></td>
                        <td style="background-color: black;"></td><td style="background-color: black;"></td>
                        <td style="background-color: black;"></td><td style="background-color: black;"></td>
                        <td ><textarea rows="2" cols="15" name="blind1" ><?php echo $blind1;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="blind2" ><?php echo $blind2;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="blind3" ><?php echo $blind3;?></textarea></td>
                    </tr>
                    <tr>
                        <td>බිටෝ ලප</td>
                        <td style="background-color: black;"></td><td style="background-color: black;"></td>
                        <td style="background-color: black;"></td><td style="background-color: black;"></td>
                        <td style="background-color: black;"></td><td style="background-color: black;"></td>
                        <td ><textarea rows="2" cols="15" name="bito1" ><?php echo $bito1;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="bito2" ><?php echo $bito2;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="bito3" ><?php echo $bito3;?></textarea></td>
                    </tr>
                    <tr>
                        <td rowspan="2">----------වම<br><br><b>ඇසීම</b><br><br>-------දකුණ</td>
                        <td><textarea name="hleft1" rows="2" cols="15" ><?php echo $hleft1;?></textarea></td>
                        <td><textarea name="hleft2" rows="2" cols="15" ><?php echo $hleft2;?></textarea></td>
                        <td><textarea name="hleft3" rows="2" cols="15" ><?php echo $hleft3;?></textarea></td>
                        <td><textarea name="hleft4" rows="2" cols="15" ><?php echo $hleft4;?></textarea></td>
                        <td><textarea name="hleft5" rows="2" cols="15" ><?php echo $hleft5;?></textarea></td>
                        <td><textarea name="hleft6" rows="2" cols="15" ><?php echo $hleft6;?></textarea></td>
                        <td><textarea name="hleft7" rows="2" cols="15" ><?php echo $hleft7;?></textarea></td>
                        <td><textarea name="hleft8" rows="2" cols="15" ><?php echo $hleft8;?></textarea></td>
                        <td><textarea name="hleft9" rows="2" cols="15" ><?php echo $hleft9;?></textarea></td>
                    </tr>
                    <tr>
                        <td ><textarea rows="2" cols="15" name="hright1" ><?php echo $hright1;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="hright2" ><?php echo $hright2;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="hright3" ><?php echo $hright3;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="hright4" ><?php echo $hright4;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="hright5" ><?php echo $hright5;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="hright6" ><?php echo $hright6;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="hright7" ><?php echo $hright7;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="hright8" ><?php echo $hright8;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="hright9" ><?php echo $hright9;?></textarea></td> 
                    </tr>
                    <tr>
                        <td>දන්ත ව්‍යසනය</td>
                        <td style="background-color: black;"></td><td style="background-color: black;"></td>
                        <td style="background-color: black;"><
                        <td ><textarea rows="2" cols="15" name="tooth1" ><?php echo $tooth1;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="tooth2" ><?php echo $tooth2;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="tooth3" ><?php echo $tooth3;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="tooth4" ><?php echo $tooth4;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="tooth5" ><?php echo $tooth5;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="tooth6" ><?php echo $tooth6;?></textarea></td>
                    </tr>
                    <tr>
                        <td>දන්ත දෝෂ</td>
                        <td style="background-color: black;"></td><td style="background-color: black;"></td>
                        <td style="background-color: black;"><
                        <td ><textarea rows="2" cols="15" name="fault1" ><?php echo $fault1;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="fault2" ><?php echo $fault2;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="fault3" ><?php echo $fault3;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="fault4" ><?php echo $fault4;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="fault5" ><?php echo $fault5;?></textarea></td>
                        <td ><textarea rows="2" cols="15" name="fault6" ><?php echo $fault6;?></textarea></td>
                    </tr>
                    <tr>
                        <td rowspan="2">බර තත්වය <br><br><b>වර්ධනය</b><br><br>උස තත්වය</td>
                        <td><textarea name="weight1" rows="2" cols="15" ><?php echo $weight1;?></textarea></td>
                        <td><textarea name="weight2" rows="2" cols="15" ><?php echo $weight2;?></textarea></td>
                        <td><textarea name="weight3" rows="2" cols="15" ><?php echo $weight3;?></textarea></td>
                        <td><textarea name="weight4" rows="2" cols="15" ><?php echo $weight4;?></textarea></td>
                        <td><textarea name="weight5" rows="2" cols="15" ><?php echo $weight5;?></textarea></td>
                        <td><textarea name="weight6" rows="2" cols="15" ><?php echo $weight6;?></textarea></td>
                        <td><textarea name="weight7" rows="2" cols="15" ><?php echo $weight7;?></textarea></td>
                        <td><textarea name="weight8" rows="2" cols="15" ><?php echo $weight8;?></textarea></td>
                        <td><textarea name="weight9" rows="2" cols="15" ><?php echo $weight9;?></textarea></td>
                    </tr>
                    <tr>
                        <td ><textarea rows="2" cols="15" name="height1" ><?php echo $height1;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="height2" ><?php echo $height2;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="heigh3" ><?php echo $height3;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="height4" ><?php echo $height4;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="height5" ><?php echo $height5;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="height6" ><?php echo $height6;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="height7" ><?php echo $height7;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="height8" ><?php echo $height8;?></textarea></td> 
                        <td ><textarea rows="2" cols="15" name="height9" ><?php echo $height9;?></textarea></td> 
                    </tr>
                    <tr>
                        <td><b>සංවර්ධනය</b></td>
                        <td><textarea name="develop1" rows="2" cols="15" ><?php echo $develop1;?></textarea></td>
                        <td><textarea name="develop2" rows="2" cols="15" ><?php echo $develop2;?></textarea></td>
                        <td><textarea name="develop3" rows="2" cols="15" ><?php echo $develop3;?></textarea></td>
                        <td><textarea name="develop4" rows="2" cols="15" ><?php echo $develop4;?></textarea></td>
                        <td><textarea name="develop5" rows="2" cols="15" ><?php echo $develop5;?></textarea></td>
                        <td><textarea name="develop6" rows="2" cols="15" ><?php echo $develop6;?></textarea></td>
                        <td><textarea name="develop7" rows="2" cols="15" ><?php echo $develop7;?></textarea></td>
                        <td><textarea name="develop8" rows="2" cols="15" ><?php echo $develop8;?></textarea></td>
                        <td><textarea name="develop9" rows="2" cols="15" ><?php echo $develop9;?></textarea></td>
                    </tr>
                    <tr>
                        <td>හෘදය රෝග</td>
                        <td><textarea name="heart1" rows="2" cols="15" ><?php echo $heart1;?></textarea></td>
                        <td><textarea name="heart2" rows="2" cols="15" ><?php echo $heart2;?></textarea></td>
                        <td><textarea name="heart3" rows="2" cols="15" ><?php echo $heart3;?></textarea></td>
                        <td><textarea name="heart4" rows="2" cols="15" ><?php echo $heart4;?></textarea></td>
                        <td><textarea name="heart5" rows="2" cols="15" ><?php echo $heart5;?></textarea></td>
                        <td><textarea name="heart6" rows="2" cols="15" ><?php echo $heart6;?></textarea></td>
                        <td><textarea name="heart7" rows="2" cols="15" ><?php echo $heart7;?></textarea></td>
                        <td><textarea name="heart8" rows="2" cols="15" ><?php echo $heart8;?></textarea></td>
                        <td><textarea name="heart9" rows="2" cols="15" ><?php echo $heart9;?></textarea></td>
                    </tr>
                    <tr>
                        <td>උකුල් සන්ධිය</td>
                        <td><textarea name="joint1" rows="2" cols="15" ><?php echo $joint1;?></textarea></td>
                        <td><textarea name="joint2" rows="2" cols="15" ><?php echo $joint2;?></textarea></td>
                        <td><textarea name="joint3" rows="2" cols="15" ><?php echo $joint3;?></textarea></td>
                        <td><textarea name="joint4" rows="2" cols="15" ><?php echo $joint4;?></textarea></td>
                        <td><textarea name="joint5" rows="2" cols="15" ><?php echo $joint5;?></textarea></td>
                        <td><textarea name="joint6" rows="2" cols="15" ><?php echo $joint6;?></textarea></td>
                        <td><textarea name="joint7" rows="2" cols="15" ><?php echo $joint7;?></textarea></td>
                        <td><textarea name="joint8" rows="2" cols="15" ><?php echo $joint8;?></textarea></td>
                        <td><textarea name="joint9" rows="2" cols="15" ><?php echo $joint9;?></textarea></td>
                    </tr>
                    <tr>
                        <td><b>වෙනත් රෝගී තත්වයන්</b></td>
                        <td><textarea name="disease1" rows="2" cols="15" ><?php echo $disease1;?></textarea></td>
                        <td><textarea name="disease2" rows="2" cols="15" ><?php echo $disease2;?></textarea></td>
                        <td><textarea name="disease3" rows="2" cols="15" ><?php echo $disease3;?></textarea></td>
                        <td><textarea name="disease4" rows="2" cols="15" ><?php echo $disease4;?></textarea></td>
                        <td><textarea name="disease5" rows="2" cols="15" ><?php echo $disease5;?></textarea></td>
                        <td><textarea name="disease6" rows="2" cols="15" ><?php echo $disease6;?></textarea></td>
                        <td><textarea name="disease7" rows="2" cols="15" ><?php echo $disease7;?></textarea></td>
                        <td><textarea name="disease8" rows="2" cols="15" ><?php echo $disease8;?></textarea></td>
                        <td><textarea name="disease9" rows="2" cols="15" ><?php echo $disease9;?></textarea></td>
                    </tr>
                    <tr>
                        <td><textarea name="adisease0" rows="2" cols="15" ><?php echo $adisease0;?></textarea></td>
                        <td><textarea name="adisease1" rows="2" cols="15" ><?php echo $adisease1;?></textarea></td>
                        <td><textarea name="adisease2" rows="2" cols="15" ><?php echo $adisease2;?></textarea></td>
                        <td><textarea name="adisease3" rows="2" cols="15" ><?php echo $adisease3;?></textarea></td>
                        <td><textarea name="adisease4" rows="2" cols="15" ><?php echo $adisease4;?></textarea></td>
                        <td><textarea name="adisease5" rows="2" cols="15" ><?php echo $adisease5;?></textarea></td>
                        <td><textarea name="adisease6" rows="2" cols="15" ><?php echo $adisease6;?></textarea></td>
                        <td><textarea name="adisease7" rows="2" cols="15" ><?php echo $adisease7;?></textarea></td>
                        <td><textarea name="adisease8" rows="2" cols="15" ><?php echo $adisease8;?></textarea></td>
                        <td><textarea name="adisease9" rows="2" cols="15" ><?php echo $adisease9;?></textarea></td>
                    </tr>
                    <tr>
                        <td><textarea name="bdisease0" rows="2" cols="15" ><?php echo $bdisease0;?></textarea></td>
                        <td><textarea name="bdisease1" rows="2" cols="15" ><?php echo $bdisease1;?></textarea></td>
                        <td><textarea name="bdisease2" rows="2" cols="15" ><?php echo $bdisease2;?></textarea></td>
                        <td><textarea name="bdisease3" rows="2" cols="15" ><?php echo $bdisease3;?></textarea></td>
                        <td><textarea name="bdisease4" rows="2" cols="15" ><?php echo $bdisease4;?></textarea></td>
                        <td><textarea name="bdisease5" rows="2" cols="15" ><?php echo $bdisease5;?></textarea></td>
                        <td><textarea name="bdisease6" rows="2" cols="15" ><?php echo $bdisease6;?></textarea></td>
                        <td><textarea name="bdisease7" rows="2" cols="15" ><?php echo $bdisease7;?></textarea></td>
                        <td><textarea name="bdisease8" rows="2" cols="15" ><?php echo $bdisease8;?></textarea></td>
                        <td><textarea name="bdisease9" rows="2" cols="15" ><?php echo $bdisease9;?></textarea></td>
                    </tr>
                    <tr>
                        <td><textarea name="cdisease0" rows="2" cols="15" ><?php echo $cdisease0;?></textarea></td>
                        <td><textarea name="cdisease1" rows="2" cols="15" ><?php echo $cdisease1;?></textarea></td>
                        <td><textarea name="cdisease2" rows="2" cols="15" ><?php echo $cdisease2;?></textarea></td>
                        <td><textarea name="cdisease3" rows="2" cols="15" ><?php echo $cdisease3;?></textarea></td>
                        <td><textarea name="cdisease4" rows="2" cols="15" ><?php echo $cdisease4;?></textarea></td>
                        <td><textarea name="cdisease5" rows="2" cols="15" ><?php echo $cdisease5;?></textarea></td>
                        <td><textarea name="cdisease6" rows="2" cols="15" ><?php echo $cdisease6;?></textarea></td>
                        <td><textarea name="cdisease7" rows="2" cols="15" ><?php echo $cdisease7;?></textarea></td>
                        <td><textarea name="cdisease8" rows="2" cols="15" ><?php echo $cdisease8;?></textarea></td>
                        <td><textarea name="cdisease9" rows="2" cols="15" ><?php echo $cdisease9;?></textarea></td>
                    </tr>
                    <tr>
                        <td><textarea name="ddisease0" rows="2" cols="15" ><?php echo $ddisease0;?></textarea></td>
                        <td><textarea name="ddisease1" rows="2" cols="15" ><?php echo $ddisease1;?></textarea></td>
                        <td><textarea name="ddisease2" rows="2" cols="15" ><?php echo $ddisease2;?></textarea></td>
                        <td><textarea name="ddisease3" rows="2" cols="15" ><?php echo $ddisease3;?></textarea></td>
                        <td><textarea name="ddisease4" rows="2" cols="15" ><?php echo $ddisease4;?></textarea></td>
                        <td><textarea name="ddisease5" rows="2" cols="15" ><?php echo $ddisease5;?></textarea></td>
                        <td><textarea name="ddisease6" rows="2" cols="15" ><?php echo $ddisease6;?></textarea></td>
                        <td><textarea name="ddisease7" rows="2" cols="15" ><?php echo $ddisease7;?></textarea></td>
                        <td><textarea name="ddisease8" rows="2" cols="15" ><?php echo $ddisease8;?></textarea></td>
                        <td><textarea name="ddisease9" rows="2" cols="15" ><?php echo $ddisease9;?></textarea></td>
                    </tr>
                    <tr>
                        <td><textarea name="edisease0" rows="2" cols="15" ><?php echo $edisease0;?></textarea></td>
                        <td><textarea name="edisease1" rows="2" cols="15" ><?php echo $edisease1;?></textarea></td>
                        <td><textarea name="edisease2" rows="2" cols="15" ><?php echo $edisease2;?></textarea></td>
                        <td><textarea name="edisease3" rows="2" cols="15" ><?php echo $edisease3;?></textarea></td>
                        <td><textarea name="edisease4" rows="2" cols="15" ><?php echo $edisease4;?></textarea></td>
                        <td><textarea name="edisease5" rows="2" cols="15" ><?php echo $edisease5;?></textarea></td>
                        <td><textarea name="edisease6" rows="2" cols="15" ><?php echo $edisease6;?></textarea></td>
                        <td><textarea name="edisease7" rows="2" cols="15" ><?php echo $edisease7;?></textarea></td>
                        <td><textarea name="edisease8" rows="2" cols="15" ><?php echo $edisease8;?></textarea></td>
                        <td><textarea name="edisease9" rows="2" cols="15" ><?php echo $edisease9;?></textarea></td>
                    </tr>
                    <tr>
                        <td><textarea name="fdisease0" rows="2" cols="15" ><?php echo $fdisease0;?></textarea></td>
                        <td><textarea name="fdisease1" rows="2" cols="15" ><?php echo $fdisease1;?></textarea></td>
                        <td><textarea name="fdisease2" rows="2" cols="15" ><?php echo $fdisease2;?></textarea></td>
                        <td><textarea name="fdisease3" rows="2" cols="15" ><?php echo $fdisease3;?></textarea></td>
                        <td><textarea name="fdisease4" rows="2" cols="15" ><?php echo $fdisease4;?></textarea></td>
                        <td><textarea name="fdisease5" rows="2" cols="15" ><?php echo $fdisease5;?></textarea></td>
                        <td><textarea name="fdisease6" rows="2" cols="15" ><?php echo $fdisease6;?></textarea></td>
                        <td><textarea name="fdisease7" rows="2" cols="15" ><?php echo $fdisease7;?></textarea></td>
                        <td><textarea name="fdisease8" rows="2" cols="15" ><?php echo $fdisease8;?></textarea></td>
                        <td><textarea name="fdisease9" rows="2" cols="15" ><?php echo $fdisease9;?></textarea></td>
                    </tr>
                    <tr>
                        <td >පරීක්ෂා කල නිලධාරියාගේ නම</td>
                        <td ><input type="text" name="name1" style="width:85%" value="<?php echo $name1;?>"></td>
                        <td ><input type="text" name="name2" style="width:85%" value="<?php echo $name2;?>"></td>
                        <td ><input type="text" name="name3" style="width:85%" value="<?php echo $name3;?>"></td>
                        <td ><input type="text" name="name4" style="width:85%" value="<?php echo $name4;?>"></td>
                        <td ><input type="text" name="name5" style="width:85%" value="<?php echo $name5;?>"></td>
                        <td ><input type="text" name="name6" style="width:85%" value="<?php echo $name6;?>"></td>
                        <td ><input type="text" name="name7" style="width:85%" value="<?php echo $name7;?>"></td>
                        <td ><input type="text" name="name8" style="width:85%" value="<?php echo $name8;?>"></td>
                        <td ><input type="text" name="name9" style="width:85%" value="<?php echo $name9;?>"></td>
                    </tr>
                    <tr>
                        <td >පරීක්ෂා කල නිලධාරියාගේ තනතුර</td>
                        <td ><input type="text" name="position1" style="width:85%" value="<?php echo $position1;?>"></td>
                        <td ><input type="text" name="position2" style="width:85%" value="<?php echo $position2;?>"></td>
                        <td ><input type="text" name="position3" style="width:85%" value="<?php echo $position3;?>"></td>
                        <td ><input type="text" name="position4" style="width:85%" value="<?php echo $position4;?>"></td>
                        <td ><input type="text" name="position5" style="width:85%" value="<?php echo $position5;?>"></td>
                        <td ><input type="text" name="position6" style="width:85%" value="<?php echo $position6;?>"></td>
                        <td ><input type="text" name="position7" style="width:85%" value="<?php echo $position7;?>"></td>
                        <td ><input type="text" name="position8" style="width:85%" value="<?php echo $position8;?>"></td>
                        <td ><input type="text" name="position9" style="width:85%" value="<?php echo $position9;?>"></td>
                    </tr>
                </table>
                <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">
            </div>
        </form>
    </body>
</html>
