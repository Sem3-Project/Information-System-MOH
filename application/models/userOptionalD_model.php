<?php
// $host="localhost";
// $user = "root";
// $password = "";
// $database = "moh";

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


// //connect to mysql database
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// try{
//     $connect = mysqli_connect($host, $user, $password, $database);
    
// }catch(Exception $ex){
//     echo("<p style='color:black; font-size: 30px; background-color:white;'>"."Error in connecting"."</p>");
//     // echo 'Error in connecting';
// }

//get data from the form
function getData(){
    $data=array();
    $data[0]=$_POST['id'];
    // $data[1]=$_POST['date1'];
    // $data[2]=$_POST['date2'];
    $data[3]=$_POST['confirmedDate'];
    
    
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
                
                    }
                }else{
                    echo("<p style='color:black; font-size: 30px; background-color:white;'>"."no data are available"."</p>");
                   
                }
        }else{
            echo("<p style='color:black; font-size: 30px; background-color:white;'>"."result error"."</p>");
           
        }
    }
}

//Confirmed
if(isset($_POST['Confirmed'])){
    $info=getData();
    $Confirmed_query="UPDATE `optionaldate` SET `id`='$info[0]',`confirmedDate`='$info[3]'  WHERE id='$info[0]'";

    //$Confirmed_query="UPDATE `optionaldate` SET `id`='.$user.',`confirmedDate`='$info[3]'  WHERE id=". $_SESSION['id'];


    try{
        $pdate_result=$userod->featuredLoad($dbObj,$Confirmed_query);
        if($pdate_result){
            // if(mysqli_affected_rows($connect)>0){
            //     echo("<p style='color:black; font-size: 30px; background-color:white;'>"."date confirmed"."</p>");
            // }else{
            //     // echo("date not confirmed");
            //     echo("<p style='color:black; font-size: 30px; background-color:white;'>" ."date not confirmed"."</p>");
            // }
        }
    }catch(Exception $ex){
        echo("<p style='color:black; font-size: 30px; background-color:white;'>" ."error in Confirmed".$ex->getMessage()."</p>");
        // echo("error in Confirmed".$ex->getMessage());
    }
}



?>