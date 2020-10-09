<?php

//require '../../framework/libraries/Model.php';
//require '../models/table.php';
require '../controllers/login.php';
//echo'You have logged in with user id: '.($_SESSION['id']);

//$user = ($_SESSION['id']);

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
//session_start();

$id="";
$date1="";
$date2="";
$confirmedDate="";
$time="";

//get data from the form
function getData(){
    $data=array();
    $data[0]=$_POST['id'];
    // $data[1]=$_POST['date1'];
    // $data[2]=$_POST['date2'];
    $data[3]=$_POST['confirmedDate'];
    $data[4]=$_POST['time'];
    
    
    return $data;
}

$userod = new table();
//search
/*if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM `optionaldate` WHERE id='$info[0]'";
    $search_result=$userod->featuredLoad($dbObj,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
        
                        $id=$row['id'];
                        $date1=$row['date1'];
                        $date2=$row['date2'];
                        $confirmedDate=$row['confirmedDate'];
                
                    }
                }else{
                    echo("<p style='color:black; font-size: 30px; background-color:white;'>"."no data are available"."</p>");
                   
                }
        }else{
            echo("<p style='color:black; font-size: 30px; background-color:white;'>"."result error"."</p>");
           
        }
    }
}*/

if(isset($_POST['Search'])){
    $info=getData();
    //$search_query="SELECT * FROM `optionaldate` WHERE id=". $_SESSION['id'];
    $search_query="SELECT * FROM `optionaldate` WHERE id='$info[0]'";
    $search_result=$userod->featuredLoad($dbObj,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
        
                        $id=$row['id'];
                        $date1=$row['date1'];
                        $date2=$row['date2'];
                        $confirmedDate=$row['confirmedDate'];
                        $time=$row['time'];
                
                    }
                }else{
                    echo '<script type="text/javascript">';
                    echo 'setTimeout(function () { swal("Error!","සායන දිනයන් නියම කර නොමැත<br>Clinic dates are not assigned","error");';
                    echo '}, 200);</script>';
                   
                }
        }else{
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Error!","දෝෂයකි<br>Result error","error");';
            echo '}, 200);</script>';
        }
    }
}

//Confirmed
if(isset($_POST['Confirmed'])){
    $info=getData();
    $Confirmed_query="UPDATE `optionaldate` SET `id`='$info[0]',`confirmedDate`='$info[3]',`time`='$info[4]'  WHERE id='$info[0]'";

    //$Confirmed_query="UPDATE `optionaldate` SET `id`='.$user.',`confirmedDate`='$info[3]'  WHERE id=". $_SESSION['id'];


    try{
        $pdate_result=$userod->featuredLoad($dbObj,$Confirmed_query);
        if($pdate_result){
            if (empty($confirmedDate) || empty($time)){
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Error!","කරුණාකර අවශ්‍ය සියලු තොරතුරු ඇතුළත් කරන්න<br>Please enter all required details","error");';
                echo '}, 200);</script>'; 
            }
            else{
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Success!","සායන දිනය තහවුරු කිරීම සාර්ථකයි<br>Clinical date confirmation is successful","success");';
            echo '}, 200);</script>';
            }
        }
    }catch(Exception $ex){
      //  echo("<p style='color:black; font-size: 30px; background-color:white;'>" ."error in Confirmed".$ex->getMessage()."</p>");
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","තහවුරු කිරීමේ දෝෂයකි<br>Error in confirmation!","error");';
        echo '}, 200);</script>';    }

}



?>