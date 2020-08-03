<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id=""; $date1 = ""; $date2 = ""; $date3 = "";  $age1 = ""; $age2 = ""; $age3 = ""; $teacher1 = ""; $teacher2 = ""; $teacher3 = ""; 
$attendance1 = null; $attendance2 = null; $attendance3 = null; $house1 = null;  $house2 = null; $house3 = null; $clean1 = null; $clean2 = null; $clean3 = null; 
$activity1 = null; $activity2 = null; $activity3 = null; $behaviour1 = null; $behaviour2 = null;  $behaviour3 = null; $speak1 = null; $speak2 = null; $speak3 = null; 
$hearing1 = null;  $hearing2 = null; $hearing3 = null; $vees1 = null; $vees2 = null; $vees3 = null;$fit1 = null; $fit2 = null; $fit3 = null; 
$mental1 = null; $mental2 = null; $mental3 = null; $weight1 = ""; $weight2 = ""; $weight3 = "";  $type1 = ""; $type2 = ""; $type3 = ""; 
$interrupt1 = ""; $interrupt2  = ""; $interrupt3 = ""; $height1 = ""; $height2 = ""; $height3 = ""; $sheight1 = "";  $sheight2 = ""; $sheight3 = ""; 
$night1 = null; $night2 = null; $night3 = null; $bito1 = null; $bito2 = null; $bito3 = null; $ni1 = null; $ni2 = null;  $ni3 = null; 
$louse1 = null; $louse2 = null; $louse3 = null; 

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['date1']; $posts[2] = $_POST['date2']; $posts[3] = $_POST['date3'];$posts[4] = $_POST['age1'];$posts[5] = $_POST['age2']; 
    $posts[6] = $_POST['age3']; $posts[7] = $_POST['teacher1']; $posts[8] = $_POST['teacher2']; $posts[9] = $_POST['teacher3']; 
    
    $posts[10] = $_POST['attendance1']; $posts[11] = $_POST['attendance2']; $posts[12] = $_POST['attendance3'];$posts[13] = $_POST['house1']; $posts[14] = $_POST['house2']; 
    $posts[15] = $_POST['house3'];$posts[16] = $_POST['clean1']; $posts[17] = $_POST['clean2']; $posts[18] = $_POST['clean3']; 
    
    $posts[19] = $_POST['activity1']; $posts[20] = $_POST['activity2'];$posts[21] = $_POST['activity3']; $posts[22] = $_POST['behaviour1']; $posts[23] = $_POST['behaviour2']; 
    $posts[24] = $_POST['behaviour3']; $posts[25] = $_POST['speak1']; $posts[26] = $_POST['speak2']; $posts[27] = $_POST['speak3']; 
    
    $posts[28] = $_POST['hearing1']; $posts[29] = $_POST['hearing2']; $posts[30] = $_POST['hearing3']; $posts[31] = $_POST['vees1']; $posts[32] = $_POST['vees2']; 
    $posts[33] = $_POST['vees3']; $posts[34] = $_POST['fit1']; $posts[35] = $_POST['fit2']; $posts[36] = $_POST['fit3']; 
    
    $posts[37] = $_POST['mental1']; $posts[38] = $_POST['mental2']; $posts[39] = $_POST['mental3']; $posts[40] = $_POST['weight1']; $posts[41] = $_POST['weight2']; 
    $posts[42] = $_POST['weight3']; $posts[43] = $_POST['type1']; $posts[44] = $_POST['type2']; $posts[45] = $_POST['type3']; 
    
    $posts[46] = $_POST['interrupt1']; $posts[47] = $_POST['interrupt2']; $posts[48] = $_POST['interrupt3']; $posts[49] = $_POST['height1']; $posts[50] = $_POST['height2']; 
    $posts[51] = $_POST['height3']; $posts[52] = $_POST['sheight1']; $posts[53] = $_POST['sheight2']; $posts[54] = $_POST['sheight3'];
    
    $posts[55] = $_POST['night1']; $posts[56] = $_POST['night2']; $posts[57] = $_POST['night3']; $posts[58] = $_POST['bito1']; $posts[59] = $_POST['bito2']; 
    $posts[60] = $_POST['bito3']; $posts[61] = $_POST['ni1']; $posts[62] = $_POST['ni2']; $posts[63] = $_POST['ni3']; 
    
    $posts[64] = $_POST['louse1']; $posts[65] = $_POST['louse2']; $posts[66] = $_POST['louse3'];
    
    return $posts;
}
$nursery1 = new table();

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table7 WHERE id = '$data[0]'";
    $search_Result = $nursery1->featuredLoad($dbObj, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $id= $row['id']; $date1 = $row['date1']; $date2 = $row['date2']; $date3 = $row['date3'];$age1 = $row['age1'];$age2 = $row['age2']; 
                $age3 = $row['age3']; $teacher1 = $row['teacher1']; $teacher2 = $row['teacher2']; $teacher3 = $row['teacher3']; 
                $attendance1 = $row['attendance1']; $attendance2 = $row['attendance2']; $attendance3 = $row['attendance3'];$house1 = $row['house1']; $house2 = $row['house2'];
                $house3 = $row['house3'];$clean1 = $row['clean1']; $clean2 = $row['clean2']; $clean3 = $row['clean3']; 
                $activity1 = $row['activity1']; $activity2 = $row['activity2'];$activity3 = $row['activity3']; $behaviour1 = $row['behaviour1']; $behaviour2 = $row['behaviour2'];
                $behaviour3 = $row['behaviour3']; $speak1 = $row['speak1']; $speak2 = $row['speak2']; $speak3 = $row['speak3']; 
                $hearing1 = $row['hearing1']; $hearing2 = $row['hearing2']; $hearing3 = $row['hearing3']; $vees1 = $row['vees1']; $vees2 = $row['vees2']; 
                $vees3 = $row['vees3']; $fit1 = $row['fit1']; $fit2 = $row['fit2']; $fit3 = $row['fit3']; 
                $mental1 = $row['mental1']; $mental2 = $row['mental2']; $mental3 = $row['mental3']; $weight1 = $row['weight1']; $weight2 = $row['weight2']; 
                $weight3 = $row['weight3']; $type1 = $row['type1']; $type2 = $row['type2']; $type3 = $row['type3']; 
                $interrupt1 = $row['interrupt1']; $interrupt2 = $row['interrupt2']; $interrupt3 = $row['interrupt3']; $height1 = $row['height1']; $height2 = $row['height2']; 
                $height3 = $row['height3']; $sheight1 = $row['sheight1']; $sheight2 = $row['sheight2']; $sheight3 = $row['sheight3'];
                $night1 = $row['night1']; $night2= $row['night2']; $night3 = $row['night3']; $bito1 = $row['bito1']; $bito2 = $row['bito2']; 
                $bito3 = $row['bito3']; $ni1 = $row['ni1']; $ni2 = $row['ni2']; $ni3 = $row['ni3']; 
                $louse1 = $row['louse1']; $louse2 = $row['louse2']; $louse3= $row['louse3'];
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
    $update_Query = "UPDATE `table7` SET `date1`='$data[1]', `date2`='$data[2]', `date3`='$data[3]',`age1`='$data[4]', `age2`='$data[5]', 
    `age3`='$data[6]',`teacher1`='$data[7]', `teacher2`='$data[8]', `teacher3`='$data[9]',
    `attendance1`='$data[10]', `attendance2`='$data[11]', `attendance3`='$data[12]',`house1`='$data[13]', `house2`='$data[14]', 
    `house3`='$data[15]',`clean1`='$data[16]', `clean2`='$data[17]', `clean3`='$data[18]',
    `activity1`='$data[19]', `activity2`='$data[20]', `activity3`='$data[21]',`behaviour1`='$data[22]', `behaviour2`='$data[23]',
    `behaviour3`='$data[24]', `speak1`='$data[25]', `speak2`='$data[26]',`speak3`='$data[27]', 
    `hearing1`='$data[28]', `hearing2`='$data[29]',`hearing3`='$data[30]',`vees1`='$data[31]', `vees2`='$data[32]', 
    `vees3`='$data[33]',`fit1`='$data[34]', `fit2`='$data[35]', `fit3`='$data[36]',
    `mental1`='$data[37]', `mental2`='$data[38]', `mental3`='$data[39]',`weight1`='$data[40]',`weight2`='$data[41]', 
    `weight3`='$data[42]', `type1`='$data[43]',`type2`='$data[44]', `type3`='$data[45]', 
    `interrupt1`='$data[46]',`interrupt2`='$data[47]', `interrupt3`='$data[48]', `height1`='$data[49]',`height2`='$data[50]',
    `height3`='$data[51]', `sheight1`='$data[52]', `sheight2`='$data[53]',`sheight3`='$data[54]', 
    `night1`='$data[55]', `night2`='$data[56]',`night3`='$data[57]', `bito1`='$data[58]', `bito2`='$data[59]',
    `bito3`='$data[60]',`ni1`='$data[61]',`ni2`='$data[62]', `ni3`='$data[63]', 
    `louse1`='$data[64]',`louse2`='$data[65]',`louse3`='$data[66]'
     WHERE `id` = '$data[0]'";

    try{
        $update_Result = $nursery1->featuredLoad($dbObj, $update_Query);

        if($update_Result){
            // if(mysqli_affected_rows($connect)>0){
            //    echo 'data updated';
            // }else{
            //     echo 'data not updated';
            // }
        }
    }catch (Exception $ex){
        echo 'Error update' .$ex->getMessage();
    }
}
?>