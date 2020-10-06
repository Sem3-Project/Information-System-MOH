<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Mother.php';
    include '../controllers/postPartumFC.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id =$_POST['id']; $ipp =$_POST['ipp']; $zscore =$_POST['zscore']; 
    $day1 =$_POST['day1']; $day2 =$_POST['day2']; $day3 =$_POST['day3']; $day4 =$_POST['day4']; 
    $day5 =$_POST['day5']; $day6 =$_POST['day6']; $day7 =$_POST['day7']; $day8 =$_POST['day8']; 
    $imday1 =$_POST['imday1']; $imday2 =$_POST['imday2']; $imday3 =$_POST['imday3']; $imday4 =$_POST['imday4']; 
    $imday5 =$_POST['imday5']; $imday6 =$_POST['imday6']; $imday7 =$_POST['imday7']; $imday8 =$_POST['imday8'];
    $cday =$_POST['cday']; $cplace =$_POST['cplace']; $date =$_POST['date']; 
    $bpro =$_POST['bpro']; $avd =$_POST['avd']; $evb =$_POST['evb']; $pallor =$_POST['pallor']; 
    $icterus =$_POST['icterus']; $oedema =$_POST['oedema']; $bp=$_POST['bp']; $cs =$_POST['cs']; $rs =$_POST['rs']; 
    $ae =$_POST['ae']; $ve =$_POST['ve']; 
    $epds =$_POST['epds']; $other =$_POST['other']; $problem =$_POST['problem']; 
    $method =$_POST['method']; $Chosen =$_POST['Chosen']; $reason =$_POST['reason']; 
    $fpPlace =$_POST['fpPlace']; $fpDate =$_POST['fpDate']; $fpTime =$_POST['fpTime']; $sNote =$_POST['sNote']; 
    $oName =$_POST['oName']; $designation =$_POST['designation']; $cName =$_POST['cName']; 
    $cTel =$_POST['cTel'];  $phmTel =$_POST['phmTel']; $mohTel =$_POST['mohTel']; 
    
  // $tblName = 'table2';

   $tempinves = new postPartumFC();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $inves = new postPartumFC();
      
        $data = array(
            "id" =>$id, "ipp" =>$ipp, "zscore" =>$zscore, 
            "day1" =>$day1, "day2" =>$day2, "day3" =>$day3, "day4" =>$day4, 
            "day5" =>$day5, "day6" =>$day6, "day7" =>$day7, "day8" =>$day8, 
            "imday1" =>$imday1, "imday2" =>$imday2, "imday3" =>$imday3, "imday4" =>$imday4, 
            "imday5" =>$imday5, "imday6" =>$imday6, "imday7" =>$imday7, "imday8" =>$imday8,
            "cday" =>$cday, "cplace" =>$cplace, "date" =>$date, 
            "bpro" =>$bpro, "avd" =>$avd, "evb" =>$evb, "pallor" =>$pallor, 
            "icterus" =>$icterus, "oedema" =>$oedema, "bp" =>$bp, "cs" =>$cs, "rs" =>$rs, 
            "ae" =>$ae, "ve" =>$ve, 
            "epds" =>$epds, "other" =>$other, "problem" =>$problem, 
            "method" =>$method, "Chosen" =>$Chosen, "reason" =>$reason, 
            "fpPlace" =>$fpPlace, "fpDate" =>$fpDate, "fpTime" =>$fpTime, "sNote" =>$sNote, 
            "oName" =>$oName, "designation" =>$designation, "cName" =>$cName, 
            "cTel" =>$cTel,  "phmTel" =>$phmTel, "mohTel" =>$mohTel);
            
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
        $postPartumFC = new table();
        $search_Query = "SELECT * FROM table2 WHERE id = '$id'";
    
        $search_Result = $postPartumFC->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }

        $_POST['ipp'] = $posts[1];    $_POST['zscore'] = $posts[2];    $_POST['day1'] = $posts[3];    $_POST['day2'] = $posts[4];  
        $_POST['day3'] = $posts[5];    $_POST['day4'] = $posts[6];    $_POST['day5'] = $posts[7];    $_POST['day6'] = $posts[8];
        $_POST['day7'] = $posts[9];    $_POST['day8'] = $posts[10];    $_POST['imday1'] = $posts[11];    $_POST['imday2'] = $posts[12];
        $_POST['imday3'] = $posts[13];    $_POST['imday4'] = $posts[14];    $_POST['imday5'] = $posts[15];    $_POST['imday6'] = $posts[16];  
        $_POST['imday7'] = $posts[17];    $_POST['imday8'] = $posts[18];    $_POST['cday'] = $posts[19];    $_POST['cplace'] = $posts[20];
        $_POST['date'] = $posts[21];    $_POST['bpro'] = $posts[22];    $_POST['avd'] = $posts[23];    $_POST['evb'] = $posts[24];  
        $_POST['pallor'] = $posts[25];    $_POST['icterus'] = $posts[26];    $_POST['oedema'] = $posts[27];    $_POST['bp'] = $posts[28];
        $_POST['cs'] = $posts[29];    $_POST['rs'] = $posts[30];    $_POST['ae'] = $posts[31];    $_POST['ve'] = $posts[32];
        $_POST['epds'] = $posts[33];    $_POST['other'] = $posts[34];    $_POST['problem'] = $posts[35];    $_POST['method'] = $posts[36];  
        $_POST['Chosen'] = $posts[37];    $_POST['reason'] = $posts[38];    $_POST['fpPlace'] = $posts[39];    $_POST['fpDate'] = $posts[40];
        $_POST['fpTime'] = $posts[41];$_POST['sNote'] = $posts[42];   $_POST['oName'] = $posts[43];     $_POST['designation'] = $posts[44];
        $_POST['cName'] = $posts[45];     $_POST['cTel'] = $posts[46];     $_POST['phmTel'] = $posts[47];     $_POST['mohTel'] = $posts[48];
        

        unset($posts);
        $posts = array();
    }

}
?> 
  