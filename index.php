<?php
//require_once (__DIR__ .'../controllers/login.php'); 
require '../application/controllers/login.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Login Page</title>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/new.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action=""><!--check again... something is wrong with action------------------------------------------------>
  
  	<div class="input-group"> 
  		<label>Username</label>
  		<input type="text" name="id" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
    </div>
    
    </div>
	  <div class="input-group">
		<label>Select category</label>
		<select name="catagory">
                <option value="Patient-Mother" >Patient-Mother</option>
				<option value="Patient-Child" >Patient-Child</option>
				<option value="Medical officer" >Medical officer</option>
                <option value="Midwife" >Midwife</option>
				<option value="Receptionist" >Receptionist</option>
		</select>
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	

  </form>
  
</body>
</html>