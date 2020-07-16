<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "moh";

$id=""; $day6 = ""; $day7 = "";  $day8 = ""; $day9 = "";   $attack6 = "";  $attack7 = ""; $attack8 = ""; $attack9 = ""; 
$eye6 = ""; $eye7 = "";  $eye8 = ""; $eye9 = "";   $left6 = "";  $left7 = ""; $left8 = ""; $left9 = "";
$right6 = ""; $right7 = "";  $right8 = ""; $right9 = "";   $blind1 = ""; $blind2 = ""; $blind3 = "";$bito1 = ""; $bito2 = ""; $bito3 = "";  
$hleft6 = ""; $hleft7 = "";  $hleft8 = ""; $hleft9 = "";   $hright6 = "";  $hright7 = ""; $hright8 = ""; $hright9 = "";
$tooth3 = "";  $tooth4 = ""; $tooth5 = ""; $tooth6 = ""; $fault3 = ""; $fault4 = ""; $fault5 = ""; $fault6 = ""; 
$weight6 = ""; $weight7 = "";  $weight8 = ""; $weight9 = ""; $height6 = "";  $height7 = ""; $height8 = ""; $height9 = ""; 
$develop6 = ""; $develop7 = "";  $develop8 = ""; $develop9 = "";  $heart6 = "";  $heart7 = ""; $heart8 = ""; $heart9 = "";  
$joint6 = ""; $joint7 = "";  $joint8 = ""; $joint9 = ""; $disease6 = "";  $disease7 = ""; $disease8 = ""; $disease9 = "";
$adisease6 = "";  $adisease7 = ""; $adisease8 = ""; $adisease9 = "";   $bdisease6 = ""; $bdisease7 = ""; $bdisease8 = ""; $bdisease9 = "";
$cdisease6 = "";  $cdisease7 = ""; $cdisease8 = ""; $cdisease9 = ""; $ddisease6 = ""; $ddisease7 = ""; $ddisease8 = ""; $ddisease9 = "";
$edisease6 = ""; $edisease7 = ""; $edisease8 = ""; $edisease9 = ""; $fdisease6 = ""; $fdisease7 = ""; $fdisease8 = ""; $fdisease9 = "";  
$name6 = ""; $name7 = ""; $name8 = ""; $name9 = ""; $position6 = ""; $position7 = ""; $position8 = ""; $position9 = "";   

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}catch (Exception $ex){
    echo 'Error';
}

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id'];$posts[1] = $_POST['day6'];$posts[2] = $_POST['day7']; $posts[3] = $_POST['day8']; $posts[4] = $_POST['day9']; 
    $posts[5] = $_POST['attack6']; $posts[6] = $_POST['attack7']; $posts[7] = $_POST['attack8']; $posts[8] = $_POST['attack9']; 
    
    $posts[9] = $_POST['eye6'];$posts[10] = $_POST['eye7'];$posts[11] = $_POST['eye8']; $posts[12] = $_POST['eye9']; 
    $posts[13] = $_POST['left6']; $posts[14] = $_POST['left7']; $posts[15] = $_POST['left8']; $posts[16] = $_POST['left9']; 
    
    $posts[17]= $_POST['right6']; $posts[18] = $_POST['right7'];$posts[19] = $_POST['right8'];$posts[20] = $_POST['right9']; $posts[21] = $_POST['blind1']; 
    $posts[22] = $_POST['blind2']; $posts[23] = $_POST['blind3']; $posts[24] = $_POST['bito1']; $posts[25] = $_POST['bito2']; $posts[26] = $_POST['bito3']; 
    
    $posts[27] = $_POST['hleft6'];$posts[28] = $_POST['hleft7'];$posts[29] = $_POST['hleft8']; $posts[30] = $_POST['hleft9']; 
    $posts[31] = $_POST['hright6']; $posts[32] = $_POST['hright7']; $posts[33] = $_POST['hright8']; $posts[34] = $_POST['hright9']; 
    
    $posts[35] = $_POST['tooth3']; $posts[36] = $_POST['tooth4'];$posts[37] = $_POST['tooth5'];$posts[38] = $_POST['tooth6']; 
    $posts[39] = $_POST['fault3']; $posts[40] = $_POST['fault4']; $posts[41] = $_POST['fault5']; $posts[42] = $_POST['fault6'];  

    $posts[43] = $_POST['weight6']; $posts[44] = $_POST['weight7']; $posts[45] = $_POST['weight8'];$posts[46] = $_POST['weight9'];
    $posts[47] = $_POST['height6']; $posts[48] = $_POST['height7']; $posts[49] = $_POST['height8']; $posts[50] = $_POST['height9']; 
    
    $posts[51] = $_POST['develop6']; $posts[52] = $_POST['develop7']; $posts[53] = $_POST['develop8']; $posts[54] = $_POST['develop9'];
    $posts[55] = $_POST['heart6'];$posts[56] = $_POST['heart7']; $posts[57] = $_POST['heart8']; $posts[58] = $_POST['heart9']; 
    
    $posts[59] = $_POST['joint6']; $posts[60] = $_POST['joint7']; $posts[61] = $_POST['joint8']; $posts[62] = $_POST['joint9']; 
    $posts[63] = $_POST['disease6'];$posts[64] = $_POST['disease7'];$posts[65] = $_POST['disease8']; $posts[66] = $_POST['disease9']; 
    
    $posts[67] = $_POST['adisease6']; $posts[68] = $_POST['adisease7']; $posts[69] = $_POST['adisease8']; $posts[70] = $_POST['adisease9']; 
    $posts[71] = $_POST['bdisease6']; $posts[72] = $_POST['bdisease7'];$posts[73] = $_POST['bdisease8'];$posts[74] = $_POST['bdisease9']; 
    
    $posts[75] = $_POST['cdisease6']; $posts[76] = $_POST['cdisease7']; $posts[77] = $_POST['cdisease8']; $posts[78] = $_POST['cdisease9']; 
    $posts[79] = $_POST['ddisease6']; $posts[80] = $_POST['ddisease7']; $posts[81] = $_POST['ddisease8'];$posts[82] = $_POST['ddisease9'];
    
    $posts[83] = $_POST['edisease6']; $posts[84] = $_POST['edisease7'];$posts[85] = $_POST['edisease8'];$posts[86] = $_POST['edisease9'];
    $posts[87] = $_POST['fdisease6']; $posts[88] = $_POST['fdisease7']; $posts[89] = $_POST['fdisease8']; $posts[90] = $_POST['fdisease9']; 
    
    $posts[91] = $_POST['name6']; $posts[92] = $_POST['name7']; $posts[93] = $_POST['name8'];$posts[94] = $_POST['name9'];
    $posts[95] = $_POST['position6']; $posts[96] = $_POST['position7']; $posts[97] = $_POST['position8']; $posts[98] = $_POST['position9']; 
    
    return $posts;
}

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `table6`(`id`,`day6`,`day7`,`day8`,`day9`,`attack6`,`attack7`,`attack8`,`attack9`,
    `eye6`,`eye7`,`eye8`,`eye9`,`left6`,`left7`,`left8`,`left9`,
    `right6`,`right7`,`right8`,`right9`,`blind1`,`blind2`,`blind3`,`bito1`,`bito2`,`bito3`,
    `hleft6`,`hleft7`,`hleft8`,`hleft9`,`hright6`,`hright7`,`hright8`,`hright9`,
    `tooth3`,`tooth4`,`tooth5`,`tooth6`,`fault3`,`fault4`,`fault5`,`fault6`,
    `weight6`,`weight7`,`weight8`,`weight9`,`height6`,`height7`,`height8`,`height9`,
    `develop6`,`develop7`,`develop8`,`develop9`,`heart6`,`heart7`,`heart8`,`heart9`,
    `joint6`,`joint7`,`joint8`,`joint9`,`disease6`,`disease7`,`disease8`,`disease9`,
    `adisease6`,`adisease7`,`adisease8`,`adisease9`,`bdisease6`,`bdisease7`,`bdisease8`,`bdisease9`,
    `cdisease6`,`cdisease7`,`cdisease8`,`cdisease9`,`ddisease6`,`ddisease7`,`ddisease8`, `ddisease9`,
    `edisease6`,`edisease7`,`edisease8`,`edisease9`,`fdisease6`,`fdisease7`,`fdisease8`,`fdisease9`,
    `name6`,`name7`,`name8`,`name9`,`position6`,`position7`,`position8`,`position9`) 
    VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]',
    '$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]',
    '$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]','$data[24]','$data[25]','$data[26]',
    '$data[27]','$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]','$data[34]','$data[35]',
    '$data[36]','$data[37]','$data[38]','$data[39]','$data[40]','$data[41]','$data[42]','$data[43]','$data[44]',
    '$data[45]','$data[46]','$data[47]','$data[48]','$data[49]','$data[50]','$data[51]','$data[52]','$data[53]',
    '$data[54]','$data[55]','$data[56]','$data[57]','$data[58]','$data[59]','$data[60]','$data[61]','$data[62]',
    '$data[63]','$data[64]','$data[65]','$data[66]','$data[67]','$data[68]','$data[69]','$data[70]','$data[71]',
    '$data[72]','$data[73]','$data[74]','$data[75]','$data[76]','$data[77]','$data[78]','$data[79]','$data[80]',
    '$data[81]','$data[82]','$data[83]','$data[84]','$data[85]','$data[86]','$data[87]','$data[88]','$data[89]',
    '$data[90]','$data[91]','$data[92]','$data[93]','$data[94]','$data[95]','$data[96]','$data[97]','$data[98]')";
    try{
        $insert_Result = mysqli_query($connect,$insert_Query);
        if($insert_Result){
            if(mysqli_affected_rows($connect) > 0){
                echo 'Data inserted'; 
            }else{
                echo 'Data not inserted';
            }
        }
    }catch (Exception $ex){
        echo 'Error Insert' .$ex->getMessage();
    }
}

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table6 WHERE id = $data[0]";
    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $id= $row['id']; $day6  = $row['day6']; $day7 = $row['day7']; $day8 = $row['day8'];$day9 = $row['day9'];$attack6 = $row['attack6']; 
                $attack7 = $row['attack7']; $attack8 = $row['attack8']; $attack9 = $row['attack9']; $eye6 = $row['eye6']; 
                $eye7 = $row['eye7']; $eye8 = $row['eye8']; $eye9 = $row['eye9'];$left6 = $row['left6']; $left7 = $row['left7'];
                $left8 = $row['left8'];$left9 = $row['left9']; $right6 = $row['right6']; $right7 = $row['right7']; 
                $right8 = $row['right8']; $right9 = $row['right9'];$blind1 = $row['blind1']; $blind2 = $row['blind2']; $blind3 = $row['blind3'];
                $bito1 = $row['bito1']; $bito2 = $row['bito2']; $bito3 = $row['bito3']; $hleft6 = $row['hleft6']; 
                $hleft7 = $row['hleft7']; $hleft8 = $row['hleft8']; $hleft9 = $row['hleft9']; $hright6 = $row['hright6']; $hright7 = $row['hright7']; 
                $hright8 = $row['hright8']; $hright9 = $row['hright9']; $tooth3 = $row['tooth3']; $tooth4 = $row['tooth4']; 
                $tooth5 = $row['tooth5']; $tooth6 = $row['tooth6']; $fault3 = $row['fault3']; $fault4 = $row['fault4']; $fault5 = $row['fault5']; 
                $fault6 = $row['fault6']; $weight6 = $row['weight6']; $weight7 = $row['weight7']; $weight8 = $row['weight8']; 
                $weight9 = $row['weight9']; $height6 = $row['height6']; $height7 = $row['height7']; $height8 = $row['height8']; $height9 = $row['height9']; 
                $develop6 = $row['develop6']; $develop7 = $row['develop7']; $develop8 = $row['develop8']; $develop9 = $row['develop9'];
                $heart6 = $row['heart6']; $heart7= $row['heart7']; $heart8 = $row['heart8']; $heart9 = $row['heart9']; $joint6 = $row['joint6']; 
                $joint7 = $row['joint7']; $joint8 = $row['joint8']; $joint9 = $row['joint9']; $disease6 = $row['disease6']; 
                $disease7 = $row['disease7']; $disease8 = $row['disease8']; $disease9= $row['disease9'];$adisease6 = $row['adisease6'];$adisease7 = $row['adisease7']; 
                $adisease8 = $row['adisease8']; $adisease9 = $row['adisease9']; $bdisease6 = $row['bdisease6']; $bdisease7 = $row['bdisease7']; 
                $bdisease8 = $row['bdisease8']; $bdisease9 = $row['bdisease9']; $cdisease6 = $row['cdisease6'];$cdisease7 = $row['cdisease7'];$cdisease8 = $row['cdisease8']; 
                $cdisease9 = $row['cdisease9']; $ddisease6 = $row['ddisease6']; $ddisease7 = $row['ddisease7']; $ddisease8 = $row['ddisease8']; 
                $ddisease9= $row['ddisease9']; $edisease6 = $row['edisease6']; $edisease7 = $row['edisease7'];$edisease8 = $row['edisease8'];$edisease9 = $row['edisease9']; 
                $fdisease6 = $row['fdisease6']; $fdisease7 = $row['fdisease7']; $fdisease8 = $row['fdisease8']; $fdisease9 = $row['fdisease9']; 
                $name6 = $row['name6']; $name7 = $row['name7']; $name8 = $row['name8'];$name9 = $row['name9'];$position6 = $row['position6']; 
                $position7 = $row['position7']; $position8 = $row['position8']; $position9= $row['position9']; 
            }
        }else{
            echo 'No data for this id';
        }
    }else{
        echo 'Result Error';
    }
}

