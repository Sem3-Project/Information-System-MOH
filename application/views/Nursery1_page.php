<?php
require '../models/Nursery1_model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newStyle.css">
    </head>
    <body>
        <form action="Nursery1_page.php" method="post" >
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
                <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->

            </div>
        </form>
    </body>
</html>           