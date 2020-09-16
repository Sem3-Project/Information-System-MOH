<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id = null; $wAge = ""; $hAge = ""; $wEducation = ""; $hEducation = ""; $wOccupation = ""; $hOccupation = ""; 
$fhDiabetes = null; $fhHypertension = null; $fhHaematologic = null; $fhTwin = null; $fhOthers = ""; 
$shDiabetes = null; $shHypertension = null; $shCardiac = null; $shRenal = null; $shHepatic = null; $shPsychiatric = null; 
$shEpilepsy = null; $shMalignancies = null; $shHaematological = null; $shTuberculosis = null; $shThyroid = null; $shBronchial = null; 
$shDVT = ""; $shSurgeries = ""; $shOther = ""; $shScore = ""; $poGoneAc = ""; $poGonePm = "";
$poGoneOut = ""; $poGoneW = ""; $poGonePc = ""; $poGoneSa = ""; $poGtwoAc = ""; $poGtwoPm = ""; $poGtwoOut = ""; $poGtwoW = ""; $poGtwoPc = ""; $poGtwoSa = "";
$poGthAc = ""; $poGthPm = ""; $poGthOut = ""; $poGthW = ""; $poGthPc = ""; $poGthSa = ""; $poGfoAc = ""; $poGfoPm = ""; $poGfoOut = ""; $poGfoW = "";
$poGfoPc = ""; $poGfoSa = ""; $poGfiAc = ""; $poGfiPm = ""; $poGfiOut = ""; $poGfiW = ""; $poGfiPc = ""; $poGfiSa= ""; $poGsAc = ""; $poGsPm = "";
$poGsOut = ""; $poGsW = ""; $poGsPc = ""; $poGsSa = ""; $poText = "";

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['wAge']; $posts[2] = $_POST['hAge'];$posts[3] = $_POST['wEducation'];
    $posts[4] = $_POST['hEducation']; $posts[5] = $_POST['wOccupation']; $posts[6] = $_POST['hOccupation']; 
    
    $posts[7] = $_POST['fhDiabetes']; $posts[8] = $_POST['fhHypertension']; $posts[9] = $_POST['fhHaematologic'];
    $posts[10] = $_POST['fhTwin']; $posts[11] = $_POST['fhOthers'];

    $posts[12] = $_POST['shDiabetes']; $posts[13] = $_POST['shHypertension'];$posts[14] = $_POST['shCardiac'];
    $posts[15] = $_POST['shRenal']; $posts[16] = $_POST['shHepatic']; $posts[17] = $_POST['shPsychiatric']; 

    $posts[18] = $_POST['shEpilepsy']; $posts[19] = $_POST['shMalignancies'];$posts[20] = $_POST['shHaematological']; 
    $posts[21] = $_POST['shTuberculosis']; $posts[22] = $_POST['shThyroid'];$posts[23] = $_POST['shBronchial'];

    $posts[24] = $_POST['shDVT']; $posts[25] = $_POST['shSurgeries']; 
    $posts[26] = $_POST['shOther']; $posts[27] = $_POST['shScore']; 
    
    $posts[28] = $_POST['poGoneAc']; $posts[29] = $_POST['poGonePm']; $posts[30] = $_POST['poGoneOut']; 
    $posts[31] = $_POST['poGoneW']; $posts[32] = $_POST['poGonePc']; $posts[33] = $_POST['poGoneSa'];

    $posts[34] = $_POST['poGtwoAc']; $posts[35] = $_POST['poGtwoPm']; $posts[36] = $_POST['poGtwoOut'];  
    $posts[37] = $_POST['poGtwoW']; $posts[38] = $_POST['poGtwoPc']; $posts[39] = $_POST['poGtwoSa'];

    $posts[40] = $_POST['poGthAc']; $posts[41] = $_POST['poGthPm']; $posts[42] = $_POST['poGthOut']; 
    $posts[43] = $_POST['poGthW']; $posts[44] = $_POST['poGthPc']; $posts[45] = $_POST['poGthSa']; 
    
    $posts[46] = $_POST['poGfoAc']; $posts[47] = $_POST['poGfoPm']; $posts[48] = $_POST['poGfoOut']; 
    $posts[49] = $_POST['poGfoW']; $posts[50] = $_POST['poGfoPc']; $posts[51] = $_POST['poGfoSa']; 
    
    $posts[52] = $_POST['poGfiAc']; $posts[53] = $_POST['poGfiPm'];$posts[54] = $_POST['poGfiOut']; 
    $posts[55] = $_POST['poGfiW']; $posts[56] = $_POST['poGfiPc']; $posts[57] = $_POST['poGfiSa']; 
    
    $posts[58] = $_POST['poGsAc']; $posts[59] = $_POST['poGsPm']; $posts[60] = $_POST['poGsOut']; 
    $posts[61] = $_POST['poGsW']; $posts[62] = $_POST['poGsPc']; $posts[63] = $_POST['poGsSa'];
    $posts[64] = $_POST['poText']; 
    return $posts;
}

