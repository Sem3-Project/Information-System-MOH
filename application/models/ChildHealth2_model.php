<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

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
$childHealth2 = new table();

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table6 WHERE id = $data[0]";
    $search_Result = $childHealth2->featuredLoad($dbObj, $search_Query);

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
        $update_Result = $childHealth2->featuredLoad($dbObj, $update_Query);

        if($update_Result){
            echo '<script type="text/javascript">alert("Updated successfully!");</script>';
            // if(mysqli_affected_rows($connect)>0){
            //    echo 'data updated';
            // }else{
            //     echo 'data not updated';
            // }
        }
    }catch (Exception $ex){
        // echo 'Error update' .$ex->getMessage();
        echo '<script type="text/javascript">alert("Error!");</script>';
    }
}
?>