<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "moh";

$id=""; $date1 = ""; $date2 = ""; $date3 = "";  $age1 = ""; $age2 = ""; $age3 = ""; $teacher1 = ""; $teacher2 = ""; $teacher3 = ""; 
$attendance1 = null; $attendance2 = null; $attendance3 = null; $house1 = null;  $house2 = null; $house3 = null; $clean1 = null; $clean2 = null; $clean3 = null; 
$activity1 = null; $activity2 = null; $activity3 = null; $behaviour1 = null; $behaviour2 = null;  $behaviour3 = null; $speak1 = null; $speak2 = null; $speak3 = null; 
$hearing1 = null;  $hearing2 = null; $hearing3 = null; $vees1 = null; $vees2 = null; $vees3 = null;$fit1 = null; $fit2 = null; $fit3 = null; 
$mental1 = null; $mental2 = null; $mental3 = null; $weight1 = ""; $weight2 = ""; $weight3 = "";  $type1 = ""; $type2 = ""; $type3 = ""; 
$interrupt1 = ""; $interrupt2  = ""; $interrupt3 = ""; $height1 = ""; $height2 = ""; $height3 = ""; $sheight1 = "";  $sheight2 = ""; $sheight3 = ""; 
$night1 = null; $night2 = null; $night3 = null; $bito1 = null; $bito2 = null; $bito3 = null; $ni1 = null; $ni2 = null;  $ni3 = null; 
$louse1 = null; $louse2 = null; $louse3 = null; 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}catch (Exception $ex){
    echo 'Error';
}
function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['date1']; $posts[2] = $_POST['date2']; $posts[3] = $_POST['date3'];$posts[4] = $_POST['age1'];$posts[5] = $_POST['age2']; 
    $posts[6] = $_POST['age3']; $posts[7] = $_POST['teacher1']; $posts[8] = $_POST['teacher2']; $posts[9] = $_POST['teacher3']; 
    
    $posts[10] = $_POST['attendance1']; $posts[11] = $_POST['attendance2']; $posts[12] = $_POST['attendance3'];$posts[13] = $_POST['house1']; $posts[14] = $_POST['house2']; 
    $posts[15] = $_POST['house3'];$posts[16] = $_POST['clean1']; $posts[17] = $_POST['clean2']; $posts[18] = $_POST['clean3']; 
    
    $posts[19] = $_POST['activity1']; $posts[20] = $_POST['activity2'];$posts[21] = $_POST['activity3']; $posts[22] = $_POST['behaviour1']; $posts[23] = $_POST['behaviour2']; 
    $posts[24] = $_POST['behaviour3']; $posts[25] = $_POST['speak1']; $posts[26] = $_POST['speak2']; $posts[27] = $_POST['speak3']; 
    
    $posts[28] = $_POST['hearing1']; $posts[29] = $_POST['hearing2']; $posts[30] = $_POST['hearing3']; $posts[31] = $_POST['vees1']; $posts[32] = $_POST['vees2']; 
    $posts[33] = $_POST['vees3']; $posts[34] = $_POST['fit1']; $posts[35] = $_POST['fit2']; $posts[36] = $_POST['fit3']; 
    
    $posts[37] = $_POST['mental1']; $posts[38] = $_POST['mental2']; $posts[39] = $_POST['mental3']; $posts[40] = $_POST['weight1']; $posts[41] = $_POST['weight2']; 
    $posts[42] = $_POST['weight3']; $posts[43] = $_POST['type1']; $posts[44] = $_POST['type2']; $posts[45] = $_POST['type3']; 
    
    $posts[46] = $_POST['interrupt1']; $posts[47] = $_POST['interrupt2']; $posts[48] = $_POST['interrupt3']; $posts[49] = $_POST['height1']; $posts[50] = $_POST['height2']; 
    $posts[51] = $_POST['height3']; $posts[52] = $_POST['sheight1']; $posts[53] = $_POST['sheight2']; $posts[54] = $_POST['sheight3'];
    
    $posts[55] = $_POST['night1']; $posts[56] = $_POST['night2']; $posts[57] = $_POST['night3']; $posts[58] = $_POST['bito1']; $posts[59] = $_POST['bito2']; 
    $posts[60] = $_POST['bito3']; $posts[61] = $_POST['ni1']; $posts[62] = $_POST['ni2']; $posts[63] = $_POST['ni3']; 
    
    $posts[64] = $_POST['louse1']; $posts[65] = $_POST['louse2']; $posts[66] = $_POST['louse3'];
    
    return $posts;
}

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `table7`(`id`,`date1`,`date2`,`date3`,`age1`,`age2`,`age3`,`teacher1`,`teacher2`,`teacher3`,`attendance1`,
    `attendance2`,`attendance3`,`house1`,`house2`,`house3`,`clean1`,`clean2`,`clean3`,`activity1`,`activity2`,
    `activity3`,`behaviour1`,`behaviour2`,`behaviour3`,`speak1`,`speak2`,`speak3`,`hearing1`,`hearing2`,`hearing3`,
    `vees1`,`vees2`,`vees3`,`fit1`,`fit2`,`fit3`,`mental1`,`mental2`,`mental3`,
    `weight1`,`weight2`,`weight3`,`type1`,`type2`,`type3`,`interrupt1`,`interrupt2`,`interrupt3`,`height1`,
    `height2`,`height3`,`sheight1`,`sheight2`,`sheight3`,`night1`,`night2`,`night3`,`bito1`,`bito2`,
    `bito3`,`ni1`,`ni2`,`ni3`,`louse1`,`louse2`,`louse3`) 
    VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]',
    '$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]',
    '$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]','$data[24]','$data[25]','$data[26]',
    '$data[27]','$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]','$data[34]','$data[35]',
    '$data[36]','$data[37]','$data[38]','$data[39]','$data[40]','$data[41]','$data[42]','$data[43]','$data[44]',
    '$data[45]','$data[46]','$data[47]','$data[48]','$data[49]','$data[50]','$data[51]','$data[52]','$data[53]',
    '$data[54]','$data[55]','$data[56]','$data[57]','$data[58]','$data[59]','$data[60]','$data[61]','$data[62]',
    '$data[63]','$data[64]','$data[65]','$data[66]')";
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
    $search_Query = "SELECT * FROM table7 WHERE id = $data[0]";
    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $id= $row['id']; $date1 = $row['date1']; $date2 = $row['date2']; $date3 = $row['date3'];$age1 = $row['age1'];$age2 = $row['age2']; 
                $age3 = $row['age3']; $teacher1 = $row['teacher1']; $teacher2 = $row['teacher2']; $teacher3 = $row['teacher3']; 
                $attendance1 = $row['attendance1']; $attendance2 = $row['attendance2']; $attendance3 = $row['attendance3'];$house1 = $row['house1']; $house2 = $row['house2'];
                $house3 = $row['house3'];$clean1 = $row['clean1']; $clean2 = $row['clean2']; $clean3 = $row['clean3']; 
                $activity1 = $row['activity1']; $activity2 = $row['activity2'];$activity3 = $row['activity3']; $behaviour1 = $row['behaviour1']; $behaviour2 = $row['behaviour2'];
                $behaviour3 = $row['behaviour3']; $speak1 = $row['speak1']; $speak2 = $row['speak2']; $speak3 = $row['speak3']; 
                $hearing1 = $row['hearing1']; $hearing2 = $row['hearing2']; $hearing3 = $row['hearing3']; $vees1 = $row['vees1']; $vees2 = $row['vees2']; 
                $vees3 = $row['vees3']; $fit1 = $row['fit1']; $fit2 = $row['fit2']; $fit3 = $row['fit3']; 
                $mental1 = $row['mental1']; $mental2 = $row['mental2']; $mental3 = $row['mental3']; $weight1 = $row['weight1']; $weight2 = $row['weight2']; 
                $weight3 = $row['weight3']; $type1 = $row['type1']; $type2 = $row['type2']; $type3 = $row['type3']; 
                $interrupt1 = $row['interrupt1']; $interrupt2 = $row['interrupt2']; $interrupt3 = $row['interrupt3']; $height1 = $row['height1']; $height2 = $row['height2']; 
                $height3 = $row['height3']; $sheight1 = $row['sheight1']; $sheight2 = $row['sheight2']; $sheight3 = $row['sheight3'];
                $night1 = $row['night1']; $night2= $row['night2']; $night3 = $row['night3']; $bito1 = $row['bito1']; $bito2 = $row['bito2']; 
                $bito3 = $row['bito3']; $ni1 = $row['ni1']; $ni2 = $row['ni2']; $ni3 = $row['ni3']; 
                $louse1 = $row['louse1']; $louse2 = $row['louse2']; $louse3= $row['louse3'];
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
    $delete_Query = "DELETE FROM `table7` WHERE `id` = $data[0]";
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
    $update_Query = "UPDATE `table7` SET `date1`='$data[1]', `date2`='$data[2]', `date3`='$data[3]',`age1`='$data[4]', `age2`='$data[5]', 
    `age3`='$data[6]',`teacher1`='$data[7]', `teacher2`='$data[8]', `teacher3`='$data[9]',
    `attendance1`='$data[10]', `attendance2`='$data[11]', `attendance3`='$data[12]',`house1`='$data[13]', `house2`='$data[14]', 
    `house3`='$data[15]',`clean1`='$data[16]', `clean2`='$data[17]', `clean3`='$data[18]',
    `activity1`='$data[19]', `activity2`='$data[20]', `activity3`='$data[21]',`behaviour1`='$data[22]', `behaviour2`='$data[23]',
    `behaviour3`='$data[24]', `speak1`='$data[25]', `speak2`='$data[26]',`speak3`='$data[27]', 
    `hearing1`='$data[28]', `hearing2`='$data[29]',`hearing3`='$data[30]',`vees1`='$data[31]', `vees2`='$data[32]', 
    `vees3`='$data[33]',`fit1`='$data[34]', `fit2`='$data[35]', `fit3`='$data[36]',
    `mental1`='$data[37]', `mental2`='$data[38]', `mental3`='$data[39]',`weight1`='$data[40]',`weight2`='$data[41]', 
    `weight3`='$data[42]', `type1`='$data[43]',`type2`='$data[44]', `type3`='$data[45]', 
    `interrupt1`='$data[46]',`interrupt2`='$data[47]', `interrupt3`='$data[48]', `height1`='$data[49]',`height2`='$data[50]',
    `height3`='$data[51]', `sheight1`='$data[52]', `sheight2`='$data[53]',`sheight3`='$data[54]', 
    `night1`='$data[55]', `night2`='$data[56]',`night3`='$data[57]', `bito1`='$data[58]', `bito2`='$data[59]',
    `bito3`='$data[60]',`ni1`='$data[61]',`ni2`='$data[62]', `ni3`='$data[63]', 
    `louse1`='$data[64]',`louse2`='$data[65]',`louse3`='$data[66]'
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
        <form action="chdr2.php" method="post" >
            <div>
                <h3>Search NIC :</h3>
                <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="id" value="<?php echo $id;?>">
                <br><br>
                <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">

                <h3>පෙර පාසැල් දරුවන්ගේ වෛද්‍ය පරීක්ෂණය - වගුව I</h3>
                <table style="width:100%" >
                    <tr>
                        <th></th>
                        <th style="width:10%">1</th>
                        <th style="width:10%">2</th>
                        <th style="width:10%">3</th>
                    </tr>
                    <tr>
                        <td>දිනය</td>
                        <td align="center"><input type ="date" name="date1" value="<?php echo $date1;?>"></td>
                        <td align="center"><input type ="date" name="date2" value="<?php echo $date2;?>"></td>
                        <td align="center"><input type ="date" name="date3" value="<?php echo $date3;?>"></td>
                    </tr>
                    <tr>
                        <td>වයස</td>
                        <td align="center"><textarea name="age1" rows="2" cols="20" ><?php echo $age1;?></textarea></td>
                        <td align="center"><textarea name="age2" rows="2" cols="20" ><?php echo $age2;?></textarea></td>
                        <td align="center"><textarea name="age3" rows="2" cols="20" ><?php echo $age3;?></textarea></td>
                    </tr>
                    <tr>
                        <th align="left">පෙර පාසැල් පාලිකාවගේ නිරීක්ෂණ</th>
                        <td align="center"><textarea name="teacher1" rows="2" cols="20" ><?php echo $teacher1;?></textarea></td>
                        <td align="center"><textarea name="teacher2" rows="2" cols="20" ><?php echo $teacher2;?></textarea></td>
                        <td align="center"><textarea name="teacher3" rows="2" cols="20" ><?php echo $teacher3;?></textarea></td>
                    </tr>
                    <tr>
                        <th align="left">1) පැමිණීම</th>
                        <th><select id="attendance1" name="attendance1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($attendance1=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($attendance1=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($attendance1=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($attendance1=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>

                        <th><select id="attendance2" name="attendance2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($attendance2=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($attendance2=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($attendance2=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($attendance2=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>

                        <th><select id="attendance3" name="attendance3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($attendance3=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($attendance3=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($attendance3=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($attendance3=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">2) නිවසේ තත්වය</th>
                        <th><select id="house1" name="house1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($house1=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($house1=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($house1=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($house1=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>

                        <th><select id="house2" name="house2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($house2=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($house2=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($house2=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($house2=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>

                        <th><select id="house3" name="house3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($house3=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($house3=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($house3=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($house3=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">3) පිරිසිදුකම</th>
                        <th><select id="clean1" name="clean1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($clean1=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($clean1=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($clean1=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($clean1=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>

                        <th><select id="clean2" name="clean2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($clean2=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($clean2=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($clean2=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($clean2=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>

                        <th><select id="clean3" name="clean3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($clean3=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($clean3=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($clean3=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($clean3=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">4) ක්‍රියාකාරකම්</th>
                        <th><select id="activity1" name="activity1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($activity1=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($activity1=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($activity1=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($activity1=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>

                        <th><select id="activity2" name="activity2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($activity2=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($activity2=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($activity2=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($activity2=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>

                        <th><select id="activity3" name="activity3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="1" <?php if($activity3=="1") echo 'selected="selected"';?>>1</option>
                        <option value="2" <?php if($activity3=="2") echo 'selected="selected"';?>>2</option>
                        <option value="3" <?php if($activity3=="3") echo 'selected="selected"';?>>3</option>
                        <option value="4" <?php if($activity3=="4") echo 'selected="selected"';?>>4</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">5) හැසිරීමේ ගැටළු</th>
                        <th><select id="behaviour1" name="behaviour1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($behaviour1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($behaviour1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="behaviour2" name="behaviour2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($behaviour2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($behaviour2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="behaviour3" name="behaviour3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($behaviour3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($behaviour3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">6) කථා කිරීමේ ගැටළු</th>
                        <th><select id="speak1" name="speak1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($speak1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($speak1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="speak2" name="speak2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($speak2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($speak2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="speak3" name="speak3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($speak3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($speak3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">7) ඇසීමේ ගැටළු</th>
                        <th><select id="hearing1" name="hearing1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($hearing1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($hearing1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="hearing2" name="hearing2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($hearing2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($hearing2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="hearing3" name="hearing3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($hearing3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($hearing3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">8) හතිය</th>
                        <th><select id="vees1" name="vees1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($vees1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($vees1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="vees2" name="vees2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($vees2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($vees2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="vees3" name="vees3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($vees3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($vees3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">9) වලිප්පුව</th>
                        <th><select id="fit1" name="fit1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($fit1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($fit1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="fit2" name="fit2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($fit2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($fit2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="fit3" name="fit3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($fit3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($fit3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left" >10) මානසික සංවර්ධනය</th>
                        <th><select id="mental1" name="mental1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($mental1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($mental1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th><select id="mental2" name="mental2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($mental2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($mental2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th ><select id="mental3" name="mental3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($mental3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($mental3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    
                </table>
                <table style="width:100%">
                <tr>
                        <th rowspan="5" align="left">වර්ධන තත්වය</th>
                        <td>බර (කි.ග්‍රෑ)</td>
                        <td align="center" style="width:15.5%"><textarea name="weight1" rows="2" cols="15" ><?php echo $weight1;?></textarea></td>
                        <td align="center" style="width:15.5%"><textarea name="weight2" rows="2" cols="15" ><?php echo $weight2;?></textarea></td>
                        <td align="center" style="width:15.5%"><textarea name="weight3" rows="2" cols="15" ><?php echo $weight3;?></textarea></td>
                    </tr>
                    <tr>
                        <td>නියමිත බර / අධි බර / අඩු බර / උග්‍ර අඩු බර</td>
                        <td align="center"><textarea name="type1" rows="2" cols="15" ><?php echo $type1;?></textarea></td>
                        <td align="center"><textarea name="type2" rows="2" cols="15" ><?php echo $type2;?></textarea></td>
                        <td align="center"><textarea name="type3" rows="2" cols="15" ><?php echo $type3;?></textarea></td>
                    </tr>
                    <tr>
                        <td>වර්ධනය අඩාල වීම</td>
                        <td align="center"><textarea name="interrupt1" rows="2" cols="15" ><?php echo $interrupt1;?></textarea></td>
                        <td align="center"><textarea name="interrupt2" rows="2" cols="15" ><?php echo $interrupt2;?></textarea></td>
                        <td align="center"><textarea name="interrupt3" rows="2" cols="15" ><?php echo $interrupt3;?></textarea></td>
                    </tr>
                    <tr>
                        <td>උස (සෙ.මි)</td>
                        <td align="center"><textarea name="height1" rows="2" cols="15" ><?php echo $height1;?></textarea></td>
                        <td align="center"><textarea name="height2" rows="2" cols="15" ><?php echo $height2;?></textarea></td>
                        <td align="center"><textarea name="height3" rows="2" cols="15" ><?php echo $height3;?></textarea></td>
                    </tr>
                    <tr>
                        <td>උස තත්වය</td>
                        <td align="center"><textarea name="sheight1" rows="2" cols="15" ><?php echo $sheight1;?></textarea></td>
                        <td align="center"><textarea name="sheight2" rows="2" cols="15" ><?php echo $sheight2;?></textarea></td>
                        <td align="center"><textarea name="sheight3" rows="2" cols="15" ><?php echo $sheight3;?></textarea></td>
                    </tr>
                </table>
                <table style="width:100%">
                    <tr>
                        <th rowspan="2" align="left">විටමින් ඒ ඌනතාව</th>
                        <td style="width:36.95%">රාත්‍රී අන්ධතාවය</td>
                        <th style="width:15.5%"><select id="night1" name="night1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($night1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($night1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="night2" name="night2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($night2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($night2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="night3" name="night3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($night3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($night3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <td >බිටෝ ලප</td>
                        <th><select id="bito1" name="bito1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($bito1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($bito1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th ><select id="bito2" name="bito2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($bito2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($bito2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th ><select id="bito3" name="bito3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($bito3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($bito3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                </table>
                <table style="width:100% ;margin-bottom: 50px;">
                    <tr>
                        <th align="left">නීරක්තිය</th>
                        <th style="width:15.5%"><select id="ni1" name="ni1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($ni1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($ni1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="ni2" name="ni2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($ni2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($ni2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                        
                        <th style="width:15.5%"><select id="ni3" name="ni3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($ni3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($ni3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>

                    <tr>
                        <th align="left">උකුණන් සිටීම</th>
                        <th style="width:15.5%"><select id="louse1" name="louse1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($louse1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($louse1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="louse2" name="louse2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($louse2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($louse2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="louse3" name="louse3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($louse3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($louse3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                </table>
                <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">

            </div>
        </form>
    </body>
</html>           
