<?php
require '../models/BasicDetails_model.php';
?>

<html>
<head>
<meta charset="UTF-8">
<title>Basic Details</title>
<link rel = "stylesheet" href ="../../public/css/BasicDetails.css">
<style>
    .idClass{
        width: 10cm;
        /* background-color:yellow; */
        padding: 6px 52px;
        /* size="25"; */
    }


</style>
</head>

<header>
<div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
<div class="logo">
		<h1>Medical Officer of Health Office</h1>
		<h3>Gampaha</h3>
	</div>
    <div class="topnav">
  
  <a href="login_page.php">Log out</a>
  <a href="home.php">Home</a>
  
  
</div>
	</div>
</header>

<body>


<form method="POST" action="BasicDetails_page.php">
<h2>ගර්භණී සටහන් පත/Pregnancy Record</h2></br>
<div class="idClass">
<input type="text" name="id" style="width: 800px; height: 50px ;font-size: 20px; " placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's id here" value="<?php echo($id);?>"><br><br>
</div>
<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>

<table >
        <tr>
            <td>
            <label>රුධිර ඝනය/Blood Group:</label>
                <select name="BloodGroup">
                    <option  selected hidden value=""></option>
                    <option value="O-" <?php if($BloodGroup=="O-") echo 'selected="selected"'; ?>>O-</option>
                    <option value="B-" <?php if($BloodGroup=="B-") echo 'selected="selected"'; ?>>B-</option>
                    <option value="A-" <?php if($BloodGroup=="A-") echo 'selected="selected"'; ?>>A-</option>
                    <option value="AB-" <?php if($BloodGroup=="AB-") echo 'selected="selected"'; ?>>AB-</option>
                    <option value="O+" <?php if($BloodGroup=="O+") echo 'selected="selected"'; ?>>O+</option>
                    <option value="B+" <?php if($BloodGroup=="B+") echo 'selected="selected"'; ?>>B+</option>
                    <option value="A+" <?php if($BloodGroup=="A+") echo 'selected="selected"'; ?>>A+</option>
                    <option value="AB+" <?php if($BloodGroup=="AB+") echo 'selected="selected"'; ?>>AB+</option>
                </select>
                
            </td>
            <td><br><br></td>
            <td>
            <label>ශරීර ස්කන්ධ  දර්ශකය/BMI:</label>
                <input type="text" name="BMI" maxlength="10" value="<?php echo($BMI);?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>උස(සෙ.මී.)/Height(cm):</label>
                <input type="text" name="height" maxlength="10" value="<?php echo($height);?>">
            </td>
            <td><br><br></td>
            <td>
            <label>ආසාත්මිකතා /Allergies:</label>
            
                <input type="text" name="allergies" value="<?php echo($allergies);?>">
            </td>

            
 
        </tr>
    </table>
<br><br>
    <table>
        
        <tr>
            
            <td>
            <label>මවගේ නම/Name of the mother:</label>
            
                <input type="text" name="Name_of_the_mother" size="50" value="<?php echo($Name_of_the_mother);?>">
            </td>

            <td>
            <label>රෝහල් සයනයේ නම/Name of the Hospital Clinic:</label>
            
                <input type="text" name="Name_of_the_Hospital_Clinic" size="50" value="<?php echo($Name_of_the_Hospital_Clinic);?>">
            </td>
            
        </tr>
  
        <tr>
            <td>
            <label>වයස/Age:</label>
            
                <input type="text" name="age" size="10" value="<?php echo($age);?>">
            </td>
            <td>
            <label>ප්‍රසව හා නරිවේධ විශේෂඥ වෛද්‍යවරයාගේ නම/<br>Name of the Consultant Obstetrician:</label>
            
                <input type="text" name="Name_of_the_Consultant_Obstetrician" size="50" value="<?php echo($Name_of_the_Consultant_Obstetrician);?>">
            </td>
        </tr>

        <tr>
        <td>
        <label>දුරකථන අංකය /TelePhone:</label>
        <input type="text" name="tele" size="10" value="<?php echo($tele);?>"></td>
        </tr>
        
        <tr>
            <td>
                <label>පවුල් සෞඛ්‍ය සේවා නිලධාරී කොට්ඨාශය/Name of the field Clinic:</label>
                <input type="text" name="Name_of_the_field_Clinic" size=50 value="<?php echo($Name_of_the_field_Clinic);?>">
            </td>
            <td>
                <label>ග්‍රාම නිලධාරී කොට්ඨාශය/Grama Niladari Division:</label>
                <input type="text" name="GramaNiladariDivision" size=50 value="<?php echo($GramaNiladariDivision);?>">
            </td>
        </tr>
