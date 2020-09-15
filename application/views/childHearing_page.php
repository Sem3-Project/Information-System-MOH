<?php
require '../models/childHearing_model.php';
?>

<!DOCTYPE html>
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
<head>
	 <link rel ="stylesheet" type="text/css" href="../../public/css/newForm2.css">
</head>
<body>
<form method="POST" action="childHearing_page.php">
<input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
<table width="100%" border="0">
<tr>
    <td width="100%" align="center"><h3>දරුවාගේ ඇසීම​ පරික්‍ෂා කිරීම ​</h3></td></tr>
    <tr><td width="100%" align="center"><h4> (මෙම කොටස මව/පියා/ රැකබලාගන්නන් විසින් පිරවීම සදහාය​)</h4></td>
</tr></table>

  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"><h4>උපතෙන් සුලු වේලාවකට පසු </h4></td><td width="50%" align="center">​<h4>ඔව්/නැත​</h4></td></tr></table>
 
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">හදිසි විශාල ශබ්දයක් ඇසුනු විට(අත්පුඩි ගැසීම​,දොරක් ශබ්ද නගා වැසීම වැනි) දරුවා තිගැස්සී ඇස් පිල්ලම් ගසනවාද​??</td><td width="50%" align="center">​<select name="sound">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 1 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> හදිසියේ ඇතිවන හෝ දිගටම පවතින​(වාහනයකින් පිටවන ශබ්ද වැනි) ශබ්ද  හදුනාගැනීමට හා ඒවාට නිහඩව සාවදානව කන්දීමට පටන් ගන්නවාද​? </td><td width="50%" align="center">​<select name="highsound">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
 <h4> මාස 4 සිට​</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> තම මව හෝ රැකබලාගන්නා පෙනීමට නොසිටියත් ඔවුන්ගේ කටහඩ ඇසුනු විට නිශ්ශබ්දව සිටිනවාද​? නැත්නම් මද සිනා පානවාද​?</td><td width="50%" align="center">​<select name="smile">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> පැත්තකින් හෝ පිටිපස සිට මව /රැකබලාගන්නා කතා කල විට ඒ දෙසට හිස හෝ ඇස් හරවනවාද​?</td><td width="50%" align="center">​<select name="eye">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4> මාස 7 සිට​</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> කතා කල වහාම මව /රැකබලාගන්නා දෙසට හැරෙනවාද​?</td><td width="50%" align="center">​<select name="look">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 9 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">දිනපතා ඇසෙන හුරුපුරුදු ශබ්ද වලට සාවදානව ඇහුම්කන් දෙනවාද​?</td><td width="50%" align="center">​<select name="hear">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">තමාට නොපෙනෙන තැනක සිට කරන ශබ්ද ගැන සොයා බලනවාද​?</td><td width="50%" align="center">​<select name="search">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">ශබ්ද නගා තාලයකට කතා කරනවිට එය ප්‍රිය කරනවාද​?</td><td width="50%" align="center">​<select name="song">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 12 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> තමාගේ නමට හෝ අනෙකුත් හුරුපුරුදු ශබ්ද වලට ප්‍රතිචාර දක්වනවාද​?</td><td width="50%" align="center">​<select name="name">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
 <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> නෑ, ටටා වැනි වචනවලට ඊට අදාල ක්‍රියාව නොකලත් ප්‍රතිචාර දක්වනවාද​?</td><td width="50%" align="center">​<select name="respond">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
 
  <h4>ඔබේ දරුවාගේ ඇසීම​ පිලිබඳ යම් සැකයක් ඇත්නම් හෝ ඉහත ප්‍රශ්න වලින් එකකට හෝ ඔව් යැයි පිලිතුරු දීමට නොහැකි නම් ඔබේ ප්‍රදේශයේ පවුල් සෞඛ්‍ය සේවා නිළධාරිනිය​/ සෞඛ්‍ය වෛද්‍ය නිලධාරී/ වෙනත් වෛද්‍යවරයෙකු හමුවන්න​</h4>
</html>
