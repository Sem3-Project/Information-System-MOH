<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Mother.php';
    include '../controllers/personalInfo.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id =$_POST['id']; $wAge =$_POST['wAge']; $hAge =$_POST['hAge']; $wEducation =$_POST['wEducation']; $hEducation =$_POST['hEducation']; $wOccupation =$_POST['wOccupation']; $hOccupation =$_POST['hOccupation']; 
    $fhDiabetes =$_POST['fhDiabetes']; $fhHypertension =$_POST['fhHypertension']; $fhHaematologic =$_POST['fhHaematologic']; $fhTwin =$_POST['fhTwin']; $fhOthers =$_POST['fhOthers']; 
    $shDiabetes =$_POST['shDiabetes']; $shHypertension =$_POST['shHypertension']; $shCardiac =$_POST['shCardiac']; $shRenal =$_POST['shRenal']; $shHepatic =$_POST['shHepatic']; $shPsychiatric =$_POST['shPsychiatric']; 
    $shEpilepsy =$_POST['shEpilepsy']; $shMalignancies =$_POST['shMalignancies']; $shHaematological =$_POST['shHaematological']; $shTuberculosis =$_POST['shTuberculosis']; $shThyroid =$_POST['shThyroid']; $shBronchial =$_POST['shBronchial']; 
    $shDVT =$_POST['shDVT']; $shSurgeries =$_POST['shSurgeries']; $shOther =$_POST['shOther']; $shScore =$_POST['shScore']; 
    $poGoneAc =$_POST['poGoneAc']; $poGonePm =$_POST['poGonePm']; $poGoneOut =$_POST['poGoneOut']; $poGoneW =$_POST['poGoneW']; $poGonePc =$_POST['poGonePc']; $poGoneSa =$_POST['poGoneSa'];
    $poGtwoAc =$_POST['poGtwoAc']; $poGtwoPm =$_POST['poGtwoPm']; $poGtwoOut =$_POST['poGtwoOut']; $poGtwoW =$_POST['poGtwoW']; $poGtwoPc =$_POST['poGtwoPc']; $poGtwoSa =$_POST['poGtwoSa']; 
    $poGthAc =$_POST['poGthAc']; $poGthPm =$_POST['poGthPm']; $poGthOut =$_POST['poGthOut']; $poGthW =$_POST['poGthW']; $poGthPc =$_POST['poGthPc']; $poGthSa =$_POST['poGthSa'];  
    $poGfoAc =$_POST['poGfoAc']; $poGfoPm =$_POST['poGfoPm']; $poGfoOut =$_POST['poGfoOut']; $poGfoW =$_POST['poGfoW'];$poGfoPc =$_POST['poGfoPc']; $poGfoSa =$_POST['poGfoSa']; 
    $poGfiAc =$_POST['poGfiAc']; $poGfiPm =$_POST['poGfiPm']; $poGfiOut =$_POST['poGfiOut']; $poGfiW =$_POST['poGfiW']; $poGfiPc =$_POST['poGfiPc']; $poGfiSa =$_POST['poGfiSa'];
    $poGsAc =$_POST['poGsAc']; $poGsPm =$_POST['poGsPm']; $poGsOut =$_POST['poGsOut']; $poGsW =$_POST['poGsW']; $poGsPc =$_POST['poGsPc'];$poGsSa =$_POST['poGsSa'];$poText =$_POST['poText']; 

  // $tblName = 'table1';

   $tempinves = new personalInfo();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $inves = new personalInfo();
      
        $data = array(

            "id" =>$id, "wAge" =>$wAge, "hAge" =>$hAge, "wEducation" =>$wEducation, "hEducation" =>$hEducation, "wOccupation" =>$wOccupation, "hOccupation" =>$hOccupation, 
            "fhDiabetes" =>$fhDiabetes, "fhHypertension" =>$fhHypertension, "fhHaematologic" =>$fhHaematologic, "fhTwin" =>$fhTwin, "fhOthers" =>$fhOthers, 
            "shDiabetes" =>$shDiabetes, "shHypertension" =>$shHypertension, "shCardiac" =>$shCardiac, "shRenal" =>$shRenal, "shHepatic" =>$shHepatic, "shPsychiatric" =>$shPsychiatric, 
            "shEpilepsy" =>$shEpilepsy, "shMalignancies" =>$shMalignancies, "shHaematological" =>$shHaematological, "shTuberculosis" =>$shTuberculosis, "shThyroid" =>$shThyroid, "shBronchial" =>$shBronchial, 
            "shDVT" =>$shDVT, "shSurgeries" =>$shSurgeries, "shOther" =>$shOther, "shScore" =>$shScore, 
            "poGoneAc" =>$poGoneAc, "poGonePm" =>$poGonePm, "poGoneOut" =>$poGoneOut, "poGoneW" =>$poGoneW, "poGonePc" =>$poGonePc, "poGoneSa" =>$poGoneSa,
            "poGtwoAc" =>$poGtwoAc, "poGtwoPm" =>$poGtwoPm, "poGtwoOut" =>$poGtwoOut, "poGtwoW" =>$poGtwoW, "poGtwoPc" =>$poGtwoPc, "poGtwoSa" =>$poGtwoSa, 
            "poGthAc" =>$poGthAc, "poGthPm" =>$poGthPm, "poGthOut" =>$poGthOut, "poGthW" =>$poGthW, "poGthPc" =>$poGthPc, "poGthSa" =>$poGthSa,  
            "poGfoAc" =>$poGfoAc, "poGfoPm" =>$poGfoPm, "poGfoOut" =>$poGfoOut, "poGfoW" =>$poGfoW,"poGfoPc" =>$poGfoPc, "poGfoSa" =>$poGfoSa, 
            "poGfiAc" =>$poGfiAc, "poGfiPm" =>$poGfiPm, "poGfiOut" =>$poGfiOut, "poGfiW" =>$poGfiW, "poGfiPc" =>$poGfiPc, "poGfiSa" =>$poGfiSa,
            "poGsAc" =>$poGsAc, "poGsPm" =>$poGsPm, "poGsOut" =>$poGsOut, "poGsW" =>$poGsW, "poGsPc" =>$poGsPc,"poGsSa" =>$poGsSa,"poText" =>$poText);
            
        $inves->bind($data);
        $inves->update($dbObj);
        $_POST=array();

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Success!","Data updated successfully!","success");';
        echo '}, 200);</script>';
   }
}
if(isset($_POST['search'])){

    if (empty($_POST['id'])){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Please enter valid patient id","error");';
        echo '}, 200);</script>';
    }
    else{
        $id = $_POST['id'];
        $personalInfo = new table();
        $search_Query = "SELECT * FROM table1 WHERE id = '$id'";
    
        $search_Result = $personalInfo->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }



        $_POST['wAge'] = $posts[1];    $_POST['hAge'] = $posts[2];    $_POST['wEducation'] = $posts[3];    $_POST['hEducation'] = $posts[4];  
        $_POST['wOccupation'] = $posts[5];    $_POST['hOccupation'] = $posts[6];    $_POST['fhDiabetes'] = $posts[7];    $_POST['fhHypertension'] = $posts[8];
        $_POST['fhHaematologic'] = $posts[9];    $_POST['fhTwin'] = $posts[10];    $_POST['fhOthers'] = $posts[11];    $_POST['shDiabetes'] = $posts[12];
        $_POST['shHypertension'] = $posts[13];    $_POST['shCardiac'] = $posts[14];    $_POST['shRenal'] = $posts[15];    $_POST['shHepatic'] = $posts[16];  
        $_POST['shPsychiatric'] = $posts[17];    $_POST['shEpilepsy'] = $posts[18];    $_POST['shMalignancies'] = $posts[19];    $_POST['shHaematological'] = $posts[20];
        $_POST['shTuberculosis'] = $posts[21];    $_POST['shThyroid'] = $posts[22];    $_POST['shBronchial'] = $posts[23];    $_POST['shDVT'] = $posts[24];  
        $_POST['shSurgeries'] = $posts[25];    $_POST['shOther'] = $posts[26];    $_POST['shScore'] = $posts[27];    $_POST['poGoneAc'] = $posts[28];
        $_POST['poGonePm'] = $posts[29];    $_POST['poGoneOut'] = $posts[30];    $_POST['poGoneW'] = $posts[31];    $_POST['poGonePc'] = $posts[32];
        $_POST['poGoneSa'] = $posts[33];    $_POST['poGtwoAc'] = $posts[34];    $_POST['poGtwoPm'] = $posts[35];    $_POST['poGtwoOut'] = $posts[36];  
        $_POST['poGtwoW'] = $posts[37];    $_POST['poGtwoPc'] = $posts[38];    $_POST['poGtwoSa'] = $posts[39];    $_POST['poGthAc'] = $posts[40];
        $_POST['poGthPm'] = $posts[41];$_POST['poGthOut'] = $posts[42];   $_POST['poGthW'] = $posts[43];     $_POST['poGthPc'] = $posts[44];
        $_POST['poGthSa'] = $posts[45];     $_POST['poGfoAc'] = $posts[46];     $_POST['poGfoPm'] = $posts[47];     $_POST['poGfoOut'] = $posts[48];
        $_POST['poGfoW'] = $posts[49];     $_POST['poGfoPc'] = $posts[50];     $_POST['poGfoSa'] = $posts[51];    $_POST['poGfiAc'] = $posts[52];
        $_POST['poGfiPm'] = $posts[53];     $_POST['poGfiOut'] = $posts[54];     $_POST['poGfiW'] = $posts[55];    $_POST['poGfiPc'] = $posts[56];
        $_POST['poGfiSa'] = $posts[57];     $_POST['poGsAc'] = $posts[58];     $_POST['poGsPm'] = $posts[59];    $_POST['poGsOut'] = $posts[60];
        $_POST['poGsW'] = $posts[61];     $_POST['poGsPc'] = $posts[62];     $_POST['poGsSa'] = $posts[63];    $_POST['poText'] = $posts[64];

        unset($posts);
        $posts = array();
    }

}
?> 
  