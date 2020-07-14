<?php
$host="localhost";
$user = "root";
$password = "";
$database = "moh";

$id="";
$date1="";
$date2="";
//$confirmedDate="";


//connect to mysql database
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connect = mysqli_connect($host, $user, $password, $database);
    
}catch(Exception $ex){
    echo 'Error in connecting';
}

//get data from the form
function getData(){
    $data=array();
    $data[0]=$_POST['id'];
    $data[1]=$_POST['date1'];
    $data[2]=$_POST['date2'];
    //$data[3]=$_POST['confirmedDate'];
    
    
    return $data;
}


//insert
// if(isset($_POST['Insert'])){
//     $info=getData();
//     //$insert_query="INSERT INTO `optionaldate`(`id`, `date1`, `date2`, `confirmedDate`)
//     //VALUES ('$info[0]','$info[1]','$info[2]','$info[3]')";
//     $insert_query="INSERT INTO `optionaldate`(`id`, `date1`, `date2`)
//     VALUES ('$info[0]','$info[1]','$info[2]')";
//     try{
//         $insert_result=mysqli_query($connect,$insert_query);
//         if($insert_result){
//             if(mysqli_affected_rows($connect)>0){
//                 echo("data inserted successfully");

//             }else{
//                 echo("data are not inserted");
//             }
//         }
//     }catch(Exception $ex){
//         echo("error inserted".$ex->getMessage());
//     }
// }


if(isset($_POST['Insert'])){
    $info=getData();
    $update_query="UPDATE `optionaldate` SET `id`='$info[0]',`date1`='$info[1]',`date2`='$info[2]'    
    WHERE id='$info[0]'";

    try{
        $pdate_result=mysqli_query($connect,$update_query);
        if($pdate_result){
            if(mysqli_affected_rows($connect)>0){
                echo("date is updated");
            }else{
                echo("date is not updated");
            }
        }
    }catch(Exception $ex){
        echo("error in update".$ex->getMessage());
    }
}





?>
