<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td{
                border:1px solid black;
                border-collapse: collapse;
                
            }
            
            th, td{
                padding:15px;
            }
            
            textarea{
                display: inline-block;
                border: 1px solid #bbb;
                border-radius: 4px;
                box-sizing: border-box;
                resize:none;
            }
            div{
                margin-top:20px;
                margin-left: 40px;
                margin-right:40px;
               
                
            }

            input[type=text], select {
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input.largerCheckbox { 
            width: 20px; 
            height: 20px; 
            
        } 
       
        </style>
    </head>
    <body>
        <div>
        <h3>Search NIC :</h3>
            <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="idNew" value="<?php echo $idNew;?>"><br><br>
            <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">
           
            <h3>පසු ප්‍රසව ක්ෂේත්‍ර සංරක්ෂණය / Post Partum Field Care</h3>
            <table style="width:100% ;margin-bottom: 50px;" >
                <tr>
                    <th>හඳුනාගත් පසුප්‍රසව රෝගී තත්ව සහ ගත් පියවර / Identified post partum morbidities & Actions taken</th>
                </tr>
                <tr>
                    <td><textarea rows="4" cols="170" name="ipp" value="<?php echo $ipp;?>"></textarea></td>
                </tr>
            </table>

            <p>Z Score: <textarea rows="1" cols="100"  style="width: 50%; height: 30px;" name="zscore" value="<?php echo $zscore;?>"></textarea></p>

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
                    <td><textarea rows="1" cols="100" name="cday" value="<?php echo $cday;?>"></textarea></td>
                </tr>
                <tr>
                    <td ><textarea rows="2" cols="100" name="cplace" value="<?php echo $cplace;?>"></textarea></td> 
                </tr>

            </table>

            <h3>පසු ප්‍රසව සායනික සංරක්ෂණය / Postnatal clinic care</h3>
            <h4>දිනය / Date: <input type ="date" style="width: 50%; height: 30px;" name="date" value="<?php echo $date;?>"></h4>
            <br>

            <table style="width:100% ;margin-bottom: 50px;" > 
                <tr>
                    <td style="width:60%">පියයුරු ගැටළු / Breast problems</td>
                    <td ><textarea rows="2" cols="70" name="bpro" value="<?php echo $bpro;?>"></textarea></td>
                </tr>
                <tr>
                    <td>අසාමාන්‍ය යෝනි ස්‍රාව / Abnormal vaginal discharge</td>
                    <td ><textarea rows="2" cols="70" name="avd" value="<?php echo $avd;?>"></textarea></td>
                </tr>
                <tr>
                    <td>අධික ලෙස යෝනි රුධිර වහනය / Excessive vaginal bleeding</td>
                    <td ><textarea rows="2" cols="70" name="evb" value="<?php echo $evb;?>"></textarea></td>
                </tr>
                <tr> 
                    <td>සුදුමැලි බව / Pallor</td>
                    <td ><textarea rows="2" cols="70" name="pallor" value="<?php echo $pallor;?>"></textarea></td>
                </tr>
                <tr>
                    <td>කාමලාව / Icterus</td>
                    <td ><textarea rows="2" cols="70" name="icterus" value="<?php echo $icterus;?>"></textarea></td>
                </tr>
                <tr>
                    <td>ඉදිමුම (වළලුකර සහ / හෝ මුහුණ) / Oedema (ankle and/or facial)</td>
                    <td ><textarea rows="2" cols="70" name="oedema" value="<?php echo $oedema;?>"></textarea></td>
                </tr>
                <tr>
                    <td>රුධිර පීඩනය / BP</td>
                    <td ><textarea rows="2" cols="70" name="bp" value="<?php echo $bp;?>"></textarea></td>
                </tr>
                <tr>
                    <td>රුධිර වාහිනී පද්ධතිය / Cardiovascular system</td>
                    <td ><textarea rows="1" cols="70" name="cs" value="<?php echo $cs;?>"></textarea></td>
                </tr>
                <tr>
                    <td>ශ්වසන පද්ධතිය / Respiratory system</td>
                    <td ><textarea rows="2" cols="70" name="rs" value="<?php echo $rs;?>"></textarea></td>
                </tr>
                <tr>
                    <td>උදර පරීක්ෂාව / Abdominal examination</td>
                    <td ><textarea rows="2" cols="70" name="ae" value="<?php echo $ae;?>"></textarea></td>
                </tr>
                <tr>
                    <td>යෝනි පරීක්ෂව අවශ්‍යනම් / Vaginal examination if neeeded</td>
                    <td ><textarea rows="2" cols="70" name="ve" value="<?php echo $ve;?>"></textarea></td>
                </tr>
                

            </table>

            <table style="width:100% ;margin-bottom: 50px;" >
                <tr>
                    <td style="width:60%">පූර්ව පරීක්ෂණ මෙවලමට අනුව මානසික තත්වය (EPDS) / Mental status according to the screening tool (EPDS)</td>
                    <td ><textarea rows="2" cols="70" name="epds" value="<?php echo $epds;?>"></textarea></td>
                </tr>
                <tr>
                    <td>වෙනත් / Other</td>
                    <td ><textarea rows="3" cols="70" name="other" value="<?php echo $other;?>"></textarea></td>
                </tr>
                <tr>
                    <td>මවගේ හඳුනාගත් ගැටළු සහ ගත් පියවර / Identified problems in mother and actions taken</td>
                    <td ><textarea rows="3" cols="70" name="problem" value="<?php echo $problem;?>"></textarea></td>
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
                    <td ><textarea rows="2" cols="100"></textarea></td>
                </tr>
            </table>

            <h4>පවුල් සැලසුම් සායනය / Family planning clinic</h4>
            <table style="width:100% ;margin-bottom: 50px;">
                <tr>
                    <td style="width:100%">ස්ථානය / Place</td>
                    <td ><textarea rows="2" cols="100"></textarea></td>
                </tr>
                <tr>
                    <td>දිනය / Date</td>
                    <td ><input type="date"></td>
                </tr>
                <tr>
                    <td>වේලාව / Time</td>
                    <td><input type="time"></td>
                </tr>
                <tr>
                    <td>විශේෂ සටහන් / Special notes</td>
                    <td ><textarea rows="2" cols="100"></textarea></td>
                </tr>
            </table>
            <table style="width:100% ;margin-bottom: 50px;">
                <tr>
                    <td style="width:60%">පරීක්ෂා කරන ලද නිලධාරියාගේ නම / Name of the officer examined</td>
                    <td ><textarea rows="2" cols="70"></textarea></td>
                </tr>
                <tr>
                    <td>නිල නාමය / Designation</td>
                    <td ><textarea rows="2" cols="70"></textarea></td>
                </tr>
            </table>

            <h3>හදිසි අවස්ථාවකදී දැනුම් දීම / In an emergency contact</h3>
            <table style="width:100% ;margin-bottom: 30px;">
                <tr>
                    <td rowspan="2" style="width:60%">දැනුම් දියයුතු අයගේ නම සහ ලිපිනය / Name and address of the contact person<br><br>
                        දුරකථන අංකය / Telephone No</td>
                    <td ><textarea rows="3" cols="70"></textarea></td>
                </tr>
                <tr>
                    <td ><input type="tel" placeholder="012-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                        required></td>
                </tr>
                <tr>
                    <td>පවුල් සෞඛ්‍ය සේවා නිලධාරිනියගේ දුරකථන අංකය / Telephone No of PHM</td>
                    <td ><input type="tel" placeholder="012-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                        required></td>
                </tr>
                <tr>
                    <td>සෞඛ්‍ය වෛද්‍ය නිලධාරී කාර්යාලයේ දුරකථන අංකය / Telephone No of the MOH office</td>
                    <td ><input type="tel" placeholder="012-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                        required></td>
                </tr>
            </table>

            <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
            <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Update">

        </div>
    </body>
</html>