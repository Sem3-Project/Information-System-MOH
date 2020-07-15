<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$patient_id='';
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
    $data[0]=(isset($_POST['patient_id']) ? $_POST['patient_id'] : '');
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
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM childdata5 WHERE patient_id='$info[0]'";
    $search_result=$childHearing->featuredLoad($dbObj,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
                        $patient_id=$row['patient_id'];
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
                        echo("no data are available");
                    }
            }else{
                echo("result error");
            }
        }
    }

//update
if(isset($_POST['Update'])){
$info=getData();
$update_query="UPDATE childdata5 SET patient_id='$info[0]',sound='$info[1]',highsound= '$info[2]',smile='$info[3]',eye='$info[4]',look='$info[5]',hear='$info[6]',search='$info[7]',song='$info[8]',name='$info[9]',respond='$info[10]'  WHERE patient_id='$info[0]'";

try{
$pdate_result=$childHearing->featuredLoad($dbObj,$update_query);
if($pdate_result){
if(mysqli_affected_rows($connect)>0){
 echo("data updated");
}else{
 echo("data not updated");
}
}
}catch(Exception $ex){
echo("error in update".$ex->getMessage());
}
}

?>