</table>
<br><br>
<table>
        <tr>
            <td>
                <label>ලියාපදිංචි අංකය සහ දිනය/Registration No. and Date<br>(යෝග්‍යත පවුල් ලේඛනය/Eligible Family Register):</label>

                <input type="text" name="RegistrationNoEligibleFamilyRegister" size=10 value="<?php echo($RegistrationNoEligibleFamilyRegister);?>">
                <input type="date" name="RegistrationDateEligibleFamilyRegister" value="<?php echo($RegistrationDateEligibleFamilyRegister);?>">
            </td>
            <td><br><br></td>
            <td><br><br></td>
            <td><br><br></td>
            <td><br><br></td>
            <td>
                <label>ලියාපදිංචි අංකය සහ දිනය/Registration No. and Date<br>(ගර්භනී මව්වරුන්ගේ ලේඛනය/Pregnant mother's Register):</label>
                <input type="text" name="RegistrationNoPregnantmothersRegister" size=10 value="<?php echo($RegistrationNoPregnantmothersRegister);?>">
                <input type="date" name="RegistrationDatePregnantmothersRegister" value="<?php echo($RegistrationDatePregnantmothersRegister);?>">
            </td>
        </tr>
    </table>
    <br><br>

    <label>හදුනාගත් පුර්ව ප්‍රසව අවදානම් තත්ව/ රෝගී තත්ව/<br>Identified antenatal risk conditions & modifiers:</label><br>
    <input type="text" name="IdentifiedAntenatalRiskConditionsModifiers" size=100 value="<?php echo($IdentifiedAntenatalRiskConditionsModifiers);?>">
<br><br>
    <table>
        <tr>
            <td>
                <label>ලේ ඥාතින් අතර විවාහය/Consanguinity:</label>
                <input type="text" name="consanguinity"  value="<?php echo($consanguinity);?>">

            </td>
        </tr>
    </table>
    <table>
        <tr>
        <td><label>රුබෙල්ලා ප්‍රතිශක්තිකරණය/Rubella Immunization:</label></td>
            <td>
                
                <input type="text" name="RubellaImmunization"  value="<?php echo($RubellaImmunization);?>">

            </td>
        </tr>
</table>

<table>
        <tr>
            <td>
                <label>පෙර ගර්භ සුව පිරික්සුම කලේද යන වග/Pre-pregnancy screening done:</label>
                <input type="text" name="PrePregnancyScreeningDone"  value="<?php echo($PrePregnancyScreeningDone);?>">
            </td>
        </tr>
</table>
<table>
        <tr>
            <td>
                <label>පෙර ගර්භ සුව පිරික්සුම කලේද යන වග/Pre conceptional Folic Acid:</label>
                <input type="text" name="PreconceptionalFolicAcid"  value="<?php echo($PreconceptionalFolicAcid);?>">
            </td>
        </tr>
</table>
<table>
        <tr>
            <td>
                <label>සැලසුම් කල ගර්භනීභාවයක්ද යන වග/Planed pregnancy or not:</label>
                <input type="text" name="Planed_pregnancy_or_not"  value="<?php echo($Planed_pregnancy_or_not);?>">
            </td>
        </tr>
</table>
<table>
        <tr>
            <td>
                <label>මඳසරුභාවය පිළිබද ඉතිහාසය/History of subfertility:</label>
                <input type="text" name="Historyofsubfertility" value="<?php echo($Historyofsubfertility);?>">

            </td>
        </tr>

        <tr>
            <td>
                <label>අවසාන වරට භාවිතා කල පවුල් සැලසුම් ක්‍රමය/Family planing method last used</label>
                <input type="text" name="Family_planing_method_last_used" value="<?php echo($Family_planing_method_last_used);?>">

            </td>
        </tr>
    </table>
    <br><br>
    

    <h2>වර්තමාන ගර්භ ඉතිහාසය/Present obstetric history</h2>
    <table>
        <tr>
            <td>
                <labeL>කීවෙනි ගර්භයද/Gravidity:</labeL>
                <label>G:</label>
                <input type="text" name="G" size=10 value="<?php echo($G);?>">
                <label>P:</label>
                <input type="text" name="P" size=10 value="<?php echo($P);?>">
                <label>C:</label>
                <input type="text" name="C" size=10 value="<?php echo($C);?>">
            </td>
        </tr>

        <tr>
            <td>
                <label>බාලම  ළමයාගේ වයස/Age of youngest Child</label>
                <input type="text" name="AgeOfYoungestChild" size=10 value="<?php echo($AgeOfYoungestChild);?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>අන්තිමට ක්‍රමවත්ව ඔසප් වූ දිනය/LRMP:</label>
                <input type="date" name="LRMP" value="<?php echo($LRMP);?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>බලාපොරොත්තු වූ ප්‍රසව දිනය/EDD:<br>(ති 40 සම්පුර්ණ වන දිනය/40 weeks completed)</label>
                <input type="date" name="EDD" value="<?php echo($EDD);?>">
            </td>
        </tr>

        <tr>
            <td>
                <label>US නිවරදී කල බලාපොරොත්තු ප්‍රසව දිනය /US corrected EDD<br>(To be filled by VOG/MO):</label>
                <input type="date" name="US_corrected_EDD" value="<?php echo($US_corrected_EDD);?>">
            </td>
        </tr>

        <tr>
            <td>
                <label>POA at dating Scan:</label>
                <input type="text" name="POA_at_dating_Scan" size=10 value="<?php echo($POA_at_dating_Scan);?>">
            </td>
        </tr>
        
        <tr>
            <td>
                <label>භ්‍රැණ චලන පළමුවෙන් දැණුනු දිනය/Date of Quickening:</label>
                <input type="text" name="Date_of_Quickening" size=10 value="<?php echo($Date_of_Quickening);?>">
            </td>
        </tr>

        <tr>
            <td>
                <label>ලියාපදිංචි කරන විට ගර්භයට සති ගණන/POA at Registration:</label>
                <input type="text" name="POA_at_Registration" size=10 value="<?php echo($POA_at_Registration);?>">
            </td>
        </tr>

    </table>
    <br><br>

    <div>
        <input type="submit" name="Update" value="Update"> 
         
    </div>

</form>
</body>

</html>