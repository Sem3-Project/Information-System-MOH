<?php
require '../controllers/ChangePW.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reset Password</title>
	<link rel="stylesheet" href="../../public/css/new.css">
</head>
<body>
	<form class="login-form" action="changePW_page.php" method="post">
		<h2 class="form-title">New password</h2>
        <div class="form-group">
			<label>Username</label>
			<input type="text" name="id">
		</div>
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="new_pass_c">
		</div>
		<div class="form-group">
            <button type="submit" name="new_password" class="login-btn">Submit</button>
            <button type="submit" name="login" class="login-btn">Login</button>
		</div>
	</form>
</body>
</html>