<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "moh";

$id = ""; $wAge = ""; $hAge = ""; $wEducation = ""; $hEducation = ""; $wOccupation = ""; $hOccupation = ""; 
$fhDiabetes = null; $fhHypertension = null; $fhHaematologic = null; $fhTwin = null; $fhOthers = ""; 
$shDiabetes = null; $shHypertension = null; $shCardiac = null; $shRenal = null; $shHepatic = null; $shPsychiatric = null; 
$shEpilepsy = null; $shMalignancies = null; $shHaematological = null; $shTuberculosis = null; $shThyroid = null; $shBronchial = null; 
$shDVT = ""; $shSurgeries = ""; $shOther = ""; $shScore = ""; $poGoneAc = ""; $poGonePm = "";
$poGoneOut = ""; $poGoneW = ""; $poGonePc = ""; $poGoneSa = ""; $poGtwoAc = ""; $poGtwoPm = ""; $poGtwoOut = ""; $poGtwoW = ""; $poGtwoPc = ""; $poGtwoSa = "";
$poGthAc = ""; $poGthPm = ""; $poGthOut = ""; $poGthW = ""; $poGthPc = ""; $poGthSa = ""; $poGfoAc = ""; $poGfoPm = ""; $poGfoOut = ""; $poGfoW = "";
$poGfoPc = ""; $poGfoSa = ""; $poGfiAc = ""; $poGfiPm = ""; $poGfiOut = ""; $poGfiW = ""; $poGfiPc = ""; $poGfiSa= ""; $poGsAc = ""; $poGsPm = "";
$poGsOut = ""; $poGsW = ""; $poGsPc = ""; $poGsSa = ""; $poText = "";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}catch (Exception $ex){
    echo 'Error';
}

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['wAge']; $posts[2] = $_POST['hAge'];$posts[3] = $_POST['wEducation'];
    $posts[4] = $_POST['hEducation']; $posts[5] = $_POST['wOccupation']; $posts[6] = $_POST['hOccupation']; 
    
    $posts[7] = $_POST['fhDiabetes']; $posts[8] = $_POST['fhHypertension']; $posts[9] = $_POST['fhHaematologic'];
    $posts[10] = $_POST['fhTwin']; $posts[11] = $_POST['fhOthers'];

    $posts[12] = $_POST['shDiabetes']; $posts[13] = $_POST['shHypertension'];$posts[14] = $_POST['shCardiac'];
    $posts[15] = $_POST['shRenal']; $posts[16] = $_POST['shHepatic']; $posts[17] = $_POST['shPsychiatric']; 

    $posts[18] = $_POST['shEpilepsy']; $posts[19] = $_POST['shMalignancies'];$posts[20] = $_POST['shHaematological']; 
    $posts[21] = $_POST['shTuberculosis']; $posts[22] = $_POST['shThyroid'];$posts[23] = $_POST['shBronchial'];

    $posts[24] = $_POST['shDVT']; $posts[25] = $_POST['shSurgeries']; 
    $posts[26] = $_POST['shOther']; $posts[27] = $_POST['shScore']; 
    
    $posts[28] = $_POST['poGoneAc']; $posts[29] = $_POST['poGonePm']; $posts[30] = $_POST['poGoneOut']; 
    $posts[31] = $_POST['poGoneW']; $posts[32] = $_POST['poGonePc']; $posts[33] = $_POST['poGoneSa'];

    $posts[34] = $_POST['poGtwoAc']; $posts[35] = $_POST['poGtwoPm']; $posts[36] = $_POST['poGtwoOut'];  
    $posts[37] = $_POST['poGtwoW']; $posts[38] = $_POST['poGtwoPc']; $posts[39] = $_POST['poGtwoSa'];

    $posts[40] = $_POST['poGthAc']; $posts[41] = $_POST['poGthPm']; $posts[42] = $_POST['poGthOut']; 
    $posts[43] = $_POST['poGthW']; $posts[44] = $_POST['poGthPc']; $posts[45] = $_POST['poGthSa']; 
    
    $posts[46] = $_POST['poGfoAc']; $posts[47] = $_POST['poGfoPm']; $posts[48] = $_POST['poGfoOut']; 
    $posts[49] = $_POST['poGfoW']; $posts[50] = $_POST['poGfoPc']; $posts[51] = $_POST['poGfoSa']; 
    
    $posts[52] = $_POST['poGfiAc']; $posts[53] = $_POST['poGfiPm'];$posts[54] = $_POST['poGfiOut']; 
    $posts[55] = $_POST['poGfiW']; $posts[56] = $_POST['poGfiPc']; $posts[57] = $_POST['poGfiSa']; 
    
    $posts[58] = $_POST['poGsAc']; $posts[59] = $_POST['poGsPm']; $posts[60] = $_POST['poGsOut']; 
    $posts[61] = $_POST['poGsW']; $posts[62] = $_POST['poGsPc']; $posts[63] = $_POST['poGsSa'];
    $posts[64] = $_POST['poText']; 
    return $posts;
}

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `table1`(`id`,`wAge`,`hAge`,`wEducation`,`hEducation`,`wOccupation`,
    `hOccupation`,`fhDiabetes`,`fhHypertension`,`fhHaematologic`,`fhTwin`,`fhOthers`,
    `shDiabetes`,`shHypertension`,`shCardiac`,`shRenal`,`shHepatic`,`shPsychiatric`,
    `shEpilepsy`,`shMalignancies`,`shHaematological`,`shTuberculosis`,`shThyroid`,`shBronchial`,
    `shDVT`,`shSurgeries`,`shOther`,`shScore`,
    `poGoneAc`,`poGonePm`,`poGoneOut`,`poGoneW`,`poGonePc`,`poGoneSa`,
    `poGtwoAc`,`poGtwoPm`,`poGtwoOut`,`poGtwoW`,`poGtwoPc`,`poGtwoSa`,
    `poGthAc`,`poGthPm`,`poGthOut`,`poGthW`,`poGthPc`,`poGthSa`,
    `poGfoAc`,`poGfoPm`,`poGfoOut`,`poGfoW`,`poGfoPc`,`poGfoSa`,
    `poGfiAc`,`poGfiPm`,`poGfiOut`,`poGfiW`,`poGfiPc`,`poGfiSa`,
    `poGsAc`,`poGsPm`,`poGsOut`,`poGsW`,`poGsPc`,`poGsSa`,`poText`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]',
    '$data[7]','$data[8]','$data[9]','$data[10]','$data[11]',
    '$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]',
    '$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]',
    '$data[24]','$data[25]','$data[26]','$data[27]',
    '$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]',
    '$data[34]','$data[35]','$data[36]','$data[37]','$data[38]','$data[39]',
    '$data[40]','$data[41]','$data[42]','$data[43]','$data[44]','$data[45]',
    '$data[46]','$data[47]','$data[48]','$data[49]','$data[50]','$data[51]',
    '$data[52]','$data[53]','$data[54]','$data[55]','$data[56]','$data[57]',
    '$data[58]','$data[59]','$data[60]','$data[61]','$data[62]','$data[63]','$data[64]')";
    try{
        $insert_Result = mysqli_query($connect,$insert_Query);
        if($insert_Result){
            if(mysqli_affected_rows($connect) > 0){
                echo 'Data inserted'; 
            }else{
                echo 'Data not inserted';
            }
        }
    }catch (Exception $ex){
        echo 'Error Insert' .$ex->getMessage();
    }
}

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table1 WHERE id = $data[0]";
    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                $id =$row['id']; $wAge =$row['wAge']; $hAge =$row['hAge']; $wEducation =$row['wEducation']; $hEducation =$row['hEducation']; $wOccupation =$row['wOccupation']; $hOccupation =$row['hOccupation']; 
                $fhDiabetes =$row['fhDiabetes']; $fhHypertension =$row['fhHypertension']; $fhHaematologic =$row['fhHaematologic']; $fhTwin =$row['fhTwin']; $fhOthers =$row['fhOthers']; 
                $shDiabetes =$row['shDiabetes']; $shHypertension =$row['shHypertension']; $shCardiac =$row['shCardiac']; $shRenal =$row['shRenal']; $shHepatic =$row['shHepatic']; $shPsychiatric =$row['shPsychiatric']; 
                $shEpilepsy =$row['shEpilepsy']; $shMalignancies =$row['shMalignancies']; $shHaematological =$row['shHaematological']; $shTuberculosis =$row['shTuberculosis']; $shThyroid =$row['shThyroid']; $shBronchial =$row['shBronchial']; 
                $shDVT =$row['shDVT']; $shSurgeries =$row['shSurgeries']; $shOther =$row['shOther']; $shScore =$row['shScore']; 
                $poGoneAc =$row['poGoneAc']; $poGonePm =$row['poGonePm']; $poGoneOut =$row['poGoneOut']; $poGoneW =$row['poGoneW']; $poGonePc =$row['poGonePc']; $poGoneSa =$row['poGoneSa'];
                $poGtwoAc =$row['poGtwoAc']; $poGtwoPm =$row['poGtwoPm']; $poGtwoOut =$row['poGtwoOut']; $poGtwoW =$row['poGtwoW']; $poGtwoPc =$row['poGtwoPc']; $poGtwoSa =$row['poGtwoSa']; 
                $poGthAc =$row['poGthAc']; $poGthPm =$row['poGthPm']; $poGthOut =$row['poGthOut']; $poGthW =$row['poGthW']; $poGthPc =$row['poGthPc']; $poGthSa =$row['poGthSa'];  
                $poGfoAc =$row['poGfoAc']; $poGfoPm =$row['poGfoPm']; $poGfoOut =$row['poGfoOut']; $poGfoW =$row['poGfoW'];$poGfoPc =$row['poGfoPc']; $poGfoSa =$row['poGfoSa']; 
                $poGfiAc =$row['poGfiAc']; $poGfiPm =$row['poGfiPm']; $poGfiOut =$row['poGfiOut']; $poGfiW =$row['poGfiW']; $poGfiPc =$row['poGfiPc']; $poGfiSa =$row['poGfiSa'];
                $poGsAc =$row['poGsAc']; $poGsPm =$row['poGsPm']; $poGsOut =$row['poGsOut']; $poGsW =$row['poGsW']; $poGsPc =$row['poGsPc'];$poGsSa =$row['poGsSa'];$poText =$row['poText']; 
            }
        }else{
            echo 'No data for this id';
        }
    }else{
        echo 'Result Error';
    }
}

