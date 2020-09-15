<?php
require '../models/Nursery2_model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Record for Nursery Children - I</title>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm1.css">
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
    <body>
        <form action="Nursery2_page.php" method="post" >
            <div>
            <div class="caption-container1">
                    <div class="caption-container"><h3 >Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>"><br><br>

                    <input type="submit" class="link" name="search" value="Search"></center>

                    <div class="caption-container"><h3>පෙර පාසැල් දරුවන්ගේ වෛද්‍ය පරීක්ෂණය - වගුව II</h3></div>
                    <table style="width:100%" >
                        <tr>
                            <th></th>
                            <th style="width:15.5%">1</th>
                            <th style="width:15.5%">2</th>
                            <th style="width:15.5%">3</th>
                        </tr>
                    </table>
                    <table style="width:100%" >
                        <tr>
                            <th rowspan="2" align="left">වපරය / Squint</th>
                            <td>වම / Left</td>
                            <th style="width:15.5%"><select id="lsquint1" name="lsquint1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lsquint1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lsquint1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="lsquint2" name="lsquint2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lsquint2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lsquint2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="lsquint3" name="lsquint3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lsquint3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lsquint3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <td>දකුණ / Right</td>
                            <th style="width:15.5%"><select id="rsquint1" name="rsquint1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($rsquint1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($rsquint1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="rsquint2" name="rsquint2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($rsquint2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($rsquint2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="rsquint3" name="rsquint3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($rsquint3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($rsquint3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th rowspan="2" align="left">පෙනීම / Vision</th>
                            <td>වම / Left</td>
                            <th style="width:15.5%"><select id="lvision1" name="lvision1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lvision1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lvision1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="lvision2" name="lvision2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lvision2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lvision2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="lvision3" name="lvision3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lvision3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lvision3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <td>දකුණ / Right</td>
                            <th style="width:15.5%"><select id="rvision1" name="rvision1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($rvision1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($rvision1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="rvision2" name="rvision2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($rvision2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($rvision2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="rvision3" name="rvision3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($rvision3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($rvision3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th rowspan="2" align="left">ඇසීම / Hearing</th>
                            <td>වම / Left</td>
                            <th style="width:15.5%"><select id="lhearing1" name="lhearing1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lhearing1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lhearing1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="lhearing2" name="lhearing2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lhearing2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lhearing2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="lhearing3" name="lhearing3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lhearing3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lhearing3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <td>දකුණ / Right</td>
                            <th style="width:15.5%"><select id="rhearing1" name="rhearing1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($rhearing1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($rhearing1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="rhearing2" name="rhearing2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($rhearing2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($rhearing2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="rhearing3" name="rhearing3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($rhearing3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($rhearing3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                    </table>
                    <table style="width:100% ;">
                        <tr>
                            <th align="left">කතාව / Speech</th>
                            <th style="width:15.5%"><select id="speech1" name="speech1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($speech1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($speech1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="speech2" name="speech2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($speech2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($speech2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="speech3" name="speech3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($speech3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($speech3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th align="left">දන්ත ව්‍යසනය / Dental Deformity</th>
                            <th style="width:15.5%"><select id="tooth1" name="tooth1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($tooth1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($tooth1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="tooth2" name="tooth2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($tooth2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($tooth2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="tooth3" name="tooth3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($tooth3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($tooth3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th align="left">දන්ත දෝෂ / Dental Problems</th>
                            <th style="width:15.5%"><select id="teeth1" name="teeth1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($teeth1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($teeth1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="teeth2" name="teeth2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($teeth2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($teeth2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="teeth3" name="teeth3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($teeth3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($teeth3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th align="left">කණ, නාසය, උගුර / Ear, Nose, Throat</th>
                            <th style="width:15.5%"><select id="ynt1" name="ynt1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($ynt1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($ynt1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="ynt2" name="ynt2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($ynt2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($ynt2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="ynt3" name="ynt3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($ynt3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($ynt3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th align="left">අසංවේදී, ලප කැලැල් / Insensitive, Patches</th>
                            <th style="width:15.5%"><select id="mark1" name="mark1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($mark1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($mark1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="mark2" name="mark2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($mark2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($mark2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="mark3" name="mark3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($mark3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($mark3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th align="left">අස්ථි ආබාධ / Bony Deformities</th>
                            <th style="width:15.5%"><select id="bone1" name="bone1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($bone1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($bone1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="bone2" name="bone2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($bone2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($bone2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="bone3" name="bone3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($bone3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($bone3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th align="left">හෘදය / Heart</th>
                            <th style="width:15.5%"><select id="heart1" name="heart1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($heart1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($heart1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="heart2" name="heart2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($heart2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($heart2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="heart3" name="heart3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($heart3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($heart3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th align="left">පෙනහළු / Lungs</th>
                            <th style="width:15.5%"><select id="lungs1" name="lungs1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lungs1=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lungs1=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="lungs2" name="lungs2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lungs2=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lungs2=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>

                            <th style="width:15.5%"><select id="lungs3" name="lungs3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="X" <?php if($lungs3=="X") echo 'selected="selected"';?>>X</option>
                            <option value="O" <?php if($lungs3=="O") echo 'selected="selected"';?>>O</option>
                            </select></th>
                        </tr>
                    </table>
                    <table style="width:100% ;">
                        <tr>
                            <td align="left" rowspan="4"><b>වෙනත් ආබාධ / Other Deformities</b><br>(සදහන් කරන්න) / (Mention)</td>
                            <td align="center" style="width:30%"><textarea name="ovarious1" rows="2" cols="40" ><?php echo $ovarious1;?></textarea></td>
                            <td align="center" style="width:15.5%"><textarea name="ovarious2" rows="2" cols="20" ><?php echo $ovarious2;?></textarea></td>
                            <td align="center" style="width:15.5%"><textarea name="ovarious3" rows="2" cols="20" ><?php echo $ovarious3;?></textarea></td>
                            <td align="center" style="width:15.5%"><textarea name="ovarious4" rows="2" cols="20" ><?php echo $ovarious4;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><textarea name="tvarious1" rows="2" cols="40" ><?php echo $tvarious1;?></textarea></td>
                            <td align="center"><textarea name="tvarious2" rows="2" cols="20" ><?php echo $tvarious2;?></textarea></td>
                            <td align="center"><textarea name="tvarious3" rows="2" cols="20" ><?php echo $tvarious3;?></textarea></td>
                            <td align="center"><textarea name="tvarious4" rows="2" cols="20" ><?php echo $tvarious4;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><textarea name="thvarious1" rows="2" cols="40" ><?php echo $thvarious1;?></textarea></td>
                            <td align="center"><textarea name="thvarious2" rows="2" cols="20" ><?php echo $thvarious2;?></textarea></td>
                            <td align="center"><textarea name="thvarious3" rows="2" cols="20" ><?php echo $thvarious3;?></textarea></td>
                            <td align="center"><textarea name="thvarious4" rows="2" cols="20" ><?php echo $thvarious4;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><textarea name="fvarious1" rows="2" cols="40" ><?php echo $fvarious1;?></textarea></td>
                            <td align="center"><textarea name="fvarious2" rows="2" cols="20" ><?php echo $fvarious2;?></textarea></td>
                            <td align="center"><textarea name="fvarious3" rows="2" cols="20" ><?php echo $fvarious3;?></textarea></td>
                            <td align="center"><textarea name="fvarious4" rows="2" cols="20" ><?php echo $fvarious4;?></textarea></td>
                        </tr>
                    </table>
                    <table style="width:100% ;margin-bottom: 50px;">
                        <tr>
                            <td align="left">පරීක්ෂකගේ නම / Name of Examiner</td>
                            <td align="center" style="width:15.5%"><textarea name="tname1" rows="2" cols="20" ><?php echo $tname1;?></textarea></td>
                            <td align="center" style="width:15.5%"><textarea name="tname2" rows="2" cols="20" ><?php echo $tname2;?></textarea></td>
                            <td align="center" style="width:15.5%"><textarea name="tname3" rows="2" cols="20" ><?php echo $tname3;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="left">පරීක්ෂකගේ තනතුර / Post of Examiner</td>
                            <th style="width:15.5%"><select id="tposition1" name="tposition1" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="Doctor" <?php if($tposition1=="Doctor") echo 'selected="selected"';?>>Doctor</option>
                            <option value="Midwife" <?php if($tposition1=="Midwife") echo 'selected="selected"';?>>Midwife</option>
                            </select></th>

                            <th style="width:15.5%"><select id="tposition2" name="tposition2" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="Doctor" <?php if($tposition2=="Doctor") echo 'selected="selected"';?>>Doctor</option>
                            <option value="Midwife" <?php if($tposition2=="Midwife") echo 'selected="selected"';?>>Midwife</option>
                            </select></th>

                            <th style="width:15.5%"><select id="tposition3" name="tposition3" style="width: 100px; height:30px;" >
                            <option value="not done">---Select---</option>
                            <option value="Doctor" <?php if($tposition3=="Doctor") echo 'selected="selected"';?>>Doctor</option>
                            <option value="Midwife" <?php if($tposition3=="Midwife") echo 'selected="selected"';?>>Midwife</option>
                            </select></th>
                        </tr>
                    </table>
                    <!--<input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">-->
                    <center><input type="submit" class="link" name="update" style="margin-bottom: 50px;" value="Update"></center>
                    <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">-->
                </div>
            </div>
        </form>
    </body>
</html>
