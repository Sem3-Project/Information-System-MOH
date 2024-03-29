<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>

<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id = '';
$hosptal='';
$birth_weight='';
$poa='';
$live_birth='';
$still_birth='';
$abs='';
$del_dt='';
$sex='';
$del_mod='';
$ep='';
$bt='';
$ve='';
$mc='';
$infect='';
$fpm='';
$cm='';
$reason='';
$danger='';
$bf='';
$bp='';
$vita='';
$rubella='';
$antid='';
$diags='';
$chdr='';
$presc='';
$reff='';
$other='';
$dis_dt='';
$notes='';

//get data from the form
function getData(){
    $data=array();
    $data[0]=$_POST['id'];
    $data[1]=(isset($_POST['hosptal']) ? $_POST['hosptal'] : ''); 
    $data[2]=$_POST['birth_weight'];
    $data[3]=$_POST['poa'];
    $data[4]=$_POST['live_birth'];
    $data[5]=$_POST['still_birth'];
    $data[6]=$_POST['abs'];
    $data[7]=$_POST['del_dt'];
    $data[8]=$_POST['ep'];
    $data[9]=$_POST['bt'];
    $data[10]=$_POST['ve'];
    $data[11]=$_POST['mc'];
    $data[12]=$_POST['infect'];
    $data[13]=$_POST['fpm'];
    $data[14]=$_POST['cm'];
    $data[15]=$_POST['reason'];
    $data[16]=$_POST['danger'];
    $data[17]=$_POST['bf'];
    $data[18]=$_POST['bp'];
    $data[19]=$_POST['vita'];
    $data[20]=$_POST['rubella'];
    $data[21]=$_POST['antid'];
    $data[22]=$_POST['diags'];
    $data[23]=(isset($_POST['chdr']) ? $_POST['chdr'] : ''); 
    $data[24]=(isset($_POST['presc']) ? $_POST['presc'] : ''); 
    $data[25]=$_POST['reff'];
    $data[26]=$_POST['other'];
    $data[27]=$_POST['dis_dt'];
    $data[28]=$_POST['notes'];
    return $data;
}
$delipost = new table();

//search
if(isset($_POST['search'])){
    $info=getData();
    $search_Query="SELECT * FROM `pg7` WHERE id='$info[0]'";
    $search_Result=$delipost->featuredLoad($dbObj,$search_Query);
        if($search_Result){
            if($search_Result){
                if(mysqli_num_rows($search_Result)){
                    while($row = mysqli_fetch_array($search_Result)){
                        $id=$row['id'];
                        $hosptal=$row['hosptal'];
                        $birth_weight=$row['birth_weight'];
                        $poa=$row['poa'];
                        $live_birth=$row['live_birth'];
                        $still_birth=$row['still_birth'];
                        $abs=$row['abs'];
                        $del_dt=$row['del_dt'];
                        $sex=$row['sex'];
                        $del_mod=$row['del_mod'];
                        $ep=$row['ep'];
                        $bt=$row['bt'];
                        $ve=$row['ve'];
                        $mc=$row['mc'];
                        $infect=$row['infect'];
                        $fpm=$row['fpm'];
                        $cm=$row['cm'];
                        $reason=$row['reason'];
                        $danger=$row['danger'];
                        $bf=$row['bf'];
                        $bp=$row['bp'];
                        $vita=$row['vita'];
                        $rubella=$row['rubella'];
                        $antid=$row['antid'];
                        $diags=$row['diags'];
                        $chdr=$row['chdr'];
                        $presc=$row['presc'];
                        $reff=$row['reff'];
                        $other=$row['other'];
                        $dis_dt=$row['dis_dt'];
                        $notes=$row['notes'];
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
}

    //update
    if(isset($_POST['update'])){
        $info=getData();
        $update_Query="UPDATE `pg7` SET id='$info[0]',hosptal='$info[1]',birth_weight= '$info[2]',poa='$info[3]',live_birth='$info[4]',still_birth='$info[5]',abs='$info[6]',del_dt='$info[7]',sex='$info[8]',del_mod='$info[9]',ep='$info[10]',bt='$info[11]',ve='$info[12]',mc='$info[13]',infect='$info[14]',fpm='$info[15]'
        ,cm='$info[16]',reason='$info[17]',danger= '$info[18]',bf='$info[19]',bp='$info[20]',vita='$info[21]',rubella='$info[22]',antid='$info[23]',chdr='$info[24]',presc= '$info[25]',reff='$info[26]',other='$info[27]',notes='$info[28]'  WHERE id='$info[0]'";

try{
    $update_Result=$delipost->featuredLoad($dbObj,$update_Query);
    if($update_Result){
        echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Success!","Data updated successfully!","success");';
            echo '}, 200);</script>';
    }
}catch(Exception $ex){
    echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Result error!","error");';
        echo '}, 200);</script>';
}
}

?>
