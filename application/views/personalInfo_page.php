<?php
require '../models/personalInfo.model.php';
?>

<!DOCTYPE html>
<html>
<head>
        <title>Personal Information</title>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm.css">
    </head>
<head>
        <body>
            <div class="hero-image">
                <img src="../../public/images/logo.png" class="logo-image"/>
                <img src="../../public/images/line.jpg" class="line-image"/>
                <a href="login_test.php"><img src="../../public/images/logout.png" class="logout-image"></a>
                <a href="newHome.php"><img src="../../public/images/home.png" class="home-image"></a>
                <div class="hero-text">
                    <h1 style="font-size:25px">Office of the Medical Officer of Health</h1>
                    <h3 style="font-size:25px">Gampaha</h3>
                </div>
            </div>
</body>
</head>

    
    <body>
    <form action="personalInfo_page.php" method="post" >
      
    
        <div>
        <div class="caption-container1">
        <div class="caption-container"><h3 >පෞද්ගලික තොරතුරු / Personal Information</h3></div>

        <div class="caption-container">
            <h3 >Search NIC :</h3>
        </div>
            <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id'];?>"><br><br>

                <input type="submit" class="link" name="search" value="Search"></center>
        
        <!--table for personal information-->
        
        <table style="width:100% ;" >
        
        <tr>
            <th></th>
            <th >භාර්යාව / Wife</th>
            <th >ස්වාමිපුරුෂයා / Husband</th>
        </tr>

        <tr>
            <td>වයස / Age</td>
            <td><input type ="number" name="wAge" value="<?php if (isset($_POST['wAge'])) echo $_POST['wAge'];?>"></td>
            <td><input type ="number" name="hAge" value="<?php if (isset($_POST['hAge'])) echo $_POST['hAge'];?>"></td>
        </tr>
        <tr>
            <td>අධ්‍යාපන මට්ටම / Highest Level oF Education</td>
            <td><textarea name= "wEducation" rows="2" ><?php if (isset($_POST['wEducation'])) echo $_POST['wEducation'];?></textarea></td>
            <td><textarea name= "hEducation" rows="2" ><?php if (isset($_POST['hEducation'])) echo $_POST['hEducation'];?></textarea></td>
        </tr>
        <tr>
            <td> රැකියාව / Occupation</td>
            <td><textarea name= "wOccupation" rows="3"  ><?php if (isset($_POST['wOccupation'])) echo $_POST['wOccupation'];?></textarea></td>
            <td><textarea name= "hOccupation" rows="3"  ><?php if (isset($_POST['hOccupation'])) echo $_POST['hOccupation'];?></textarea></td>
        </tr>
   
    </table>
    
        <!--table for Family History-->
        <div class="caption-container"><h3>පවුලේ රෝග ඉතිහාසය / Family History</h3></div>
        <table style="width:100%;"   >
        <tr>
            <th colspan="2">රෝග තත්වය / Condition</th>
            
        </tr>
        <tr>
            <td style="width:40%;">දියවැඩියාව / Diabetes Mellitus  </td>
                
            <td><select id="fhDiabetes" name="fhDiabetes" style="width: 100px; height:30px;" >
                <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['fhDiabetes']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['fhDiabetes']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
    
        </tr>
        <tr>
            <td>අධි රුධිර පීඩනය / Hypertension</td>
            <td><select id="fhHypertension" name="fhHypertension" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['fhHypertension']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['fhHypertension']=="No") echo 'selected="selected"';?>>No</option>

            </select>
            </td>        
        </tr>
        <tr>
            <td>රුධිරය ආශ්‍රිත රෝග තත්ව / Haematological diseases</td>
            <td><select id="fhHaematologic" name="fhHaematologic" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['fhHaematologic']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['fhHaematologic']=="No") echo 'selected="selected"';?>>No</option>

                </select>
            </td>
        </tr>

        <tr>
            <td >බහු දරු උපත් / Twin(Multiple Pregnancies)</td>
            <td><select id="fhTwin" name="fhTwin" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['fhTwin']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['fhTwin']=="No") echo 'selected="selected"';?>>No</option>


                </select>
            </td>
        </tr>
        <tr>
            <td >වෙනත් (සඳහන් කරන්න) / Others (specify)</td>
            <td><textarea name="fhOthers" rows="2" cols="100" ><?php if (isset($_POST['fhOthers'])) echo $_POST['fhOthers'];?></textarea></td>
        </tr>
       
    </table>

    <!--tables for Medical/Surgical History -->
    <div class="caption-container"><h3>කායික/ශල්‍ය රෝග ඉතිහාසය / Medical/Surgical History</h3></div>

    <table style="float:left; width:47%; ">
       
        
        <tr>
            <th colspan="2">රෝග තත්වය / Condition</th>
        </tr>
        <tr>
            <td style="width:80%">දියවැඩියාව / Diabetes </td>
            <td><select id="shDiabetes" name="shDiabetes" style="width: 100%; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shDiabetes']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shDiabetes']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        <tr>
            <td>අධි රුධිර පීඩනය / Hypertension</td>
            <td><select id="shHypertension" name="shHypertension" style="width: 100%; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shHypertension']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shHypertension']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        <tr>
            <td>හෘද රෝග තත්ව / Cardiac Diseases</td>
            <td><select id="shCardiac" name="shCardiac" style="width: 100%; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shCardiac']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shCardiac']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>

        <tr>
            <td >වකුගඩු රෝග තත්ව / Renal Diseasea</td>
            <td><select id="shRenal" name="shRenal" style="width: 100%; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shRenal']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shRenal']=="No") echo 'selected="selected"';?>>No</option>

                </select> </td>
        </tr>
        <tr>
            <td >අක්මා රෝග තත්ව / Hepatic Diseasea</td>
            <td><select id="shHepatic" name="shHepatic" style="width: 100%; height:30px;">

            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shHepatic']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shHepatic']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
            <tr>
                <td >මානසික රෝග තත්ව / Psychiatric Illnesses</td>
                <td><select id="shPsychiatric" name="shPsychiatric" style="width: 100%; height:30px;">
                <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shPsychiatric']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shPsychiatric']=="No") echo 'selected="selected"';?>>No</option>

                    </select></td>
            </tr>
        </tr>
    </table>
    
  
    <table style="float:right; width:47%; margin-bottom:30px;">
        
        <tr>
            <th colspan="2">රෝග තත්වය / Condition</th>
        </tr>
        <tr>
            <td style="width:80%">අපස්මාරය / Epilepsy</td>
            <td><select id="shEpilepsy" name="shEpilepsy" style="width: 100%; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shEpilepsy']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shEpilepsy']=="No") echo 'selected="selected"';?>>No</option>


                </select></td>
        </tr>
        <tr>
            <td>පිළිකා රෝග තත්ව / Malignancies</td>
            <td><select id="shMalignancies" name="shMalignancies" style="width: 100%; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shMalignancies']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shMalignancies']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        <tr>
            <td>රුධිරය ආශ්‍රිත රෝග තත්ව / Haematological Diseases</td>
            <td><select id="shHaematological" name="shHaematological" style="width: 100%; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shHaematological']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shHaematological']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>

        <tr>
            <td >ක්ෂය රෝගය / Tuberculosis</td>
            <td><select id="shTuberculosis" name="shTuberculosis"style="width: 100%; height:30px;" >
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shTuberculosis']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shTuberculosis']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        <tr>
            <td >තයිරොයිඩ් ග්‍රන්ථිය ආශ්‍රිත රෝග තත්ව / Thyroid Diseasea</td>
            <td><select id="shThyroid" name="shThyroid" style="width: 100%; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shThyroid']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shThyroid']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        <tr>
            <td >ඇදුම / Bronchial Asthma</td>
            <td><select id="shBronchial" name="shBronchial" style="width: 100%; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($_POST['shBronchial']=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($_POST['shBronchial']=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        </tr>
    </table>


    <table style="float:right; width:100%; ">
    
        <tr>
            <th colspan="2">රෝග තත්වය / Condition</th>
        </tr>
        <tr>
            <td style="width:60%">පෙර ගැඹුරු ශිරා ශ්‍යානි තත්ව / Previous DVT</td>
            <td><textarea name="shDVT" rows="2" cols="70"  ><?php if (isset($_POST['shDVT'])) echo $_POST['shDVT'];?></textarea></td>
        </tr>
        <tr>
            <td>සිසේරියන් සැත්කම හැරුණු විට කර ඇති අනෙක් සැත්කම් / Surgeries other than LSCS</td>
            <td><textarea name="shSurgeries" rows="3" cols="70" ><?php if (isset($_POST['shSurgeries'])) echo $_POST['shSurgeries'];?></textarea></td>
        </tr>
        <tr>
            <td>වෙනත් (සඳහන් කරන්න) / Other (Specify)</td>
            <td><textarea name="shOther" rows="3" cols="70" ><?php if (isset($_POST['shOther'])) echo $_POST['shOther'];?></textarea></td>
        </tr>

        <tr>
            <td >සමාජීය කේත අංකය / Social Z Score</td>
            <td><textarea name="shScore" rows="1" cols="70" ><?php if (isset($_POST['shScore'])) echo $_POST['shScore'];?></textarea></td>
        </tr>
        
    </table>

    

        <table style="width:100%;margin-top: 110px; margin-bottom:50px;">
        <caption class="caption-container"><h3>පෙර ගර්භ ඉතිහාසය / Past Obsteric History</h3></caption>
        <tr>
            <th style="width:10%;">ගර්භණී භාවය<br>Pregnancy</th>
            <th style="width:15%;">පූර්ව ප්‍රසව සංකූලතා<br>Antenatal Complications</th>
            <th style="width:10%;">ප්‍රසූතිය සිදුවූ ස්ථානය සහ ආකාරය<br>Place & Mode of Delivery</th>
            <th style="width:5%;">ප්‍රතිඵලය<br>Outcome</th>
            <th style="width:10%;">උපත් බර (ග්‍රෑම්)<br>Birth Weight(g)</th>
            <th style="width:15%;">පසු ප්‍රසව සංකූලතා<br>Postnatal Complication (Specify)</th>
            <th style="width:5%;">ස්ත්‍රී/පුරුෂ භාවය සහ වයස<br>Sex and Age</th>
        </tr>
        <tr>
            <td style="text-align: center;">G1</td>
            <td><textarea name="poGoneAc" rows="2" cols="25" ><?php if (isset($_POST['poGoneAc'])) echo $_POST['poGoneAc'];?></textarea></td>
            <td><textarea name="poGonePm" rows="2" cols="20"><?php if (isset($_POST['poGonePm'])) echo $_POST['poGonePm'];?></textarea></td>
            <td><textarea name="poGoneOut" rows="2" cols="8" ><?php if (isset($_POST['poGoneOut'])) echo $_POST['poGoneOut'];?></textarea></td>
            <td><input type="number" name="poGoneW" style="width:90%;" value="<?php if (isset($_POST['poGoneW'])) echo $_POST['poGoneW'];?>"></td>
            <td><textarea name="poGonePc" rows="2" cols="25" ><?php if (isset($_POST['poGonePc'])) echo $_POST['poGonePc'];?></textarea></td>
            <td><textarea name="poGoneSa" rows="2" cols="10" ><?php if (isset($_POST['poGoneSa'])) echo $_POST['poGoneSa'];?></textarea></td>
        </tr>
        <tr>
            <td style="text-align: center;">G2</td>
            <td><textarea name="poGtwoAc" rows="2" cols="25" ><?php if (isset($_POST['poGtwoAc'])) echo $_POST['poGtwoAc'];?></textarea></td>
            <td><textarea name="poGtwoPm" rows="2" cols="20" ><?php if (isset($_POST['poGtwoPm'])) echo $_POST['poGtwoPm'];?></textarea></td>
            <td><textarea name="poGtwoOut" rows="2" cols="8" ><?php if (isset($_POST['poGtwoOut'])) echo $_POST['poGtwoOut'];?></textarea></td>
            <td><input type="number" name="poGtwoW" style="width:90%;" value="<?php if (isset($_POST['poGtwoW'])) echo $_POST['poGtwoW'];?>"></td>
            <td><textarea name="poGtwoPc" rows="2" cols="25" ><?php if (isset($_POST['poGtwoPc'])) echo $_POST['poGtwoPc'];?></textarea></td>
            <td><textarea name="poGtwoSa" rows="2" cols="10" ><?php if (isset($_POST['poGtwoSa'])) echo $_POST['poGtwoSa'];?></textarea></td>
        </tr>
        <tr>
            <td style="text-align: center;">G3</td>
            <td><textarea name="poGthAc" rows="2" cols="25" ><?php if (isset($_POST['poGthAc'])) echo $_POST['poGthAc'];?></textarea></td>
            <td><textarea name="poGthPm" rows="2" cols="20" ><?php if (isset($_POST['poGthPm'])) echo $_POST['poGthPm'];?></textarea></td>
            <td><textarea name="poGthOut" rows="2" cols="8" ><?php if (isset($_POST['poGthOut'])) echo $_POST['poGthOut'];?></textarea></td>
            <td><input type="number" name="poGthW" style="width:90%;" value="<?php if (isset($_POST['poGthW'])) echo $_POST['poGthW']?>"></td>
            <td><textarea name="poGthPc" rows="2" cols="25" ><?php if (isset($_POST['poGthPc'])) echo $_POST['poGthPc'];?></textarea></td>
            <td><textarea name="poGthSa" rows="2" cols="10" ><?php if (isset($_POST['poGthSa'])) echo $_POST['poGthSa'];?></textarea></td>
        </tr>

        <tr>
            <td style="text-align: center;">G4</td>
            <td><textarea name="poGfoAc" rows="2" cols="25" ><?php if (isset($_POST['poGfoAc'])) echo $_POST['poGfoAc'];?></textarea></td>
            <td><textarea name="poGfoPm" rows="2" cols="20" ><?php if (isset($_POST['poGfoPm'])) echo $_POST['poGfoPm'];?></textarea></td>
            <td><textarea name="poGfoOut" rows="2" cols="8" ><?php if (isset($_POST['poGfoOut'])) echo $_POST['poGfoOut'];?></textarea></td>
            <td><input type="number" name="poGfoW" style="width:90%;" value="<?php if (isset($_POST['poGfoW'])) echo $_POST['poGfoW'];?>"></td>
            <td><textarea name="poGfoPc" rows="2" cols="25" ><?php if (isset($_POST['poGfoPc'])) echo $_POST['poGfoPc'];?></textarea></td>
            <td><textarea name="poGfoSa" rows="2" cols="10"><?php if (isset($_POST['poGfoSa'])) echo $_POST['poGfoSa'];?></textarea></td>
        </tr>
        <tr>
            <td style="text-align: center;">G5</td>
            <td><textarea name="poGfiAc" rows="2" cols="25" ><?php if (isset($_POST['poGfiAc'])) echo $_POST['poGfiAc'];?></textarea></td>
            <td><textarea name="poGfiPm" rows="2" cols="20" ><?php if (isset($_POST['poGfiPm'])) echo $_POST['poGfiPm'];?></textarea></td>
            <td><textarea name="poGfiOut" rows="2" cols="8" ><?php if (isset($_POST['poGfiOut'])) echo $_POST['poGfiOut'];?></textarea></td>
            <td><input type="number" name="poGfiW" style="width:90%;" value="<?php if (isset($_POST['poGfiW'])) echo $_POST['poGfiW'];?>"></td>
            <td><textarea name="poGfiPc" rows="2" cols="25" ><?php if (isset($_POST['poGfiPc'])) echo $_POST['poGfiPc'];?></textarea></td>
            <td><textarea name="poGfiSa" rows="2" cols="10" ><?php if (isset($_POST['poGfiSa'])) echo $_POST['poGfiSa'];?></textarea></td>
        </tr>
        <tr>
            <td style="text-align: center;">G6</td>
            <td><textarea name="poGsAc" rows="2" cols="25" ><?php if (isset($_POST['poGsAc'])) echo $_POST['poGsAc'];?></textarea></td>
            <td><textarea name="poGsPm" rows="2" cols="20" ><?php if (isset($_POST['poGsPm'])) echo $_POST['poGsPm'];?></textarea></td>
            <td><textarea name="poGsOut" rows="2" cols="8" ><?php if (isset($_POST['poGsOut'])) echo $_POST['poGsOut'];?></textarea></td>
            <td><input type="number" name="poGsW" style="width:90%;" value="<?php if (isset($_POST['poGsW'])) echo $_POST['poGsW'];?>"></td>
            <td><textarea name="poGsPc" rows="2" cols="25" ><?php if (isset($_POST['poGsPc'])) echo $_POST['poGsPc'];?></textarea></td>
            <td><textarea name="poGsSa" rows="2" cols="10" ><?php if (isset($_POST['poGsSa'])) echo $_POST['poGsSa'];?></textarea></td>
        </tr>
    </table>

    <textarea name="poText" rows="4" style="margin-bottom: 20px; width: 100%;" ><?php if (isset($_POST['poText'])) echo $_POST['poText'];?></textarea>

    <!--<input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">-->
    <center><input type="submit" class="link" name="update" style="margin-bottom: 50px;" value="Update"></center>
   <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">-->
   </div>
</div>


    </form>
    </body>
</html>
   
    
