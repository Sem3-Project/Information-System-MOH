<?php
require '../controllers/login.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=:../../public/css/bootstrap.min.css">
        <link rel = "stylesheet" href ="../../public/css/loging.css">
       
        <link rel = "stylesheet" href ="../../public/css/split.css">
        <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/logo.png">

        <style>

            input[type=text], select, [type=password] {
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
            background-color: rgb(10, 214, 146);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: rgb(8, 148, 101);
            }
        </style>
    </head>
    <head>
        
            <div class="hero-image">
                <img src="../../public/images/logo.png" class="logo-image"/>
                <img src="../../public/images/line.jpg" class="line-image"/>
               
                <div class="hero-text">
                    <h1 style="font-size:25px">Office of the Medical Officer of Health</h1>

                    <h3 style="font-size:25px">Gampaha</h3>
                </div>

            </div>
            
       
    </head>
    <body>
        <div class="wave-image">
        <p id="caption"></p>
        <div style="color:rgb(10, 214, 146); opacity: 0.8 font-style:bold" >
      		<marquee behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();">Please send your comments to gampahamoh@yahoo.com</marquee>
        </div>
            <div class="row">
                <div class="column">
                    <div class="image" align="center">
                        <img src="../../public/images/momIcon1.png" alt="login" width="500px" height="500px" >
                    </div>
                </div>

                <div class="column1">
                    <div class="login_content">
                        <form method="post" action="" autocomplete="off" align="center">
                            <img src="../../public/images/sign.jpg">
                            <div class="blink_me">
                                <h2 class="blink"><b><blink>ආයුබෝවන්</blink></b></h2>
                            </div>
                            <br>
                            <div> 
                                <label><b>පරිශීලක නාමය(Username)</b></label>
                                <input type="text" class="form-control" name="id" >
                            </div>
                            <div>
                                <label for= "exampleInputPassword1"><b>මුරපදය(Password)</b></label><br>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div>
                                <label><b>කාණ්ඩය(Category)</b></label>
                                <select name="catagory" class="form-control">
                                    <option value="Patient-Mother" >මාතෘ-Mother</option>
                                    <option value="Patient-Child" >ළමා-Child</option>
                                    <option value="Medical officer" >වෛද්‍ය නිලධාරි-Medical officer</option>
                                    <option value="Midwife" >පවුල් සෞඛ්‍ය සේවා නිලධාරී-Midwife</option>
                                    <option value="Receptionist">පිළිගැනීමේ නිලධාරි-Receptionist</option>
                                </select>
                            </div>
                            <a href="ChangePW_page.php" >මුරපදය වෙනස් කිරීම සඳහා</a><br><br>
                            <input type="submit" class="btn" style="vertical-align:middle"name="login_user" value="පිවිසෙන්න">

                        </form>
                    </div>
                </div>
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
