<?php
require '../controllers/delete.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href ="../../public/css/HomeStaff.css"/>
        <link rel = "stylesheet" href ="../../public/css/BasicDetails.css"/>
        <link rel="stylesheet" href ="../../public/css/login.css"/>
  			<link rel="stylesheet" href="../../public/css/tether.min.css">
			<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../public/css/swag.css">
            <link rel="stylesheet" type="text/css" href="../../public/css/style.css">

        <title>Deactivate Account</title>
    </head>
    <body>
        <header>
            <div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
                <div class="logo">
		            <h1>Medical Officer of Health Office</h1>
		            <h3>Gampaha</h3>
                </div>

                <div class="topnav">
                    <a href="../controllers/logout.php">Log out</a>
                    <a href="home.php">Home</a>
                </div>
	        </div>
        </header>
        <form method="POST" action="delete_page.php" align="center" width="800px" autocomplete="off">
            <h3><b>Deactivate Account</b></h3>
            <div class="form-group">
            <label>Enter username</label><br>
            <input type="text" name="id">
            </div>
            <div class="form-group">
            <label>Enter category</label><br>
          
                <select name="catagory" class="form-control">
                    <option>---Select Category---</option>
                    <option value="Patient-Mother" >මාතෘ-Mother</option>
                    <option value="Patient-Child" >ළමා-Child</option>
                    <option value="Medical officer" >වෛද්‍ය නිලධාරි-Medical officer</option>
                    <option value="Midwife" >පවුල් සෞඛ්‍ය සේවා නිලධාරී-Midwife</option>
                    <option value="Receptionist">පිළිගැනීමේ නිලධාරි-Receptionist</option>
                </select>
            </div>
            <div class="login-content">
        <button style="vertical-align:middle" type="submit" class="btn" name="deactivate">Deactivate</button>
        <button onclick="window.location='home.php'" class="btn" style="vertical-align:middle" type="button"><span>Cancel</span></button>
</div>
        </form>
</html>