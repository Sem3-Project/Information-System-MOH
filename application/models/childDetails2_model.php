<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id='';
$dat1='';
$dat2='';
$dat3='';
$dat4='';
$scolor1='';
$scolor2='';
$scolor3='';
$scolor4='';
$eye1='';
$eye2='';
$eye3='';
$eye4='';
$sc1='';
$sc2='';
$sc3='';
$sc4='';
$m1='';
$m2='';
$m3='';
$m4='';
$rel1='';
$rel2='';
$rel3='';
$rel4='';
$other1='';
$other2='';
$other3='';
$other4='';
$date1='';
$date2='';
$date3='';
$date4='';
$date5='';
$date6='';
$date7='';
$date8='';
$date9='';
$date10='';
$date11='';
$date12='';
$date13='';
$date14='';
$date15='';
$date16='';
$date17='';
$date18='';
$date19='';
$date20='';

//get data from the form
function getData(){
    $data=array();
    $data[0]=(isset($_POST['id']) ? $_POST['id'] : '');
    $data[1]=(isset($_POST['dat1']) ? $_POST['dat1'] : '');
    $data[2]=(isset($_POST['dat2']) ? $_POST['dat2'] : '');
    $data[3]=(isset($_POST['dat3']) ? $_POST['dat3'] : '');
    $data[4]=(isset($_POST['dat4']) ? $_POST['dat4'] : '');
    $data[5]=(isset($_POST['scolor1']) ? $_POST['scolor1'] : '');
    $data[6]=(isset($_POST['scolor2']) ? $_POST['scolor2'] : '');
    $data[7]=(isset($_POST['scolor3']) ? $_POST['scolor3'] : '');
    $data[8]=(isset($_POST['scolor4']) ? $_POST['scolor4'] : '');
    $data[9]=(isset($_POST['eye1']) ? $_POST['eye1'] : '');
    $data[10]=(isset($_POST['eye2']) ? $_POST['eye2'] : '');
    $data[11]=(isset($_POST['eye3']) ? $_POST['eye3'] : '');
    $data[12]=(isset($_POST['eye4']) ? $_POST['eye4'] : '');
    $data[13]=(isset($_POST['sc1']) ? $_POST['sc1'] : '');
    $data[14]=(isset($_POST['sc2']) ? $_POST['sc2'] : '');
    $data[15]=(isset($_POST['sc3']) ? $_POST['sc3'] : '');
    $data[16]=(isset($_POST['sc4']) ? $_POST['sc4'] : '');
    $data[17]=(isset($_POST['m1']) ? $_POST['m1'] : '');
    $data[18]=(isset($_POST['m2']) ? $_POST['m2'] : '');
    $data[19]=(isset($_POST['m3']) ? $_POST['m3'] : '');
    $data[20]=(isset($_POST['m4']) ? $_POST['m4'] : '');
    $data[21]=(isset($_POST['rel1']) ? $_POST['rel1'] : '');
    $data[22]=(isset($_POST['rel2']) ? $_POST['rel2'] : '');
    $data[23]=(isset($_POST['rel3']) ? $_POST['rel3'] : '');
    $data[24]=(isset($_POST['rel4']) ? $_POST['rel4'] : '');
    $data[25]=(isset($_POST['other1']) ? $_POST['other1'] : '');
    $data[26]=(isset($_POST['other2']) ? $_POST['other2'] : '');
    $data[27]=(isset($_POST['other3']) ? $_POST['other3'] : '');
    $data[28]=(isset($_POST['other4']) ? $_POST['other4'] : '');
    $data[29]=(isset($_POST['date1']) ? $_POST['date1'] : '');
    $data[30]=(isset($_POST['date2']) ? $_POST['date2'] : '');
    $data[31]=(isset($_POST['date3']) ? $_POST['date3'] : '');
    $data[32]=(isset($_POST['date4']) ? $_POST['date4'] : '');
    $data[33]=(isset($_POST['date5']) ? $_POST['date5'] : '');
    $data[34]=(isset($_POST['date6']) ? $_POST['date6'] : '');
    $data[35]=(isset($_POST['date7']) ? $_POST['date7'] : '');
    $data[36]=(isset($_POST['date8']) ? $_POST['date8'] : '');
    $data[37]=(isset($_POST['date9']) ? $_POST['date9'] : '');
    $data[38]=(isset($_POST['date10']) ? $_POST['date10'] : '');
    $data[39]=(isset($_POST['date11']) ? $_POST['date11'] : '');
    $data[40]=(isset($_POST['date12']) ? $_POST['date12'] : '');
    $data[41]=(isset($_POST['date13']) ? $_POST['date13'] : '');
    $data[42]=(isset($_POST['date14']) ? $_POST['date14'] : '');
    $data[43]=(isset($_POST['date15']) ? $_POST['date15'] : '');
    $data[44]=(isset($_POST['date16']) ? $_POST['date16'] : '');
    $data[45]=(isset($_POST['date17']) ? $_POST['date17'] : '');
    $data[46]=(isset($_POST['date18']) ? $_POST['date18'] : '');
    $data[47]=(isset($_POST['date19']) ? $_POST['date19'] : '');
    $data[48]=(isset($_POST['date20']) ? $_POST['date20'] : '');

  
    return $data;
  }
