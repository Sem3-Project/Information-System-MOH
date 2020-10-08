<?php
require '../models/basic.model.php';
?>
<html>
    <head>
        <title>Investigations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/table.css">
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
<!-- <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width-device-width initial-scale=1.0">
    <title>Basic Details</title>
<link rel = "stylesheet" href ="../../public/css/BasicDetail.css">
 <style>//meka naa
    /* .idClass{
        width: 10cm;
        /* background-color:yellow; */
        /* padding: 6px 52px; */
        /* size="25"; */
    } 
 


</style>
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
</head> -->

<!-- <header>
<div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
<div class="logo">
		<h1>Medical Officer of Health Office</h1>
		<h3>Gampaha</h3>
	</div>
    <div class="topnav">
  
  <a href="../controllers/logout.php">Log out</a>
  <a href="home.php">Home</a>
  
  
</div>
	</div>
</header> -->

<body>

<div>
        <div class="caption-container1">
        <form action="BasicDetails_pag.php" method="post">
        <h2 class="title" align="center">ගර්භණී සටහන් පත/Pregnancy Record</h2>
        <div class="caption-container">
            <h3 >Search NIC :</h3>
        </div>
           

            <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id'];?>"><br><br>

                <input type="submit" class="link" name="search" value="Search"></center>

<!-- <form method="POST" action="BasicDetails_page.php"> -->
<!-- <h2>ගර්භණී සටහන් පත/Pregnancy Record</h2></br> -->
<!-- <div>
        <div class="caption-container1">
        <div class="caption-container">
            <h3 >Search NIC :</h3>
</div>
            <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id'];?>"><br><br>

<input type="submit" class="link" name="Search" value="Search"><br><br> -->
<!-- <input type="submit" name="Update" value="Update"><br><br> -->
<!-- <div class="caption-container"><h3 >ගර්භණී සටහන් පත/Pregnancy Record</h3></div> -->

<table >
        <tr>
            <td>
            <label>රුධිර ඝනය/Blood Group:</label>
                <select name="BloodGroup">
                    <option  selected hidden value=""></option>
                    <option value="O-" <?php if($_POST['BloodGroup']=="O-") echo 'selected="selected"'; ?>>O-</option>
                    <option value="B-" <?php if($_POST['BloodGroup']=="B-")echo 'selected="selected"'; ?>>B-</option>
                    <option value="A-" <?php if($_POST['BloodGroup']=="A-") echo 'selected="selected"'; ?>>A-</option>
                    <option value="AB-" <?php if($_POST['BloodGroup']=="AB-") echo 'selected="selected"'; ?>>AB-</option>
                    <option value="O+" <?php if($_POST['BloodGroup']=="O+") echo 'selected="selected"'; ?>>O+</option>
                    <option value="B+" <?php if($_POST['BloodGroup']=="B+") echo 'selected="selected"'; ?>>B+</option>
                    <option value="A+" <?php if($_POST['BloodGroup']=="A+") echo 'selected="selected"'; ?>>A+</option>
                    <option value="AB+" <?php if($_POST['BloodGroup']=="AB+") echo 'selected="selected"'; ?>>AB+</option>
                </select>
                
            </td>
            <!-- <td><br><br></td> -->
            <td>
            <label>ශරීර ස්කන්ධ  දර්ශකය/BMI:</label>
                <input type="text" name="BMI" maxlength="10" value=<?php if (isset($_POST['BMI'])) echo $_POST['BMI'];?>>
            </td>
            </tr>
            <tr>
            <td>
            <label>උස(සෙ.මී.)/Height(cm):</label>
                <input type="text" name="height" maxlength="10" value=<?php if (isset($_POST['height'])) echo $_POST['height'];?>>
            </td>
            <!-- <td><br><br></td> -->
            <td>
            <label>ආසාත්මිකතා /Allergies:</label>
            
                <input type="text" name="allergies" value=<?php if (isset($_POST['allergies'])) echo $_POST['allergies'];?>>
            </td>

            
 
        </tr>
    </table>
