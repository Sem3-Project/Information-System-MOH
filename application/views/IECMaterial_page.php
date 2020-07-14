<?php
require '../models/IECMaterial_model.php';
?>

<html>
<head>
<meta charset="UTF-8">
<title>IEC Material</title>
<link rel = "stylesheet" href ="../../public/css/IECMaterial.css">
</head>


<header>
<div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
<div class="logo">
		<h1>Medical Officer of Health Office</h1>
		<h3>Gampaha</h3>
	</div>
    <div class="topnav">
  <a href="home.php">Log out</a>
  <a href="home.php">Home</a>
  
</div>
	</div>
</header>

<style> 
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<body>
<form method="POST" action="IECMaterial.php">
<input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's id here" value="<?php echo($id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>

<label>ප්‍රසූත සහයිකාව පිළිබද දැනුවත් කිරීම/Companion of Choice at Labour Discussed:</label>
<input type="Date" name="Companion"  value="<?php echo $Companion;?>"><br><br>

<table style="width:80%">
    <tr> 
        <td><label>උපත සහ හදිසි අවස්ථාවන් සදහා සුදන්වීමේ සැලැස්ම /Birth and Emergency prepared plan</label></td>
        <td><label>ප්‍රසුතියේදී /Delivery</label></td>
        <td><label>හදිසි අවස්ථාවකදී /In an emergency</label></td>
    </tr>

    <tr> 
        <td><label>යාමට බලාපොරොත්තුවන රෝහල/Intended Hospital</label></td>
        <td><input type="text" name="Intended_Hospital_Delivery" value="<?php echo($Intended_Hospital_Delivery);?>"></td>
        <td><input type="text" name="Intended_Hospital_Emergency" value="<?php echo($Intended_Hospital_Emergency);?>"></td>
    </tr>

    <tr> 
        <td><label>ප්‍රවාහන ආකාරය/Mode of Transport</label></td>
        <td><input type="text" name="Mode_of_Transport_Delivery" value="<?php echo($Mode_of_Transport_Delivery);?>"></td>
        <td><input type="text" name="Mode_of_Transport_Emergency" value="<?php echo($Mode_of_Transport_Emergency);?>"></td>
    </tr>

    <tr> 
        <td><label>ඒ සදහා දළ වියදම්/Average cost</label></td>
        <td><input type="text" name="Average_cost_Delivery" value="<?php echo($Average_cost_Delivery);?>"></td>
        <td><input type="text" name="Average_cost_Emergency" value="<?php echo($Average_cost_Emergency);?>"></td>
    </tr>

    <tr> 
        <td><label>නිවසේ සිට ඇති දුර/Distance from Home</label></td>
        <td><input type="text" name="Distance_from_Home_Delivery" value="<?php echo($Distance_from_Home_Delivery);?>"></td>
        <td><input type="text" name="Distance_from_Home_Emergency" value="<?php echo($Distance_from_Home_Emergency);?>"></td>
    </tr>

    <tr> 
        <td><label>ලග වීමට ගතවන කාලය/Time taken to reach</label></td>
        <td><input type="text" name="Time_taken_to_reach_Delivery" value="<?php echo($Time_taken_to_reach_Delivery);?>"></td>
        <td><input type="text" name="Time_taken_to_reach_Emergency" value="<?php echo($Time_taken_to_reach_Emergency);?>"></td>
    </tr>
    
    </table>
    <br><br>

    <table style="width:20%">
    <tr>
        <td><label>සැසිය/Session</label></td>
        <td><label>දිනය/Date</label></td>
        <td><label>ස්වාමි පුරුෂයා/Husband</label></td>
        <td><label>භාර්යාව/wife</label></td>
        <td><label>වෙනත්/Other</label></td>
    </tr>
    <tr>
        <td><label>1st T</label></td>
        <td><input type="Date" name="first_date" value="<?php echo($first_date);?>"></td>
        <td><input type="text" name="first_Husband"value="<?php echo($first_Husband);?>"></td>
        <td><input type="text" name="first_wife" value="<?php echo($first_wife);?>"></td>
        <td><input type="text" name="first_Other" value="<?php echo($first_Other);?>"></td>
    </tr>
    <tr>
        <td><label>2nd T</label></td>
        <td><input type="Date" name="sec_date" value="<?php echo($sec_date);?>"></td>
        <td><input type="text" name="sec_Husband" value="<?php echo($sec_Husband);?>"></td>
        <td><input type="text" name="sec_wife" value="<?php echo($sec_wife);?>"></td>
        <td><input type="text" name="sec_Other" value="<?php echo($sec_Other);?>"></td>
    </tr>
    <tr>
        <td><label>3rd T</label></td>
        <td><input type="Date" name="third_date" value="<?php echo($third_date);?>"></td>
        <td><input type="text" name="third_Husband" value="<?php echo($third_Husband);?>"></td>
        <td><input type="text" name="third_wife" value="<?php echo($third_wife);?>"></td>
        <td><input type="text" name="third_Other" value="<?php echo($third_Other);?>"></td>
    </tr>

    
    
    </table>
    <br><br>

    </table>

    <h2>තොරතුරු අධ්‍යාපනය සහ සන්නිවෙධනය සදහා වූ පොත්/IEC material</h2>
    <table>
    <tr>
        <td><label>පුර්ව ප්‍රසව සමය පිළිබද පොත්</label></td>
        <td><input type="Date" name="pre_pregnancy_book" value="<?php echo($pre_pregnancy_book);?>"></td>
    </tr>

    <tr>
        <td><label>මව්කිරි දීම පිළිබද පොත්</label></td>
        <td><input type="Date" name="Feeding_breastmilk_book" value="<?php echo($Feeding_breastmilk_book);?>"></td>
    </tr>
    <tr>
        <td><label>මුල් ළමා විය සංවර්ධනය පිළිබද පොත්</label></td>
        <td><input type="Date" name="pre_childhood_book" value="<?php echo($pre_childhood_book);?>"></td>
    </tr>
    <tr>
        <td><label>පව්ල් සැලසුම් ක්‍රම පිළිබධ පත්‍රිකාව</label></td>
        <td><input type="Date" name="family_planing_book" value="<?php echo($family_planing_book);?>"></td>
    </tr>
    </table>
    <br><br>

    <h2>පව්ල් සෞඛ්‍ය නිලධාරිනිය පැමිණෙන දිනය</h2>
    <table style="width:80%">
    <tr>
        <td><input type="Date" name="d1" value="<?php echo($d1);?>"></td> 
        <td><input type="Date" name="d2" value="<?php echo($d2);?>"></td>
        <td><input type="Date" name="d3" value="<?php echo($d3);?>"></td></tr>
        <tr><td><input type="Date" name="d4" value="<?php echo($d4);?>"></td>
        <td><input type="Date" name="d5" value="<?php echo($d5);?>"></td>
        <td><input type="Date" name="d6" value="<?php echo($d6);?>"></td>
    </tr>

    <tr>
        <td><input type="Date" name="d7" value="<?php echo($d7);?>"></td> 
        <td><input type="Date" name="d8" value="<?php echo($d8);?>"></td>
        <td><input type="Date" name="d9" value="<?php echo($d9);?>"></td></tr>
        <tr><td><input type="Date" name="d10" value="<?php echo($d10);?>"></td>
        <td><input type="Date" name="d11" value="<?php echo($d11);?>"></td>
        <td><input type="Date" name="d12" value="<?php echo($d12);?>"></td>
    </tr>

    
    </table>

    <h2>සායනයට පැමිණිය යුතු දිනය</h2>
    <table>
    
    <tr>
        <td><input type="Date" name="cd1" value="<?php echo($cd1);?>"></td> 
        <td><input type="Date" name="cd2" value="<?php echo($cd2);?>"></td>
        <td><input type="Date" name="cd3" value="<?php echo($cd3);?>"></td></tr>
        <tr><td><input type="Date" name="cd4" value="<?php echo($cd4);?>"></td>
        <td><input type="Date" name="cd5" value="<?php echo($cd5);?>"></td>
        <td><input type="Date" name="cd6" value="<?php echo($cd6);?>"></td>
    </tr>

    <tr>
        <td><input type="Date" name="cd7" value="<?php echo($cd7);?>"></td> 
        <td><input type="Date" name="cd8" value="<?php echo($cd8);?>"></td>
        <td><input type="Date" name="cd9" value="<?php echo($cd9);?>"></td></tr>
        <tr><td><input type="Date" name="cd10" value="<?php echo($cd10);?>"></td>
        <td><input type="Date" name="cd11" value="<?php echo($cd11);?>"></td>
        <td><input type="Date" name="cd12" value="<?php echo($cd12);?>"></td>
    </tr>
    </table>

    <h2>පව්ල් සැලසුම්/Family Planning</h2>

    <table>

    <tr>
        <td><label>උපදේශනය ලබාදුන් දිනය/Date of counselling</label></td>
        <td><input type="Date" name="Conselling_date" value="<?php echo($Conselling_date);?>"></td>
    </tr>

    <tr>
        <td><label>තෝරාගත් ක්‍රමය/chosen method</label></td>
        <td><select name="chosen_method">
                    <option  selected hidden value=""></option>
                    <option value="T" <?php if($chosen_method=="T") echo 'selected="selected"'; ?>>T</option>
                    <option value="PL" <?php if($chosen_method=="PL") echo 'selected="selected"'; ?>>PL</option>
                    <option value="L" <?php if($chosen_method=="L") echo 'selected="selected"'; ?>>L</option>
                    <option value="IP" <?php if($chosen_method=="IP") echo 'selected="selected"'; ?>>IP</option>
                    <option value="N" <?php if($chosen_method=="N") echo 'selected="selected"'; ?>>N</option>
                    <option value="P" <?php if($chosen_method=="P") echo 'selected="selected"'; ?>>P</option>
                    <option value="C" <?php if($chosen_method=="C") echo 'selected="selected"'; ?>>C</option>
                </select></td>
    </tr>

    <tr>
        <td><label>නැතිනම් හේතුව/Reason for not using a method</label></td>
        <td><input type="text" name="reson_not_method" value="<?php echo($reson_not_method);?>"></td>
    </tr>

    <tr>
        <td><label>කැමැත්ත දීමේ පත්‍රිකාව අත්සන් කල දිනය/sConsent form signed date</label></td>
        <td><input type="Date" name="Consent_form_date" value="<?php echo($Consent_form_date);?>"></td>
    </tr>
    
    </table>
    <br><br>

    <div>
        <input type="submit" name="Insert" value="Save"> 
         
    </div>

</form>
</body>

</html>