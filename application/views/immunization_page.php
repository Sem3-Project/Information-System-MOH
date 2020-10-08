<?php
require '../models/immunization_model.php';
?>

<!DOCTYPE html>
<head>
        <title>Immunization</title>
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
<form action="immunization_page.php" method="post" >
            <div>
                <div class="caption-container1">
                    <div class="caption-container"><h3>ප්‍රතිශක්තීකරණය​ ​</h3><h5> ජීවිත කාලය තුලදී ලබාගන්නා සියලුම එන්නත් මෙහි ඇතුලත් කරගැනීමට කටයුතු කරන්න</h5></div>
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search">
                    <br><br>
                    
                
                    
                   
 



<table width="100%" border="0">
<link rel="stylesheet" href="table.css"> 
<tr width=100%>
<td  width="15%" align="left">වයස​<br> Age </td>
<td width="15%" align="left">එන්නත් වර්ගය​<br>Type of vaccine​ </td>
<td width="15%" align="left">දිනය​<br>Date </td>
<td  width="15%" align="left">ඛාණ්ඩ අංකය​<br>Batch No</td>
<td  width="15%" align="left">ප්‍රතිශක්තිකරණයේ අතුරු ආබාධ<br>Adverse effects following immunization </td>
<td  width="15%" align="left">බීසීජී කැළල<br>B.C.G.Scar​ </td></tr>
<tr width=100%><td  width="15%">උපතේදී<br> At Birth </td>
<td width="15%" >බී.සී.ජී.<br>B.C.G.​ </td>
<td width="15%">​<input type="date" name="date1" value="<?=$date1?>"> </td>
<td  width="15%">​<input type="num" name="num1" value="<?=$num1?>"></td>
<td  width="15%" >​<input type="text" name="test1" value="<?=$test1?>"></td>
<td  width="15%"><select name="bcg" id="bcg">
<option value="not done">---Select---</option>
            <option value="Yes" <?php if($bcg=="Yes") echo 'selected="selected"';?>>ඇත/Present</option>
      <option value="No" <?php if($bcg=="No") echo 'selected="selected"';?>>නැත/Absent</option>
    </select></td></tr></table>
            
