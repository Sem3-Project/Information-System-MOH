<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "moh";

$idNew = ""; $ipp = ""; $zscore = ""; 
$day1 = ""; $day2 = ""; $day3 = ""; $day4 = ""; $day5 = ""; $day6 = ""; $day7 = ""; $day8 = ""; 
$imday1 = ""; $imday2 = ""; $imday3 = ""; $imday4 = ""; $imday5 = ""; $imday6 = ""; $imday7 = ""; $imday8 = ""; 
$cday = ""; $cplace = ""; $date = ""; 
$bpro = ""; $avd = ""; $evb = ""; $pallor = ""; $icterus = ""; $oedema = ""; $bp = ""; 
$cs = "";$rs = ""; $ae = ""; $ve = ""; 
$epds = ""; $other = ""; $problem = ""; 
$method = null; $Chosen = null; $reason = ""; 
$fpPlace = ""; $fpDate = ""; $fpTime = ""; $sNote = ""; 
$oName = ""; $designation = ""; $cName = ""; $cTel = ""; $phmTel = ""; $mohTel = ""; 



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}catch (Exception $ex){
    echo 'Error';
}

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['idNew']; $posts[1] = $_POST['ipp']; $posts[2] = $_POST['zscore'];
    
    $posts[3] = $_POST['day1'];$posts[4] = $_POST['day2']; $posts[5] = $_POST['day3']; $posts[6] = $_POST['day4']; 
    $posts[7] = $_POST['day5']; $posts[8] = $_POST['day6']; $posts[9] = $_POST['day7']; $posts[10] = $_POST['day8']; 

    $posts[11] = $_POST['imday1'];$posts[12] = $_POST['imday2']; $posts[13] = $_POST['imday3'];
    $posts[14] = $_POST['imday4'];$posts[15] = $_POST['imday5']; $posts[16] = $_POST['imday6']; 
    $posts[17] = $_POST['imday7']; $posts[18] = $_POST['imday8']; 
    
    $posts[19] = $_POST['cday'];$posts[20] = $_POST['cplace']; $posts[21] = $_POST['date']; 
    
    $posts[22] = $_POST['bpro'];$posts[23] = $_POST['avd'];$posts[24] = $_POST['evb']; $posts[25] = $_POST['pallor']; 
    $posts[26] = $_POST['icterus']; $posts[27] = $_POST['oedema']; $posts[28] = $_POST['bp']; 
    $posts[29] = $_POST['cs']; $posts[30] = $_POST['rs']; $posts[31] = $_POST['ae']; $posts[32] = $_POST['ve']; 
    
    $posts[33] = $_POST['epds']; $posts[34] = $_POST['other']; $posts[35] = $_POST['problem']; 
    
    $posts[36] = $_POST['method']; $posts[37] = $_POST['Chosen']; $posts[38] = $_POST['reason']; 
    
    $posts[39] = $_POST['fpPlace'];$posts[40] = $_POST['fpDate']; $posts[41] = $_POST['fpTime']; 
    $posts[42] = $_POST['sNote']; 

    $posts[43] = $_POST['oName']; $posts[44] = $_POST['designation']; $posts[45] = $_POST['cName']; 
    $posts[46] = $_POST['cTel']; $posts[47] = $_POST['phmTel']; $posts[48] = $_POST['mohTel']; 

    return $posts;
}

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `table2`(`idNew`,`ipp`,`zscore`,
    `day1`,`day2`,`day3`,`day4`,`day5`,`day6`,`day7`,`day8`,
    `imday1`,`imday2`,`imday3`,`imday4`,`imday5`,`imday6`,`imday7`,`imday8`,
    `cday`,`cplace`,`date`,
    `bpro`,`avd`,`evb`,`pallor`,`icterus`,`oedema`,`bp`,`cs`,`rs`,`ae`,`ve`,
    `epds`,`other`,`problem`,
    `method`,`Chosen`,`reason`,
    `fpPlace`,`fpDate`,`fpTime`,`sNote`,
    `oName`,`designation`,`cName`,`cTel`,`phmTel`,`mohTel`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]',
    '$data[4]','$data[5]','$data[6]',
    '$data[7]','$data[8]','$data[9]','$data[10]','$data[11]',
    '$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]',
    '$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]',
    '$data[24]','$data[25]','$data[26]','$data[27]',
    '$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]',
    '$data[34]','$data[35]','$data[36]','$data[37]','$data[38]','$data[39]',
    '$data[40]','$data[41]','$data[42]','$data[43]','$data[44]','$data[45]',
    '$data[46]','$data[47]','$data[48]')";
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
    $search_Query = "SELECT * FROM table2 WHERE idNew = $data[0]";
    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                $idNew =$row['idNew']; $ipp =$row['ipp']; $zscore =$row['zscore']; 
                $day1 =$row['day1']; $day2 =$row['day2']; $day3 =$row['day3']; $day4 =$row['day4']; 
                $day5 =$row['day5']; $day6 =$row['day6']; $day7 =$row['day7']; $day8 =$row['day8']; 
                $imday1 =$row['imday1']; $imday2 =$row['imday2']; $imday3 =$row['imday3']; $imday4 =$row['imday4']; 
                $imday5 =$row['imday5']; $imday6 =$row['imday6']; $imday7 =$row['imday7']; $imday8 =$row['imday8'];
                $cday =$row['cday']; $cplace =$row['cplace']; $date =$row['date']; 
                $bpro =$row['bpro']; $avd =$row['avd']; $evb =$row['evb']; $pallor =$row['pallor']; 
                $icterus =$row['icterus']; $oedema =$row['oedema']; $bp=$row['bp']; $cs =$row['cs']; $rs =$row['rs']; 
                $ae =$row['ae']; $ve =$row['ve']; 
                $epds =$row['epds']; $other =$row['other']; $problem =$row['problem']; 
                $method =$row['method']; $Chosen =$row['Chosen']; $reason =$row['reason']; 
                $fpPlace =$row['fpPlace']; $fpDate =$row['fpDate']; $fpTime =$row['fpTime']; $sNote =$row['sNote']; 
                $oName =$row['oName']; $designation =$row['designation']; $cName =$row['cName']; 
                $cTel =$row['cTel'];  $phmTel =$row['phmTel']; $mohTel =$row['mohTel']; 
                
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
    $delete_Query = "DELETE FROM `table2` WHERE `idNew` = $data[0]";
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
    $update_Query = "UPDATE `table2` SET `ipp`='$data[1]', `zscore`='$data[2]', 
    `day1`='$data[3]',`day2`='$data[4]', `day3`='$data[5]', `day4`='$data[6]',
    `day5`='$data[7]', `day6`='$data[8]', `day7`='$data[9]',`day8`='$data[10]', 
    `imday1`='$data[11]', `imday2`='$data[12]',`imday3`='$data[13]', `imday4`='$data[14]', 
    `imday5`='$data[15]',`imday6`='$data[16]', `imday7`='$data[17]', `imday8`='$data[18]',
    `cday`='$data[19]', `cplace`='$data[20]', `date`='$data[21]',
    `bpro`='$data[22]', `avd`='$data[23]',`evb`='$data[24]', `pallor`='$data[25]', 
    `icterus`='$data[26]',`oedema`='$data[27]', `bp`='$data[28]', `cs`='$data[29]',
    `rs`='$data[30]',`ae`='$data[31]', `ve`='$data[32]', 
    `epds`='$data[33]',`other`='$data[34]', `problem`='$data[35]', 
    `method`='$data[36]',`Chosen`='$data[37]', `reason`='$data[38]', 
    `fpPlace`='$data[39]',`fpDate`='$data[40]',`fpTime`='$data[41]', `sNote`='$data[42]', 
    `oName`='$data[43]',`designation`='$data[44]', `cName`='$data[45]', 
    `cTel`='$data[46]',`phmTel`='$data[47]', `mohTel`='$data[48]'
     WHERE `idNew` = $data[0]";

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
    <form action="mohNew.php" method="post" >
        <div>
        <h3>Search NIC :</h3>
            <input type="text"  name="idNew" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;"  value="<?php echo $idNew;?>"><br><br>
            <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">
           
            <h3>පසු ප්‍රසව ක්ෂේත්‍ර සංරක්ෂණය / Post Partum Field Care</h3>
            <table style="width:100% ;margin-bottom: 50px;" >
                <tr>
                    <th>හඳුනාගත් පසුප්‍රසව රෝගී තත්ව සහ ගත් පියවර / Identified post partum morbidities & Actions taken</th>
                </tr>
                <tr>
                    <td><textarea rows="4" cols="170" name="ipp" ><?php echo $ipp;?></textarea></td>
                </tr>
            </table>

            <p>Z Score: <input type="text" name="zscore" style="width: 50%; height: 30px;"  value="<?php echo $zscore;?>"></p>

            <table style="width:100% ;margin-bottom: 50px;" >
                <tr>
                    <th colspan="8">පවුල් සෞඛ්‍ය සේවා නිලධාරිනිය නිවසට පැමිණි දිනය / Date of home visit by PHM</th>
                </tr>
                <tr>
                    <td ><input type="date" name="day1" value="<?php echo $day1;?>"></td>
                    <td ><input type="date" name="day2" value="<?php echo $day2;?>"></td>
                    <td ><input type="date" name="day3" value="<?php echo $day3;?>"></td>
                    <td ><input type="date" name="day4" value="<?php echo $day4;?>"></td>
                </tr>
               <tr>
                    <td ><input type="date" name="day5" value="<?php echo $day5;?>"></td>
                    <td ><input type="date" name="day6" value="<?php echo $day6;?>"></td>
                    <td ><input type="date" name="day7" value="<?php echo $day7;?>"></td>
                    <td ><input type="date" name="day8" value="<?php echo $day8;?>"></td>
                </tr>
            </table>

            <table style="width:100% ;margin-bottom: 50px;" >
                <tr>
                    <th colspan="8">ක්ෂුද්‍ර පෝෂක ලබාදුන් දිනය / Date of Issuing Micronutrients</th>
                </tr>
                <tr>
                    <td ><input type="date" name="imday1" value="<?php echo $imday1;?>"></td>
                    <td ><input type="date" name="imday2" value="<?php echo $imday2;?>"></td>
                    <td ><input type="date" name="imday3" value="<?php echo $imday3;?>"></td>
                    <td ><input type="date" name="imday4" value="<?php echo $imday4;?>"></td>
                </tr>
               <tr>
                    <td ><input type="date" name="imday5" value="<?php echo $imday5;?>"></td>
                    <td ><input type="date" name="imday6" value="<?php echo $imday6;?>"></td>
                    <td ><input type="date" name="imday7" value="<?php echo $imday7;?>"></td>
                    <td ><input type="date" name="imday8" value="<?php echo $imday8;?>"></td>
                </tr>
            </table>

            <table style="width:100% ;margin-bottom: 50px;" >
                <tr>
                    <th rowspan="2">පසු ප්‍රසව සායන දිනය සහ ස්ථානය / Date for postpartum clinic & place</th>
                    <td><input type="date" name="cday" value="<?php echo $cday;?>"></td>
                </tr>
                <tr>
                    <td ><textarea rows="2" cols="100" name="cplace" ><?php echo $cplace;?></textarea></td> 
                </tr>

            </table>

            <h3>පසු ප්‍රසව සායනික සංරක්ෂණය / Postnatal clinic care</h3>
            <h4>දිනය / Date: <input type ="date" style="width: 50%; height: 30px;" name="date" value="<?php echo $date;?>"></h4>
            <br>

            <table style="width:100% ;margin-bottom: 50px;" > 
                <tr>
                    <td style="width:60%">පියයුරු ගැටළු / Breast problems</td>
                    <td ><textarea rows="2" cols="70" name="bpro" ><?php echo $bpro;?></textarea></td>
                </tr>
                <tr>
                    <td>අසාමාන්‍ය යෝනි ස්‍රාව / Abnormal vaginal discharge</td>
                    <td ><textarea rows="2" cols="70" name="avd" ><?php echo $avd;?></textarea></td>
                </tr>
                <tr>
                    <td>අධික ලෙස යෝනි රුධිර වහනය / Excessive vaginal bleeding</td>
                    <td ><textarea rows="2" cols="70" name="evb" ><?php echo $evb;?></textarea></td>
                </tr>
                <tr> 
                    <td>සුදුමැලි බව / Pallor</td>
                    <td ><textarea rows="2" cols="70" name="pallor" ><?php echo $pallor;?></textarea></td>
                </tr>
                <tr>
                    <td>කාමලාව / Icterus</td>
                    <td ><textarea rows="2" cols="70" name="icterus" ><?php echo $icterus;?></textarea></td>
                </tr>
                <tr>
                    <td>ඉදිමුම (වළලුකර සහ / හෝ මුහුණ) / Oedema (ankle and/or facial)</td>
                    <td ><textarea rows="2" cols="70" name="oedema" ><?php echo $oedema;?></textarea></td>
                </tr>
                <tr>
                    <td>රුධිර පීඩනය / BP</td>
                    <td ><textarea rows="2" cols="70" name="bp" ><?php echo $bp;?></textarea></td>
                </tr>
                <tr>
                    <td>රුධිර වාහිනී පද්ධතිය / Cardiovascular system</td>
                    <td ><input type="text" name="cs" value="<?php echo $cs;?>"></td>
                </tr>
                <tr>
                    <td>ශ්වසන පද්ධතිය / Respiratory system</td>
                    <td ><textarea rows="2" cols="70" name="rs" ><?php echo $rs;?></textarea></td>
                </tr>
                <tr>
                    <td>උදර පරීක්ෂාව / Abdominal examination</td>
                    <td ><textarea rows="2" cols="70" name="ae" ><?php echo $ae;?></textarea></td>
                </tr>
                <tr>
                    <td>යෝනි පරීක්ෂව අවශ්‍යනම් / Vaginal examination if neeeded</td>
                    <td ><textarea rows="2" cols="70" name="ve" ><?php echo $ve;?></textarea></td>
                </tr>
                

            </table>

            <table style="width:100% ;margin-bottom: 50px;" >
                <tr>
                    <td style="width:60%">පූර්ව පරීක්ෂණ මෙවලමට අනුව මානසික තත්වය (EPDS) / Mental status according to the screening tool (EPDS)</td>
                    <td ><textarea rows="2" cols="70" name="epds" ><?php echo $epds;?></textarea></td>
                </tr>
                <tr>
                    <td>වෙනත් / Other</td>
                    <td ><textarea rows="3" cols="70" name="other" ><?php echo $other;?></textarea></td>
                </tr>
                <tr>
                    <td>මවගේ හඳුනාගත් ගැටළු සහ ගත් පියවර / Identified problems in mother and actions taken</td>
                    <td ><textarea rows="3" cols="70" name="problem" ><?php echo $problem;?></textarea></td>
                </tr>
            </table>

            <table style="width:100% ;margin-bottom: 20px;">
                <tr>
                    <th colspan="2">පවුල් සැලසුම් ක්‍රමය / Family planning</th>
                </tr>
                <tr >
                    <td >භාවිතා කරන / Method in use</td>
                <td><select id="method" name="method" style="width: 100px; height:30px;" >
                <option value="not done">---Select---</option>
                <option value="T" <?php if($method=="T") echo 'selected="selected"';?>>T</option>
                <option value="PL" <?php if($method=="PL") echo 'selected="selected"';?>>PL</option>

                </select></td>
                    
                </tr>
                <tr>
                    <td>තෝරාගත් / Chosen</td>
                    
                <td><select id="Chosen" name="Chosen" style="width: 100px; height:30px;" >
                <option value="not done">---Select---</option>
                <option value="T" <?php if($Chosen=="T") echo 'selected="selected"';?>>T</option>
                <option value="L" <?php if($Chosen=="L") echo 'selected="selected"';?>>L</option>
                <option value="IP" <?php if($Chosen=="IP") echo 'selected="selected"';?>>IP</option>
                <option value="N" <?php if($Chosen=="N") echo 'selected="selected"';?>>N</option>
                <option value="V" <?php if($Chosen=="V") echo 'selected="selected"';?>>V</option>
                <option value="C" <?php if($Chosen=="C") echo 'selected="selected"';?>>C</option>
                </select></td>
                    
                </tr>
                <tr>
                    <td style="width:100%">නැතිනම් හේතුව / If not reason</td>
                    <td ><textarea rows="2" cols="100" name="reason"><?php echo $reason;?></textarea></td>
                </tr>
            </table>

            <h4>පවුල් සැලසුම් සායනය / Family planning clinic</h4>

            <table style="width:100% ;margin-bottom: 50px;">
                <tr>
                    <td style="width:100%">ස්ථානය / Place</td>
                    <td ><textarea rows="2" cols="100" name="fpPlace"><?php echo $fpPlace;?></textarea></td>
                </tr>
                <tr>
                    <td>දිනය / Date</td>
                    <td ><input type="date" name="fpDate" value="<?php echo $fpDate;?>"></td>
                </tr>
                <tr>
                    <td>වේලාව / Time</td>
                    <td><input type="time" name="fpTime" value="<?php echo $fpTime;?>"></td>
                </tr>
                <tr>
                    <td>විශේෂ සටහන් / Special notes</td>
                    <td ><textarea rows="2" cols="100" name="sNote"><?php echo $sNote;?></textarea></td>
                </tr>
            </table>
            <table style="width:100% ;margin-bottom: 50px;">
                <tr>
                    <td style="width:60%">පරීක්ෂා කරන ලද නිලධාරියාගේ නම / Name of the officer examined</td>
                    <td ><textarea rows="2" cols="70" name="oName"><?php echo $oName;?></textarea></td>
                </tr>
                <tr>
                    <td>නිල නාමය / Designation</td>
                    <td ><textarea rows="2" cols="70" name="designation"><?php echo $designation;?></textarea></td>
                </tr>
            </table>

            <h3>හදිසි අවස්ථාවකදී දැනුම් දීම / In an emergency contact</h3>
            <table style="width:100% ;margin-bottom: 30px;">
                <tr>
                    <td rowspan="2" style="width:60%">දැනුම් දියයුතු අයගේ නම සහ ලිපිනය / Name and address of the contact person<br><br>
                        දුරකථන අංකය / Telephone No</td>
                    <td ><textarea rows="3" cols="70" name="cName"><?php echo $cName;?></textarea></td>
                </tr>
                <tr>
                    <td ><input type="tel" placeholder="012-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                         name="cTel" value="<?php echo $cTel;?>"></td>
                </tr>
                <tr>
                    <td>පවුල් සෞඛ්‍ය සේවා නිලධාරිනියගේ දුරකථන අංකය / Telephone No of PHM</td>
                    <td ><input type="tel" placeholder="012-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                         name="phmTel" value="<?php echo $phmTel;?>"></td>
                </tr>
                <tr>
                    <td>සෞඛ්‍ය වෛද්‍ය නිලධාරී කාර්යාලයේ දුරකථන අංකය / Telephone No of the MOH office</td>
                    <td ><input type="tel" placeholder="012-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                        name="mohTel" value="<?php echo $mohTel;?>"></td>
                </tr>
            </table>

            <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
    <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
    <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">

        </div>
    </form>
    </body>
</html>