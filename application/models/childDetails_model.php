<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', "", 'moh');
session_start();

$id="";
$doctor="";
$moh="";
$idnum="";
$childname="";
$regno="";
$childbday="";
$regdate="";
$momname="";
$momage="";
$num1="";
$weight1="";
$headperi="";
$length="";
$health="";
$vitk="";
$posture="";
$rel="";
$date1="";
$date2="";
$date3="";
$date4="";
$date5="";
$date6="";
$date7="";
$date8="";
$date9="";
$date0="";
$date10="";

//get data from the form
function getPosts(){
    $posts=array();
    $posts[0]=$_POST['id'];
    $posts[1]=$_POST['doctor'];
    $posts[2]=$_POST['moh'];  
    $posts[3]=$_POST['idnum'];
    $posts[4]=$_POST['childname'];
    $posts[5]=$_POST['regno'];
    $posts[6]=$_POST['childbday'];
    $posts[7]=$_POST['regdate'];
    $posts[8]=$_POST['momname'];
    $posts[9]=$_POST['momage'];
    $posts[10]=$_POST['num1'];
    $posts[11]=$_POST['weight1'];
    $posts[12]=$_POST['headperi'];
    $posts[13]=$_POST['length'];
    $posts[14]=$_POST['health'];
    $posts[15]=$_POST['vitk'];
    $posts[16]=$_POST['posture'];
    $posts[17]=$_POST['rel'];
    $posts[18]=$_POST['date1'];
    $posts[19]=$_POST['date2'];
    $posts[20]=$_POST['date3'];
    $posts[21]=$_POST['date4'];
    $posts[22]=$_POST['date5'];
    $posts[23]=$_POST['date6'];
    $posts[24]=$_POST['date7'];
    $posts[25]=$_POST['date8'];
    $posts[26]=$_POST['date9'];
    $posts[27]=$_POST['date0'];
    $posts[28]=$_POST['date10'];
    return $posts;
  }

$childDetails = new table();

//search
if(isset($_POST['search'])){
    $data=getPosts();
    $search_Query="SELECT * FROM childdata1 WHERE id='$data[0]'";
    $search_Result=$childDetails->featuredLoad($dbObj,$search_Query);
        if($search_Result){
                if(mysqli_num_rows($search_Result)){
                    while($row = mysqli_fetch_array($search_Result)){
                        $id=$row['id'];
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
      $data=getPosts();
      $update_Query="UPDATE childdata1 SET id='$data[0]',doctor='$data[1]',moh= '$data[2]',idnum='$data[3]',
      childname='$data[4]' , regno='$data[5]',childbday='$data[6]',regdate='$data[7]',momname='$data[8]',
      momage='$data[9]',num1='$data[10]',weight1='$data[11]',headperi='$data[12]',length='$data[13]',
      health='$data[14]',vitk='$data[15]',posture='$data[16]',rel='$data[17]',date1= '$data[18]',
      date2='$data[19]',date3='$data[20]',date4='$data[21]',date5='$data[22]',date6='$data[23]',date7='$data[24]',
      date8= '$data[25]',date9='$data[26]',date0='$data[27]',date10='$data[28]'  WHERE id='$data[0]'";

try{
  $update_Result=$childDetails->featuredLoad($dbObj,$update_Query);
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

