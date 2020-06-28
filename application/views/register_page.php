<?php
    require '../controllers/register.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system</title>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="../../public/css/new.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action=""> <!--previous: action="the page name "----------------------------------------------------------->
  	
	  <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="id" placeholder="Enter your NIC number">
  	</div>
  	<div class="input-group">
		<label>Select catagory</label>
		<select name="catagory">
				<option value="Patient-Mother">Patient(Mother)</option>
				<option value="Patient-Child" >Patient(Child)</option>
				<option value="Medical officer">Medical officer</option>
                <option value="Midwife">Midwife</option>
				<option value="Receptionist">Receptionist</option>
				
		</select>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Enter your password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="Enter password again">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
		  Already registered? 
		  <button><a href="login_page.php">Sign in</a></button>
		  
  	</p>
  </form>
</body>
</html>