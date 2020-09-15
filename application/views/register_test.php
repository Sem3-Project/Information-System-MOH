<?php
    require '../controllers/register.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=:../../public/css/bootstrap.min.css">
        <link rel = "stylesheet" href ="../../public/css/changepw.css">
       
        <link rel = "stylesheet" href ="../../public/css/split.css">
        <!-- <link rel = "stylesheet" href ="../../public/css/style.css"> -->

        <style>
            body {
            background-image: url('../../public/images/wave.png');
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            }

            input[type=text], select, [type=password]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }
        </style>
    </head>
    <head>
        
            <div class="hero-image">
                <img src="../../public/images/logo.png" class="logo-image"/>
                <img src="../../public/images/line.jpg" class="line-image"/>
                <a href="../controllers/logout.php"><img src="../../public/images/logout.png" class="logout-image"></a>
                <a href="newHome.php"><img src="../../public/images/home.png" class="home-image"></a>
                <div class="hero-text">
                    <h1 style="font-size:25px">Office of the Medical Officer of Health</h1>

                    <h3 style="font-size:25px">Gampaha</h3>
                </div>

            </div>
            
       
    </head>


    <body>
        <!-- <div style="color:red; opacity: 0.8 font-style:bold" >
      		<marquee behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();">Please send your comments to gampahamoh@yahoo.com</marquee>
        </div> -->
            <div class="row">
                <div class="column">
                    <div class="image" align="center">
                        <!-- <img src="../../public/images/login_new.png" alt="login" width="500px" height="500px" > -->
                        <img src="../../public/images/momIcon1.png" alt="login" width="500px" height="500px" >
                 
                    </div>
                </div>

                <div class="column1">
                    <div class="login_content">
                        <form method="post" action="" autocomplete="off" align="center">
                            <img src="../../public/images/Registration.png">
                            <div class="blink_me">
                                <h2 class="blink"><b><blink>User Registration</blink></b></h2>
                            </div>
                            <br>
                            <div> 
                                <label><b>පරිශීලක නාමය</b></label>
                                <input type="text" class="form-control" name="id" placeholder="Enter username" >
                            </div>
                            
                            <div>
                                <label><b>කාණ්ඩය</b></label>
                                <select name="catagory" class="form-control">
                                    <option >Enter category</option>
                                    <option value="Patient-Mother" >මාතෘ-Mother</option>
                                    <option value="Patient-Child" >ළමා-Child</option>
                                    <option value="Medical officer" >වෛද්‍ය නිලධාරි-Medical officer</option>
                                    <option value="Midwife" >පවුල් සෞඛ්‍ය සේවා නිලධාරී-Midwife</option>
                                    <option value="Receptionist">පිළිගැනීමේ නිලධාරි-Receptionist</option>
                                </select>
                            </div>
                            <div>
                                <label for= "exampleInputPassword1"><b>මුරපදය</b></label><br>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password_1" placeholder="Enter password">
                            </div>
                            <div>
                            <label for= "exampleInputPassword1"><b>මුරපදය තහවුරු කරන්න</b></label><br>
  	                        <input type="password" class="form-control" id="exampleInputPassword1" name="password_2" placeholder="Confirm password">
  	                        </div>
                        
                            <input type="submit" class="btn" style="vertical-align:middle"name="save" value="Register">


                        </form>
                    </div>
                </div>
            </div>
        
        
    </body>
  

    <footer>
    <p style="text-align: center;">Copyright @ 2020 MOH, Gampaha, Sri Lanka</br>tele: 033-2222278</br>fax: 033-2222278</br>email: gampahamoh@yahoo.com </p>
  </footer>

  <script src="../../public/js/jquery.slim.min.js"></script>
    <script src="../../public/js/popper.min.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
</html>