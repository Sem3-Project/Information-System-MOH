<?php
require '../models/HosClinicCare_model.php';
?>

<!DOCTYPE html>
<head>
        <title>HosClinicCare</title>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm1.css">
        <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/logo.png">

    </head>
    <head>
        <body>
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
        </body>
    </head>



<body>
<form action="HosClinicCare_page.php" method="post" >
            <div>
                <div class="caption-container1">
			 <div class="caption-container"><h4>රෝහල් සායනික සංරක්‍ෂණය​</h4>
    <h2>Hospital Clinic Care</h2></div>
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search">
			    <br><br>
                    
                   
                    

	
<table width="100%" border="0">

       <tr>
       <td width="35.5%">Date</td>
       <td width="50%"><input type="date" name="date1" value="<?=$date1?>"></td>
       
        </tr>
        <tr>
        <td>POA</td>
        <td><input type="text" name="poa" value="<?=$poa?>"></td>
        
        </tr>
        <tr>
        <td >Weight</td>
        <td ><input type="text" name="weight1" value="<?=$weight1?>"></td>
       
        </tr>
  </table>
  <table width="100%" border="0">
        <tr>
        <td width="35.5%" >Urine</td>
        <td width="25%"> Sugar:
        <select name="sugar">
            <option value="Green" <?php if ($sugar=='Green'){ echo 'selected';}?>>Green</option>
            <option value="Yellow" <?php if ($sugar=='Yellow'){ echo 'selected';}?>>Yellow</option>
            <option value="Orange" <?php if ($sugar=='Orange'){ echo 'selected';}?>>Orange</option>
            <option value="Brick red" <?php if ($sugar=='Brick red'){ echo 'selected';}?>>Brick red</option>
            <option value="NIL" <?php if ($sugar=='NIL'){ echo 'selected';}?>>NIL</option>
        </td>
        <td width="25%">Albumin:
        <select name="albumin">
       <option value="NIL" <?php if ($albumin=='NIL'){ echo 'selected';}?>>NIL</option>
       <option value="+" <?php if ($albumin=='+'){ echo 'selected';}?>>+</option>
       <option value="++" <?php if ($albumin=='++'){ echo 'selected';}?>>++</option>
       <option value="+++" <?php if ($albumin=='+++'){ echo 'selected';}?>>+++</option>
      </td>
      </tr>
    </table>

    <table width="100%" border="0">
        <tr>
        <td width="35.5%">Oedema</td>
        <td width="50%">
        <select name="oedema">
            <option value="+" <?php if ($oedema=='+'){ echo 'selected';}?>>+</option>
            <option value="0" <?php if ($oedema=='0'){ echo 'selected';}?>>0</option>
        </td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
        <td width="66%" >BP</td>
        <td width="18%" >Systolic:<input type="text" name="Systolic" value="<?=$systolic?>"></td>
        <td width="18%">Diastolic:<input type="text" name="Diastolic" value="<?=$diastolic?>"></td>
        
      </tr>
    </table>
    <table width="100%" border="0">
    <tr>
        <td width="37%" >Fundal Height</td>
        
        <td width="26%"><input type="text" name="fundalHeight" value="<?=$fundalheight?>"></td>
        </td>
        <td width="26%">
        <select name="fundalHeight1">
       <option value="NP"  <?php if ($fundalheight1=='NP'){ echo 'selected';}?>>NP</option>
       <option value="JP"  <?php if ($fundalheight1=='JP'){ echo 'selected';}?> >JP</option>
       
      </td>
      </tr>
    </table>

    <table width="100%" border="0">
        <tr>
        <td width="35.5%">Lie</td>
        <td width="50%">
        <select name="lie">
       <option value="LL"  <?php if ($lie=='LL'){ echo 'selected';}?>>LL</option>
       <option value="TL"  <?php if ($lie=='TL'){ echo 'selected';}?>>TL</option>
       <option value="OL"  <?php if ($lie=='OL'){ echo 'selected';}?>>OL</option>
       <option value="Other"  <?php if ($lie=='Other'){ echo 'selected';}?>>Other</option>
        </td>
        
        </tr>
        </table>
        <table width="100%" border="0">
        <tr>
        <td width="35.5%">Presentation</td>
        <td width="50%">
        <select name="presentation">
       <option value="Cephalic"  <?php if ($presentation=='Cephalic'){ echo 'selected';}?>>Cephalic</option>
       <option value="Breech" <?php if ($presentation=='Breech'){ echo 'selected';}?>>Breech</option>
       <option value="Other" <?php if ($presentation=='Other'){ echo 'selected';}?>>Other</option>
       </td>
       </tr>
        </table>

        <table width="100%" border="0">
        <tr>
        <td width="35.5%" >FM/FHS</td>
        <td width="25%"> FM:
        <select name="fm">
            <option value="+"<?php if ($fm=='+'){ echo 'selected';}?>>+</option>
            <option value="0" <?php if ($fm=='0'){ echo 'selected';}?>>0</option>
         </td>
        <td width="25%">FHS:
        <select name="fhs">
       <option value="+" <?php if ($fhs=='+'){ echo 'selected';}?>>+</option>
       <option value="0" <?php if ($fhs=='0'){ echo 'selected';}?>>0</option>
       </td>
      </tr>
    </table>

    <table width="100%" border="0">        
        <tr>
        <td width="35.5%">Designation</td>
        <td width="50%"><input type="text" name="designation"  value="<?=$designation?>"></td>
        
        </tr>
        <tr>
        <td width="35.5%">Date of next visit</td>
        <td width="50%"><input type="date" name="donext1"  value="<?=$donext?>"></td>
        
        </tr>
        </table>
        <br>
        <center><input type="submit" class="link" name="update" style="margin-bottom: 50px; " value="Update"></center>
        </div>
            </div>
</form>
</body>
</html>
