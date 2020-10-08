<?php
require '../models/childVision_model.php';
?>

<!DOCTYPE html>
<head>
        <title>Child Vision</title>
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

            <div>
                <div class="caption-container1">
                <form action="childVision_page.php" method="post" >
                <div class="caption-container"><h3>දරුවාගේ පෙනීම පරික්‍ෂා කිරීම  ​</h3><h4> (මෙම කොටස මව/පියා/ රැකබලාගන්නන් විසින් පිරවීම සදහාය​)</h4></div>
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search"></center>
                    <br><br>
                   
                   

                
                    
                   



<center>
  <table  width="80%" border="0">
 <tr width=80%>
 <td width="50%" align="left"><h4>ඉපදී පලමු සතියේ සිට </h4></td>
 <td width="50%" align="center">​<h4>ඔව්/නැත​</h4></td></tr></table>
 
 <table  width="80%" border="0">
    <tr width=80%>
    <td width="50%" align="left">ආලෝකය දෙසට ළදරුවා ඇස් යොමුකරනවාද​?</td>
    <td width="50%" align="center">​<select id="light" name="light">
      <option value="not done">---Select---</option>
      <option value="Yes" <?php if($light=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($light=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <table  width="80%" border="0">
  <tr width=80%><td width="50%" align="left"> ළදරුවා ඔබේ මුහුණ දෙස හොදින් බලනවාද​?</td>
  <td width="50%" align="center">​<select id="watch" name="watch">
  <option value="not done">---Select---</option>
      <option value="Yes" <?php if($watch=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($watch=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>
 
<h4> මාස දෙක වනවිට</h4>
<table  width="80%" border="0">
<tr width=80%>
<td width="50%" align="left"> ඔබ මුහුණ දෙපැත්තට හැරවීමේදි ඔබේ දෙසම බලා දරුවා ප්‍රතිචාරාත්මකව සිනාසෙනවාද​?</td>
<td width="50%" align="center">​<select id="smile" name="smile">
<option value="not done">---Select---</option>
      <option value="Yes" <?php if($smile=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($smile=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

<table  width="80%" border="0">
 <tr width=80%>
 <td width="50%" align="left"> එවිට දරුවාගේ ඇස් දෙකම එකට චලනය වේද​?</td>
 <td width="50%" align="center">​<select id="eye" name="eye">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($eye=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($eye=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <h4> මාස 6 වනවිට</h4>
<table  width="80%" border="0">
 <tr width=80%>
 <td width="50%" align="left"> දරුවා විමසිල්ලෙන් අවට බලන්නේද​?</td>
 <td width="50%" align="center">​<select id="look" name="look">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($look=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($look=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <table  width="80%" border="0">
 <tr width=80%>
 <td width="50%" align="left"> දරුවා අත දිගුකර යමක් ඇල්ලීමට උත්සහ කරන්නේද​?</td>
 <td width="50%" align="center">​<select id="touch" name="touch">
 <option value="not done">---Select---</option>
 <option value="Yes" <?php if($touch=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($touch=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <table  width="80%" border="0">
 <tr width=80%>
 <td width="50%" align="left"> දරුවාට වපරයක් ඇති බවට ඔබ සැක කරනවද​?</td>
 <td width="50%" align="center">​<select id="eyeerror" name="eyeerror">
 <option value="not done">---Select---</option>
            <option value="Yes" <?php if($eyeerror=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($eyeerror=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <h4>මාස 10 දී</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> දරුවාට මාපටඟිල්ල හා දබර ඇඟිල්ල ආධාරයෙන් කුඩා ද්‍රව්‍ය අහුලා ගැනීමට හැකියාව ඇත්ද​?</td>
 <td width="50%" align="center">​<select id="pick" name="pick">
 <option value="not done">---Select---</option>
      <option value="Yes" <?php if($pick=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($pick=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <h4>මාස 12 දී</h4>
  <table  width="80%" border="0">
 <tr width=80%>
 <td width="50%" align="left"> ඔබේ දරුවා නොයෙක් දේවල් දෙසට අත දිගුකර ඒවා ඉල්ලනවාද​?</td>
 <td width="50%" align="center">​<select id="touch2" name="touch2">
 <option value="not done">---Select---</option>
            <option value="Yes" <?php if($touch2=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($touch2=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table>

  <table  width="80%" border="0">
 <tr width=80%>
 <td width="50%" align="left"> හඳුනන පුද්ගලයන් දුටුවිට ඔවුන් දරුවාට කතා කිරීමට පෙරම දරුවා ඔවුන්ව හදුනා ගන්නවාද​?</td>
 <td width="50%" align="center">​<select id="recognize" name="recognize">
 <option value="not done">---Select---</option>
            <option value="Yes" <?php if($recognize=="Yes") echo 'selected="selected"';?>>ඔව්</option>
      <option value="No" <?php if($recognize=="No") echo 'selected="selected"';?>>නැත</option>
    </select></td></tr></table></center>
  <h4>ඔබේ දරුවාගේ පෙනීම පිලිබඳ යම් සැකයක් ඇත්නම්/ දරුවාට වපරයක් ඇතැයි පෙනී යන්නේ නම් හෝ ඉහත අනෙකුත් ප්‍රශ්න වලින් එකකට හෝ ඔව් යැයි පිලිතුරු දීමට නොහැකි නම් ඔබේ ප්‍රදේශයේ පවුල් සෞඛ්‍ය සේවා නිළධාරිනිය​/ සෞඛ්‍ය වෛද්‍ය නිලධාරී/ වෙනත් වෛද්‍යවරයෙකු හමුවන්න​</h4>
  <br><center><input type="submit" class="link" name="update" style="margin-bottom: 50px; " value="Update"></center>
</div>
 </div>

</html>
