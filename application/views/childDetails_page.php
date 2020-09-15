<?php
require '../models/childDetails_model.php';
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
<link rel ="stylesheet" type="text/css" href="../../public/css/newForm3.css">
    
</head>
<body>
<form method="POST" action="childDetails_page.php">
<input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
	
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="34%" align="left">සෞ:වෛ:නි:<input type="text" name="doctor" value="<?=$doctor?>"></td>
  <td width="33%" align="center">ප:සෞ:සේ:නි:කො<input type="text" name="moh" value="<?=$moh?>"></td>
    <td width="33%" align="right">හැ:අංකය​<input type="text" name="idnum" value="<?=$idnum?>"></td>
 </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="75%" align="left">දරුවාගේ නම ​<input type="text" name="childname" value="<?=$childname?>"></td>
  <td width="25%" align="center">ලි:ප​ අංකය<input type="text" name="regn0" value="<?=$regno?>"></td>
    </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="25%" align="left">දරුවගේ උපන් දිනය​</td>
  <td width="25%" align="center"><input type="date" name="childbday" value="<?=$childbday?>"></td>
    <td width="25%" align="right">ලි:ප කල දිනය</td>
    <td width="25%" align="right">​<input type="text" name="regdate" value="<?=$regdate?>"></td>
 </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="75%" align="left">මවගේ නම ​ ​<input type="text" name="momname" value="<?=$momname?>"></td>
  <td width="25%" align="center">වයස<input type="number" name="momage" value="<?=$momage?>"></td>
    </tr>
</table>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><h3>අලුත උපන් ළදරුවගේ රැකවරණය​</h3>
  </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="25%" align="left">ඇප්ගා සංඛ්‍යාව​<input type="number" name="num1" value="<?=$num1?>"></td>
  <td width="25%" align="center">උපත් බර​(කි.ග්‍රෑ)<input type="number" name="weight1" value="<?=$weight1?>"></td>
    <td width="25%" align="right">උපතේදි හිසේ වට ප්‍රමාණය​(සෙ.මී)<input type="number" name="headperi" value="<?=$headperi?>"></td>
    <td width="25%" align="right">උපතේදි දරුවගේ දිග​(සෙ.මී)​<input type="number" name="length" value="<?=$length?>"></td>
 </tr>
</table>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="25%" align="left">අලුත උපන් දරුවගේ සෞඛ්‍ය තත්වය​</td>
  <td><select name="health">
            <option value="normal"><h5>සමාන්‍යය​</h5></option>
            <option value="needspec"><h5>විශේෂ රැකවරණයක් අවශ්‍ය වේ​</h5></option></td>

  
 </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="25%" align="left">විටමින් K</td>
  <td><select name="vitk">
            <option value="Yes"><h5>ලබා දී ඇත​​</h5></option>
            <option value="No"><h5>නැත​​</h5></option></td>
  
    
 </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr>
    <td rowspan="2" width="50%" align="center">මව් කිරි දීම   </td>
    <td width="50" align="right">ඉරියව්ව  <select name="posture">
            <option value="correct">නිවරදියි</option>
            <option value="wrong">වැරදියි </option>
            </select></td>
    <tr><td width="80" align="left">සම්බන්ධය <select name="rel">
            <option value="correct">නිවරදියි</option>
            <option value="wrong">වැරදියි </option>
            </select> </td></tr>
   </tr>
  </table>

  <h3>විශේෂයෙන් රැකබලා ගැනීමට හේතු </h3>

<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="70%"></td><td width="15%">සලකුණු කරන්න​​</td><td width="15%">දිනය</td>
 </tr>
 <tr><td width="70%">නොමේරු දරු උපත් ​</td><td width="15%"><input type="checkbox" name="select" value="select"></td></td><td width="15%"><input type="date" name="date1" value="<?=$date1?>"></td>
 </tr>
 <tr><td width="70%">අඩු උපත් බර</td><td width="15%"><input type="checkbox" name="select" value="select">​</td><td width="15%"><input type="date" name="date2" value="<?=$date2?>"></td>
 </tr>
 <tr><td width="70%">නවජ සංකූලතා</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date3" value="<?=$date3?>"></td>
 </tr>
 <tr><td width="70%">සංජානනීය ආබාධ</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date4" value="<?=$date4?>"></td>
 </tr>
 <tr><td width="70%">ප්‍රසුතියෙන් පසු මවගේ තදබල රෝග තත්වයන්</td><td width="15%"><input type="checkbox" name="select" value="select">​</td><td width="15%"><input type="date" name="date5" value="<?=$date5?>"></td>
 </tr>
 <tr><td width="70%">පලමු මාස 6 තුලදි පිටිකිරි දීම ​</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date6" value="<?=$date6?>"></td>
 </tr>
 <tr><td width="70%">වර්ධනය අඩාල වීම</td> <td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date7" value="<?=$date7?>"></td>
 </tr>
 <tr><td width="70%">මව්කිරි/ ආහාර දීමේ අපහසුතා</td> <td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date8" value="<?=$date8?>"></td>
 </tr>
 <tr><td width="70%">මවගේ/ පියාගේ මරණය</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date9" value="<?=$date9?>"></td>
 </tr>
 <tr><td width="70%">මවගේ/ පියාගේ වෙන්වීම​/විදේශගත වීම</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date0" value="<?=$date0?>"></td>
 </tr>
 <tr><td width="70%">වෙනත්</td><td width="15%"><input type="checkbox" name="select" value="select">​</td><td width="15%"><input type="date" name="date10" value="<?=$date10?>"></td>
 </tr>
 
</table>
</html>
