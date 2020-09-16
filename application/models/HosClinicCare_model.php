<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id = "";
$date1="";
$poa="";
$weight1="";
$sugar="";
$albumin="";
$oedema="";
$systolic="";
$diastolic="";
$fundalheight="";
$fundalheight2="";
$lie="";
$presentation="";
$fm="";
$fhs="";
$designation="";
$donext="";

//get data from the form
function getData(){
    $data=array();
    $data[0]=(isset($_POST['id']) ? $_POST['id'] : '');
    $data[1]=(isset($_POST['date1']) ? $_POST['date1'] : '');
    $data[2]=(isset($_POST['poa']) ? $_POST['poa'] : '');  
    $data[3]=(isset($_POST['weight1']) ? $_POST['weight1'] : '');
    $data[4]=(isset($_POST['sugar']) ? $_POST['sugar'] : '');
    $data[5]=(isset($_POST['albumin']) ? $_POST['albumin'] : '');
    $data[6]=(isset($_POST['oedema']) ? $_POST['oedema'] : '');
    $data[7]=(isset($_POST['systolic']) ? $_POST['systolic'] : '');
    $data[8]=(isset($_POST['diastolic']) ? $_POST['diastolic'] : '');
    $data[9]=(isset($_POST['fundalheight']) ? $_POST['fundalheight'] : '');
    $data[10]=(isset($_POST['fundalheight1']) ? $_POST['fundalheight1'] : '');
    $data[11]=(isset($_POST['lie']) ? $_POST['lie'] : '');
    $data[12]=(isset($_POST['presentation']) ? $_POST['presentation'] : '');
    $data[13]=(isset($_POST['fm']) ? $_POST['fm'] : '');
    $data[14]=(isset($_POST['fhs']) ? $_POST['fhs'] : '');
    $data[15]=(isset($_POST['designation']) ? $_POST['designation'] : '');
    $data[16]=(isset($_POST['donext']) ? $_POST['donext'] : '');
    
    return $data;
}

$hosCC = new table();

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM `hoscliniccare` WHERE id='$info[0]'";

    $search_result=$hosCC->featuredLoad($dbObj,$search_query);

        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
                        $id=$row['id'];
                        $date1=$row['date1'];
                        $poa=$row['poa'];   
                        $weight1=$row['weight1'];
                        $sugar=$row['sugar'];
                        $albumin=$row['albumin'];
                        $oedema=$row['oedema'];
                        $systolic=$row['systolic'];
                        $diastolic=$row['diastolic'];
                        $fundalheight=$row['fundalheight'];
                        $fundalheight1=$row['fundalheight1'];
                        $lie=$row['lie'];
                        $presentation=$row['presentation'];
                        $fm=$row['fm'];
                        $fhs=$row['fhs'];
                        $designation=$row['designation'];
                        $donext=$row['donext'];
                       
                        
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
if(isset($_POST['Update'])){
    $info=getData();
    $update_query="UPDATE hoscliniccare SET id='$info[0]',date1='$info[1]',poa= '$info[2]',weight1='$info[3]',sugar='$info[4]',albumin='$info[5]',oedema='$info[6]',systolic='$info[7]',diastolic='$info[8]',fundalheight='$info[9]',fundalheight1='$info[10]',lie='$info[11]',presentation='$info[12]',fm='$info[13]',fhs='$info[14]',designation='$info[15]'
    ,donext='$info[16]'  WHERE id='$info[0]'";

try{
    $pdate_result=$hosCC->featuredLoad($dbObj,$update_query);
    if($pdate_result){
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
