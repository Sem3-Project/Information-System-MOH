<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id="";
$date1="";
$poa="";   
$ebw="";
$crl="";
$gest_sac="";
$bpd="";
$hc="";
$ac="";
$fl="";
$liquor="";
$placenta="";
$average_poa="";
$any_other="";
$designation="";

//get data from the form
function getData(){
    $data=array();
    $data[0]=(isset($_POST['id']) ? $_POST['id'] : '');
    $data[1]=(isset($_POST['date1']) ? $_POST['date1'] : '');
    $data[2]=(isset($_POST['poa']) ? $_POST['poa'] : '');  
    $data[3]=(isset($_POST['ebw']) ? $_POST['ebw'] : '');
    $data[4]=(isset($_POST['crl']) ? $_POST['crl'] : '');
    $data[5]=(isset($_POST['gest_sac']) ? $_POST['gest_sac'] : '');
    $data[6]=(isset($_POST['bpd']) ? $_POST['bpd'] : '');
    $data[7]=(isset($_POST['hc']) ? $_POST['hc'] : '');
    $data[8]=(isset($_POST['ac']) ? $_POST['ac'] : '');
    $data[9]=(isset($_POST['fl']) ? $_POST['fl'] : '');
    $data[10]=(isset($_POST['liquor']) ? $_POST['liquor'] : '');
    $data[11]=(isset($_POST['placenta']) ? $_POST['placenta'] : '');
    $data[12]=(isset($_POST['average_poa']) ? $_POST['average_poa'] : '');
    $data[13]=(isset($_POST['any_other']) ? $_POST['any_other'] : '');
    $data[14]=(isset($_POST['designation']) ? $_POST['designation'] : '');
    return $data;
}

$usscan = new table();

//search
if(isset($_POST['search'])){
    $info=getData();
    $search_Query="SELECT * FROM usscan WHERE id='$info[0]'";
    $search_Result=$usscan->featuredLoad($dbObj,$search_Query);

        if($search_Result){
            if($search_Result){
                if(mysqli_num_rows($search_Result)){
                    while($row = mysqli_fetch_array($search_Result)){
                        $id=$row['id'];
                        $date1=$row['date1'];
                        $poa=$row['poa'];   
                        $ebw=$row['ebw'];
                        $crl=$row['crl'];
                        $gest_sac=$row['gest_sac'];
                        $bpd=$row['bpd'];
                        $hc=$row['hc'];
                        $ac=$row['ac'];
                        $fl=$row['fl'];
                        $liquor=$row['liquor'];
                        $placenta=$row['placenta'];
                        $average_poa=$row['average_poa'];
                        $any_other=$row['any_other'];
                        $designation=$row['designation'];
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
    $update_Query="UPDATE usscan SET id='$info[0]',date1='$info[1]',poa= '$info[2]',ebw='$info[3]',crl='$info[4]',
    gest_sac='$info[5]',bpd='$info[6]',hc='$info[7]',ac='$info[8]',fl='$info[9]',liquor='$info[10]',placenta='$info[11]',
    average_poa='$info[12]', any_other='$info[13]',designation='$info[14]'
     WHERE id='$info[0]'";

try{
    $update_Result=$usscan->featuredLoad($dbObj,$update_Query);
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
