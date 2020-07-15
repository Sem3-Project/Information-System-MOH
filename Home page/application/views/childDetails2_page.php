<?php
require '../models/childDetails2_model.php';
?>

<!DOCTYPE html>
<head>
<h3 align="center">අලුත උපන් දරුවාගේ සටහන</h3>
<h5 align="center">(පසු ප්‍රසව ගමන් වලදි පවුල් සෞඛ්‍ය සේවා නිලධාරිනිය විසින් සම්පූර්ණ කිරීම​ට)<h5>
    
</head>
<body>

<form method="POST" action="childDetails2_page.php">
<input type="text" name="patient_id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($patient_id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
<table width="70%" align="right" border="0">
<link rel="stylesheet" href="../../public/css/table.css">
<tr width=100%><td width="30%">උපතේ සිට පලමු දින 10 තුල​</td><td width="20%">දින 11-28 ​</td><td width="20%">දින 42 ආශ්‍රිතව</td></tr></table>
<table width=100%  border="0">
<tr width=100%><td width="30%" align="center"> </td><td width="15%">දිනය​​<input type="date" name="dat1" value="<?=$dat1?>"></td><td width="15%">දිනය​<input type="date" name="dat2" value="<?=$dat2?>"></td><td width="20%">දිනය​<input type="date" name="dat3" value="<?=$dat3?>"> ​</td><td width="20%">දිනය​<input type="date" name="dat4" value="<?=$dat4?>"></td></tr>
<tr width=100%><td width="30%" align="center">සමේ පැහැය​</td><td width="15%">​<input type="text" name="scolor1" value="<?=$scolor1?>"></td><td width="15%"><input type="text" name="scolor2" value="<?=$scolor2?>">​</td><td width="20%"><input type="text" name="scolor3" value="<?=$scolor3?>">​</td><td width="20%"><input type="text" name="scolor4" value="<?=$scolor4?>"></td></tr>
<tr width=100%><td width="30%" align="center">ඇස්</td><td width="15%">​<input type="text" name="eye1" value="<?=$eye1?>"></td><td width="15%"><input type="text" name="eye2" value="<?=$seye2?>">​</td><td width="20%"><input type="text" name="eye3" value="<?=$eye3?>">​</td><td width="20%"><input type="text" name="eye4" value="<?=$scolor4?>"></td></tr>
<tr width=100%><td width="30%" align="center">පෙකණියේ ස්වභාවය​​</td><td width="15%">​<input type="text" name="sc1" value="<?=$sc1?>"></td><td width="15%"><input type="text" name="sc2" value="<?=$sc2?>">​</td><td width="20%"><input type="text" name="sc3" value="<?=$sc3?>">​</td><td width="20%"><input type="text" name="sc4" value="<?=$sc4?>"></td></tr>
<tr width=100%><td width="30%" align="center">මව් කිරි පමණක් දීම​</td><td width="15%">​<input type="text" name="m1" value="<?=$m1?>"></td><td width="15%"><input type="text" name="m2" value="<?=$m2?>">​</td><td width="20%"><input type="text" name="m3" value="<?=$m3?>">​</td><td width="20%"><input type="text" name="m4" value="<?=$m4?>"></td></tr>
</table>
<table width="100%" border="0">
<tr width=100%><td rowspan="2" width="15%" align="center">මව්කිරි දීමේ  </td><td width="15%">ඉරියව්ව ​</td><td width="15%">​<input type="text" name="pos1" value="<?=$pos1?>"></td><td width="15%">​<input type="text" name="pos2" value="<?=$pos2?>"></td><td width="20%"><input type="text" name="pos3" value="<?=$pos3?>"></td><td width="15%">​<input type="text" name="pos4" value="<?=$pos4?>"> ​</td></tr>
<tr width=100%><td width="15%">සම්බන්ධය​</td><td width="15%"><input type="text" name="rel1" value="<?=$rel1?>"></td><td width="15%">​<input type="text" name="rel2" value="<?=$rel2?>"></td><td width="15%">​<input type="text" name="rel3" value="<?=$rel3?>"></td><td width="20%"><input type="text" name="rel4" value="<?=$rel4?>"></td></tr></table>
<table width="100%" border="0">
<tr width=100%><td width="30%" align="center">වෙනත්​</td><td width="15%">​<input type="text" name="other1" value="<?=$other1?>"></td><td width="15%"><input type="text" name="other2" value="<?=$other2?>">​</td><td width="20%"><input type="text" name="other3" value="<?=$other3?>">​</td><td width="20%"><input type="text" name="other4" value="<?=$other4?>"></td></tr>
</table>
<br>
<h4>සායනයට පැමිණිය යුතු දිනයන්</h4>
<table width="100%" border="0">
<tr width=100%><td align="center">​<input type="date" name="date1" value="<?=$date1?>"></td><td align="center">​<input type="date" name="date2" value="<?=$date2?>"></td><td align="center">​<input type="date" name="date3" value="<?=$date3?>"></td><td align="center">​<input type="date" name="date4" value="<?=$date4?>"></td><td align="center">​<input type="date" name="date5" value="<?=$date5?>"></td></tr>
<tr width=100%><td align="center">​<input type="date" name="date6" value="<?=$date6?>"></td><td align="center">​<input type="date" name="date7" value="<?=$date7?>"></td><td align="center">​<input type="date" name="date8" value="<?=$date8?>"></td><td align="center">​<input type="date" name="date9" value="<?=$date9?>"></td><td align="center">​<input type="date" name="date10" value="<?=$date10?>"></td></tr>
<tr width=100%><td align="center">​<input type="date" name="date11" value="<?=$date11?>"></td><td align="center">​<input type="date" name="date12" value="<?=$date12?>"></td><td align="center">​<input type="date" name="date13" value="<?=$date13?>"></td><td align="center">​<input type="date" name="date14" value="<?=$date14?>"></td><td align="center">​<input type="date" name="date15" value="<?=$date15?>"></td></tr>
<tr width=100%><td align="center">​<input type="date" name="date16" value="<?=$date16?>"></td><td align="center">​<input type="date" name="date17" value="<?=$date17?>"></td><td align="center">​<input type="date" name="date18" value="<?=$date18?>"></td><td align="center">​<input type="date" name="date19" value="<?=$date19?>"></td><td align="center">​<input type="date" name="date20" value="<?=$date20?>"></td></tr>

