<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id=""; $ndate1 = ""; $nreason1 = ""; $nplace1 = "";  $nresult1 = ""; $ndate2 = ""; $nreason2 = ""; $nplace2 = ""; $nresult2 = ""; 
$ndate3 = ""; $nreason3 = ""; $nplace3 = ""; $nresult3 = ""; $ndate4 = "";  $nreason4 = ""; $nplace4 = ""; $nresult4 = ""; 
$ndate5 = ""; $nreason5 = ""; $nplace5 = ""; $nresult5 = ""; $ndate6 = ""; $nreason6 = ""; $nplace6 = "";  $nresult6 = ""; 
$ndate7 = ""; $nreason7 = ""; $nplace7 = ""; $nresult7 = "";  $ndate8 = ""; $nreason8 = ""; $nplace8 = ""; $nresult8 = ""; 
$ndate9 = "";$nreason9 = ""; $nplace9 = ""; $nresult9 = ""; $ndate10 = ""; $nreason10 = ""; $nplace10 = ""; $nresult10 = ""; 
$ndate11 = ""; $nreason11 = "";  $nplace11 = ""; $nresult11 = ""; $ndate12 = ""; $nreason12 = ""; $nplace12  = ""; $nresult12 = ""; 
$ndate13 = ""; $nreason13 = ""; $nplace13 = ""; $nresult13 = "";  $ndate14 = ""; $nreason14 = ""; $nplace14 = ""; $nresult14 = ""; 
$ndate15 = ""; $nreason15 = ""; $nplace15 = ""; $nresult15 = ""; $ndate16 = ""; $nreason16 = "";  $nplace16 = ""; $nresult16 = ""; 
$ndate17 = ""; $nreason17 = ""; $nplace17 = ""; $nresult17 = ""; $ndate18 = ""; $nreason18 = ""; $nplace18 = ""; $nresult18 = "";  
$ndate19 = ""; $nreason19 = ""; $nplace19 = ""; $nresult19 = ""; 

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['ndate1']; $posts[2] = $_POST['nreason1']; $posts[3] = $_POST['nplace1'];$posts[4] = $_POST['nresult1'];$posts[5] = $_POST['ndate2']; 
    $posts[6] = $_POST['nreason2']; $posts[7] = $_POST['nplace2']; $posts[8] = $_POST['nresult2']; $posts[9] = $_POST['ndate3']; $posts[10] = $_POST['nreason3']; 
    
    $posts[11] = $_POST['nplace3']; $posts[12] = $_POST['nresult3'];$posts[13] = $_POST['ndate4']; $posts[14] = $_POST['nreason4']; $posts[15] = $_POST['nplace4'];
    $posts[16] = $_POST['nresult4']; $posts[17] = $_POST['ndate5']; $posts[18] = $_POST['nreason5']; $posts[19] = $_POST['nplace5']; $posts[20] = $_POST['nresult5'];
      
    $posts[21] = $_POST['ndate6']; $posts[22] = $_POST['nreason6']; $posts[23] = $_POST['nplace6']; $posts[24] = $_POST['nresult6']; $posts[25] = $_POST['ndate7']; 
    $posts[26] = $_POST['nreason7']; $posts[27] = $_POST['nplace7']; $posts[28] = $_POST['nresult7']; $posts[29] = $_POST['ndate8']; $posts[30] = $_POST['nreason8']; 
    
    $posts[31] = $_POST['nplace8']; $posts[32] = $_POST['nresult8']; $posts[33] = $_POST['ndate9']; $posts[34] = $_POST['nreason9']; $posts[35] = $_POST['nplace9']; 
    $posts[36] = $_POST['nresult9']; $posts[37] = $_POST['ndate10']; $posts[38] = $_POST['nreason10']; $posts[39] = $_POST['nplace10']; 
    
    $posts[40] = $_POST['nresult10']; $posts[41] = $_POST['ndate11']; $posts[42] = $_POST['nreason11']; $posts[43] = $_POST['nplace11']; $posts[44] = $_POST['nresult11']; 
    $posts[45] = $_POST['ndate12']; $posts[46] = $_POST['nreason12']; $posts[47] = $_POST['nplace12']; $posts[48] = $_POST['nresult12']; $posts[49] = $_POST['ndate13']; 
    
    $posts[50] = $_POST['nreason13']; $posts[51] = $_POST['nplace13']; $posts[52] = $_POST['nresult13']; $posts[53] = $_POST['ndate14']; $posts[54] = $_POST['nreason14'];
    $posts[55] = $_POST['nplace14']; $posts[56] = $_POST['nresult14']; $posts[57] = $_POST['ndate15']; $posts[58] = $_POST['nreason15']; $posts[59] = $_POST['nplace15']; 
    
    $posts[60] = $_POST['nresult15']; $posts[61] = $_POST['ndate16']; $posts[62] = $_POST['nreason16']; $posts[63] = $_POST['nplace16']; $posts[64] = $_POST['nresult16']; 
    $posts[65] = $_POST['ndate17']; $posts[66] = $_POST['nreason17'];$posts[67] = $_POST['nplace17'];$posts[68] = $_POST['nresult17']; $posts[69] = $_POST['ndate18']; 
    
    $posts[70] = $_POST['nreason18']; $posts[71] = $_POST['nplace18']; $posts[72] = $_POST['nresult18']; 
    $posts[73] = $_POST['ndate19']; $posts[74] = $_POST['nreason19']; $posts[75] = $_POST['nplace19'];$posts[76] = $_POST['nresult19'];
    
    return $posts;
}