//delete
if(isset($_POST['delete'])){
    $data = getPosts();
    $delete_Query = "DELETE FROM `table6` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);

        if($delete_Result){
            if(mysqli_affected_rows($connect)>0){
               echo 'data deleted';
            }else{
                echo 'data not deleted';
            }
        }
    }catch (Exception $ex){
        echo 'Error Delete' .$ex->getMessage();
    }
}

//update
if(isset($_POST['update'])){
    $data = getPosts();
    $update_Query = "UPDATE `table6` SET `day6`='$data[1]', `day7`='$data[2]', `day8`='$data[3]',`day9`='$data[4]', `attack6`='$data[5]', 
    `attack7`='$data[6]',`attack8`='$data[7]', `attack9`='$data[8]', `eye6`='$data[9]',
    `eye7`='$data[10]', `eye8`='$data[11]', `eye9`='$data[12]',`left6`='$data[13]', `left7`='$data[14]', 
    `left8`='$data[15]',`left9`='$data[16]', `right6`='$data[17]', `right7`='$data[18]',
    `right8`='$data[19]', `right9`='$data[20]', `blind1`='$data[21]',`blind2`='$data[22]', `blind3`='$data[23]',
    `bito1`='$data[24]', `bito2`='$data[25]', `bito3`='$data[26]',`hleft6`='$data[27]', 
    `hleft7`='$data[28]', `hleft8`='$data[29]',`hleft9`='$data[30]',`hright6`='$data[31]', `hright7`='$data[32]', 
    `hright8`='$data[33]',`hright9`='$data[34]', `tooth3`='$data[35]', `tooth4`='$data[36]',
    `tooth5`='$data[37]', `tooth6`='$data[38]', `fault3`='$data[39]',`fault4`='$data[40]',`fault5`='$data[41]', 
    `fault6`='$data[42]', `weight6`='$data[43]',`weight7`='$data[44]', `weight8`='$data[45]', 
    `weight9`='$data[46]',`height6`='$data[47]', `height7`='$data[48]', `height8`='$data[49]',`height9`='$data[50]',
    `develop6`='$data[51]', `develop7`='$data[52]', `develop8`='$data[53]',`develop9`='$data[54]', 
    `heart6`='$data[55]', `heart7`='$data[56]',`heart8`='$data[57]', `heart9`='$data[58]', `joint6`='$data[59]',
    `joint7`='$data[60]',`joint8`='$data[61]',`joint9`='$data[62]', `disease6`='$data[63]', 
    `disease7`='$data[64]',`disease8`='$data[65]',`disease9`='$data[66]',`adisease6`='$data[67]',`adisease7`='$data[68]',
    `adisease8`='$data[69]',`adisease9`='$data[70]',`bdisease6`='$data[71]',`bdisease7`='$data[72]',
    `bdisease8`='$data[73]',`bdisease9`='$data[74]',`cdisease6`='$data[75]',`cdisease7`='$data[76]',`cdisease8`='$data[77]',
    `cdisease9`='$data[78]',`ddisease6`='$data[79]',`ddisease7`='$data[80]',`ddisease8`='$data[81]', 
    `ddisease9`='$data[82]',`edisease6`='$data[83]',`edisease7`='$data[84]',`edisease8`='$data[85]',`edisease9`='$data[86]',
    `fdisease6`='$data[87]',`fdisease7`='$data[88]',`fdisease8`='$data[89]',`fdisease9`='$data[90]',
    `name6`='$data[91]',`name7`='$data[92]',`name8`='$data[93]',`name9`='$data[94]',`position6`='$data[95]',
    `position7`='$data[96]',`position8`='$data[97]',`position9`='$data[98]'
     WHERE `id` = $data[0]";

    try{
        $update_Result = mysqli_query($connect, $update_Query);

        if($update_Result){
            if(mysqli_affected_rows($connect)>0){
               echo 'data updated';
            }else{
                echo 'data not updated';
            }
        }
    }catch (Exception $ex){
        echo 'Error update' .$ex->getMessage();
    }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="cssClinic/newStyle.css">
    </head>
    <body>
        <form action="chdr1_1.php" method="post" >
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
                <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">
            </div>
        </form>
    </body>
</html>
         