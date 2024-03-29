<?php
require '../models/childHearing_model.php';
?>

<!DOCTYPE html>
<head>
        <title>Child Hearing</title>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm2.css">
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
<form action="childHearing_page.php" method="post" >
            <div>
                <div class="caption-container1">
                <div class="caption-container"><h3>දරුවාගේ ඇසීම​ පරික්‍ෂා කිරීම ​</h3><h4> (මෙම කොටස මව/පියා/ රැකබලාගන්නන් විසින් පිරවීම සදහාය​)</h4></div>
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search">
                    <br><br>
                    
                
                    
                   





  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"><h4>උපතෙන් සුලු වේලාවකට පසු </h4></td><td width="50%" align="center">​<h4>ඔව්/නැත​</h4></td></tr></table>
 
 <table  width="80%" border="0">
 <tr width=80%>
 <td width="50%" align="left">හදිසි විශාල ශබ්දයක් ඇසුනු විට(අත්පුඩි ගැසීම​,දොරක් ශබ්ද නගා වැසීම වැනි) දරුවා තිගැස්සී ඇස් පිල්ලම් ගසනවාද​??</td>
 <td width="50%" align="center">​<select id="sound" name="sound">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($sound=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($sound=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>
  
  <h4>මාස 1 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%>
 <td width="50%" align="left"> හදිසියේ ඇතිවන හෝ දිගටම පවතින​(වාහනයකින් පිටවන ශබ්ද වැනි) ශබ්ද  හදුනාගැනීමට හා ඒවාට නිහඩව සාවදානව කන්දීමට පටන් ගන්නවාද​? </td>
 <td width="50%" align="center">​<select name="highsound" id="highsound">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($highsound=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($highsound=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

 <h4> මාස 4 සිට​</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> තම මව හෝ රැකබලාගන්නා පෙනීමට නොසිටියත් ඔවුන්ගේ කටහඩ ඇසුනු විට නිශ්ශබ්දව සිටිනවාද​? නැත්නම් මද සිනා පානවාද​?</td>
 <td width="50%" align="center">​<select name="smile" id="smile">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($smile=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($smile=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> පැත්තකින් හෝ පිටිපස සිට මව /රැකබලාගන්නා කතා කල විට ඒ දෙසට හිස හෝ ඇස් හරවනවාද​?</td>
 <td width="50%" align="center">​<select name="eye" id="eye">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($eye=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($eye=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <h4> මාස 7 සිට​</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> කතා කල වහාම මව /රැකබලාගන්නා දෙසට හැරෙනවාද​?</td>
 <td width="50%" align="center">​<select name="look" id="look">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($look=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($look=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <h4>මාස 9 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">දිනපතා ඇසෙන හුරුපුරුදු ශබ්ද වලට සාවදානව ඇහුම්කන් දෙනවාද​?</td>
 <td width="50%" align="center">​<select name="hear" id="hear">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($hear=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($hear=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">තමාට නොපෙනෙන තැනක සිට කරන ශබ්ද ගැන සොයා බලනවාද​?</td>
 <td width="50%" align="center">​<select name="search" id="search">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($search=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($search=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">ශබ්ද නගා තාලයකට කතා කරනවිට එය ප්‍රිය කරනවාද​?</td>
 <td width="50%" align="center">​<select name="song" id="song">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($song=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($song=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>
  <h4>මාස 12 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> තමාගේ නමට හෝ අනෙකුත් හුරුපුරුදු ශබ්ද වලට ප්‍රතිචාර දක්වනවාද​?</td>
 <td width="50%" align="center">​<select name="name" id="name">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($name=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($name=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

 <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> නෑ, ටටා වැනි වචනවලට ඊට අදාල ක්‍රියාව නොකලත් ප්‍රතිචාර දක්වනවාද​?</td>
 <td width="50%" align="center">​<select name="respond" id="respond">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($respond=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($respond=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>
 
 
  <h4>ඔබේ දරුවාගේ ඇසීම​ පිලිබඳ යම් සැකයක් ඇත්නම් හෝ ඉහත ප්‍රශ්න වලින් එකකට හෝ ඔව් යැයි පිලිතුරු දීමට නොහැකි නම් ඔබේ ප්‍රදේශයේ පවුල් සෞඛ්‍ය සේවා නිළධාරිනිය​/ සෞඛ්‍ය වෛද්‍ය නිලධාරී/ වෙනත් වෛද්‍යවරයෙකු හමුවන්න​</h4>
  <br><center><input type="submit" class="link" name="update" style="margin-bottom: 50px; " value="Update"></center>
</div>
 </div>


</html>
