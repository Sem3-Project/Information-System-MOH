<!doctype html>
<!-- <?php
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

//search



//insert
if(isset($_POST['Insert'])){
    $info=getData();
    //$insert_query="INSERT INTO `optionaldate`(`id`, `date1`, `date2`, `confirmedDate`)
    //VALUES ('$info[0]','$info[1]','$info[2]','$info[3]')";
    $insert_query="INSERT INTO `optionaldate`(`id`, `date1`, `date2`)
    VALUES ('$info[0]','$info[1]','$info[2]')";
    try{
        $insert_result=mysqli_query($connect,$insert_query);
        if($insert_result){
            if(mysqli_affected_rows($connect)>0){
                echo("data inserted successfully");

            }else{
                echo("data are not inserted");
            }
        }
    }catch(Exception $ex){
        echo("error inserted".$ex->getMessage());
    }
}




?> -->

<html>
<head>
<meta charset="UTF-8">
<title>ClinicDate</title>
</head>


<body>
<h1>Clinic Date</h1>

<form method="POST" action="MidWifeLogic.php">
<div class>
<input type="text" name="id" placeholder="Enter patient's NIC here" value="<?php echo($id);?>"><br><br>
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