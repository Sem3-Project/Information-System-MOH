<?php include('server.php') ?>

<?php
require '../../../framework/libraries/Model.php'; //-------------------------------CALL DIRECTORY-----------------------------------------
class Login_model extends Model{
    // public function __construct($user_type)
    // {
    //     parent::__construct($user_type);
        
    // }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Login Page</title>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="public/css/new.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<!--?php include('errors.php'); ?-- INCLUDE SERVER------------------------------------------------>
  	<div class="input-group"> 
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
      </div>
      
      <div class="input-group">
		<label>Select catagory</label>
		<select name="catagory">
				<option value="Patient(Mother)" <?php if($catagory=="Patient(Mother)") echo 'selected="selected"'; ?>>Patient(Mother)</option>
				<option value="Patient(Child)" <?php if($catagory=="Patient(Child)") echo 'selected="selected"'; ?>>Patient(Child)</option>
				<option value="Medical officer" <?php if($catagory=="Medical officer") echo 'selected="selected"'; ?>>Medical officer</option>
                <option value="Midwife" <?php if($catagory=="Midwife") echo 'selected="selected"'; ?>>Midwife</option>
				<option value="Receptionist" <?php if($catagory=="Receptionist") echo 'selected="selected"'; ?>>Receptionist</option>
				
		</select>
      </div>
      
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  


  </form>
  
</body>
</html>