//delete
if(isset($_POST['delete'])){
    $data = getPosts();
    $delete_Query = "DELETE FROM `table1` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);

        if($delete_Result){
            if(mysqli_affected_rows($connect)>0){
               echo 'data deleted';
            }else{
                echo 'data not deleted';
            }
        }
    }catch (Exception $ex){
        echo 'Error Delete' .$ex->getMessage();
    }
}

//update
if(isset($_POST['update'])){
    $data = getPosts();
    $update_Query = "UPDATE `table1` SET `wAge`='$data[1]', `hAge`='$data[2]', `wEducation`='$data[3]',`hEducation`='$data[4]', `wOccupation`='$data[5]', `hOccupation`='$data[6]',
    `fhDiabetes`='$data[7]', `fhHypertension`='$data[8]', `fhHaematologic`='$data[9]',`fhTwin`='$data[10]', `fhOthers`='$data[11]', 
    `shDiabetes`='$data[12]',`shHypertension`='$data[13]', `shCardiac`='$data[14]', `shRenal`='$data[15]',`shHepatic`='$data[16]', `shPsychiatric`='$data[17]', 
    `shEpilepsy`='$data[18]',`shMalignancies`='$data[19]', `shHaematological`='$data[20]', `shTuberculosis`='$data[21]',`shThyroid`='$data[22]', `shBronchial`='$data[23]',
    `shDVT`='$data[24]', `shSurgeries`='$data[25]', `shOther`='$data[26]',`shScore`='$data[27]', 
    `poGoneAc`='$data[28]', `poGonePm`='$data[29]',`poGoneOut`='$data[30]',`poGoneW`='$data[31]', `poGonePc`='$data[32]', `poGoneSa`='$data[33]',
    `poGtwoAc`='$data[34]', `poGtwoPm`='$data[35]', `poGtwoOut`='$data[36]',`poGtwoW`='$data[37]', `poGtwoPc`='$data[38]', `poGtwoSa`='$data[39]',
    `poGthAc`='$data[40]',`poGthPm`='$data[41]', `poGthOut`='$data[42]', `poGthW`='$data[43]',`poGthPc`='$data[44]', `poGthSa`='$data[45]', 
    `poGfoAc`='$data[46]',`poGfoPm`='$data[47]', `poGfoOut`='$data[48]', `poGfoW`='$data[49]',`poGfoPc`='$data[50]',`poGfoSa`='$data[51]', 
    `poGfiAc`='$data[52]', `poGfiPm`='$data[53]',`poGfiOut`='$data[54]', `poGfiW`='$data[55]', `poGfiPc`='$data[56]',`poGfiSa`='$data[57]', 
    `poGsAc`='$data[58]', `poGsPm`='$data[59]',`poGsOut`='$data[60]',`poGsW`='$data[61]',`poGsPc`='$data[62]', `poGsSa`='$data[63]', `poText`='$data[64]'
     WHERE `id` = $data[0]";

    try{
        $update_Result = mysqli_query($connect, $update_Query);

        if($update_Result){
            if(mysqli_affected_rows($connect)>0){
               echo 'data updated';
            }else{
                echo 'data not updated';
            }
        }
    }catch (Exception $ex){
        echo 'Error update' .$ex->getMessage();
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="cssClinic/newStyle.css">
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