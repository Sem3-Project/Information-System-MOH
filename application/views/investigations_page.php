<?php
require '../models/investigation_model.php';
?>
<html>
    <head>
        <title>Investigations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../public/css/clinic style.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/table.css">
        
    </head>
    <body>
        <form action="investigations_page.php" method="post">
        <h2 class="title">පරීක්ෂණ(Investigations)</h2>
          
            <input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here"  value="<?php echo $id;?>"><br>
            <button type="submit" name="search" value="Find">Search</button>&nbsp; &nbsp;<br><br>

            <h5><b>හෘද පරීක්ෂාව(Auscutation)</b></h5>
            <div class="input-group"><input class="input--style-2" type="text" name="ausT1" placeholder="T1" value="<?php echo $ausT1;?>"></div>
            <div class="input-group"><input class="input--style-2" type="text" name="ausT2" placeholder="T2" value="<?php echo $ausT2;?>"></div>
            <div class="input-group"><input class="input--style-2" type="text" name="ausT3" placeholder="T3" value="<?php echo $ausT3;?>"></div><br><br>
            
            <h5><b>මානසික සෞඛ්‍ය පරීක්ෂාව(Mental Health)</b></h5>
            <div class="input-group"><input type="text" name="menT1" placeholder="T1" value="<?php echo $menT1;?>"></div>
            <div class="input-group"><input type="text" name="menT2" placeholder="T2" value="<?php echo $menT2;?>"></div>
            <div class="input-group"><input type="text" name="menT3" placeholder="T3" value="<?php echo $menT3;?>"></div><br><br>

            <h5><b>ශ්වසන පරීක්ෂාව(Respiratory System)</b></h5>
            <div class="input-group"><input type="text" name="respirEx" value="<?php echo $respirEx;?>"></div><br><br>

            <h5><b>පියයුරු පරීක්ෂාව(Breast Examination)</b></h5>
            <div class="input-group"><input type="text" name="breastEx" value="<?php echo $breastEx;?>"></div><br><br>

            <h5><b>රුධිරයේ සීනි(Blood Sugar)</b></h5><br>
            <table style="width:100%">
                <tr>
                    <th>ගර්භ සති ගණන(POA)</th>
                    <th>ප්‍රතිඵල(Result)</th>
                </tr>
                <tr>
                    <td><input type="number" name="bs1" value=<?php echo $bs1;?>></td>
                    <td><input type="text" name="bs1res" value="<?php echo $bs1res;?>"></td>
                </tr>
                <tr>
                    <td><input type="number" name="bs2" value=<?php echo $bs2;?>></td>
                    <td><input type="text" name="bs2res" value="<?php echo $bs2res;?>"></td>
                </tr>
            </table><br><br><br>

            <h5><b>හිමොග්ලොබින්(Haemoglobin)</b></h5><br>
            <table style="width:100%">
                <tr>
                    <th>ගර්භ සති ගණන(POA)</th>
                    <th>ප්‍රතිඵල(Result)</th>
                </tr>
                <tr>
                    <td><input type="number" name="heam1" value=<?php echo $heam1;?>></td>
                    <td><input type="text" name="heam1res" value="<?php echo $heam1res;?>"></td>
                </tr>
                <tr>
                    <td><input type="number" name="heam2" value=<?php echo $heam2;?>></td>
                    <td><input type="text" name="heam2res" value="<?php echo $heam2res;?>"></td>
                </tr>
            </table><br><br><br>

            <h5><b>වෙනත් පරීක්ෂණ(Other Investigations)</b></h5>
            <div class="input-group"><input type="text" name="other" value="<?php echo $other;?>"></div><br><br>

            <h5><b>පණු ප්‍රතිකාර(Antihelminthic Drugs)</b></h5><br>
            <div class="input-group">
                <select name="anti"></option>
                    <option value="not done">---Select---</option>
                    <option value="Not Done" <?php if($anti=="Not Done") echo 'selected="selected"'; ?>>Not Done</option>
                    <option value="Done"  <?php if($anti=="Done") echo 'selected="selected"'; ?>>Done</option>
                </select>
            </div><br><br>

            <h5><b>භ්‍රෑණ චලන සටහන්පත ලබා දුන් දිනය(Date of issuing kick count chart)</b></h5>
            <div class="input-group"><input type="date" name="kick" value="<?php echo $kick;?>"></div><br><br>

            <h5><b>දන්ත සංරක්ෂණය(Dental Care)</b></h5>
            <h5><b>යොමුකළ දිනය(Referred date)</b></h5><br>
            <div class="input-group"><input type="date" name="dentref" value="<?php echo $dentref;?>"></div><br><br>

            <h5><b>පරීක්ෂා කල දිනය(Date of examination)</b></h5>
            <div class="input-group"><input type="date" name="dentex" value="<?php echo $dentex;?>"></div><br><br>
                        
            <h5><b>ප්‍රතිකාර(Treatment)</b></h5>
            <div class="input-group"><input type="text" name="denttreat" value="<?php echo $denttreat;?>"></div><br><br>

            <h5><b>උපදංශය සඳහා පූර්ව පරීක්ෂාව(Syphilis Screening)</b></h5><br>
            <table style="width:100%">
                <tr>
                    <td>රුධිර සාම්පලය ගන්නා විට ගර්භයට සති/POA of blood sampling</td>
                    <td><input type="number" name="syppoa" value=<?php echo $syppoa;?>></td> 
                </tr>
                <tr>
                    <td>රුධිර සාම්පලය ගත් දිනය/Date of blood sampling</td>
                    <td><input type="date" name="syptake" value="<?php echo $syptake;?>"></td> 
                </tr>
                <tr>
                    <td> ප්‍රතිඵලය පැමිණි දිනය/Date of result received</td>
                    <td><input type="date" name="sypreci" value="<?php echo $sypreci;?>"></td> 
                </tr>
                <tr>
                    <td>ප්‍රතිඵලය/Result</td>
                    <td>
                        <select name="sypres"></option>
                            <option value="not done">---Select---</option>
                            <option value="NR" <?php if($sypres=="NR") echo 'selected="selected"'; ?>>NR</option>
                            <option value="R"  <?php if($sypres=="R") echo 'selected="selected"'; ?>>R</option>
                        </select>

                        <!--select name="course">
                            <option value="0">Please Select Option</option>
                            <option value="PHP" <--?php if($options=="PHP") echo 'selected="selected"'; ?>>PHP</option>
                            <option value="ASP" <--?php if($options=="ASP") echo 'selected="selected"'; ?>>ASP</option>
                        </select-->

                        <!--select name="sypres" value="<--?php echo $sypres;?>" hidden= <-?php echo $sypress;?>></option>
                            <option value="not done">---Select---</option>
                            <option value="NR">NR</option>
                            <option value="R">R</option>
                        </select-->

                    </td> 
                </tr>
                <tr>
                    <td>ප්‍රතිඵලය (R) නම් වැඩිදුර ප්‍රතිකාර සඳහා යොමුකල දිනය /If (R) Date of referrel</td>
                    <td><input type="date" name="sypref" value="<?php echo $sypref;?>"></td> 
                </tr>
            </table><br><br><br>

            <table>
                <tr>
                    <td>HIV පූර්ව පරීක්ෂාව සඳහා රුධිර සාම්පලය ලබාගත් දිනය/Date of taking blood sample for the HIV screening</td>
                    <td><input type="date" name="hivtake" value="<?php echo $hivtake;?>"></td> 
                </tr>
                <tr>
                    <td>ප්‍රතිඵලය මවට දැනුම්දුන් දිනය/Date of result informed to mother</td>
                    <td><input type="date" name="hivinform" value="<?php echo $hivinform;?>"></td> 
                </tr>
            </table><br><br>

            <h5><b>පිටගැස්ම ධුලකාභ ප්‍රතිශක්තිකරණය(Tetanus Toxoid Immunization)</b></h5><br>
                <table style="width:100">
                    <tr>
                        <td>මාත්‍රාව/Dose</td>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>NE</th>
                    </tr>
                    <tr>
                        <td>දිනය/Date</td>
                        <td><input type="date" name="tdate1" value="<?php echo $tdate1;?>"></td>
                        <td><input type="date" name="tdate2" value="<?php echo $tdate2;?>"></td>
                        <td><input type="date" name="tdate3" value="<?php echo $tdate3;?>"></td>
                        <td><input type="date" name="tdate4" value="<?php echo $tdate4;?>"></td>
                        <td><input type="date" name="tdate5" value="<?php echo $tdate5;?>"></td>
                        <td><input type="date" name="tne" value="<?php echo $tne;?>"></td>
                    </tr>
                    <tr>
                        <td>ඛාණ්ඩ අංකය/Batch No.</td>
                        <td><input type="text" name="tbatch1" value="<?php echo $tbatch1;?>"></td>
                        <td><input type="text" name="tbatch2" value="<?php echo $tbatch2;?>"></td>
                        <td><input type="text" name="tbatch3" value="<?php echo $tbatch3;?>"></td>
                        <td><input type="text" name="tbatch4" value="<?php echo $tbatch4;?>"></td>
                        <td><input type="text" name="tbatch5" value="<?php echo $tbatch5;?>"></td>
                        <td><input type="text" name="tnebatch" value="<?php echo $tnebatch;?>"></td>
                        </tr>
                </table><br><br><br>
           
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" name="update" >Update</button>
        </form>
    </body>
</html>