<br><br>
    <table>
        
        <tr>
            
            <td>
            <label>මවගේ නම/Name of the mother:</label>
            
                <input type="text" name="Name_of_the_mother"  value=<?php if (isset($_POST['Name_of_the_mother'])) echo $_POST['Name_of_the_mother'];?>>
            </td>

            <td>
            <label>රෝහල් සයනයේ නම/Name of the Hospital Clinic:</label>
            
                <input type="text" name="Name_of_the_Hospital_Clinic"  value=<?php if (isset($_POST['Name_of_the_Hospital_Clinic'])) echo $_POST['Name_of_the_Hospital_Clinic'];?>>
            </td>
            
        </tr>
  
        <tr>
            <td>
            <label>වයස/Age:</label>
            
                <input type="text" name="age" value=<?php if (isset($_POST['age'])) echo $_POST['age'];?>>
            </td>
            <td>
            <label>ප්‍රසව හා නරිවේධ විශේෂඥ වෛද්‍යවරයාගේ නම/<br>Name of the Consultant Obstetrician:</label>
            
                <input type="text" name="Name_of_the_Consultant_Obstetrician"  value=<?php if (isset($_POST['Name_of_the_Consultant_Obstetrician'])) echo $_POST['Name_of_the_Consultant_Obstetrician'];?>>
            </td>
        </tr>

        <tr>
        <td>
        <label>දුරකථන අංකය /TelePhone:</label>
        <input type="text" name="tele"  value=<?php if (isset($_POST['tele'])) echo $_POST['tele'];?>></td>
        </tr>
        
        <tr>
            <td>
                <label>පවුල් සෞඛ්‍ය සේවා නිලධාරී කොට්ඨාශය/Name of the field Clinic:</label>
                <input type="text" name="Name_of_the_field_Clinic"  value=<?php if (isset($_POST['Name_of_the_field_Clinic'])) echo $_POST['Name_of_the_field_Clinic'];?>>
            </td>
            <td>
                <label>ග්‍රාම නිලධාරී කොට්ඨාශය/Grama Niladari Division:</label>
                <input type="text" name="GramaNiladariDivision"  value=<?php if (isset($_POST['GramaNiladariDivision'])) echo $_POST['GramaNiladariDivision'];?>>
            </td>
        </tr>