<table width="100%" border="0">
<link rel="stylesheet" href="table.css"> 
<tr width=100%><td  width="15%" align="left"></td>
<td width="15%" align="left">බී.සී.ජී. දෙවන මාත්‍රාව​(මාස 2 වන විටත් කැළලක් නැත්නම් පමණි)<br>B.C.G. 2nd dose(If no scar even at 6 months)</td>
<td width="15%" align="left"><input type="date" name="date2" value="<?=$date2?>"> </td>
<td  width="15%" align="left"><input type="num" name="num2" value="<?=$num2?>"></td>
<td  width="30%" align="left"><input type="text" name="test2" value="<?=$test2?>"></td></tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css"> 
<tr width=100%>
<td  rowspan="3" width="15%" align="left"><h1>2 </h1>මාසය සම්පූර්ණ වූ විට​<br> months completed</td>
<td width="15%" align="left">ත්‍රිත්ව I  DPT 1</td>
<td  width="15%" align="left"><input type="date" name="date3" value="<?=$date3?>"> </td>
<td  width="15%" align="left"><input type="num" name="num3" value="<?=$num3?>"></td>
<td  width="30%" align="left"><input type="text" name="test3" value="<?=$test3?>"></td>
</tr>
<tr><td width="15%" align="left">පෝලියෝ 1 OPV 1</td><td width="15%" align="left"><input type="date" name="date4" value="<?=$date4?>"> </td><td  width="15%" align="left"><input type="num" name="num4" value="<?=$num4?>"></td><td  width="30%" align="left"><input type="text" name="test4" value="<?=$test4?>"></td></tr>
<tr><td width="15%" align="left">හෙපටයිටිස් බී 1  Hepatitis B1</td><td width="15%" align="left"><input type="date" name="date5" value="<?=$date5?>"> </td><td  width="15%" align="left"><input type="num" name="num5" value="<?=$num5?>"></td><td  width="30%" align="left"><input type="text" name="test5" value="<?=$test5?>"></td></tr>
<tr width=100%><td  rowspan="3" width="15%" align="left"><h1>4 </h1>මාසය සම්පූර්ණ වූ විට​<br> months completed</td><td width="15%" align="left">ත්‍රිත්ව 2  DPT 2</td><td  width="15%" align="left"><input type="date" name="date6" value="<?=$date6?>"> </td><td  width="15%" align="left"><input type="num" name="num6" value="<?=$num6?>"></td><td  width="30%" align="left"><input type="text" name="test6" value="<?=$test6?>"></td></tr>
<tr><td width="15%" align="left">පෝලියෝ 2 OPV 2</td><td width="15%" align="left"><input type="date" name="date7" value="<?=$date7?>"> </td><td  width="15%" align="left"><input type="num" name="num7" value="<?=$num7?>"></td><td  width="30%" align="left"><input type="text" name="test7" value="<?=$test7?>"></td></tr>
<tr><td width="15%" align="left">හෙපටයිටිස් බී 2  Hepatitis B2</td><td width="15%" align="left"><input type="date" name="date8" value="<?=$date8?>"> </td><td  width="15%" align="left"><input type="num" name="num8" value="<?=$num8?>"></td><td  width="30%" align="left"><input type="text" name="test8" value="<?=$test8?>"></td></tr>
<tr width=100%><td  rowspan="3" width="15%" align="left"><h1>6 </h1>මාසය සම්පූර්ණ වූ විට​<br> months completed</td><td width="15%" align="left">ත්‍රිත්ව 3  DPT 3</td><td  width="15%" align="left"><input type="date" name="date9" value="<?=$date9?>"> </td><td  width="15%" align="left"><input type="num" name="num9" value="<?=$num9?>"></td><td width="30%" align="left"><input type="text" name="test9" value="<?=$test9?>"></td></tr>
<tr><td width="15%" align="left">පෝලියෝ 3 OPV 3</td><td width="15%" align="left"><input type="date" name="date10" value="<?=$date10?>"> </td><td  width="15%" align="left"><input type="num" name="num10" value="<?=$num10?>"></td><td  width="30%" align="left"><input type="text" name="test10" value="<?=$test10?>"></td></tr>
<tr><td width="15%" align="left">හෙපටයිටිස් බී 3  Hepatitis B3</td><td width="15%" align="left"><input type="date" name="date11" value="<?=$date11?>"> </td><td  width="15%" align="left"><input type="num" name="num11" value="<?=$num11?>"></td><td  width="30%" align="left"><input type="text" name="test11" value="<?=$test11?>"></td></tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css"> 
<tr width=100%><td  rowspan="2" width="15%" align="left"><h1>6 </h1>මාසය සම්පූර්ණ වූ විට​<br> months completed</td><td width="15%" align="left">සරම්ප </td><td  width="15%" align="left"><input type="date" name="date12" value="<?=$date12?>"> </td><td  width="15%" align="left"><input type="num" name="num12" value="<?=$num12?>"></td><td  width="30%" align="left"><input type="text" name="test12" value="<?=$test12?>"></td></tr>
<tr><td width="15%" align="left">විටමින් A </td><td width="15%" align="left"><input type="date" name="date13" value="<?=$date13?>"> </td><td  width="15%" align="left"><input type="num" name="num13" value="<?=$num13?>"></td><td  width="30%" align="left"><input type="text" name="test13" value="<?=$test13?>"></td></tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css"> 
<tr width=100%><td  rowspan="3" width="15%" align="left"><h1>18</h1>මාසය සම්පූර්ණ වූ විට​<br> months completed</td><td width="15%" align="left">ත්‍රිත්ව 4  DPT 4</td><td width="15%" align="left"><input type="date" name="date14" value="<?=$date14?>"> </td><td  width="15%" align="left"><input type="num" name="num14" value="<?=$num14?>"></td><td width="30%" align="left"><input type="text" name="test14" value="<?=$test14?>"></td></tr>
<tr><td width="15%" align="left">පෝලියෝ 4 OPV 4</td><td width="15%" align="left"><input type="date" name="date15" value="<?=$date15?>"> </td><td  width="15%" align="left"><input type="num" name="num15" value="<?=$num15?>"></td><td  width="30%" align="left"><input type="text" name="test15" value="<?=$test15?>"></td></tr>
<tr><td width="15%" align="left">හෙපටයිටිස් බී 4  Hepatitis B4</td><td width="15%" align="left"><input type="date" name="date16" value="<?=$date16?>"> </td><td  width="15%" align="left"><input type="num" name="num16" value="<?=$num16?>"></td><td  width="30%" align="left"><input type="text" name="test16" value="<?=$test16?>"></td></tr>
</table>

