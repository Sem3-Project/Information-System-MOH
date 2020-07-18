<?php
require '../models/userOptionalD_model.php';
//require '../controllers/login.php';
//echo $_SESSION['success'];
echo'You have logged in with user id: '.($_SESSION['id']);
?>

<html>
<head>
<meta charset="UTF-8">
<title>ClinicDateSelection</title>
<link rel = "stylesheet" href ="../../public/css/PatientViewDate.css">
<style>
    .content{
        width: 10cm;
        /* background-color:yellow; */
        padding: 6px 52px;
        /* size="25"; */
        font-size: 20px;
        /* text-align:center; */
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
  
  <a href="login_page.php">Log out</a>
  <a href="user_home.php">Home</a>
  
  
</div>
	</div>
</header>


<body>


<form method="POST" action="userOptionalD_page.php">
<h2>Date Selection</h2>
<div class="content">

<!-- <input type="text" name="id" style="width: 800px; height: 50px ;font-size: 20px; " placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's id here" value="<?php echo($id);?>"><br><br> -->
<!-- <input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<--?php echo($id);?>"><br><br> -->
<input type="text" name="id" readonly style="width: 800px; height: 50px ;font-size: 20px; "  value="<?php echo($_SESSION['id'])?>"><br><br>

<input type="submit" name="Search" value="Search">
<br><br>

<p>Date/දිනය :</p>
<select name="confirmedDate" style="width: 100px; height: 30px;">
    <option  selected hidden value=""></option>
    <option value="<?php echo($date1);?>" <?php if($confirmedDate==$date1) echo 'selected="selected"'; ?>><?php echo($date1);?></option>
    <option value="<?php echo($date2);?>" <?php if($confirmedDate==$date2) echo 'selected="selected"'; ?>><?php echo($date2);?></option>
</select>
<br><br>

<p>Time/වේලාව:</p>

<select name="time" style="width: 100px; height: 30px;">
    <option  selected hidden value=""></option>
    <option value="<?php echo("8.30 a.m.");?>" <?php if($time=="8.30 a.m.") echo 'selected="selected"'; ?>><?php echo("8.30 a.m.");?></option>
    <option value="<?php echo("10.30 a.m.");?>" <?php if($time=="10.30 a.m.") echo 'selected="selected"'; ?>><?php echo("10.30 a.m.");?></option>
</select>
<br><br>
  
<input type="submit" name="Confirmed" value="Confirmed"><br><br>

</div class>


</form>
</body>

</html>