<?php
require '../models/USScan_model.php';
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 40%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>  

    <h2>US Scan</h2>
    <link rel="stylesheet" href="table.css">
</head>
<body>

<form method="POST" action="page5-part2.php">
<input type="text" name="patient_id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($patient_id);?>"><br><br>

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
