<?php
require '../models/adminOptionalD_model.php';
//echo'You have logged in with user id: '.($_SESSION['id']);
?>

<html>
<head>
<meta charset="UTF-8">
<title>ClinicDate</title>
<link rel = "stylesheet" href ="../../public/css/MidWifeViewdate.css">

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
<div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
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


<form method="POST" action="adminOptionalD_page.php">



<h2>Clinic Date</h2>
<div class="content">
<a href="VisitDetails.php" style='font-size:15px; color: rgb(155, 67, 67); font-family:Arial,Suns-serif;text-align: center;font-weight: bold;'>List of Attendees</a>
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

