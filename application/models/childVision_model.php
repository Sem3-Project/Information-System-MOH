<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id='';
$light='';
$watch='';
$smile='';
$eye='';
$look='';
$touch='';
$eyeerror='';
$pick='';
$touch2='';
$recognize='';

//get data from the form
function getData(){
    $data=array();
    $data[0]=(isset($_POST['id']) ? $_POST['id'] : '');
    $data[1]=(isset($_POST['light']) ? $_POST['light'] : '');
    $data[2]=(isset($_POST['watch']) ? $_POST['watch'] : '');  
    $data[3]=(isset($_POST['smile']) ? $_POST['smile'] : '');
    $data[4]=(isset($_POST['eye']) ? $_POST['eye'] : '');
    $data[5]=(isset($_POST['look']) ? $_POST['look'] : '');
    $data[6]=(isset($_POST['touch']) ? $_POST['touch'] : '');
    $data[7]=(isset($_POST['eyeerror']) ? $_POST['eyeerror'] : '');
    $data[8]=(isset($_POST['pick']) ? $_POST['pick'] : '');
    $data[9]=(isset($_POST['touch2']) ? $_POST['touch2'] : '');
    $data[10]=(isset($_POST['recognize']) ? $_POST['recognize'] : '');
    return $data;
}

$vision = new table();

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM childdata4 WHERE id='$info[0]'";
    $search_result=$vision->featuredLoad($dbObj,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
                        $id=$row['id'];
                        $light=$row['light'];
                        $watch=$row['watch'];
                        $smile=$row['smile'];
                        $eye=$row['eye'];
                        $look=$row['look'];
                        $touch=$row['touch'];
                        $eyeerror=$row['eyeerror'];
                        $pick=$row['pick'];
                        $touch2=$row['touch2'];
                        $recognize=$row['recognize'];
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
$update_query="UPDATE childdata4 SET id='$info[0]',light='$info[1]',watch= '$info[2]',smile='$info[3]',eye='$info[4]',look='$info[5]',touch='$info[6]',eyeerror='$info[7]',pick='$info[8]',touch2='$info[9]',recognize='$info[10]'  WHERE id='$info[0]'";

try{
$pdate_result=$vision->featuredLoad($dbObj,$update_query);
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
