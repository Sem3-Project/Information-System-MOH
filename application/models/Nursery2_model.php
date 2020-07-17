<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id=""; $lsquint1 = ""; $lsquint2 = ""; $lsquint3 = "";  $rsquint1 = ""; $rsquint2 = ""; $rsquint3 = ""; $lvision1 = ""; $lvision2 = ""; $lvision3 = ""; 
$rvision1 = ""; $rvision2 = ""; $rvision3 = ""; $lhearing1 = "";  $lhearing2 = ""; $lhearing3 = ""; $rhearing1 = ""; $rhearing2 = ""; $rhearing3 = ""; 
$speech1 = ""; $speech2 = ""; $speech3 = ""; $tooth1 = ""; $tooth2 = "";  $tooth3 = ""; $teeth1 = ""; $teeth2 = ""; $teeth3 = ""; 
$ynt1 = "";  $ynt2 = ""; $ynt3 = ""; $mark1 = ""; $mark2 = ""; $mark3 = "";$bone1 = ""; $bone2 = ""; $bone3 = ""; 
$heart1 = ""; $heart2 = ""; $heart3 = ""; $lungs1 = ""; $lungs2 = ""; $lungs3 = "";  $ovarious1 = ""; $ovarious2 = ""; $ovarious3 = ""; 
$ovarious4 = ""; $tvarious1  = ""; $tvarious2 = ""; $tvarious3 = ""; $tvarious4 = ""; $thvarious1 = ""; $thvarious2 = "";  $thvarious3 = ""; $thvarious4 = ""; 
$fvarious1 = ""; $fvarious2 = ""; $fvarious3 = ""; $fvarious4 = ""; $tname1 = ""; $tname2 = ""; $tname3 = ""; $tposition1 = "";  $tposition2 = ""; $tposition3 = ""; 

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['lsquint1']; $posts[2] = $_POST['lsquint2']; $posts[3] = $_POST['lsquint3'];$posts[4] = $_POST['rsquint1'];
    $posts[5] = $_POST['rsquint2']; $posts[6] = $_POST['rsquint3']; $posts[7] = $_POST['lvision1']; $posts[8] = $_POST['lvision2']; $posts[9] = $_POST['lvision3']; 
    
    $posts[10] = $_POST['rvision1']; $posts[11] = $_POST['rvision2']; $posts[12] = $_POST['rvision3'];$posts[13] = $_POST['lhearing1']; $posts[14] = $_POST['lhearing2']; 
    $posts[15] = $_POST['lhearing3'];$posts[16] = $_POST['rhearing1']; $posts[17] = $_POST['rhearing2']; $posts[18] = $_POST['rhearing3']; 
    
    $posts[19] = $_POST['speech1']; $posts[20] = $_POST['speech2'];$posts[21] = $_POST['speech3']; $posts[22] = $_POST['tooth1']; $posts[23] = $_POST['tooth2']; 
    $posts[24] = $_POST['tooth3']; $posts[25] = $_POST['teeth1']; $posts[26] = $_POST['teeth2']; $posts[27] = $_POST['teeth3']; 
    
    $posts[28] = $_POST['ynt1']; $posts[29] = $_POST['ynt2']; $posts[30] = $_POST['ynt3']; $posts[31] = $_POST['mark1']; $posts[32] = $_POST['mark2']; 
    $posts[33] = $_POST['mark3']; $posts[34] = $_POST['bone1']; $posts[35] = $_POST['bone2']; $posts[36] = $_POST['bone3']; 
    
    $posts[37] = $_POST['heart1']; $posts[38] = $_POST['heart2']; $posts[39] = $_POST['heart3']; $posts[40] = $_POST['lungs1']; $posts[41] = $_POST['lungs2']; 
    $posts[42] = $_POST['lungs3']; $posts[43] = $_POST['ovarious1']; $posts[44] = $_POST['ovarious2']; $posts[45] = $_POST['ovarious3']; 
    
    $posts[46] = $_POST['ovarious4']; $posts[47] = $_POST['tvarious1']; $posts[48] = $_POST['tvarious2']; $posts[49] = $_POST['tvarious3']; 
    $posts[50] = $_POST['tvarious4']; $posts[51] = $_POST['thvarious1']; $posts[52] = $_POST['thvarious2']; $posts[53] = $_POST['thvarious3']; 
    
    $posts[54] = $_POST['thvarious4'];$posts[55] = $_POST['fvarious1']; $posts[56] = $_POST['fvarious2']; $posts[57] = $_POST['fvarious3']; 
    $posts[58] = $_POST['fvarious4']; $posts[59] = $_POST['tname1']; $posts[60] = $_POST['tname2']; $posts[61] = $_POST['tname3']; $posts[62] = $_POST['tposition1']; 
    $posts[63] = $_POST['tposition2']; $posts[64] = $_POST['tposition3']; 
    
    return $posts;
}
$nursery2 = new table();

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table8 WHERE id = $data[0]";
    $search_Result = $nursery2->featuredLoad($dbObj, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $id= $row['id']; $lsquint1 = $row['lsquint1']; $lsquint2 = $row['lsquint2']; $lsquint3 = $row['lsquint3'];$rsquint1 = $row['rsquint1'];$rsquint2 = $row['rsquint2']; 
                $rsquint3 = $row['rsquint3']; $lvision1 = $row['lvision1']; $lvision2 = $row['lvision2']; $lvision3 = $row['lvision3']; 
                $rvision1 = $row['rvision1']; $rvision2 = $row['rvision2']; $rvision3 = $row['rvision3'];$lhearing1 = $row['lhearing1']; $lhearing2 = $row['lhearing2'];
                $lhearing3 = $row['lhearing3'];$rhearing1 = $row['rhearing1']; $rhearing2 = $row['rhearing2']; $rhearing3 = $row['rhearing3']; 
                $speech1 = $row['speech1']; $speech2 = $row['speech2'];$speech3 = $row['speech3']; $tooth1 = $row['tooth1']; $tooth2 = $row['tooth2'];
                $tooth3 = $row['tooth3']; $teeth1 = $row['teeth1']; $teeth2 = $row['teeth2']; $teeth3 = $row['teeth3']; 
                $ynt1 = $row['ynt1']; $ynt2 = $row['ynt2']; $ynt3 = $row['ynt3']; $mark1 = $row['mark1']; $mark2 = $row['mark2']; 
                $mark3 = $row['mark3']; $bone1 = $row['bone1']; $bone2 = $row['bone2']; $bone3 = $row['bone3']; 
                $heart1 = $row['heart1']; $heart2 = $row['heart2']; $heart3 = $row['heart3']; $lungs1 = $row['lungs1']; $lungs2 = $row['lungs2']; 
                $lungs3 = $row['lungs3']; $ovarious1 = $row['ovarious1']; $ovarious2 = $row['ovarious2']; $ovarious3 = $row['ovarious3']; 
                $ovarious4 = $row['ovarious4']; $tvarious1 = $row['tvarious1']; $tvarious2 = $row['tvarious2']; $tvarious3 = $row['tvarious3']; $tvarious4 = $row['tvarious4']; 
                $thvarious1 = $row['thvarious1']; $thvarious2 = $row['thvarious2']; $thvarious3 = $row['thvarious3']; $thvarious4 = $row['thvarious4'];
                $fvarious1 = $row['fvarious1']; $fvarious2= $row['fvarious2']; $fvarious3 = $row['fvarious3']; $fvarious4 = $row['fvarious4']; $tname1 = $row['tname1']; 
                $tname2 = $row['tname2']; $tname3 = $row['tname3']; $tposition1 = $row['tposition1']; $tposition2 = $row['tposition2']; 
                $tposition3 = $row['tposition3']; 
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
    $update_Query = "UPDATE `table8` SET `lsquint1`='$data[1]', `lsquint2`='$data[2]', `lsquint3`='$data[3]',`rsquint1`='$data[4]', `rsquint2`='$data[5]', 
    `rsquint3`='$data[6]',`lvision1`='$data[7]', `lvision2`='$data[8]', `lvision3`='$data[9]',
    `rvision1`='$data[10]', `rvision2`='$data[11]', `rvision3`='$data[12]',`lhearing1`='$data[13]', `lhearing2`='$data[14]', 
    `lhearing3`='$data[15]',`rhearing1`='$data[16]', `rhearing2`='$data[17]', `rhearing3`='$data[18]',
    `speech1`='$data[19]', `speech2`='$data[20]', `speech3`='$data[21]',`tooth1`='$data[22]', `tooth2`='$data[23]',
    `tooth3`='$data[24]', `teeth1`='$data[25]', `teeth2`='$data[26]',`teeth3`='$data[27]', 
    `ynt1`='$data[28]', `ynt2`='$data[29]',`ynt3`='$data[30]',`mark1`='$data[31]', `mark2`='$data[32]', 
    `mark3`='$data[33]',`bone1`='$data[34]', `bone2`='$data[35]', `bone3`='$data[36]',
    `heart1`='$data[37]', `heart2`='$data[38]', `heart3`='$data[39]',`lungs1`='$data[40]',`lungs2`='$data[41]', 
    `lungs3`='$data[42]', `ovarious1`='$data[43]',`ovarious2`='$data[44]', `ovarious3`='$data[45]', 
    `ovarious4`='$data[46]',`tvarious1`='$data[47]', `tvarious2`='$data[48]', `tvarious3`='$data[49]',`tvarious4`='$data[50]',
    `thvarious1`='$data[51]', `thvarious2`='$data[52]', `thvarious3`='$data[53]',`thvarious4`='$data[54]', 
    `fvarious1`='$data[55]', `fvarious2`='$data[56]',`fvarious3`='$data[57]', `fvarious4`='$data[58]', `tname1`='$data[59]',
    `tname2`='$data[60]',`tname3`='$data[61]',`tposition1`='$data[62]', `tposition2`='$data[63]', 
    `tposition3`='$data[64]'
     WHERE `id` = $data[0]";

    try{
        $update_Result = $nursery2->featuredLoad($dbObj, $update_Query);

        // if($update_Result){
        //     if(mysqli_affected_rows($connect)>0){
        //        echo 'data updated';
        //     }else{
        //         echo 'data not updated';
        //     }
        // }
    }catch (Exception $ex){
        echo 'Error update' .$ex->getMessage();
    }
}
?>