$refer2 = new table();

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table10 WHERE id = $data[0]";
    $search_Result = $refer2->featuredLoad($dbObj, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $id= $row['id']; $ndate1 = $row['ndate1']; $nreason1 = $row['nreason1']; $nplace1 = $row['nplace1'];$nresult1 = $row['nresult1'];$ndate2 = $row['ndate2']; 
                $nreason2 = $row['nreason2']; $nplace2 = $row['nplace2']; $nresult2 = $row['nresult2']; $ndate3 = $row['ndate3']; 
                $nreason3 = $row['nreason3']; $nplace3 = $row['nplace3']; $nresult3 = $row['nresult3'];$ndate4 = $row['ndate4']; $nreason4 = $row['nreason4'];
                $nplace4 = $row['nplace4'];$nresult4 = $row['nresult4']; $ndate5 = $row['ndate5']; $nreason5 = $row['nreason5']; 
                $nplace5 = $row['nplace5']; $nresult5 = $row['nresult5'];$ndate6 = $row['ndate6']; $nreason6 = $row['nreason6']; $nplace6 = $row['nplace6'];
                $nresult6 = $row['nresult6']; $ndate7 = $row['ndate7']; $nreason7 = $row['nreason7']; $nplace7 = $row['nplace7']; 
                $nresult7 = $row['nresult7']; $ndate8 = $row['ndate8']; $nreason8 = $row['nreason8']; $nplace8 = $row['nplace8']; $nresult8 = $row['nresult8']; 
                $ndate9 = $row['ndate9']; $nreason9 = $row['nreason9']; $nplace9 = $row['nplace9']; $nresult9 = $row['nresult9']; 
                $ndate10 = $row['ndate10']; $nreason10 = $row['nreason10']; $nplace10 = $row['nplace10']; $nresult10 = $row['nresult10']; $ndate11 = $row['ndate11']; 
                $nreason11 = $row['nreason11']; $nplace11 = $row['nplace11']; $nresult11 = $row['nresult11']; $ndate12 = $row['ndate12']; 
                $nreason12 = $row['nreason12']; $nplace12 = $row['nplace12']; $nresult12 = $row['nresult12']; $ndate13 = $row['ndate13']; $nreason13 = $row['nreason13']; 
                $nplace13 = $row['nplace13']; $nresult13 = $row['nresult13']; $ndate14 = $row['ndate14']; $nreason14 = $row['nreason14'];
                $nplace14 = $row['nplace14']; $nresult14= $row['nresult14']; $ndate15 = $row['ndate15']; $nreason15 = $row['nreason15']; $nplace15 = $row['nplace15']; 
                $nresult15 = $row['nresult15']; $ndate16 = $row['ndate16']; $nreason16 = $row['nreason16']; $nplace16 = $row['nplace16']; 
                $nresult16 = $row['nresult16']; $ndate17 = $row['ndate17']; $nreason17= $row['nreason17'];$nplace17 = $row['nplace17'];$nresult17 = $row['nresult17']; 
                $ndate18 = $row['ndate18']; $nreason18 = $row['nreason18']; $nplace18 = $row['nplace18']; $nresult18 = $row['nresult18']; 
                $ndate19 = $row['ndate19']; $nreason19 = $row['nreason19']; $nplace19 = $row['nplace19'];$nresult19 = $row['nresult19'];
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
    $update_Query = "UPDATE `table10` SET `ndate1`='$data[1]', `nreason1`='$data[2]', `nplace1`='$data[3]',`nresult1`='$data[4]', `ndate2`='$data[5]', 
    `nreason2`='$data[6]',`nplace2`='$data[7]', `nresult2`='$data[8]', `ndate3`='$data[9]',
    `nreason3`='$data[10]', `nplace3`='$data[11]', `nresult3`='$data[12]',`ndate4`='$data[13]', `nreason4`='$data[14]', 
    `nplace4`='$data[15]',`nresult4`='$data[16]', `ndate5`='$data[17]', `nreason5`='$data[18]',
    `nplace5`='$data[19]', `nresult5`='$data[20]', `ndate6`='$data[21]',`nreason6`='$data[22]', `nplace6`='$data[23]',
    `nresult6`='$data[24]', `ndate7`='$data[25]', `nreason7`='$data[26]',`nplace7`='$data[27]', 
    `nresult7`='$data[28]', `ndate8`='$data[29]',`nreason8`='$data[30]',`nplace8`='$data[31]', `nresult8`='$data[32]', 
    `ndate9`='$data[33]',`nreason9`='$data[34]', `nplace9`='$data[35]', `nresult9`='$data[36]',
    `ndate10`='$data[37]', `nreason10`='$data[38]', `nplace10`='$data[39]',`nresult10`='$data[40]',`ndate11`='$data[41]', 
    `nreason11`='$data[42]', `nplace11`='$data[43]',`nresult11`='$data[44]', `ndate12`='$data[45]', 
    `nreason12`='$data[46]',`nplace12`='$data[47]', `nresult12`='$data[48]', `ndate13`='$data[49]',`nreason13`='$data[50]',
    `nplace13`='$data[51]', `nresult13`='$data[52]', `ndate14`='$data[53]',`nreason14`='$data[54]', 
    `nplace14`='$data[55]', `nresult14`='$data[56]',`ndate15`='$data[57]', `nreason15`='$data[58]', `nplace15`='$data[59]',
    `nresult15`='$data[60]',`ndate16`='$data[61]',`nreason16`='$data[62]', `nplace16`='$data[63]', 
    `nresult16`='$data[64]',`ndate17`='$data[65]',`nreason17`='$data[66]',`nplace17`='$data[67]',`nresult17`='$data[68]',
    `ndate18`='$data[69]',`nreason18`='$data[70]',`nplace18`='$data[71]',`nresult18`='$data[72]',
    `ndate19`='$data[73]',`nreason19`='$data[74]',`nplace19`='$data[75]',`nresult19`='$data[76]'
     WHERE `id` = $data[0]";

    try{
        $update_Result = $refer2->featuredLoad($dbObj, $update_Query);

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