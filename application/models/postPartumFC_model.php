<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$idNew = ""; $ipp = ""; $zscore = ""; 
$day1 = ""; $day2 = ""; $day3 = ""; $day4 = ""; $day5 = ""; $day6 = ""; $day7 = ""; $day8 = ""; 
$imday1 = ""; $imday2 = ""; $imday3 = ""; $imday4 = ""; $imday5 = ""; $imday6 = ""; $imday7 = ""; $imday8 = ""; 
$cday = ""; $cplace = ""; $date = ""; 
$bpro = ""; $avd = ""; $evb = ""; $pallor = ""; $icterus = ""; $oedema = ""; $bp = ""; 
$cs = "";$rs = ""; $ae = ""; $ve = ""; 
$epds = ""; $other = ""; $problem = ""; 
$method = null; $Chosen = null; $reason = ""; 
$fpPlace = ""; $fpDate = ""; $fpTime = ""; $sNote = ""; 
$oName = ""; $designation = ""; $cName = ""; $cTel = ""; $phmTel = ""; $mohTel = ""; 

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['idNew']; $posts[1] = $_POST['ipp']; $posts[2] = $_POST['zscore'];
    
    $posts[3] = $_POST['day1'];$posts[4] = $_POST['day2']; $posts[5] = $_POST['day3']; $posts[6] = $_POST['day4']; 
    $posts[7] = $_POST['day5']; $posts[8] = $_POST['day6']; $posts[9] = $_POST['day7']; $posts[10] = $_POST['day8']; 

    $posts[11] = $_POST['imday1'];$posts[12] = $_POST['imday2']; $posts[13] = $_POST['imday3'];
    $posts[14] = $_POST['imday4'];$posts[15] = $_POST['imday5']; $posts[16] = $_POST['imday6']; 
    $posts[17] = $_POST['imday7']; $posts[18] = $_POST['imday8']; 
    
    $posts[19] = $_POST['cday'];$posts[20] = $_POST['cplace']; $posts[21] = $_POST['date']; 
    
    $posts[22] = $_POST['bpro'];$posts[23] = $_POST['avd'];$posts[24] = $_POST['evb']; $posts[25] = $_POST['pallor']; 
    $posts[26] = $_POST['icterus']; $posts[27] = $_POST['oedema']; $posts[28] = $_POST['bp']; 
    $posts[29] = $_POST['cs']; $posts[30] = $_POST['rs']; $posts[31] = $_POST['ae']; $posts[32] = $_POST['ve']; 
    
    $posts[33] = $_POST['epds']; $posts[34] = $_POST['other']; $posts[35] = $_POST['problem']; 
    
    $posts[36] = $_POST['method']; $posts[37] = $_POST['Chosen']; $posts[38] = $_POST['reason']; 
    
    $posts[39] = $_POST['fpPlace'];$posts[40] = $_POST['fpDate']; $posts[41] = $_POST['fpTime']; 
    $posts[42] = $_POST['sNote']; 

    $posts[43] = $_POST['oName']; $posts[44] = $_POST['designation']; $posts[45] = $_POST['cName']; 
    $posts[46] = $_POST['cTel']; $posts[47] = $_POST['phmTel']; $posts[48] = $_POST['mohTel']; 

    return $posts;
}
$postPFC = new table();

//search
if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table2 WHERE idNew = '$data[0]'";
    $search_Result = $postPFC->featuredLoad($dbObj, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                $idNew =$row['idNew']; $ipp =$row['ipp']; $zscore =$row['zscore']; 
                $day1 =$row['day1']; $day2 =$row['day2']; $day3 =$row['day3']; $day4 =$row['day4']; 
                $day5 =$row['day5']; $day6 =$row['day6']; $day7 =$row['day7']; $day8 =$row['day8']; 
                $imday1 =$row['imday1']; $imday2 =$row['imday2']; $imday3 =$row['imday3']; $imday4 =$row['imday4']; 
                $imday5 =$row['imday5']; $imday6 =$row['imday6']; $imday7 =$row['imday7']; $imday8 =$row['imday8'];
                $cday =$row['cday']; $cplace =$row['cplace']; $date =$row['date']; 
                $bpro =$row['bpro']; $avd =$row['avd']; $evb =$row['evb']; $pallor =$row['pallor']; 
                $icterus =$row['icterus']; $oedema =$row['oedema']; $bp=$row['bp']; $cs =$row['cs']; $rs =$row['rs']; 
                $ae =$row['ae']; $ve =$row['ve']; 
                $epds =$row['epds']; $other =$row['other']; $problem =$row['problem']; 
                $method =$row['method']; $Chosen =$row['Chosen']; $reason =$row['reason']; 
                $fpPlace =$row['fpPlace']; $fpDate =$row['fpDate']; $fpTime =$row['fpTime']; $sNote =$row['sNote']; 
                $oName =$row['oName']; $designation =$row['designation']; $cName =$row['cName']; 
                $cTel =$row['cTel'];  $phmTel =$row['phmTel']; $mohTel =$row['mohTel']; 
                
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
    $update_Query = "UPDATE `table2` SET `ipp`='$data[1]', `zscore`='$data[2]', 
    `day1`='$data[3]',`day2`='$data[4]', `day3`='$data[5]', `day4`='$data[6]',
    `day5`='$data[7]', `day6`='$data[8]', `day7`='$data[9]',`day8`='$data[10]', 
    `imday1`='$data[11]', `imday2`='$data[12]',`imday3`='$data[13]', `imday4`='$data[14]', 
    `imday5`='$data[15]',`imday6`='$data[16]', `imday7`='$data[17]', `imday8`='$data[18]',
    `cday`='$data[19]', `cplace`='$data[20]', `date`='$data[21]',
    `bpro`='$data[22]', `avd`='$data[23]',`evb`='$data[24]', `pallor`='$data[25]', 
    `icterus`='$data[26]',`oedema`='$data[27]', `bp`='$data[28]', `cs`='$data[29]',
    `rs`='$data[30]',`ae`='$data[31]', `ve`='$data[32]', 
    `epds`='$data[33]',`other`='$data[34]', `problem`='$data[35]', 
    `method`='$data[36]',`Chosen`='$data[37]', `reason`='$data[38]', 
    `fpPlace`='$data[39]',`fpDate`='$data[40]',`fpTime`='$data[41]', `sNote`='$data[42]', 
    `oName`='$data[43]',`designation`='$data[44]', `cName`='$data[45]', 
    `cTel`='$data[46]',`phmTel`='$data[47]', `mohTel`='$data[48]'
     WHERE `idNew` = '$data[0]'";

    try{
        $update_Result = $postPFC->featuredLoad($dbObj, $update_Query);

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
