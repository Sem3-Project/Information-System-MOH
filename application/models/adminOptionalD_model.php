<?php
require '../controllers/login.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');

$id="";
$date1="";
$date2="";

//get data from the form
function getData(){
    $data=array();
    $data[0]=$_POST['id'];
    $data[1]=$_POST['date1'];
    $data[2]=$_POST['date2'];
    return $data;
}

$adminod = new table();

if(isset($_POST['Insert'])){
    $info=getData();
    $update_query="UPDATE `optionaldate` SET `id`='$info[0]',`date1`='$info[1]',`date2`='$info[2]'    
    WHERE id='$info[0]'";

    try{
        $pdate_result=$adminod->featuredLoad($dbObj,$update_query);
        // if($pdate_result){
        //     // if(mysqli_affected_rows($connect)>0){
        //     //     echo("<p style='color:black; font-size: 30px; background-color:white;'>"."date updated"."</p>");
        //     //     // echo("date is updated");
        //     // }else{
        //     //     echo("<p style='color:black; font-size: 30px; background-color:white;'>"."date not updated"."</p>");
        //     //     // echo("date is not updated");
        //     // }
        // }
    }catch(Exception $ex){
        echo("<p style='color:black; font-size: 30px; background-color:white;'>"."error in update".$ex->getMessage()."</p>");
        // echo("error in update".$ex->getMessage());
    }
}

?>