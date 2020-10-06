<?php
require '../models/ChildHealth2.model.php';
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
        <form action="ChildHealth2_page.php" method="post" >
            <div>
                <div class="caption-container1">
                <div class="caption-container"><h3>ළමා සෞඛ්‍ය සටහන - වගුව II</h3></div>

                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id'];?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search">
                    <table style="width:100% ;margin-bottom: 50px;" >
                        <tr>
                            <td>දරුවාගේ වයස / Child's Age</td> 
                            <td>මාස 18 / Month 18</td> <td>අවු 3 / Year 3 </td> <td>අවු 4 / Year 4</td> <td>අවු 5 / Year 5</td> 
                        </tr>
                        <tr>
                            <td >සායනයට පැමිණි දිනය / Clinic Attendance</td>
                            <td ><input type="date" style="width:100%;" name="day6" value="<?php if (isset($_POST['day6'])) echo $_POST['day6'];?>"></td>
                            <td ><input type="date" style="width:100%;" name="day7" value="<?php if (isset($_POST['day7'])) echo $_POST['day7'];?>"></td>
                            <td ><input type="date" style="width:100%;" name="day8" value="<?php if (isset($_POST['day8'])) echo $_POST['day8'];?>"></td>
                            <td ><input type="date" style="width:100%;" name="day9" value="<?php if (isset($_POST['day9'])) echo $_POST['day9'];?>"></td>
                        </tr>
                        <tr>
                            <td >සංජානනීය ආබාධ / Congenital Deformities</td>
                            <td><textarea name="attack6" rows="2" cols="25" ><?php if (isset($_POST['attack6'])) echo $_POST['attack6'];?></textarea></td>
                            <td><textarea name="attack7" rows="2" cols="25" ><?php if (isset($_POST['attack7'])) echo $_POST['attack7'];?></textarea></td>
                            <td><textarea name="attack8" rows="2" cols="25" ><?php if (isset($_POST['attack8'])) echo $_POST['attack8'];?></textarea></td>
                            <td><textarea name="attack9" rows="2" cols="25" ><?php if (isset($_POST['attack9'])) echo $_POST['attack9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>ඇස් (සුද/වපරය) / Eye(Cataract/Squint)</td>
                            <td><textarea name="eye6" rows="2" cols="25" ><?php if (isset($_POST['eye6'])) echo $_POST['eye6'];?></textarea></td>
                            <td><textarea name="eye7" rows="2" cols="25" ><?php if (isset($_POST['eye7'])) echo $_POST['eye7'];?></textarea></td>
                            <td><textarea name="eye8" rows="2" cols="25" ><?php if (isset($_POST['eye8'])) echo $_POST['eye8'];?></textarea></td>
                            <td><textarea name="eye9" rows="2" cols="25" ><?php if (isset($_POST['eye9'])) echo $_POST['eye9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td rowspan="2">වම/Left<br><br><b>පෙනීම/Vision</b><br><br>දකුණ/Right</td>
                            <td><textarea name="left6" rows="2" cols="25" ><?php if (isset($_POST['left6'])) echo $_POST['left6'];?></textarea></td>
                            <td><textarea name="left7" rows="2" cols="25" ><?php if (isset($_POST['left7'])) echo $_POST['left7'];?></textarea></td>
                            <td><textarea name="left8" rows="2" cols="25" ><?php if (isset($_POST['left8'])) echo $_POST['left8'];?></textarea></td>
                            <td><textarea name="left9" rows="2" cols="25" ><?php if (isset($_POST['left9'])) echo $_POST['left9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td ><textarea rows="2" cols="25" name="right6" ><?php if (isset($_POST['right6'])) echo $_POST['right6'];?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="right7" ><?php if (isset($_POST['right7'])) echo $_POST['right7'];?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="right8" ><?php if (isset($_POST['right8'])) echo $_POST['right8'];?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="right9" ><?php if (isset($_POST['right9'])) echo $_POST['right9'];?></textarea></td> 
                        </tr>
                        <tr>
                            <td>රාත්‍රී අන්ධතාවය / Night Blindness</td>
                            <td style="background-color: black;"></td>
                            <td ><textarea rows="2" cols="25" name="blind1" ><?php if (isset($_POST['blind1'])) echo $_POST['blind1'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="blind2" ><?php if (isset($_POST['blind2'])) echo $_POST['blind2'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="blind3" ><?php if (isset($_POST['blind3'])) echo $_POST['blind3'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>බිටෝ ලප / Bito Spots</td>
                            <td style="background-color: black;"></td>
                            <td ><textarea rows="2" cols="25" name="bito1" ><?php if (isset($_POST['bito1'])) echo $_POST['bito1'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="bito2" ><?php if (isset($_POST['bito2'])) echo $_POST['bito2'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="bito3" ><?php if (isset($_POST['bito3'])) echo $_POST['bito3'];?></textarea></td>
                        </tr>
                        <tr>
                            <td rowspan="2">වම/Left<br><br><b>ඇසීම/Hearing</b><br><br>දකුණ/Right</td>
                            <td><textarea name="hleft6" rows="2" cols="25" ><?php if (isset($_POST['hleft6'])) echo $_POST['hleft6'];?></textarea></td>
                            <td><textarea name="hleft7" rows="2" cols="25" ><?php if (isset($_POST['hleft7'])) echo $_POST['hleft7'];?></textarea></td>
                            <td><textarea name="hleft8" rows="2" cols="25" ><?php if (isset($_POST['hleft8'])) echo $_POST['hleft8'];?></textarea></td>
                            <td><textarea name="hleft9" rows="2" cols="25" ><?php if (isset($_POST['hleft9'])) echo $_POST['hleft9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td ><textarea rows="2" cols="25" name="hright6" ><?php if (isset($_POST['hright6'])) echo $_POST['hright6'];?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="hright7" ><?php if (isset($_POST['hright7'])) echo $_POST['hright7'];?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="hright8" ><?php if (isset($_POST['hright8'])) echo $_POST['hright8'];?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="hright9" ><?php if (isset($_POST['hright9'])) echo $_POST['hright9'];?></textarea></td> 
                        </tr>
                        <tr>
                            <td>දන්ත ව්‍යසනය / Dental Deformity</td>
                            <td ><textarea rows="2" cols="25" name="tooth3" ><?php if (isset($_POST['tooth3'])) echo $_POST['tooth3'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="tooth4" ><?php if (isset($_POST['tooth4'])) echo $_POST['tooth4'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="tooth5" ><?php if (isset($_POST['tooth5'])) echo $_POST['tooth5'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="tooth6" ><?php if (isset($_POST['tooth6'])) echo $_POST['tooth6'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>දන්ත දෝෂ / Dental Problems</td>
                            <td ><textarea rows="2" cols="25" name="fault3" ><?php if (isset($_POST['fault3'])) echo $_POST['fault3'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="fault4" ><?php if (isset($_POST['fault4'])) echo $_POST['fault4'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="fault5" ><?php if (isset($_POST['fault5'])) echo $_POST['fault5'];?></textarea></td>
                            <td ><textarea rows="2" cols="25" name="fault6" ><?php if (isset($_POST['fault6'])) echo $_POST['fault6'];?></textarea></td>
                        </tr>
                        <tr>
                            <td rowspan="2">බර තත්වය/Weight <br><br><b>වර්ධනය/Growth</b><br><br>උස තත්වය/Height</td>
                            <td><textarea name="weight6" rows="2" cols="25" ><?php if (isset($_POST['weight6'])) echo $_POST['weight6'];?></textarea></td>
                            <td><textarea name="weight7" rows="2" cols="25" ><?php if (isset($_POST['weight7'])) echo $_POST['weight7'];?></textarea></td>
                            <td><textarea name="weight8" rows="2" cols="25" ><?php if (isset($_POST['weight8'])) echo $_POST['weight8'];?></textarea></td>
                            <td><textarea name="weight9" rows="2" cols="25" ><?php if (isset($_POST['weight9'])) echo $_POST['weight9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td ><textarea rows="2" cols="25" name="height6" ><?php if (isset($_POST['height6'])) echo $_POST['height6'];?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="height7" ><?php if (isset($_POST['height7'])) echo $_POST['height7'];?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="height8" ><?php if (isset($_POST['height8'])) echo $_POST['height8'];?></textarea></td> 
                            <td ><textarea rows="2" cols="25" name="height9" ><?php if (isset($_POST['height9'])) echo $_POST['height9'];?></textarea></td> 
                        </tr>
                        <tr>
                            <td><b>සංවර්ධනය / Development</b></td>
                            <td><textarea name="develop6" rows="2" cols="25" ><?php if (isset($_POST['develop6'])) echo $_POST['develop6'];?></textarea></td>
                            <td><textarea name="develop7" rows="2" cols="25" ><?php if (isset($_POST['develop7'])) echo $_POST['develop7'];?></textarea></td>
                            <td><textarea name="develop8" rows="2" cols="25" ><?php if (isset($_POST['develop8'])) echo $_POST['develop8'];?></textarea></td>
                            <td><textarea name="develop9" rows="2" cols="25" ><?php if (isset($_POST['develop9'])) echo $_POST['develop9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>හෘදය රෝග / Heart Problems</td>
                            <td><textarea name="heart6" rows="2" cols="25" ><?php if (isset($_POST['heart6'])) echo $_POST['heart6'];?></textarea></td>
                            <td><textarea name="heart7" rows="2" cols="25" ><?php if (isset($_POST['heart7'])) echo $_POST['heart7'];?></textarea></td>
                            <td><textarea name="heart8" rows="2" cols="25" ><?php if (isset($_POST['heart8'])) echo $_POST['heart8'];?></textarea></td>
                            <td><textarea name="heart9" rows="2" cols="25" ><?php if (isset($_POST['heart9'])) echo $_POST['heart9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>උකුල් සන්ධිය / Hip Joint</td>
                            <td><textarea name="joint6" rows="2" cols="25" ><?php if (isset($_POST['joint6'])) echo $_POST['joint6'];?></textarea></td>
                            <td><textarea name="joint7" rows="2" cols="25" ><?php if (isset($_POST['joint7'])) echo $_POST['joint7'];?></textarea></td>
                            <td><textarea name="joint8" rows="2" cols="25" ><?php if (isset($_POST['joint8'])) echo $_POST['joint8'];?></textarea></td>
                            <td><textarea name="joint9" rows="2" cols="25" ><?php if (isset($_POST['joint9'])) echo $_POST['joint9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td><b>වෙනත් රෝගී තත්වයන් / Mecellaneous Conditions</b></td>
                            <td><textarea name="disease6" rows="2" cols="25" ><?php if (isset($_POST['disease6'])) echo $_POST['disease6'];?></textarea></td>
                            <td><textarea name="disease7" rows="2" cols="25" ><?php if (isset($_POST['disease7'])) echo $_POST['disease7'];?></textarea></td>
                            <td><textarea name="disease8" rows="2" cols="25" ><?php if (isset($_POST['disease8'])) echo $_POST['disease8'];?></textarea></td>
                            <td><textarea name="disease9" rows="2" cols="25" ><?php if (isset($_POST['disease9'])) echo $_POST['disease9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><textarea name="adisease6" rows="2" cols="25" ><?php if (isset($_POST['adisease6'])) echo $_POST['adisease6'];?></textarea></td>
                            <td><textarea name="adisease7" rows="2" cols="25" ><?php if (isset($_POST['adisease7'])) echo $_POST['adisease7'];?></textarea></td>
                            <td><textarea name="adisease8" rows="2" cols="25" ><?php if (isset($_POST['adisease8'])) echo $_POST['adisease8'];?></textarea></td>
                            <td><textarea name="adisease9" rows="2" cols="25" ><?php if (isset($_POST['adisease9'])) echo $_POST['adisease9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><textarea name="bdisease6" rows="2" cols="25" ><?php if (isset($_POST['bdisease6'])) echo $_POST['bdisease6'];?></textarea></td>
                            <td><textarea name="bdisease7" rows="2" cols="25" ><?php if (isset($_POST['bdisease7'])) echo $_POST['bdisease7'];?></textarea></td>
                            <td><textarea name="bdisease8" rows="2" cols="25" ><?php if (isset($_POST['bdisease8'])) echo $_POST['bdisease8'];?></textarea></td>
                            <td><textarea name="bdisease9" rows="2" cols="25" ><?php if (isset($_POST['bdisease9'])) echo $_POST['bdisease9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td></td> 
                            <td><textarea name="cdisease6" rows="2" cols="25" ><?php if (isset($_POST['cdisease6'])) echo $_POST['cdisease6'];?></textarea></td>
                            <td><textarea name="cdisease7" rows="2" cols="25" ><?php if (isset($_POST['cdisease7'])) echo $_POST['cdisease7'];?></textarea></td>
                            <td><textarea name="cdisease8" rows="2" cols="25" ><?php if (isset($_POST['cdisease8'])) echo $_POST['cdisease8'];?></textarea></td>
                            <td><textarea name="cdisease9" rows="2" cols="25" ><?php if (isset($_POST['cdisease9'])) echo $_POST['cdisease9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>     
                            <td><textarea name="ddisease6" rows="2" cols="25" ><?php if (isset($_POST['ddisease6'])) echo $_POST['ddisease6'];?></textarea></td>
                            <td><textarea name="ddisease7" rows="2" cols="25" ><?php if (isset($_POST['ddisease7'])) echo $_POST['ddisease7'];?></textarea></td>
                            <td><textarea name="ddisease8" rows="2" cols="25" ><?php if (isset($_POST['ddisease8'])) echo $_POST['ddisease8'];?></textarea></td>
                            <td><textarea name="ddisease9" rows="2" cols="25" ><?php if (isset($_POST['ddisease9'])) echo $_POST['ddisease9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>  
                            <td><textarea name="edisease6" rows="2" cols="25" ><?php if (isset($_POST['edisease6'])) echo $_POST['edisease6'];?></textarea></td>
                            <td><textarea name="edisease7" rows="2" cols="25" ><?php if (isset($_POST['edisease7'])) echo $_POST['edisease7'];?></textarea></td>
                            <td><textarea name="edisease8" rows="2" cols="25" ><?php if (isset($_POST['edisease8'])) echo $_POST['edisease8'];?></textarea></td>
                            <td><textarea name="edisease9" rows="2" cols="25" ><?php if (isset($_POST['edisease9'])) echo $_POST['edisease9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>  
                            <td><textarea name="fdisease6" rows="2" cols="25" ><?php if (isset($_POST['fdisease6'])) echo $_POST['fdisease6'];?></textarea></td>
                            <td><textarea name="fdisease7" rows="2" cols="25" ><?php if (isset($_POST['fdisease7'])) echo $_POST['fdisease7'];?></textarea></td>
                            <td><textarea name="fdisease8" rows="2" cols="25" ><?php if (isset($_POST['fdisease8'])) echo $_POST['fdisease8'];?></textarea></td>
                            <td><textarea name="fdisease9" rows="2" cols="25" ><?php if (isset($_POST['fdisease9'])) echo $_POST['fdisease9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td >පරීක්ෂා කල නිලධාරියාගේ නම / Name of Examiner</td> 
                            <td ><input type="text" name="name6" style="width:100%" value="<?php if (isset($_POST['name6'])) echo $_POST['name6'];?>"></td>
                            <td ><input type="text" name="name7" style="width:100%" value="<?php if (isset($_POST['name7'])) echo $_POST['name7'];?>"></td>
                            <td ><input type="text" name="name8" style="width:100%" value="<?php if (isset($_POST['name8'])) echo $_POST['name8'];?>"></td>
                            <td ><input type="text" name="name9" style="width:100%" value="<?php if (isset($_POST['name9'])) echo $_POST['name9'];?>"></td>
                        </tr>
                        <tr>
                            <td >පරීක්ෂා කල නිලධාරියාගේ තනතුර / Post of Examiner</td>
                            <td ><input type="text" name="position6" style="width:100%" value="<?php if (isset($_POST['position6'])) echo $_POST['position6'];?>"></td>
                            <td ><input type="text" name="position7" style="width:100%" value="<?php if (isset($_POST['position7'])) echo $_POST['position7'];?>"></td>
                            <td ><input type="text" name="position8" style="width:100%" value="<?php if (isset($_POST['position8'])) echo $_POST['position8'];?>"></td>
                            <td ><input type="text" name="position9" style="width:100%" value="<?php if (isset($_POST['position9'])) echo $_POST['position9'];?>"></td>
                        </tr>
                    </table>
                    <h4> (වර්ධනය : නියමිත බර = N, අධි බර = OW, වර්ධනය අඩාල = O, අඩුබර = X, උග්‍ර අඩුබර = XX </h4>
                    <h4> අන් සියලුම තත්වයන් සඳහා ආබාධ ඇත්නම් X ලකුණද නැතිනම් O ලකුණද යොදන්න)</h4>
                    <h4>නියමිත උස = NH, මිටි බව = S</h4>
                    <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                    <center><input type="submit" class="link" name="update" style="margin-bottom: 50px;" value="Update"></center>
                    <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->
                </div>
            </div>
        </form>
    </body>
</html>

