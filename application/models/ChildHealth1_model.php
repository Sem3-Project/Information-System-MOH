<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id=""; $day1 = ""; $day2 = ""; $day3 = "";  $day4 = ""; $day5 = ""; $attack1 = ""; $attack2 = ""; $attack3 = ""; $attack4 = ""; $attack5 = ""; 
$eye1 = ""; $eye2 = ""; $eye3 = "";  $eye4 = ""; $eye5 = ""; $left1 = ""; $left2 = ""; $left3 = ""; $left4 = ""; $left5 = ""; 
$right1 = ""; $right2 = ""; $right3 = "";  $right4 = ""; $right5 = ""; $hleft1 = ""; $hleft2 = ""; $hleft3 = "";  $hleft4 = ""; $hleft5 = ""; 
$hright1 = ""; $hright2 = ""; $hright3 = "";$hright4 = ""; $hright5 = ""; $tooth1 = ""; $tooth2 = ""; $fault1 = ""; $fault2 = ""; 
$weight1 = ""; $weight2 = ""; $weight3 = "";  $weight4 = ""; $weight5 = ""; $height1 = ""; $height2 = ""; $height3  = ""; $height4 = ""; $height5 = ""; 
$develop1 = ""; $develop2 = ""; $develop3 = "";  $develop4 = ""; $develop5 = ""; $heart1 = ""; $heart2 = ""; $heart3 = ""; $heart4 = ""; $heart5 = ""; 
$joint1 = ""; $joint2 = ""; $joint3 = "";  $joint4 = ""; $joint5 = ""; $disease1 = ""; $disease2 = ""; $disease3 = ""; $disease4 = ""; $disease5 = ""; 
$adisease0 = ""; $adisease1 = ""; $adisease2 = "";  $adisease3 = ""; $adisease4 = ""; $adisease5 = ""; 
$bdisease0 = ""; $bdisease1 = ""; $bdisease2 = ""; $bdisease3 = ""; $bdisease4 = ""; $bdisease5 = "";  
$cdisease0 = ""; $cdisease1 = ""; $cdisease2 = "";  $cdisease3 = ""; $cdisease4 = ""; $cdisease5 = ""; 
$ddisease0 = ""; $ddisease1 = ""; $ddisease2 = ""; $ddisease3 = ""; $ddisease4 = ""; $ddisease5 = ""; 
$edisease0 = ""; $edisease1 = ""; $edisease2 = ""; $edisease3 = ""; $edisease4 = ""; $edisease5 = ""; 
$fdisease0 = ""; $fdisease1 = ""; $fdisease2 = ""; $fdisease3 = ""; $fdisease4 = ""; $fdisease5 = ""; 
$name1 = ""; $name2 = ""; $name3 = ""; $name4 = ""; $name5 = ""; $position1 = ""; $position2 = ""; $position3 = ""; $position4 = ""; $position5 = ""; 

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['day1']; $posts[2] = $_POST['day2']; $posts[3] = $_POST['day3'];$posts[4] = $_POST['day4'];$posts[5] = $_POST['day5']; 
    $posts[6] = $_POST['attack1']; $posts[7] = $_POST['attack2']; $posts[8] = $_POST['attack3']; $posts[9] = $_POST['attack4']; $posts[10] = $_POST['attack5']; 
    
    $posts[11] = $_POST['eye1']; $posts[12] = $_POST['eye2'];$posts[13] = $_POST['eye3']; $posts[14] = $_POST['eye4']; $posts[15] = $_POST['eye5'];
    $posts[16] = $_POST['left1']; $posts[17] = $_POST['left2']; $posts[18] = $_POST['left3']; $posts[19] = $_POST['left4']; $posts[20] = $_POST['left5'];
      
    $posts[21] = $_POST['right1']; $posts[22] = $_POST['right2']; $posts[23] = $_POST['right3']; $posts[24] = $_POST['right4']; $posts[25] = $_POST['right5']; 
    $posts[26] = $_POST['hleft1']; $posts[27] = $_POST['hleft2']; $posts[28] = $_POST['hleft3']; $posts[29] = $_POST['hleft4']; $posts[30] = $_POST['hleft5']; 
    
    $posts[31] = $_POST['hright1']; $posts[32] = $_POST['hright2']; $posts[33] = $_POST['hright3']; $posts[34] = $_POST['hright4']; $posts[35] = $_POST['hright5']; 
    $posts[36] = $_POST['tooth1']; $posts[37] = $_POST['tooth2']; $posts[38] = $_POST['fault1']; $posts[39] = $_POST['fault2']; 
    
    $posts[40] = $_POST['weight1']; $posts[41] = $_POST['weight2']; $posts[42] = $_POST['weight3']; $posts[43] = $_POST['weight4']; $posts[44] = $_POST['weight5']; 
    $posts[45] = $_POST['height1']; $posts[46] = $_POST['height2']; $posts[47] = $_POST['height3']; $posts[48] = $_POST['height4']; $posts[49] = $_POST['height5']; 
    
    $posts[50] = $_POST['develop1']; $posts[51] = $_POST['develop2']; $posts[52] = $_POST['develop3']; $posts[53] = $_POST['develop4']; $posts[54] = $_POST['develop5'];
    $posts[55] = $_POST['heart1']; $posts[56] = $_POST['heart2']; $posts[57] = $_POST['heart3']; $posts[58] = $_POST['heart4']; $posts[59] = $_POST['heart5']; 
    
    $posts[60] = $_POST['joint1']; $posts[61] = $_POST['joint2']; $posts[62] = $_POST['joint3']; $posts[63] = $_POST['joint4']; $posts[64] = $_POST['joint5']; 
    $posts[65] = $_POST['disease1']; $posts[66] = $_POST['disease2'];$posts[67] = $_POST['disease3'];$posts[68] = $_POST['disease4']; $posts[69] = $_POST['disease5']; 
    
    $posts[70] = $_POST['adisease0']; $posts[71] = $_POST['adisease1']; $posts[72] = $_POST['adisease2']; 
    $posts[73] = $_POST['adisease3']; $posts[74] = $_POST['adisease4']; $posts[75] = $_POST['adisease5'];
    
    $posts[76] = $_POST['bdisease0'];$posts[77] = $_POST['bdisease1']; $posts[78] = $_POST['bdisease2']; 
    $posts[79] = $_POST['bdisease3']; $posts[80] = $_POST['bdisease4']; $posts[81] = $_POST['bdisease5']; 

    $posts[82] = $_POST['cdisease0']; $posts[83] = $_POST['cdisease1']; $posts[84] = $_POST['cdisease2'];
    $posts[85] = $_POST['cdisease3'];$posts[86] = $_POST['cdisease4']; $posts[87] = $_POST['cdisease5']; 

    $posts[88] = $_POST['ddisease0']; $posts[89] = $_POST['ddisease1']; $posts[90] = $_POST['ddisease2']; 
    $posts[91] = $_POST['ddisease3']; $posts[92] = $_POST['ddisease4']; $posts[93] = $_POST['ddisease5'];
    
    $posts[94] = $_POST['edisease0'];$posts[95] = $_POST['edisease1']; $posts[96] = $_POST['edisease2']; 
    $posts[97] = $_POST['edisease3']; $posts[98] = $_POST['edisease4']; $posts[99] = $_POST['edisease5']; 

    $posts[100] = $_POST['fdisease0']; $posts[101] = $_POST['fdisease1']; $posts[102] = $_POST['fdisease2'];
    $posts[103] = $_POST['fdisease3'];$posts[104] = $_POST['fdisease4']; $posts[105] = $_POST['fdisease5']; 
    
    $posts[106] = $_POST['name1']; $posts[107] = $_POST['name2']; $posts[108] = $_POST['name3']; $posts[109] = $_POST['name4']; $posts[110]= $_POST['name5']; 
    $posts[111] = $_POST['position1'];$posts[112] = $_POST['position2'];$posts[113] = $_POST['position3']; 
    $posts[114] = $_POST['position4']; $posts[115] = $_POST['position5'];
    
    return $posts;
}
$childHealth1 = new table();

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table5 WHERE id = $data[0]";
    $search_Result = $childHealth1->featuredLoad($dbObj, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $id= $row['id']; $day1 = $row['day1']; $day2 = $row['day2']; $day3 = $row['day3'];$day4 = $row['day4'];$day5 = $row['day5']; 
                $attack1 = $row['attack1']; $attack2 = $row['attack2']; $attack3 = $row['attack3']; $attack4 = $row['attack4']; 
                $attack5 = $row['attack5']; $eye1 = $row['eye1']; $eye2 = $row['eye2'];$eye3 = $row['eye3']; $eye4 = $row['eye4'];
                $eye5 = $row['eye5'];$left1 = $row['left1']; $left2 = $row['left2']; $left3 = $row['left3']; 
                $left4 = $row['left4']; $left5 = $row['left5'];$right1 = $row['right1']; $right2 = $row['right2']; $right3 = $row['right3'];
                $right4 = $row['right4']; $right5 = $row['right5']; $hleft1 = $row['hleft1']; $hleft2 = $row['hleft2']; 
                $hleft3 = $row['hleft3']; $hleft4 = $row['hleft4']; $hleft5 = $row['hleft5']; $hright1 = $row['hright1']; $hright2 = $row['hright2']; 
                $hright3 = $row['hright3']; $hright4 = $row['hright4']; $hright5 = $row['hright5']; $tooth1 = $row['tooth1']; 
                $tooth2 = $row['tooth2']; $fault1 = $row['fault1']; $fault2 = $row['fault2']; $weight1 = $row['weight1']; $weight2 = $row['weight2']; 
                $weight3 = $row['weight3']; $weight4 = $row['weight4']; $weight5 = $row['weight5']; $height1 = $row['height1']; 
                $height2 = $row['height2']; $height3 = $row['height3']; $height4 = $row['height4']; $height5 = $row['height5']; $develop1 = $row['develop1']; 
                $develop2 = $row['develop2']; $develop3 = $row['develop3']; $develop4 = $row['develop4']; $develop5 = $row['develop5'];
                $heart1 = $row['heart1']; $heart2= $row['heart2']; $heart3 = $row['heart3']; $heart4 = $row['heart4']; $heart5 = $row['heart5']; 
                $joint1 = $row['joint1']; $joint2 = $row['joint2']; $joint3 = $row['joint3']; $joint4 = $row['joint4']; 
                $joint5 = $row['joint5']; $disease1 = $row['disease1']; $disease2= $row['disease2'];$disease3 = $row['disease3'];$disease4 = $row['disease4']; 
                $disease5 = $row['disease5']; $adisease0 = $row['adisease0']; $adisease1 = $row['adisease1']; $adisease2 = $row['adisease2']; 
                $adisease3 = $row['adisease3']; $adisease4 = $row['adisease4']; $adisease5 = $row['adisease5'];$bdisease0 = $row['bdisease0'];$bdisease1 = $row['bdisease1']; 
                $bdisease2 = $row['bdisease2']; $bdisease3 = $row['bdisease3']; $bdisease4 = $row['bdisease4']; $bdisease5 = $row['bdisease5']; 
                $cdisease0= $row['cdisease0']; $cdisease1 = $row['cdisease1']; $cdisease2 = $row['cdisease2'];$cdisease3 = $row['cdisease3'];$cdisease4 = $row['cdisease4']; 
                $cdisease5 = $row['cdisease5']; $ddisease0 = $row['ddisease0']; $ddisease1 = $row['ddisease1']; $ddisease2 = $row['ddisease2']; 
                $ddisease3 = $row['ddisease3']; $ddisease4 = $row['ddisease4']; $ddisease5 = $row['ddisease5'];$edisease0 = $row['edisease0'];$edisease1 = $row['edisease1']; 
                $edisease2 = $row['edisease2']; $edisease3 = $row['edisease3']; $edisease4= $row['edisease4']; $edisease5 = $row['edisease5']; 
                $fdisease0 = $row['fdisease0']; $fdisease1= $row['fdisease1']; $fdisease2 = $row['fdisease2'];$fdisease3 = $row['fdisease3'];$fdisease4 = $row['fdisease4']; 
                $fdisease5 = $row['fdisease5']; $name1 = $row['name1']; $name2 = $row['name2']; $name3 = $row['name3']; 
                $name4 = $row['name4']; $name5= $row['name5']; $position1 = $row['position1'];$position2= $row['position2'];$position3 = $row['position3']; 
                $position4 = $row['position4']; $position5 = $row['position5']; 
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
    $update_Query = "UPDATE `table5` SET `day1`='$data[1]', `day2`='$data[2]', `day3`='$data[3]',`day4`='$data[4]', `day5`='$data[5]', 
    `attack1`='$data[6]',`attack2`='$data[7]', `attack3`='$data[8]', `attack4`='$data[9]',
    `attack5`='$data[10]', `eye1`='$data[11]', `eye2`='$data[12]',`eye3`='$data[13]', `eye4`='$data[14]', 
    `eye5`='$data[15]',`left1`='$data[16]', `left2`='$data[17]', `left3`='$data[18]',
    `left4`='$data[19]', `left5`='$data[20]', `right1`='$data[21]',`right2`='$data[22]', `right3`='$data[23]',
    `right4`='$data[24]', `right5`='$data[25]', `hleft1`='$data[26]',`hleft2`='$data[27]', 
    `hleft3`='$data[28]', `hleft4`='$data[29]',`hleft5`='$data[30]',`hright1`='$data[31]', `hright2`='$data[32]', 
    `hright3`='$data[33]',`hright4`='$data[34]', `hright5`='$data[35]', `tooth1`='$data[36]',
    `tooth2`='$data[37]', `fault1`='$data[38]', `fault2`='$data[39]',`weight1`='$data[40]',`weight2`='$data[41]', 
    `weight3`='$data[42]', `weight4`='$data[43]',`weight5`='$data[44]', `height1`='$data[45]', 
    `height2`='$data[46]',`height3`='$data[47]', `height4`='$data[48]', `height5`='$data[49]',`develop1`='$data[50]',
    `develop2`='$data[51]', `develop3`='$data[52]', `develop4`='$data[53]',`develop5`='$data[54]', 
    `heart1`='$data[55]', `heart2`='$data[56]',`heart3`='$data[57]', `heart4`='$data[58]', `heart5`='$data[59]',
    `joint1`='$data[60]',`joint2`='$data[61]',`joint3`='$data[62]', `joint4`='$data[63]', 
    `joint5`='$data[64]',`disease1`='$data[65]',`disease2`='$data[66]',`disease3`='$data[67]',`disease4`='$data[68]',
    `disease5`='$data[69]',`adisease0`='$data[70]',`adisease1`='$data[71]',`adisease2`='$data[72]',
    `adisease3`='$data[73]',`adisease4`='$data[74]',`adisease5`='$data[75]',`bdisease0`='$data[76]',`bdisease1`='$data[77]',
    `bdisease2`='$data[78]',`bdisease3`='$data[79]',`bdisease4`='$data[80]',`bdisease5`='$data[81]', 
    `cdisease0`='$data[82]',`cdisease1`='$data[83]',`cdisease2`='$data[84]',`cdisease3`='$data[85]',`cdisease4`='$data[86]',
    `cdisease5`='$data[87]',`ddisease0`='$data[88]',`ddisease1`='$data[89]',`ddisease2`='$data[90]',
    `ddisease3`='$data[91]',`ddisease4`='$data[92]',`ddisease5`='$data[93]',`edisease0`='$data[94]',`edisease1`='$data[95]',
    `edisease2`='$data[96]',`edisease3`='$data[97]',`edisease4`='$data[98]',`edisease5`='$data[99]',
    `fdisease0`='$data[100]',`fdisease1`='$data[101]',`fdisease2`='$data[102]',`fdisease3`='$data[103]',`fdisease4`='$data[104]',
    `fdisease5`='$data[105]',`name1`='$data[106]',`name2`='$data[107]',`name3`='$data[108]',
    `name4`='$data[109]',`name5`='$data[110]',`position1`='$data[111]',`position2`='$data[112]',`position3`='$data[113]',
    `position4`='$data[114]',`position5`='$data[115]'
     WHERE `id` = $data[0]";

    try{
        $update_Result = $childHealth1->featuredLoad($dbObj, $update_Query);

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