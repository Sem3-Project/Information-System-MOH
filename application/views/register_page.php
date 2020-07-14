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
  			<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  			<link rel="stylesheet" href ="../../public/css/login.css"/>
  			<link rel="stylesheet" href="../../public/css/tether.min.css">
			<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="../../public/css/swag.css">
			<script src="https://kit.fontawesome.com/a81368914c.js"></script>
			
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
  <div style="color:red; opacity: 0.8 font-style:bold" >
      		<marquee behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();">Please send your comments to gampahamoh@yahoo.com</marquee>
		  </div>
		  <img class="wave" src="../../public/images/wave_new.png">
		  <div class="container">
				<div class="img">
					<img src="../../public/images/login_new.png">
				</div>
				<div class="login-content">
  <form method="post" action="register_page.php" autocomplete="off"> <!--previous: action="the page name "----------------------------------------------------------->
  <img src="../../public/images/Registration.png">
							<div class="blink_me">
								<h3 class="title"><b><blink>Register</blink></b></h3>
							</div>
							<br>
							<div class="form-group"> 
  		      					<label><b>පරිශීලක නාමය(Username)</b></label>
  		      					<input type="text" class="form-control" name="id" >
  	    					</div>
							  <div class="form-group">
		        				<label><b>කාණ්ඩය(Category)</b></label>
		        				<select name="catagory" class="form-control">
                					<option value="Patient-Mother" >මාතෘ-Mother</option>
				        			<option value="Patient-Child" >ළමා-Child</option>
				        			<option value="Medical officer" >වෛද්‍ය නිලධාරි-Medical officer</option>
                					<option value="Midwife" >පවුල් සෞඛ්‍ය සේවා නිලධාරී-Midwife</option>
				        			<option value="Receptionist">පිළිගැනීමේ නිලධාරි-Receptionist</option>
		        				</select>
							  </div>
							 
  	<div class="form-group">
	  <label for= "exampleInputPassword1"><b>මුරපදය(Password)</b></label>
  	  <input type="password" class="form-control" id="exampleInputPassword1" name="password_1" placeholder="Enter your password">
  	</div>
  	<div class="form-group">
  	  <label><b>Confirm password<b></label>
  	  <input type="password" class="form-control" id="exampleInputPassword1" name="password_2" placeholder="Enter password again">
  	</div>
  	<!-- <div class="input-group"> -->

		<!-- <button type="submit" class="btn btn-primary" name="save">Register</button> -->
	<div class="login-content">
		<button type="submit" class="btn" name="save">Register</button>
	  <button onclick="window.location='home.php'" class="btn" type="button">Cancel</button>
	  <!-- <button onclick="window.location='home.php'" class="cancelbtn" type="button">Cancel</button> -->
<!-- </div> -->

  	</div>
	
  	<!-- <p>
		  Already registered? 
		  <button><a href="login_page.php">Sign in</a></button>
		  
  	</p> -->
  </form>
</body>
</html>