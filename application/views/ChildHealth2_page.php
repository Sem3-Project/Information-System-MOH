<?php
require '../models/ChildHealth2_model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newStyle.css">
    </head>
    <body>
        <form action="ChildHealth2_page.php" method="post" >
            <div>
                <h3>Search NIC :</h3>
                <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="id" value="<?php echo $id;?>">
                <br><br>
                <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">
                <h3>ළමා සෞඛ්‍ය සටහන - වගුව II</h3>
                <table style="width:100% ;margin-bottom: 50px;" >
                    <tr>
                        <td>දරුවාගේ වයස</td> 
                        <td>මාස 18</td> <td>අවු 3</td> <td>අවු 4</td> <td>අවු 5</td> 
                    </tr>
                    <tr>
                        <td >සායනයට පැමිණි දිනය</td>
                        <td ><input type="date" style="width:100%;" name="day6" value="<?php echo $day6;?>"></td>
                        <td ><input type="date" style="width:100%;" name="day7" value="<?php echo $day7;?>"></td>
                        <td ><input type="date" style="width:100%;" name="day8" value="<?php echo $day8;?>"></td>
                        <td ><input type="date" style="width:100%;" name="day9" value="<?php echo $day9;?>"></td>
                    </tr>
                    <tr>
                        <td >සංජානනීය ආබාධ</td>
                        <td><textarea name="attack6" rows="2" cols="25" ><?php echo $attack6;?></textarea></td>
                        <td><textarea name="attack7" rows="2" cols="25" ><?php echo $attack7;?></textarea></td>
                        <td><textarea name="attack8" rows="2" cols="25" ><?php echo $attack8;?></textarea></td>
                        <td><textarea name="attack9" rows="2" cols="25" ><?php echo $attack9;?></textarea></td>
                    </tr>
                    <tr>
                        <td>ඇස් (සුද/වපරය)</td>
                        <td><textarea name="eye6" rows="2" cols="25" ><?php echo $eye6;?></textarea></td>
                        <td><textarea name="eye7" rows="2" cols="25" ><?php echo $eye7;?></textarea></td>
                        <td><textarea name="eye8" rows="2" cols="25" ><?php echo $eye8;?></textarea></td>
                        <td><textarea name="eye9" rows="2" cols="25" ><?php echo $eye9;?></textarea></td>
                    </tr>
                    <tr>
                        <td rowspan="2">වම<br><br><b>පෙනීම</b><br><br>දකුණ</td>
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
                        <td>රාත්‍රී අන්ධතාවය</td>
                        <td style="background-color: black;"></td>
                        <td ><textarea rows="2" cols="25" name="blind1" ><?php echo $blind1;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="blind2" ><?php echo $blind2;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="blind3" ><?php echo $blind3;?></textarea></td>
                    </tr>
                    <tr>
                        <td>බිටෝ ලප</td>
                        <td style="background-color: black;"></td>
                        <td ><textarea rows="2" cols="25" name="bito1" ><?php echo $bito1;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="bito2" ><?php echo $bito2;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="bito3" ><?php echo $bito3;?></textarea></td>
                    </tr>
                    <tr>
                        <td rowspan="2">වම<br><br><b>ඇසීම</b><br><br>දකුණ</td>
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
                        <td>දන්ත ව්‍යසනය</td>
                        <td ><textarea rows="2" cols="25" name="tooth3" ><?php echo $tooth3;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="tooth4" ><?php echo $tooth4;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="tooth5" ><?php echo $tooth5;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="tooth6" ><?php echo $tooth6;?></textarea></td>
                    </tr>
                    <tr>
                        <td>දන්ත දෝෂ</td>
                        <td ><textarea rows="2" cols="25" name="fault3" ><?php echo $fault3;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="fault4" ><?php echo $fault4;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="fault5" ><?php echo $fault5;?></textarea></td>
                        <td ><textarea rows="2" cols="25" name="fault6" ><?php echo $fault6;?></textarea></td>
                    </tr>
                    <tr>
                        <td rowspan="2">බර තත්වය <br><br><b>වර්ධනය</b><br><br>උස තත්වය</td>
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
                        <td><b>සංවර්ධනය</b></td>
                        <td><textarea name="develop6" rows="2" cols="25" ><?php echo $develop6;?></textarea></td>
                        <td><textarea name="develop7" rows="2" cols="25" ><?php echo $develop7;?></textarea></td>
                        <td><textarea name="develop8" rows="2" cols="25" ><?php echo $develop8;?></textarea></td>
                        <td><textarea name="develop9" rows="2" cols="25" ><?php echo $develop9;?></textarea></td>
                    </tr>
                    <tr>
                        <td>හෘදය රෝග</td>
                        <td><textarea name="heart6" rows="2" cols="25" ><?php echo $heart6;?></textarea></td>
                        <td><textarea name="heart7" rows="2" cols="25" ><?php echo $heart7;?></textarea></td>
                        <td><textarea name="heart8" rows="2" cols="25" ><?php echo $heart8;?></textarea></td>
                        <td><textarea name="heart9" rows="2" cols="25" ><?php echo $heart9;?></textarea></td>
                    </tr>
                    <tr>
                        <td>උකුල් සන්ධිය</td>
                        <td><textarea name="joint6" rows="2" cols="25" ><?php echo $joint6;?></textarea></td>
                        <td><textarea name="joint7" rows="2" cols="25" ><?php echo $joint7;?></textarea></td>
                        <td><textarea name="joint8" rows="2" cols="25" ><?php echo $joint8;?></textarea></td>
                        <td><textarea name="joint9" rows="2" cols="25" ><?php echo $joint9;?></textarea></td>
                    </tr>
                    <tr>
                        <td><b>වෙනත් රෝගී තත්වයන්</b></td>
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
                        <td >පරීක්ෂා කල නිලධාරියාගේ නම</td> 
                        <td ><input type="text" name="name6" style="width:100%" value="<?php echo $name6;?>"></td>
                        <td ><input type="text" name="name7" style="width:100%" value="<?php echo $name7;?>"></td>
                        <td ><input type="text" name="name8" style="width:100%" value="<?php echo $name8;?>"></td>
                        <td ><input type="text" name="name9" style="width:100%" value="<?php echo $name9;?>"></td>
                    </tr>
                    <tr>
                        <td >පරීක්ෂා කල නිලධාරියාගේ තනතුර</td>
                        <td ><input type="text" name="position6" style="width:100%" value="<?php echo $position6;?>"></td>
                        <td ><input type="text" name="position7" style="width:100%" value="<?php echo $position7;?>"></td>
                        <td ><input type="text" name="position8" style="width:100%" value="<?php echo $position8;?>"></td>
                        <td ><input type="text" name="position9" style="width:100%" value="<?php echo $position9;?>"></td>
                    </tr>
                </table>
                <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->
            </div>
        </form>
    </body>
</html>
