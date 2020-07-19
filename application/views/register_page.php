<?php
    require '../controllers/register.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta charset="UTF-8">
	  <link rel="stylesheet" href="../../public/js/login.js">
  			<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
			  <link href="../../public/css/font.css" rel="stylesheet">
			  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"> -->

  			<link rel="stylesheet" href ="../../public/css/login.css"/>
  			<link rel="stylesheet" href="../../public/css/tether.min.css">
			<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="../../public/css/swag.css">
			<!-- <script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
			<script src="../../public/js/a81368914c.js"></script>

			
</head>

<header>
<div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
<div class="logo">
		<h1>Medical Officer of Health Office</h1>
		<h3>Gampaha</h3>
	</div>
	</div>
</header>
<body>
  <!-- <div class="">
  	<h2>Register</h2>
  </div> -->
  
		  <img class="wave" src="../../public/images/wave_new.png">
		  <div class="container">
				<div class="img">
					<img src="../../public/images/login_new.png">
				</div>
				<div class="login-content">
  <form method="post" action="register_page.php" autocomplete="off"> 
  <img src="../../public/images/Registration.png">
							<div class="blink_me">
								<h3 class="title"><b><blink>Register</blink></b></h3>
							</div>
							<br>
							<div class="form-group"> 
  		      					<!-- <label><b>පරිශීලක නාමය-User name</b></label> -->
  		      					<input type="text" class="form-control" name="id" placeholder="පරිශීලක නාමය සඳහන් කරන්න-User name">
  	    					</div>
							  <div class="form-group">
		        				<!-- <label><b>කාණ්ඩය</b></label> -->
		        				<select name="catagory" class="form-control">
									<option>කාණ්ඩය තෝරාගන්න-Select Category</option>
                					<option value="Patient-Mother" >මාතෘ-Mother</option>
				        			<option value="Patient-Child" >ළමා-Child</option>
				        			<option value="Medical officer" >වෛද්‍ය නිලධාරි-Medical officer</option>
                					<option value="Midwife" >පවුල් සෞඛ්‍ය සේවා නිලධාරී-Midwife</option>
				        			<option value="Receptionist">පිළිගැනීමේ නිලධාරි-Receptionist</option>
		        				</select>
							  </div>
							 
  	<div class="form-group">
	  <!-- <label for= "exampleInputPassword1"><b>මුරපදය</b></label> -->
  	  <input type="password" class="form-control" id="exampleInputPassword1" name="password_1" placeholder="මුරපදය සඳහන් කරන්න-Enter password">
  	</div>
  	<div class="form-group">
  	  <!-- <label><b>මුරපදය තහවුරු කරන්න<b></label> -->
  	  <input type="password" class="form-control" id="exampleInputPassword1" name="password_2" placeholder="මුරපදය තහවුරු කරන්න-Confirm password">
  	</div>
  	<!-- <div class="input-group"> -->

		<!-- <button type="submit" class="btn btn-primary" name="save">Register</button> -->
	<div class="login-content">
		<button style="vertical-align:middle" type="submit" class="btn" name="save">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button onclick="window.location='home.php'" class="btn" style="vertical-align:middle" type="button"><span>Cancel</span></button>

	  <!-- <button onclick="window.location='home.php'" class="button" style="vertical-align:middle" type="button"><span>Cancel</span></button> -->
	  <!-- <button onclick="window.location='home.php'" class="cancelbtn" type="button">Cancel</button> -->
<!-- </div> -->

  	</div>
	
  </form>
</body>
</html>