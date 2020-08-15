<?php
require '../models/USScan_model.php';
?>

<!DOCTYPE html>
<html>
<head>
        <body>
            <div class="hero-image">
                <img src="../img/logo.png" class="logo-image"/>
                <img src="../img/line.jpg" class="line-image"/>
                
                <div class="hero-text">
                    <h1 style="font-size:25px">Office of the Medical Officer of Health</h1>
                    <h3 style="font-size:25px">Gampaha</h3>
                </div>
            </div>
        </body>
</head>

<head>
<meta charset="UTF-8">
<link rel ="stylesheet" type="text/css" href="newForm3.css">

    <h2>US Scan</h2>
    <link rel="stylesheet" href="../../public/css/table.css">
</head>
<body>

<form method="POST" action="USScan_page.php">
<input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
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
</body>
</html>
