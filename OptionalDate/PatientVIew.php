<?php
$host="localhost";
$user = "root";
$password = "";
$database = "moh";

$id="";
$date1="";
$date2="";
$confirmedDate="";


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
    // $data[1]=$_POST['date1'];
    // $data[2]=$_POST['date2'];
    $data[3]=$_POST['confirmedDate'];
    
    
    return $data;
}

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM `optionaldate` WHERE id='$info[0]'";
    $search_result=mysqli_query($connect,$search_query);
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
                    echo("no data are available");
                }
        }else{
            echo("result error");
        }
    }
}

//Confirmed
if(isset($_POST['Confirmed'])){
    $info=getData();
    $Confirmed_query="UPDATE `optionaldate` SET `id`='$info[0]',`confirmedDate`='$info[3]'  
    WHERE id='$info[0]'";

    try{
        $pdate_result=mysqli_query($connect,$Confirmed_query);
        if($pdate_result){
            if(mysqli_affected_rows($connect)>0){
                echo("date confirmed");
            }else{
                echo("date not confirmed");
            }
        }
    }catch(Exception $ex){
        echo("error in Confirmed".$ex->getMessage());
    }
}



?>




<html>
<head>
<meta charset="UTF-8">
<title>ClinicDateSelection</title>
</head>


<body>
<h1>Date Selection</h1>

<form method="POST" action="PatientView.php">
<div class>
<input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<br><br>

<select name="confirmedDate">
    <option  selected hidden value=""></option>
    <option value="<?php echo($date1);?>" <?php if($confirmedDate==$date1) echo 'selected="selected"'; ?>><?php echo($date1);?></option>
    <option value="<?php echo($date2);?>" <?php if($confirmedDate==$date2) echo 'selected="selected"'; ?>><?php echo($date2);?></option>
</select>
<br><br>
<input type="submit" name="Confirmed" value="Confirmed"><br><br>

</div class>



</form>
</body>

</html>