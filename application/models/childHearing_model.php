<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>

<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id='';
$sound='';
$highsound='';
$smile='';
$eye='';
$look='';
$hear='';
$search='';
$song='';
$name='';
$respond='';

//get data from the form
function getData(){
    $data=array();
    $data[0]=(isset($_POST['id']) ? $_POST['id'] : '');
    $data[1]=(isset($_POST['sound']) ? $_POST['sound'] : '');
    $data[2]=(isset($_POST['highsound']) ? $_POST['highsound'] : '');  
    $data[3]=(isset($_POST['smile']) ? $_POST['smile'] : '');
    $data[4]=(isset($_POST['eye']) ? $_POST['eye'] : '');
    $data[5]=(isset($_POST['look']) ? $_POST['look'] : '');
    $data[6]=(isset($_POST['hear']) ? $_POST['hear'] : '');
    $data[7]=(isset($_POST['search']) ? $_POST['search'] : '');
    $data[8]=(isset($_POST['song']) ? $_POST['song'] : '');
    $data[9]=(isset($_POST['name']) ? $_POST['name'] : '');
    $data[10]=(isset($_POST['respond']) ? $_POST['respond'] : '');
    return $data;
}
$childHearing = new table();

//search
if(isset($_POST['search'])){
    $info=getData();
    $search_Query="SELECT * FROM childdata5 WHERE id='$info[0]'";
    $search_Result=$childHearing->featuredLoad($dbObj,$search_Query);
        if($search_Result){
                if(mysqli_num_rows($search_Result)){
                    while($row = mysqli_fetch_array($search_Result)){
                        $id=$row['id'];
                        $sound=$row['sound'];
                        $highsound=$row['highsound'];
                        $smile=$row['smile'];
                        $eye=$row['eye'];
                        $look=$row['look'];
                        $hear=$row['hear'];
                        $search=$row['search'];
                        $song=$row['song'];
                        $name=$row['name'];
                        $respond=$row['respond'];
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
$info=getData();
$update_Query="UPDATE childdata5 SET id='$info[0]',sound='$info[1]',highsound= '$info[2]',smile='$info[3]',eye='$info[4]',look='$info[5]',hear='$info[6]',search='$info[7]',song='$info[8]',name='$info[9]',respond='$info[10]'  WHERE id='$info[0]'";

try{
$update_Result=$childHearing->featuredLoad($dbObj,$update_Query);
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
