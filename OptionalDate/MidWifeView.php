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
    echo("<p style='color:black; font-size: 30px; background-color:white;'>"."Error in connecting"."</p>");
    // echo 'Error in connecting';
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
                echo("<p style='color:black; font-size: 30px; background-color:white;'>"."date is updated"."</p>");
                // echo("date is updated");
            }else{
                echo("<p style='color:black; font-size: 30px; background-color:white;'>"."date is not updated"."</p>");
                // echo("date is not updated");
            }
        }
    }catch(Exception $ex){
        echo("<p style='color:black; font-size: 30px; background-color:white;'>"."error in update".$ex->getMessage()."</p>");
        // echo("error in update".$ex->getMessage());
    }
}





?>

<html>
<head>
<meta charset="UTF-8">
<title>ClinicDate</title>
<link rel = "stylesheet" href ="../public/css/MidWifeViewdate.css">

<style>
    .content{
        width: 10cm;
        /* background-color:yellow; */
        padding: 6px 52px;
        /* size="25"; */
        font-size: 20px;
    }


</style>

</head>
<header>
<div class="header"><img class="logo" src="../public/images/logo.jpg"/>
<div class="logo">
		<h1>Medical Officer of Health Office</h1>
		<h3>Gampaha</h3>
	</div>
    <div class="topnav">
  
  <a href="../application/views/login_page.php">Log out</a>
  <a href="../application/views/home.php">Home</a>
  
  
</div>
	</div>
</header>

<body>


<form method="POST" action="MidWifeView.php">



<h2>Clinic Date</h2>
<div class="content">
<a href="../Our forms/DailyClinic.php" style='font-size:15px; color: rgb(155, 67, 67); font-family:Arial,Suns-serif;text-align: center;font-weight: bold;'>List of Attendees</a>
<br><br>
<p style='font-size:15px; color: rgb(155, 67, 67); font-family:Arial,Suns-serif;font-weight: bold;'>Giving a New Clinic Date: </p>
<input type="text" name="id" style="width: 800px; height: 50px ;font-size: 20px; " placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's id here" value="<?php echo($id);?>"><br><br>
<!-- <input type="text" name="id" placeholder="Enter patient's NIC here" value="<?php echo($id);?>"><br><br> -->
<br><br>

<label>Date 1:</label>
<input type="date" name="date1" value="<?php echo($date1);?>">

<br><br>

<label>Date 2:</label>
<input type="date" name="date2" value="<?php echo($date2);?>">
<br><br>
<input type="submit" name="Insert" value="Save"> 
</div class>



</form>
</body>

</html>