<?php
require '../models/childVision_model.php';
?>

<!DOCTYPE html>
<head>
</head>
<body>
<form method="POST" action="child8.php">
<input type="text" name="patient_id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($patient_id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
<table width="100%" border="0">
<tr>
    <td width="100%" align="center"><h3>දරුවාගේ පෙනීම පරික්‍ෂා කිරීම ​</h3></td></tr>
    <tr><td width="100%" align="center"><h4> (මෙම කොටස මව/පියා/ රැකබලාගන්නන් විසින් පිරවීම සදහාය​)</h4></td>
</tr></table>

  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"><h4>ඉපදී පලමු සතියේ සිට </h4></td><td width="50%" align="center">​<h4>ඔව්/නැත​</h4></td></tr></table>
 
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">ආලෝකය දෙසට ළදරුවා ඇස් යොමුකරනවාද​?</td><td width="50%" align="center">​<select name="light">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> ළදරුවා ඔබේ මුහුණ දෙස හොදින් බලනවාද​?</td><td width="50%" align="center">​<select name="watch">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
 <h4> මාස දෙක වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> ඔබ මුහුණ දෙපැත්තට හැරවීමේදි ඔබේ දෙසම බලා දරුවා ප්‍රතිචාරාත්මකව සිනාසෙනවාද​?</td><td width="50%" align="center">​<select name="smile">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> එවිට දරුවාගේ ඇස් දෙකම එකට චලනය වේද​?</td><td width="50%" align="center">​<select name="eye">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4> මාස 6 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> දරුවා විමසිල්ලෙන් අවට බලන්නේද​?</td><td width="50%" align="center">​<select name="look">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> දරුවා අත දිගුකර යමක් ඇල්ලීමට උත්සහ කරන්නේද​?</td><td width="50%" align="center">​<select name="touch">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> දරුවාට වපරයක් ඇති බවට ඔබ සැක කරනවද​?</td><td width="50%" align="center">​<select name="eyeerror">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 10 දී</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> දරුවාට මාපටඟිල්ල හා දබර ඇඟිල්ල ආධාරයෙන් කුඩා ද්‍රව්‍ය අහුලා ගැනීමට හැකියාව ඇත්ද​?</td><td width="50%" align="center">​<select name="pick">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 12 දී</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> ඔබේ දරුවා නොයෙක් දේවල් දෙසට අත දිගුකර ඒවා ඉල්ලනවාද​?</td><td width="50%" align="center">​<select name="touch2">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> හඳුනන පුද්ගලයන් දුටුවිට ඔවුන් දරුවාට කතා කිරීමට පෙරම දරුවා ඔවුන්ව හදුනා ගන්නවාද​?</td><td width="50%" align="center">​<select name="recognize">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>ඔබේ දරුවාගේ පෙනීම පිලිබඳ යම් සැකයක් ඇත්නම්/ දරුවාට වපරයක් ඇතැයි පෙනී යන්නේ නම් හෝ ඉහත අනෙකුත් ප්‍රශ්න වලින් එකකට හෝ ඔව් යැයි පිලිතුරු දීමට නොහැකි නම් ඔබේ ප්‍රදේශයේ පවුල් සෞඛ්‍ය සේවා නිළධාරිනිය​/ සෞඛ්‍ය වෛද්‍ය නිලධාරී/ වෙනත් වෛද්‍යවරයෙකු හමුවන්න​</h4>


</html>