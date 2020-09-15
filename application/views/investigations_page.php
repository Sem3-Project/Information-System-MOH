<?php
require '../models/investigation_model.php';
?>
<html>
    <head>
        <title>Investigations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm.css">
        <!-- <link rel="stylesheet" type="text/css" href="../../public/css/formsCommon.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/clinic style.css"> -->
        <link rel="stylesheet" type="text/css" href="../../public/css/table.css">


        
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
        
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
        <div>
        <div class="caption-container1">
        <form action="investigations_page.php" method="post">
        <h2 class="title" align="center">පරීක්ෂණ / Investigations</h2>
        <!-- <input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here"  value="<--?php echo $id;?>"><br> -->
        <div class="caption-container">
            <h3 >Search NIC :</h3>
        </div>
            <!-- <input type="text" name="id" placeholder="Search NIC"  value="<--?php echo $id;?>"><br>
            <button class="buttton" type="submit" name="search" value="Find" style="vertical-align:middle" id="search"><span>Search</span></button>&nbsp; &nbsp;<br><br> -->
            <!-- <a href="#update">Scroll to bottom</a> -->

            <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>"><br><br>

                <input type="submit" class="link" name="search" value="Search"></center>

<!-- 
            <h5><b>හෘද පරීක්ෂාව(Auscutation)</b></h5> -->
            <div class="caption-container"><h3 >හෘද පරීක්ෂාව / Auscutation</h3></div>
            <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT1" placeholder="T1" value="<?php echo $ausT1;?>"><br><br>
            <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT2" placeholder="T2" value="<?php echo $ausT2;?>"><br><br>
            <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="ausT3" placeholder="T3" value="<?php echo $ausT3;?>"><br><br>
            
            <div class="caption-container"><h3>මානසික සෞඛ්‍ය පරීක්ෂාව / Mental Health</h3></div>
            <input style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="menT1" placeholder="T1" value="<?php echo $menT1;?>"><br><br>
            <input style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="menT2" placeholder="T2" value="<?php echo $menT2;?>"><br><br>
            <input style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="menT3" placeholder="T3" value="<?php echo $menT3;?>"><br><br>

            <div class="caption-container"><h3>ශ්වසන පරීක්ෂාව / Respiratory System</h3></div>
            <input style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px; " type="text" name="respirEx" value="<?php echo $respirEx;?>"><br><br>

            <div class="caption-container"><h3>පියයුරු පරීක්ෂාව / Breast Examination</h3></div>
            <input style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" type="text" name="breastEx" value="<?php echo $breastEx;?>"><br><br>

            <div class="caption-container"><h3>රුධිරයේ සීනි / Blood Sugar</h3></div>
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
            </table>

            <div class="caption-container"><h3>හිමොග්ලොබින් / Haemoglobin</h3></div>
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
            </table>

            <div class="caption-container"><h3>වෙනත් පරීක්ෂණ / Other Investigations</h3></div>
            <input class="input--style-2" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" type="text" name="other" value="<?php echo $other;?>"><br><br>

            <div class="caption-container"><h3>පණු ප්‍රතිකාර / Antihelminthic Drugs</h3></div>
                <select name="anti" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"></option>
                    <option value="not done">---Select---</option>
                    <option value="Not Done" <?php if($anti=="Not Done") echo 'selected="selected"'; ?>>Not Done</option>
                    <option value="Done"  <?php if($anti=="Done") echo 'selected="selected"'; ?>>Done</option>
                </select>
            <br><br>

            <div class="caption-container"><h3>භ්‍රෑණ චලන සටහන්පත ලබා දුන් දිනය / Date of issuing kick count chart</h3></div>
            <input style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" type="date" name="kick" value="<?php echo $kick;?>">

            <div class="caption-container"><h3>දන්ත සංරක්ෂණය / Dental Care</h3></div>
            <div style="text-align:left; width: 50%; height: 20px; padding:10px; font-size:15px;"><b>යොමුකළ දිනය / Referred date</b></div>
            <input type="date" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="dentref" value="<?php echo $dentref;?>"><br><br>

            <div style="text-align:left; width: 50%; height: 20px; padding:10px; font-size:15px;"><b>පරීක්ෂා කල දිනය / Date of examination</b></div>
            <input type="date" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;" name="dentex" value="<?php echo $dentex;?>"><br><br>
                        
            <div style="text-align:left; width: 50%; height: 20px; padding:10px; font-size:15px;"><b>ප්‍රතිකාර / Treatment</b></div>
            <input type="text" style="text-align:left; width: 100%; height: 50px; padding:10px; font-size:15px;"  name="denttreat" value="<?php echo $denttreat;?>"><br><br>

            <div class="caption-container"><h3>උපදංශය සඳහා පූර්ව පරීක්ෂාව / Syphilis Screening</h3></div>
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
                    </td> 
                </tr>
                <tr>
                    <td>ප්‍රතිඵලය (R) නම් වැඩිදුර ප්‍රතිකාර සඳහා යොමුකල දිනය /If (R) Date of referrel</td>
                    <td><input type="date" name="sypref" value="<?php echo $sypref;?>"></td> 
                </tr>
            </table>

            <table style="width: 100%;">
                <tr>
                    <td>HIV පූර්ව පරීක්ෂාව සඳහා රුධිර සාම්පලය ලබාගත් දිනය/Date of taking blood sample for the HIV screening</td>
                    <td><input type="date" name="hivtake" value="<?php echo $hivtake;?>"></td> 
                </tr>
                <tr>
                    <td>ප්‍රතිඵලය මවට දැනුම්දුන් දිනය/Date of result informed to mother</td>
                    <td><input type="date" name="hivinform" value="<?php echo $hivinform;?>"></td> 
                </tr>
            </table>

            <div class="caption-container"><h3>පිටගැස්ම ධුලකාභ ප්‍රතිශක්තිකරණය / Tetanus Toxoid Immunization</h3></div>
                <table style="width:100%">
                    <tr>
                        <td style="width:15%">මාත්‍රාව / Dose</td>
                        <th >1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>NE</th>
                    </tr>
                    <tr>
                        <td>දිනය / Date</td>
                        <td><input type="date" name="tdate1" style="width:100%;" value="<?php echo $tdate1;?>"></td>
                        <td><input type="date" name="tdate2" style="width:100%;" value="<?php echo $tdate2;?>"></td>
                        <td><input type="date" name="tdate3" style="width:100%;" value="<?php echo $tdate3;?>"></td>
                        <td><input type="date" name="tdate4" style="width:100%;" value="<?php echo $tdate4;?>"></td>
                        <td><input type="date" name="tdate5" style="width:100%;" value="<?php echo $tdate5;?>"></td>
                        <td><input type="date" name="tne" style="width:100%;" value="<?php echo $tne;?>"></td>
                    </tr>
                    <tr>
                        <td>ඛාණ්ඩ අංකය / Batch No.</td>
                        <td><input type="text" style="width:100%;" name="tbatch1" value="<?php echo $tbatch1;?>"></td>
                        <td><input type="text" style="width:100%;" name="tbatch2" value="<?php echo $tbatch2;?>"></td>
                        <td><input type="text" style="width:100%;" name="tbatch3" value="<?php echo $tbatch3;?>"></td>
                        <td><input type="text"  style="width:100%;" name="tbatch4" value="<?php echo $tbatch4;?>"></td>
                        <td><input type="text"  style="width:100%;" name="tbatch5" value="<?php echo $tbatch5;?>"></td>
                        <td><input type="text"  style="width:100%;" name="tnebatch" value="<?php echo $tnebatch;?>"></td>
                        </tr>
                </table>
          
            <!-- <button type="submit" name="update" class="" id="update">Update</button> -->
            <center><input type="submit" class="link" name="update" style="margin-bottom: 50px;" id="update" value="Update"></center>
            <!-- <a href="#search"><img class="up-icon" src="https://www.startutorial.com/img/up.png" /></a> -->
</div>
</div>
        </form>
    </body>
</html>
