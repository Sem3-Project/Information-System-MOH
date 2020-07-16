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
    echo("<p style='color:black; font-size: 30px; background-color:white;'>"."Error in connecting"."</p>");
    // echo 'Error in connecting';
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
                    echo("<p style='color:black; font-size: 30px; background-color:white;'>"."no data are available"."</p>");
                    // echo("no data are available");
                }
        }else{
            echo("<p style='color:black; font-size: 30px; background-color:white;'>"."result error"."</p>");
            // echo("result error");
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
                echo("<p style='color:black; font-size: 30px; background-color:white;'>"."date confirmed"."</p>");
            }else{
                // echo("date not confirmed");
                echo("<p style='color:black; font-size: 30px; background-color:white;'>" ."date not confirmed"."</p>");
            }
        }
    }catch(Exception $ex){
        echo("<p style='color:black; font-size: 30px; background-color:white;'>" ."error in Confirmed".$ex->getMessage()."</p>");
        // echo("error in Confirmed".$ex->getMessage());
    }
}



?>




<html>
<head>
<meta charset="UTF-8">
<title>ClinicDateSelection</title>
<link rel = "stylesheet" href ="../public/css/PatientViewDate.css">
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
  
  <a href="login_page.php">Log out</a>
  <a href="home.php">Home</a>
  
  
</div>
	</div>
</header>


<body>


<form method="POST" action="PatientView.php">
<h2>Date Selection</h2>
<div class="content">

<input type="text" name="id" style="width: 800px; height: 50px ;font-size: 20px; " placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's id here" value="<?php echo($id);?>"><br><br>
<!-- <input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($id);?>"><br><br> -->

<input type="submit" name="Search" value="Search">
<br><br>

<select name="confirmedDate" style="width: 100px; height: 30px;">
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