$childD2 = new table();

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM childdata2 WHERE id='$info[0]'";
    $search_result=$childD2->featuredLoad($dbObj,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
                        $id=$row['id'];
                        $dat1=$row['dat1'];
                        $dat2=$row['dat2'];
                        $dat3=$row['dat3'];
                        $dat4=$row['dat4'];
                        $scolor1=$row['scolor1'];
                        $scolor2=$row['scolor2'];
                        $scolor3=$row['scolor3'];
                        $scolor4=$row['scolor4'];
                        $eye1=$row['eye1'];
                        $eye2=$row['eye2'];
                        $eye3=$row['eye3'];
                        $eye4=$row['eye4'];
                        $sc1=$row['sc1'];
                        $sc2=$row['sc2'];
                        $sc3=$row['sc3'];
                        $sc4=$row['sc4'];
                        $m1=$row['m1'];
                        $m2=$row['m2'];
                        $m3=$row['m3'];
                        $m4=$row['m4'];
                        $rel1=$row['rel1'];
                        $rel2=$row['rel2'];
                        $rel3=$row['rel3'];
                        $rel4=$row['rel4'];
                        $other1=$row['other1'];
                        $other2=$row['other2'];
                        $other3=$row['other3'];
                        $other4=$row['other4'];
                        $date1=$row['date1'];
                        $date2=$row['date2'];
                        $date3=$row['date3'];
                        $date4=$row['date4'];
                        $date5=$row['date5'];
                        $date6=$row['date6'];
                        $date7=$row['date7'];
                        $date8=$row['date8'];
                        $date9=$row['date9'];
                        $date10=$row['date10'];
                        $date11=$row['date11'];
                        $date12=$row['date12'];
                        $date13=$row['date13'];
                        $date14=$row['date14'];
                        $date15=$row['date15'];
                        $date16=$row['date16'];
                        $date17=$row['date17'];
                        $date18=$row['date18'];
                        $date19=$row['date19'];
                        $date20=$row['date20'];
                        
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
      $update_query="UPDATE `childdata2` SET `id`='$info[0]',`dat1`='$info[1]',`dat2`='$info[2]',`dat3`='$info[3]',`dat4`='$info[4]',`scolor1`='$info[5]',`scolor2`='$info[6]',`scolor3`='$info[7]',
      `scolor4`='$info[8]',`eye1`='$info[9]',`eye2`='$info[10]',`eye3`='$info[11]',`eye4`='$info[12]',`sc1`='$info[13]',`sc2`='$info[14]',`sc3`='$info[15]',`sc4`='$info[16]',`m1`='$info[17]',`m2`='$info[18]',
      `m3`='$info[19]',`m4`='$info[20]',`rel1`='$info[21]',`rel2`='$info[22]',`rel3`='$info[23]',`rel4`='$info[24]',`other1`='$info[25]',`other2`='$info[26]',`other3`='$info[27]',`other4`='$info[28]',`date1`='$info[29]',
      `date2`='$info[30]',`date3`='$info[31]',`date4`='$info[32]',`date5`='$info[33]',`date6`='$info[34]',`date7`='$info[35]',`date8`='$info[36]',`date9`='$info[37]',`date10`='$info[38]',`date11`='$info[39]',`date12`='$info[40]',
      `date13`='$info[41]',`date14`='$info[42]',`date15`='$info[43]',`date16`='$info[44]',`date17`='$info[45]',`date18`='$info[46]',`date19`='$info[47]',`date20`='$info[48]'  WHERE id='$info[0]'";
try{
  $pdate_result=$childD2->featuredLoad($dbObj,$update_query);
  if($pdate_result){
    echo '<script type="text/javascript">alert("Updated successfully!");</script>';
    //   if(mysqli_affected_rows($connect)>0){
    //       echo("data updated");
    //   }else{
    //       echo("data not updated");
    //   }
  }
}catch(Exception $ex){
  //echo("error in update".$ex->getMessage());
  echo '<script type="text/javascript">alert("Error!");</script>';
}
}

?>