$personalInfo = new table();

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table1 WHERE id = '$data[0]'";
    $search_Result = $personalInfo->featuredLoad($dbObj, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                $id =$row['id']; $wAge =$row['wAge']; $hAge =$row['hAge']; $wEducation =$row['wEducation']; $hEducation =$row['hEducation']; $wOccupation =$row['wOccupation']; $hOccupation =$row['hOccupation']; 
                $fhDiabetes =$row['fhDiabetes']; $fhHypertension =$row['fhHypertension']; $fhHaematologic =$row['fhHaematologic']; $fhTwin =$row['fhTwin']; $fhOthers =$row['fhOthers']; 
                $shDiabetes =$row['shDiabetes']; $shHypertension =$row['shHypertension']; $shCardiac =$row['shCardiac']; $shRenal =$row['shRenal']; $shHepatic =$row['shHepatic']; $shPsychiatric =$row['shPsychiatric']; 
                $shEpilepsy =$row['shEpilepsy']; $shMalignancies =$row['shMalignancies']; $shHaematological =$row['shHaematological']; $shTuberculosis =$row['shTuberculosis']; $shThyroid =$row['shThyroid']; $shBronchial =$row['shBronchial']; 
                $shDVT =$row['shDVT']; $shSurgeries =$row['shSurgeries']; $shOther =$row['shOther']; $shScore =$row['shScore']; 
                $poGoneAc =$row['poGoneAc']; $poGonePm =$row['poGonePm']; $poGoneOut =$row['poGoneOut']; $poGoneW =$row['poGoneW']; $poGonePc =$row['poGonePc']; $poGoneSa =$row['poGoneSa'];
                $poGtwoAc =$row['poGtwoAc']; $poGtwoPm =$row['poGtwoPm']; $poGtwoOut =$row['poGtwoOut']; $poGtwoW =$row['poGtwoW']; $poGtwoPc =$row['poGtwoPc']; $poGtwoSa =$row['poGtwoSa']; 
                $poGthAc =$row['poGthAc']; $poGthPm =$row['poGthPm']; $poGthOut =$row['poGthOut']; $poGthW =$row['poGthW']; $poGthPc =$row['poGthPc']; $poGthSa =$row['poGthSa'];  
                $poGfoAc =$row['poGfoAc']; $poGfoPm =$row['poGfoPm']; $poGfoOut =$row['poGfoOut']; $poGfoW =$row['poGfoW'];$poGfoPc =$row['poGfoPc']; $poGfoSa =$row['poGfoSa']; 
                $poGfiAc =$row['poGfiAc']; $poGfiPm =$row['poGfiPm']; $poGfiOut =$row['poGfiOut']; $poGfiW =$row['poGfiW']; $poGfiPc =$row['poGfiPc']; $poGfiSa =$row['poGfiSa'];
                $poGsAc =$row['poGsAc']; $poGsPm =$row['poGsPm']; $poGsOut =$row['poGsOut']; $poGsW =$row['poGsW']; $poGsPc =$row['poGsPc'];$poGsSa =$row['poGsSa'];$poText =$row['poText']; 
            }
        }else{
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Error!","Please enter valid patient id","error");';
            echo '}, 200);</script>';
        }
    }else{
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Result error!","error");';
        echo '}, 200);</script>';
    }
}

//update
if(isset($_POST['update'])){
    $data = getPosts();
    $update_Query = "UPDATE `table1` SET `wAge`='$data[1]', `hAge`='$data[2]', `wEducation`='$data[3]',`hEducation`='$data[4]', `wOccupation`='$data[5]', `hOccupation`='$data[6]',
    `fhDiabetes`='$data[7]', `fhHypertension`='$data[8]', `fhHaematologic`='$data[9]',`fhTwin`='$data[10]', `fhOthers`='$data[11]', 
    `shDiabetes`='$data[12]',`shHypertension`='$data[13]', `shCardiac`='$data[14]', `shRenal`='$data[15]',`shHepatic`='$data[16]', `shPsychiatric`='$data[17]', 
    `shEpilepsy`='$data[18]',`shMalignancies`='$data[19]', `shHaematological`='$data[20]', `shTuberculosis`='$data[21]',`shThyroid`='$data[22]', `shBronchial`='$data[23]',
    `shDVT`='$data[24]', `shSurgeries`='$data[25]', `shOther`='$data[26]',`shScore`='$data[27]', 
    `poGoneAc`='$data[28]', `poGonePm`='$data[29]',`poGoneOut`='$data[30]',`poGoneW`='$data[31]', `poGonePc`='$data[32]', `poGoneSa`='$data[33]',
    `poGtwoAc`='$data[34]', `poGtwoPm`='$data[35]', `poGtwoOut`='$data[36]',`poGtwoW`='$data[37]', `poGtwoPc`='$data[38]', `poGtwoSa`='$data[39]',
    `poGthAc`='$data[40]',`poGthPm`='$data[41]', `poGthOut`='$data[42]', `poGthW`='$data[43]',`poGthPc`='$data[44]', `poGthSa`='$data[45]', 
    `poGfoAc`='$data[46]',`poGfoPm`='$data[47]', `poGfoOut`='$data[48]', `poGfoW`='$data[49]',`poGfoPc`='$data[50]',`poGfoSa`='$data[51]', 
    `poGfiAc`='$data[52]', `poGfiPm`='$data[53]',`poGfiOut`='$data[54]', `poGfiW`='$data[55]', `poGfiPc`='$data[56]',`poGfiSa`='$data[57]', 
    `poGsAc`='$data[58]', `poGsPm`='$data[59]',`poGsOut`='$data[60]',`poGsW`='$data[61]',`poGsPc`='$data[62]', `poGsSa`='$data[63]', `poText`='$data[64]'
     WHERE `id` = '$data[0]'";

    try{
        $update_Result = $personalInfo->featuredLoad($dbObj, $update_Query);

        if($update_Result){
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Success!","Data updated successfully!","success");';
            echo '}, 200);</script>';
        }
    }catch (Exception $ex){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Result error!","error");';
        echo '}, 200);</script>';
    }
}

?>