</table>
<br><br>
<table>
        <tr>
            <td>
                <label>ලියාපදිංචි අංකය සහ දිනය/Registration No. and Date<br>(යෝග්‍යත පවුල් ලේඛනය/Eligible Family Register):</label>

                <input type="text" name="RegistrationNoEligibleFamilyRegister" value=<?php if (isset($_POST['RegistrationNoEligibleFamilyRegister'])) echo $_POST['RegistrationNoEligibleFamilyRegister'];?>>
                <input type="date" name="RegistrationDateEligibleFamilyRegister" value=<?php if (isset($_POST['RegistrationDateEligibleFamilyRegister'])) echo $_POST['RegistrationDateEligibleFamilyRegister'];?>>
            </td>
            <!-- <td><br><br></td>
            <td><br><br></td>
            <td><br><br></td>
            <td><br><br></td> -->
            <td>
                <label>ලියාපදිංචි අංකය සහ දිනය/Registration No. and Date<br>(ගර්භනී මව්වරුන්ගේ ලේඛනය/Pregnant mother's Register):</label>
                <input type="text" name="RegistrationNoPregnantmothersRegister"  value=<?php if (isset($_POST['RegistrationNoEligibleFamilyRegister'])) echo $_POST['RegistrationNoEligibleFamilyRegister'];?>>
                <input type="date" name="RegistrationDatePregnantmothersRegister" value=<?php if (isset($_POST['RegistrationNoEligibleFamilyRegister'])) echo $_POST['RegistrationNoEligibleFamilyRegister'];?>>
            </td>
        </tr>
    </table>
    <br><br>
<table>
    <tr><td><label>හදුනාගත් පුර්ව ප්‍රසව අවදානම් තත්ව/ රෝගී තත්ව/<br>Identified antenatal risk conditions & modifiers:</label></td></tr>
    <tr><td><input type="text" size=100% name="IdentifiedAntenatalRiskConditionsModifiers"  value=<?php if (isset($_POST['IdentifiedAntenatalRiskConditionsModifiers'])) echo $_POST['IdentifiedAntenatalRiskConditionsModifiers'];?>></td></tr>
</table>
    <br><br>
    <table style="width:80%;">
        <tr>
            <td>
                <label>ලේ ඥාතින් අතර විවාහය/Consanguinity:</label>
                <input type="text" name="consanguinity"  value=<?php if (isset($_POST['consanguinity'])) echo $_POST['consanguinity'];?>>

            </td>
        </tr>
    
        <tr>
        <td><label>රුබෙල්ලා ප්‍රතිශක්තිකරණය/Rubella Immunization:</label>
                
                <input type="text" name="RubellaImmunization"  value=<?php if (isset($_POST['RubellaImmunization'])) echo $_POST['RubellaImmunization'];?>>

            </td>
        </tr>

        <tr>
            <td>
                <label>පෙර ගර්භ සුව පිරික්සුම කලේද යන වග/Pre-pregnancy screening done:</label>
                <input type="text" name="PrePregnancyScreeningDone"  value=<?php if (isset($_POST['PrePregnancyScreeningDone'])) echo $_POST['PrePregnancyScreeningDone'];?>>
            </td>
        </tr>

        <tr>
            <td>
                <label>පෙර ගර්භ සුව පිරික්සුම කලේද යන වග/Pre conceptional Folic Acid:</label>
                <input type="text" name="PreconceptionalFolicAcid" value=<?php if (isset($_POST['PreconceptionalFolicAcid'])) echo $_POST['PreconceptionalFolicAcid'];?>>
            </td>
        </tr>

        <tr>
            <td>
                <label>සැලසුම් කල ගර්භනීභාවයක්ද යන වග/Planed pregnancy or not:</label>
                <input type="text" name="Planed_pregnancy_or_not"  value=<?php if (isset($_POST['Planed_pregnancy_or_not'])) echo $_POST['Planed_pregnancy_or_not'];?>>
            </td>
        </tr>

        <tr>
            <td>
                <label>මඳසරුභාවය පිළිබද ඉතිහාසය/History of subfertility:</label>
                <input type="text" name="Historyofsubfertility" value=<?php if (isset($_POST['Historyofsubfertility'])) echo $_POST['Historyofsubfertility'];?>>

            </td>
        </tr>

        <tr>
            <td>
                <label>අවසාන වරට භාවිතා කල පවුල් සැලසුම් ක්‍රමය/Family planing method last used</label>
                <input type="text" name="Family_planing_method_last_used" value=<?php if (isset($_POST['Family_planing_method_last_used'])) echo $_POST['Family_planing_method_last_used'];?>>

            </td>
        </tr>
    </table>
    <br><br>
    
    <div class="caption-container"><h3>වර්තමාන ගර්භ ඉතිහාසය/Present obstetric history</h3></div>
    <!-- <h2>වර්තමාන ගර්භ ඉතිහාසය/Present obstetric history</h2> -->
    <table style="width:80%;">
        <tr>
            <td>
                <labeL>කීවෙනි ගර්භයද/Gravidity:</labeL>
                <label>G:</label>
                <input type="text" name="G"  value=<?php if (isset($_POST['G'])) echo $_POST['G'];?>>
                <label>P:</label>
                <input type="text" name="P" value=<?php if (isset($_POST['P'])) echo $_POST['P'];?>>
                <label>C:</label>
                <input type="text" name="C" value=<?php if (isset($_POST['C'])) echo $_POST['C'];?>>
            </td>
        </tr>

        <tr>
            <td>
                <label>බාලම  ළමයාගේ වයස/Age of youngest Child</label>
                <input type="text" name="AgeOfYoungestChild"  value=<?php if (isset($_POST['AgeOfYoungestChild'])) echo $_POST['AgeOfYoungestChild'];?>>
            </td>
        </tr>
        <tr>
            <td>
                <label>අන්තිමට ක්‍රමවත්ව ඔසප් වූ දිනය/LRMP:</label>
                <input type="date" name="LRMP" value=<?php if (isset($_POST['LRMP'])) echo $_POST['LRMP'];?>>
            </td>
        </tr>
        <tr>
            <td>
                <label>බලාපොරොත්තු වූ ප්‍රසව දිනය/EDD:<br>(ති 40 සම්පුර්ණ වන දිනය/40 weeks completed)</label>
                <input type="date" name="EDD" value=<?php if (isset($_POST['EDD'])) echo $_POST['EDD'];?>>
            </td>
        </tr>

        <tr>
            <td>
                <label>US නිවරදී කල බලාපොරොත්තු ප්‍රසව දිනය /US corrected EDD<br>(To be filled by VOG/MO):</label>
                <input type="date" name="US_corrected_EDD" value=<?php if (isset($_POST['US_corrected_EDD'])) echo $_POST['US_corrected_EDD'];?>>
            </td>
        </tr>

        <tr>
            <td>
                <label>POA at dating Scan:</label>
                <input type="text" name="POA_at_dating_Scan" value=<?php if (isset($_POST['POA_at_dating_Scan'])) echo $_POST['POA_at_dating_Scan'];?>>
            </td>
        </tr>
        
        <tr>
            <td>
                <label>භ්‍රැණ චලන පළමුවෙන් දැණුනු දිනය/Date of Quickening:</label>
                <input type="text" name="Date_of_Quickening"  value=<?php if (isset($_POST['Date_of_Quickening'])) echo $_POST['Date_of_Quickening'];?>>
            </td>
        </tr>

        <tr>
            <td>
                <label>ලියාපදිංචි කරන විට ගර්භයට සති ගණන/POA at Registration:</label>
                <input type="text" name="POA_at_Registration"  value=<?php if (isset($_POST['POA_at_Registration'])) echo $_POST['POA_at_Registration'];?>>
            </td>
        </tr>

    </table>
    <br><br>

    <div>
        <input type="submit" class="link" style="margin-bottom: 50px; margin-right: 50px;" name="Update" value="Update"> 
         
    </div>

</form>
</body>

</html>
