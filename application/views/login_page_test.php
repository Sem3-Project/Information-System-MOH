<?php
require '../controllers/login.php'; //-----------------------to be deleted=====================================================
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <!-- <link rel="stylesheet" type="text/css" href="../../public/css/style.css"> -->
  <link rel="stylesheet" href="../../public/js/login.js">
  <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link rel = "stylesheet" href ="../../public/css/login.css"/>
  <link rel="stylesheet" href="../../public/css/tether.min.css">
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/swag.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<header>
<div class="header">
<div class="logo">
    <img class="logo" src="../../public/images/logo.jpg"/> 
		<h2>සෞඛ්‍ය වෛද්‍ය නිලධාරී කාර්යාලය (Medical Officer of Health Office)</h2>
		<h3>ගම්පහ (Gampaha)</h3>
	</div>
</div>
</header>
<body>

  <div style="color:red; opacity: 0.8 font-style:bold" >
      <marquee behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();">Please send your comments to gampahamoh@yahoo.com</marquee>
  </div>
	<img class="wave" src="../../public/images/wave_new.png">
	<div class="container">
		<div class="img">
			<img src="../../public/images/login_new.png">
		</div>
		<div class="login-content">
			<form method="post" action="" autocomplete="off">
        <img src="../../public/images/sign.jpg">
        <!-- <div class="blink_me">BLINK ME</div> -->
        <div class="blink_me"><h3 class="title"><b><blink>ආයුබෝවන්</blink></b></h3></div><br>
        
        <div class="form-group"> 
  		      <label><b>පරිශීලක නාමය(Username)</b></label>
  		      <input type="text" class="form-control" name="id" >
  	    </div>
  	    <div class="form-group">
  		      <label for= "exampleInputPassword1"><b>මුරපදය(Password)</b></label>
  		      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
    
        <!-- </div> -->
	      <div class="form-group">
		        <label><b>කාණ්ඩය(Category)</b></label>
		        <select name="catagory" class="form-control">
                <option value="Patient-Mother" >මාතෘ-Mother</option>
				        <option value="Patient-Child" >ළමා-Child</option>
				        <option value="Medical officer" >වෛද්‍ය-Medical officer</option>
                <option value="Midwife" >වින්නඹු මාතා-Midwife</option>
				        <option value="Receptionist">පිළිගැනීමේ නිලධාරි-Receptionist</option>
		        </select>
  	    </div>


        <button type="submit" class="btn btn-primary" name="login_user">පිවිසෙන්න (Login)</button>

           		<!-- <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>පරිශීලක නාමය(Username)</h5>
           		   		<input type="text" class="input" name="id">
                  </div>
              </div>


              <div class="input-div one">
                  <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
                  <div class="div">
                      <h5>කාණ්ඩය(Category)</h5>
                     
                  
                      <select name="catagory" class = "input">
                          <option value="Patient-Mother">Patient-Mother</option>
				                  <option value="Patient-Child">Patient-Child</option>
				                  <option value="Medical officer" >Medical officer</option>
                          <option value="Midwife" >Midwife</option>
				                  <option value="Receptionist" >Receptionist</option>
		                  </select> 
                  </div>
                  
               </div>
               

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>මුරපදය(Password)</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" name="login_user"> -->
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../../public/js/main.js"></script>
</body>
</html>
