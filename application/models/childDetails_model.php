<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$patient_id='';
$doctor='';
$moh='';
$idnum='';
$childname='';
$regno='';
$childbday='';
$regdate='';
$momname='';
$momage='';
$num1='';
$weight1='';
$headperi='';
$length='';
$health='';
$vitk='';
$posture='';
$rel='';
$date1='';
$date2='';
$date3='';
$date4='';
$date5='';
$date6='';
$date7='';
$date8='';
$date9='';
$date0='';
$date10='';

//get data from the form
function getData(){
    $data=array();
    $data[0]=(isset($_POST['patient_id']) ? $_POST['patient_id'] : '');
    $data[1]=(isset($_POST['doctor']) ? $_POST['doctor'] : '');
    $data[2]=(isset($_POST['moh']) ? $_POST['moh'] : '');  
    $data[3]=(isset($_POST['idnum']) ? $_POST['idnum'] : '');
    $data[4]=(isset($_POST['childname']) ? $_POST['childname'] : '');
    $data[5]=(isset($_POST['regno']) ? $_POST['regno'] : '');
    $data[6]=(isset($_POST['childbday']) ? $_POST['childbday'] : '');
    $data[7]=(isset($_POST['regdate']) ? $_POST['regdate'] : '');
    $data[8]=(isset($_POST['momname']) ? $_POST['momname'] : '');
    $data[9]=(isset($_POST['momage']) ? $_POST['momage'] : '');
    $data[10]=(isset($_POST['num1']) ? $_POST['num1'] : '');
    $data[11]=(isset($_POST['weight1']) ? $_POST['weight1'] : '');
    $data[12]=(isset($_POST['headperi']) ? $_POST['headperi'] : '');
    $data[13]=(isset($_POST['length']) ? $_POST['length'] : '');
    $data[14]=(isset($_POST['health']) ? $_POST['health'] : '');
    $data[15]=(isset($_POST['vitk']) ? $_POST['vitk'] : '');
    $data[16]=(isset($_POST['posture']) ? $_POST['posture'] : '');
    $data[17]=(isset($_POST['rel']) ? $_POST['rel'] : '');
    $data[18]=(isset($_POST['date1']) ? $_POST['date1'] : '');
    $data[19]=(isset($_POST['date2']) ? $_POST['date2'] : '');
    $data[20]=(isset($_POST['date3']) ? $_POST['date3'] : '');
    $data[21]=(isset($_POST['date4']) ? $_POST['date4'] : '');
    $data[22]=(isset($_POST['date5']) ? $_POST['date5'] : '');
    $data[23]=(isset($_POST['date6']) ? $_POST['date6'] : '');
    $data[24]=(isset($_POST['date7']) ? $_POST['date7'] : '');
    $data[25]=(isset($_POST['date8']) ? $_POST['date8'] : '');
    $data[26]=(isset($_POST['date9']) ? $_POST['date9'] : '');
    $data[27]=(isset($_POST['date0']) ? $_POST['date0'] : '');
    $data[28]=(isset($_POST['date10']) ? $_POST['date10'] : '');
    return $data;
  }

$childDetails = new table();

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM childdata1 WHERE patient_id='$info[0]'";
    $search_result=$childDetails->featuredLoad($dbObj,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
                        $patient_id=$row['patient_id'];
                        $doctor=$row['doctor'];
                        $moh=$row['moh'];
                        $idnum=$row['idnum'];
                        $childname=$row['childname'];
                        $regno=$row['regno'];
                        $childbday=$row['childbday'];
                        $regdate=$row['regdate'];
                        $momname=$row['momname'];
                        $momage=$row['momage'];
                        $num1=$row['num1'];
                        $weight1=$row['weight1'];
                        $headperi=$row['headperi'];
                        $length=$row['length'];
                        $health=$row['health'];
                        $vitk=$row['vitk'];
                        $posture=$row['posture'];
                        $rel=$row['rel'];
                        $date1=$row['date1'];
                        $date2=$row['date2'];
                        $date3=$row['date3'];
                        $date4=$row['date4'];
                        $date5=$row['date5'];
                        $date6=$row['date6'];
                        $date7=$row['date7'];
                        $date8=$row['date8'];
                        $date9=$row['date9'];
                        $date0=$row['date0'];
                        $date10=$row['date10'];
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
      $update_query="UPDATE childdata1 SET patient_id='$info[0]',doctor='$info[1]',moh= '$info[2]',idnum='$info[3]',childname='$info[4]',regno='$info[5]',childbday='$info[6]',regdate='$info[7]',momname='$info[8]',momage='$info[9]',num1='$info[10]',weight1='$info[11]',headperi='$info[12]',length='$info[13]',health='$info[14]',vitk='$info[15]'
      ,posture='$info[16]',rel='$info[17]',date1= '$info[18]',date2='$info[19]',date3='$info[20]',date4='$info[21]',date5='$info[22]',date6='$info[23]',date7='$info[24]',date8= '$info[25]',date9='$info[26]',date0='$info[27]',date110='$info[28]'  WHERE patient_id='$info[0]'";

try{
  $pdate_result=$childDetails->featuredLoad($dbObj,$update_query);
  if($pdate_result){
    //   if(mysqli_affected_rows($connect)>0){
    //       echo("data updated");
    //   }else{
    //       echo("data not updated");
    //   }
    echo '<script type="text/javascript">alert("Updated successfully!");</script>';
  }
}catch(Exception $ex){
 // echo("error in update".$ex->getMessage());
 echo '<script type="text/javascript">alert("Error!");</script>';
}
}
?>