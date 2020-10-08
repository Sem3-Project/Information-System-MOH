<?php
require '../models/USScan_model.php';
?>

<!DOCTYPE html>
<html>
<head>
        <title>DelivPostnatalCare</title>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm3.css">
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
<form action="USScan_page.php" method="post" >
            <div>
                <div class="caption-container1">
                         <div class="caption-container"><h3>US Scan</h3></div>
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search">
                    <br><br>
                   
                    




<table width="100%" border="0">
<tr>
<td width="50%">Date</td>
       <td width="50%"><input type="date" name="date1"></td>
</tr>
<tr>
<td width="50%">POA</td>
       <td width="50%"><input type="text" name="poa"></td>
</tr>
<tr>
<td width="50%">EBW</td>
       <td width="50%"><input type="text" name="ebw"></td>
</tr>
<tr>
<td width="50%">CRL</td>
       <td width="50%"><input type="text" name="crl"></td>
</tr>
<tr>
<td width="50%">Gest.Sac</td>
       <td width="50%"><input type="text" name="gest_sac"></td>
</tr>
<tr>
<td width="50%">BPD</td>
       <td width="50%"><input type="text" name="bpd"></td>
</tr>
<tr>
<td width="50%">HC</td>
       <td width="50%"><input type="text" name="hc"></td>
</tr>
<tr>
<td width="50%">AC</td>
       <td width="50%"><input type="text" name="ac"></td>
</tr>
<tr>
<td width="50%">FL</td>
       <td width="50%"><input type="text" name="fl"></td>
</tr>
<tr>
<td width="50%">Liquor</td>
       <td width="50%"><input type="text" name="liquor"></td>
</tr>
<tr>
<td width="50%">Placenta</td>
       <td width="50%"><input type="text" name="placenta"></td>
</tr>
<tr>
<td width="50%">Average POA</td>
       <td width="50%"><input type="text" name="average_poa"></td>
</tr>
<tr>
<td width="50%">Any other</td>
       <td width="50%"><input type="text" name="any_other"></td>
</tr>
<tr>
<td width="50%">Designation</td>
       <td width="50%"><input type="text" name="designation"></td>
</tr>
</table>
<input type="hidden" name="pat_id" value="<?=$pat_id?>">
<br><br>

<br>
</form>
<br><center><input type="submit" class="link" name="update" style="margin-bottom: 50px; " value="Update"></center>
</div>
 </div>
</body>
</html>
