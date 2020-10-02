<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id = ""; $dat1 = ""; $dat2 = ""; $dat3 = ""; $dat4 = ""; $scolor1 = ""; $scolor2 = ""; $scolor3 = ""; $scolor4 = "";
$eye1 = ""; $eye2 = ""; $eye3 = ""; $eye4 = "";$sc1 = "";$sc2 = "";$sc3 = "";$sc4 = "";$m1 = "";$m2 = "";$m3 = "";$m4 = "";
$pos1 = "";$pos2 = "";$pos3 = "";$pos4 = "";$rel1 = "";$rel2 = "";$rel3 = "";$rel4 = "";$other1 = "";$other2 = "";$other3 = "";$other4 = "";
$date1 = "";$date2 = "";$date3 = "";$date4 = "";$date5 = "";$date6 = "";$date7 = "";$date8 = "";$date9 = "";$date10 = "";
$date11 = "";$date12 = "";$date13 = "";$date14 = "";$date15 = "";$date16 = "";$date17 = "";$date18 = "";$date19 = "";$date20 = "";

function getPosts(){
  $posts = array();
  $posts[0] = $_POST['id'];$posts[1] = $_POST['dat1']; $posts[2] = $_POST['dat2']; $posts[3] = $_POST['dat3'];$posts[4] = $_POST['dat4'];
  $posts[5] = $_POST['scolor1']; $posts[6] = $_POST['scolor2']; $posts[7] = $_POST['scolor3']; $posts[8] = $_POST['scolor4']; 
  
  $posts[9] = $_POST['eye1']; $posts[10] = $_POST['eye2']; $posts[11] = $_POST['eye3']; $posts[12] = $_POST['eye4'];$posts[13] = $_POST['sc1']; $posts[14] = $_POST['sc2'];
  $posts[15] = $_POST['sc3'];$posts[16] = $_POST['sc4'];$posts[17] = $_POST['m1']; $posts[18] = $_POST['m2']; $posts[19] = $_POST['m3']; $posts[20] = $_POST['m4'];
  
  $posts[21] = $_POST['pos1']; $posts[22] = $_POST['pos2']; $posts[23] = $_POST['pos3'];$posts[24] = $_POST['pos4']; $posts[25] = $_POST['rel1']; $posts[26] = $_POST['rel2']; 
  $posts[27] = $_POST['rel3']; $posts[28] = $_POST['rel4']; $posts[29] = $_POST['other1']; $posts[30] = $_POST['other2']; $posts[31] = $_POST['other3']; $posts[32] = $_POST['other4']; 

  $posts[33] = $_POST['date1']; $posts[34] = $_POST['date2']; $posts[35] = $_POST['date3']; $posts[36] = $_POST['date4']; $posts[37] = $_POST['date5']; 
  $posts[38] = $_POST['date6']; $posts[39] = $_POST['date7']; $posts[40] = $_POST['date8']; $posts[41] = $_POST['date9']; $posts[42] = $_POST['date10']; 
  $posts[43] = $_POST['date11']; $posts[44] = $_POST['date12']; $posts[45] = $_POST['date13']; $posts[46] = $_POST['date14']; $posts[47] = $_POST['date15']; 
  $posts[48] = $_POST['date16']; $posts[49] = $_POST['date17']; $posts[50] = $_POST['date18']; $posts[51] = $_POST['date19']; $posts[52] = $_POST['date20']; 


  return $posts;
}

$childD2 = new table();
if(isset($_POST['search'])){
  $data = getPosts();
  $search_Query = "SELECT * FROM childdata2 WHERE id = '$data[0]'";
  $search_Result = $childD2->featuredLoad($dbObj, $search_Query);

  if($search_Result){
      if(mysqli_num_rows($search_Result)){
          while ($row=mysqli_fetch_array($search_Result)){
              
            $id=$row['id'];$dat1=$row['dat1'];$dat2=$row['dat2'];$dat3=$row['dat3'];$dat4=$row['dat4'];$scolor1=$row['scolor1'];$scolor2=$row['scolor2'];$scolor3=$row['scolor3'];$scolor4=$row['scolor4'];
            $eye1=$row['eye1'];$eye2=$row['eye2'];$eye3=$row['eye3'];$eye4=$row['eye4'];$sc1=$row['sc1'];$sc2=$row['sc2'];$sc3=$row['sc3'];$sc4=$row['sc4'];
            $m1=$row['m1'];$m2=$row['m2'];$m3=$row['m3'];$m4=$row['m4'];$pos1=$row['pos1'];$pos2=$row['pos2'];$pos3=$row['pos3'];$pos4=$row['pos4'];
            $rel1=$row['rel1'];$rel2=$row['rel2'];$rel3=$row['rel3'];$rel4=$row['rel4'];$other1=$row['other1'];$other2=$row['other2'];$other3=$row['other3'];$other4=$row['other4'];
            $date1=$row['date1'];$date2=$row['date2'];$date3=$row['date3'];$date4=$row['date4'];$date5=$row['date5'];$date6=$row['date6'];$date7=$row['date7'];
            $date8=$row['date8'];$date9=$row['date9'];$date10=$row['date10'];$date11=$row['date11'];$date12=$row['date12'];$date13=$row['date13'];
            $date14=$row['date14'];$date15=$row['date15'];$date16=$row['date16'];$date17=$row['date17'];$date18=$row['date18'];$date19=$row['date19'];
            $date20=$row['date20'];
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
      $update_Query="UPDATE `childdata2` SET `id`='$data[0]',`dat1`='$data[1]',`dat2`='$data[2]',`dat3`='$data[3]',`dat4`='$data[4]',`scolor1`='$data[5]',`scolor2`='$data[6]',`scolor3`='$data[7]',
      `scolor4`='$data[8]',`eye1`='$data[9]',`eye2`='$data[10]',`eye3`='$data[11]',`eye4`='$data[12]',`sc1`='$data[13]',`sc2`='$data[14]',`sc3`='$data[15]',`sc4`='$data[16]',`m1`='$data[17]',`m2`='$data[18]',
      `m3`='$data[19]',`m4`='$data[20]',`pos1`='$data[21]',`pos2`='$data[22]',`pos3`='$data[23]',`pos4`='$data[24]',`rel1`='$data[25]',`rel2`='$data[26]',`rel3`='$data[27]',`rel4`='$data[28]',`other1`='$data[29]',
      `other2`='$data[30]',`other3`='$data[31]',`other4`='$data[32]',`date1`='$data[33]',`date2`='$data[34]',`date3`='$data[35]',`date4`='$data[36]',`date5`='$data[37]',`date6`='$data[38]',`date7`='$data[39]',`date8`='$data[40]',
      `date9`='$data[41]',`date10`='$data[42]',`date11`='$data[43]',`date12`='$data[44]',`date13`='$data[45]',`date14`='$data[46]',`date15`='$data[47]',`date16`='$data[48]',`date17`='$data[49]',`date18`='$data[50]',`date19`='$data[51]',`date20`='$data[52]'  WHERE id='$data[0]'";
try{
  $update_Result = $childD2->featuredLoad($dbObj, $update_Query);

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



  