<table width="100%" border="0">
<link rel="stylesheet" href="table.css"> 
<tr width=100%><td  rowspan="2" width="15%" align="left"><h1>3 </h1>අවුරුද්ද​ සම්පූර්ණ වූ විට​<br> months completed</td><td width="15%" align="left">සරම්ප රුබෙල්ලා </td><td width="15%" align="left"><input type="date" name="date17" value="<?=$date17?>"> </td><td  width="15%" align="left"><input type="num" name="num17" value="<?=$num17?>"></td><td  width="30%" align="left"><input type="text" name="test17" value="<?=$test17?>"></td></tr>
<tr><td width="15%" align="left">විටමින් A </td><td width="15%" align="left"><input type="date" name="date18" value="<?=$date18?>"> </td><td  width="15%" align="left"><input type="num" name="num18" value="<?=$num18?>"></td><td  width="30%" align="left"><input type="text" name="test18" value="<?=$test18?>"></td></tr>
<tr width=100%>
<td  rowspan="2" width="15%" align="left"><h1>5 </h1>අවුරුද්ද​ සම්පූර්ණ වූ විට​<br> months completed</td>
<td width="15%" align="left">ද්විත්ව​ </td>
<td  width="15%" align="left"><input type="date" name="date19" value="<?=$date19?>"> </td>
<td width="15%" align="left"><input type="num" name="num19" value="<?=$num19?>"></td>
<td  width="30%" align="left"><input type="text" name="test19" value="<?=$test19?>"></td></tr>

<tr>
<td width="15%" align="left">පෝලියෝ 5</td>
<td width="15%" align="left"><input type="date" name="date26" value="<?=$date26?>"> </td>
<td  width="15%" align="left"><input type="num" name="num26" value="<?=$num26?>"></td>
<td  width="30%" align="left"><input type="text" name="test26" value="<?=$test26?>"></td></tr>

<tr width=100%>
<td  rowspan="2" width="15%" align="left"><h1>10-14</h1>අවුරුද්ද​ සම්පූර්ණ වූ විට​<br> months completed</td>
<td width="15%" align="left">රුබෙල්ලා  </td>
<td  width="15%" align="left"><input type="date" name="date20" value="<?=$date20?>"> </td>
<td width="15%" align="left"><input type="num" name="num20" value="<?=$num20?>"></td>
<td  width="30%" align="left"><input type="text" name="test20" value="<?=$test20?>"></td></tr>
<tr><td width="15%" align="left">වැඩිහිටි පිටගැස්ම හා ඩිප්තීරියා </td><td width="15%" align="left"><input type="date" name="date21" value="<?=$date21?>"> </td><td  width="15%" align="left"><input type="num" name="num21" value="<?=$num21?>"></td><td  width="30%" align="left"><input type="text" name="test21" value="<?=$test21?>"></td></tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css"> 
<tr width=100%><td  rowspan="4" width="15%" align="left">ජපන් නිදිකර්පථප්‍රදාහය​<br> Japanese Encephalitis</td><td width="15%" align="left">ජ​.නි.ප්‍ර​.1 J E 1 </td><td width="15%" align="left"><input type="date" name="date22" value="<?=$date22?>"> </td><td  width="15%" align="left"><input type="num" name="num22" value="<?=$num22?>"></td><td  width="30%" align="left"><input type="text" name="test22" value="<?=$test22?>"></td></tr>
<tr><td width="15%" align="left">ජ​.නි.ප්‍ර​.2 J E 2</td><td width="15%" align="left"><input type="date" name="date23" value="<?=$date23?>"> </td><td  width="15%" align="left"><input type="num" name="num23" value="<?=$num23?>"></td><td  width="30%" align="left"><input type="text" name="test23" value="<?=$test23?>"></td></tr>
<tr><td width="15%" align="left">ජ​.නි.ප්‍ර​.3 J E 3</td><td width="15%" align="left"><input type="date" name="date24" value="<?=$date24?>"> </td><td  width="15%" align="left"><input type="num" name="num24" value="<?=$num24?>"></td><td  width="30%" align="left"><input type="text" name="test24" value="<?=$test24?>"></td></tr>
<tr><td width="15%" align="left">ජ​.නි.ප්‍ර​.4 J E 4</td><td width="15%" align="left"><input type="date" name="date25" value="<?=$date25?>"> </td><td  width="15%" align="left"><input type="num" name="num25" value="<?=$num25?>"></td><td  width="30%" align="left"><input type="text" name="test25" value="<?=$test25?>"></td></tr>
</table>
<br><center><input type="submit" class="link" name="update" style="margin-bottom: 50px; " value="Update"></center>
</div>
 </div>
</body>
</html>
