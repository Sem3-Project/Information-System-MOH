<?php
require '../models/personalInfo_model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Personal Information</title>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newStyle.css">
    </head>
    <body>
    <form action="moh.php" method="post" >
        <div>
            <h3>Search NIC :</h3>
            <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="id" value="<?php echo $id;?>"><br><br>
            <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">
        <!--table for personal information-->
        <h3>පෞද්ගලික තොරතුරු / Personal Information</h3>
        <table style="width:100% ;margin-bottom: 50px;" >
        <tr>
            <th style="width:36%"  ></th>
            <th style="width:30%" >භාර්යාව / Wife</th>
            <th style="width:30%" >ස්වාමිපුරුෂයා / Husband</th>
        </tr>
        <tr>
            <td>වයස / Age</td>
            <td><input type ="number" name="wAge" value="<?php echo $wAge;?>"></td>
            <td><input type ="number" name="hAge" value="<?php echo $hAge;?>"></td>
        </tr>
        <tr>
            <td>අධ්‍යාපන මට්ටම / Highest Level oF Education</td>
            <td><textarea name= "wEducation" rows="2" cols="50" ><?php echo $wEducation;?></textarea></td>
            <td><textarea name= "hEducation" rows="2" cols="50"><?php echo $hEducation;?></textarea></td>
        </tr>
        <tr>
            <td> රැකියාව / Occupation</td>
            <td><textarea name= "wOccupation" rows="3" cols="50" ><?php echo $wOccupation;?></textarea></td>
            <td><textarea name= "hOccupation" rows="3" cols="50" ><?php echo $hOccupation;?></textarea></td>
        </tr>
        
    </table>
        <!--table for Family History-->
    <h3>පවුලේ රෝග ඉතිහාසය / Family History</h3>
        <table style="width:100%;margin-bottom: 50px;"   >
        <tr>
            <th colspan="2">රෝග තත්වය / Condition</th>
            
        </tr>
        <tr>
            <td >දියවැඩියාව / Diabetes Mellitus  </td>
                
            <td><select id="fhDiabetes" name="fhDiabetes" style="width: 100px; height:30px;" >
                <option value="not done">---Select---</option>
                <option value="Yes" <?php if($fhDiabetes=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($fhDiabetes=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
    
        </tr>
        <tr>
            <td>අධි රුධිර පීඩනය / Hypertension</td>
            <td><select id="fhHypertension" name="fhHypertension" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($fhHypertension=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($fhHypertension=="No") echo 'selected="selected"';?>>No</option>

            </select>
            </td>        
        </tr>
        <tr>
            <td>රුධිරය ආශ්‍රිත රෝග තත්ව / Haematological diseases</td>
            <td><select id="fhHaematologic" name="fhHaematologic" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($fhHaematologic=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($fhHaematologic=="No") echo 'selected="selected"';?>>No</option>

                </select>
            </td>
        </tr>

        <tr>
            <td >බහු දරු උපත් / Twin(Multiple Pregnancies)</td>
            <td><select id="fhTwin" name="fhTwin" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($fhTwin=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($fhTwin=="No") echo 'selected="selected"';?>>No</option>


                </select>
            </td>
        </tr>
        <tr>
            <td >වෙනත් (සඳහන් කරන්න) / Others (specify)</td>
            <td><textarea name="fhOthers" rows="2" cols="100" ><?php echo $fhOthers;?></textarea></td>
        </tr>
       
    </table>

    <!--tables for Medical/Surgical History -->
    <h3>කායික/ශල්‍ය රෝග ඉතිහාසය / Medical/Surgical History</h3>
    
    <table style="float:left; width:47%; margin-bottom:30px;">
       
        
        <tr>
            <th colspan="2">රෝග තත්වය / Condition</th>
        </tr>
        <tr>
            <td style="width:90%">දියවැඩියාව / Diabetes </td>
            <td><select id="shDiabetes" name="shDiabetes" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shDiabetes=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shDiabetes=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        <tr>
            <td>අධි රුධිර පීඩනය / Hypertension</td>
            <td><select id="shHypertension" name="shHypertension" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shHypertension=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shHypertension=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        <tr>
            <td>හෘද රෝග තත්ව / Cardiac Diseases</td>
            <td><select id="shCardiac" name="shCardiac" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shCardiac=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shCardiac=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>

        <tr>
            <td >වකුගඩු රෝග තත්ව / Renal Diseasea</td>
            <td><select id="shRenal" name="shRenal" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shRenal=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shRenal=="No") echo 'selected="selected"';?>>No</option>

                </select> </td>
        </tr>
        <tr>
            <td >අක්මා රෝග තත්ව / Hepatic Diseasea</td>
            <td><select id="shHepatic" name="shHepatic" style="width: 100px; height:30px;">

            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shHepatic=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shHepatic=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
            <tr>
                <td >මානසික රෝග තත්ව / Psychiatric Illnesses</td>
                <td><select id="shPsychiatric" name="shPsychiatric" style="width: 100px; height:30px;">
                <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shPsychiatric=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shPsychiatric=="No") echo 'selected="selected"';?>>No</option>

                    </select></td>
            </tr>
        </tr>
    </table>
    
    <table style="float:right; width:47%; margin-bottom:30px;">
        
        <tr>
            <th colspan="2">රෝග තත්වය / Condition</th>
        </tr>
        <tr>
            <td style="width:90%">අපස්මාරය / Epilepsy</td>
            <td><select id="shEpilepsy" name="shEpilepsy" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shEpilepsy=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shEpilepsy=="No") echo 'selected="selected"';?>>No</option>


                </select></td>
        </tr>
        <tr>
            <td>පිළිකා රෝග තත්ව / Malignancies</td>
            <td><select id="shMalignancies" name="shMalignancies" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shMalignancies=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shMalignancies=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        <tr>
            <td>රුධිරය ආශ්‍රිත රෝග තත්ව / Haematological Diseases</td>
            <td><select id="shHaematological" name="shHaematological" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shHaematological=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shHaematological=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>

        <tr>
            <td >ක්ෂය රෝගය / Tuberculosis</td>
            <td><select id="shTuberculosis" name="shTuberculosis"style="width: 100px; height:30px;" >
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shTuberculosis=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shTuberculosis=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        <tr>
            <td >තයිරොයිඩ් ග්‍රන්ථිය ආශ්‍රිත රෝග තත්ව / Thyroid Diseasea</td>
            <td><select id="shThyroid" name="shThyroid" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shThyroid=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shThyroid=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        <tr>
            <td >ඇදුම / Bronchial Asthma</td>
            <td><select id="shBronchial" name="shBronchial" style="width: 100px; height:30px;">
            <option value="not done">---Select---</option>
                <option value="Yes" <?php if($shBronchial=="Yes") echo 'selected="selected"';?>>Yes</option>
                <option value="No" <?php if($shBronchial=="No") echo 'selected="selected"';?>>No</option>

                </select></td>
        </tr>
        </tr>
    </table>

    <table style="float:right; width:100%; margin-bottom:50px;">
        <tr>
            <th colspan="2">රෝග තත්වය / Condition</th>
        </tr>
        <tr>
            <td style="width:60%">පෙර ගැඹුරු ශිරා ශ්‍යානි තත්ව / Previous DVT</td>
            <td><textarea name="shDVT" rows="2" cols="70"  ><?php echo $shDVT;?></textarea></td>
        </tr>
        <tr>
            <td>සිසේරියන් සැත්කම හැරුණු විට කර ඇති අනෙක් සැත්කම් / Surgeries other than LSCS</td>
            <td><textarea name="shSurgeries" rows="3" cols="70" ><?php echo $shSurgeries;?></textarea></td>
        </tr>
        <tr>
            <td>වෙනත් (සඳහන් කරන්න) / Other (Specify)</td>
            <td><textarea name="shOther" rows="3" cols="70" ><?php echo $shOther;?></textarea></td>
        </tr>

        <tr>
            <td >සමාජීය කේත අංකය / Social Z Score</td>
            <td><textarea name="shScore" rows="1" cols="70" ><?php echo $shScore;?></textarea></td>
        </tr>
        
    </table>

    

        <table style="width:100%;margin-top: 110px; margin-bottom:50px;">
            <caption><h3 style="text-align: left;">පෙර ගර්භ ඉතිහාසය / Past Obsteric History</h3></caption>
        <tr>
            <th>ගර්භණී භාවය<br>Pregnancy</th>
            <th style="width:20%;">පූර්ව ප්‍රසව සංකූලතා<br>Antenatal Complications</th>
            <th style="width:15%;">ප්‍රසූතිය සිදුවූ ස්ථානය සහ ආකාරය<br>Place & Mode of Delivery</th>
            <th style="width:5%;">ප්‍රතිඵලය<br>Outcome</th>
            <th style="width:10%;">උපත් බර (ග්‍රෑම්)<br>Birth Weight(g)</th>
            <th style="width:20%;">පසු ප්‍රසව සංකූලතා<br>Postnatal Complication (Specify)</th>
            <th style="width:5%;">ස්ත්‍රී/පුරුෂ භාවය සහ වයස<br>Sex and Age</th>
        </tr>
        <tr>
            <td style="text-align: center;">G1</td>
            <td><textarea name="poGoneAc" rows="2" cols="30" ><?php echo $poGoneAc;?></textarea></td>
            <td><textarea name="poGonePm" rows="2" cols="20"><?php echo $poGonePm;?></textarea></td>
            <td><textarea name="poGoneOut" rows="2" cols="8" ><?php echo $poGoneOut;?></textarea></td>
            <td><input type="number" name="poGoneW" style="width:90%;" value="<?php echo $poGoneW;?>"></td>
            <td><textarea name="poGonePc" rows="2" cols="30" ><?php echo $poGsPc;?></textarea></td>
            <td><textarea name="poGoneSa" rows="2" cols="10" ><?php echo $poGsSa;?></textarea></td>
        </tr>
        <tr>
            <td style="text-align: center;">G2</td>
            <td><textarea name="poGtwoAc" rows="2" cols="30" ><?php echo $poGtwoAc;?></textarea></td>
            <td><textarea name="poGtwoPm" rows="2" cols="20" ><?php echo $poGtwoPm;?></textarea></td>
            <td><textarea name="poGtwoOut" rows="2" cols="8" ><?php echo $poGtwoOut;?></textarea></td>
            <td><input type="number" name="poGtwoW" style="width:90%;" value="<?php echo $poGtwoW;?>"></td>
            <td><textarea name="poGtwoPc" rows="2" cols="30" ><?php echo $poGtwoPc;?></textarea></td>
            <td><textarea name="poGtwoSa" rows="2" cols="10" ><?php echo $poGtwoSa;?></textarea></td>
        </tr>
        <tr>
            <td style="text-align: center;">G3</td>
            <td><textarea name="poGthAc" rows="2" cols="30" ><?php echo $poGthAc;?></textarea></td>
            <td><textarea name="poGthPm" rows="2" cols="20" ><?php echo $poGthPm;?></textarea></td>
            <td><textarea name="poGthOut" rows="2" cols="8" ><?php echo $poGthOut;?></textarea></td>
            <td><input type="number" name="poGthW" style="width:90%;" value="<?php echo $poGthW;?>"></td>
            <td><textarea name="poGthPc" rows="2" cols="30" ><?php echo $poGthPc;?></textarea></td>
            <td><textarea name="poGthSa" rows="2" cols="10" ><?php echo $poGthSa;?></textarea></td>
        </tr>

        <tr>
            <td style="text-align: center;">G4</td>
            <td><textarea name="poGfoAc" rows="2" cols="30" ><?php echo $poGfoAc;?></textarea></td>
            <td><textarea name="poGfoPm" rows="2" cols="20" ><?php echo $poGfoPm;?></textarea></td>
            <td><textarea name="poGfoOut" rows="2" cols="8" ><?php echo $poGfoOut;?></textarea></td>
            <td><input type="number" name="poGfoW" style="width:90%;" value="<?php echo $poGfoW;?>"></td>
            <td><textarea name="poGfoPc" rows="2" cols="30" ><?php echo $poGfoPc;?></textarea></td>
            <td><textarea name="poGfoSa" rows="2" cols="10"><?php echo $poGfoSa;?></textarea></td>
        </tr>
        <tr>
            <td style="text-align: center;">G5</td>
            <td><textarea name="poGfiAc" rows="2" cols="30" ><?php echo $poGfiAc;?></textarea></td>
            <td><textarea name="poGfiPm" rows="2" cols="20" ><?php echo $poGfiPm;?></textarea></td>
            <td><textarea name="poGfiOut" rows="2" cols="8" ><?php echo $poGfiOut;?></textarea></td>
            <td><input type="number" name="poGfiW" style="width:90%;" value="<?php echo $poGfiW;?>"></td>
            <td><textarea name="poGfiPc" rows="2" cols="30" ><?php echo $poGfiPc;?></textarea></td>
            <td><textarea name="poGfiSa" rows="2" cols="10" value="<?php echo $poGfiSa;?>"></textarea></td>
        </tr>
        <tr>
            <td style="text-align: center;">G6</td>
            <td><textarea name="poGsAc" rows="2" cols="30" ><?php echo $poGsAc;?></textarea></td>
            <td><textarea name="poGsPm" rows="2" cols="20" ><?php echo $poGsPm;?></textarea></td>
            <td><textarea name="poGsOut" rows="2" cols="8" ><?php echo $poGsOut;?></textarea></td>
            <td><input type="number" name="poGsW" style="width:90%;" value="<?php echo $poGsW;?>"></td>
            <td><textarea name="poGsPc" rows="2" cols="30" ><?php echo $poGsPc;?></textarea></td>
            <td><textarea name="poGsSa" rows="2" cols="10" ><?php echo $poGsSa;?></textarea></td>
        </tr>
    </table>

    <textarea name="poText" rows="4" style="margin-bottom: 20px; width: 100%;" ><?php echo $poText;?></textarea>
    <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
    <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
    <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">
    
</div>
    </form>
    </body>
</html>