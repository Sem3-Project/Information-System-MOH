<?php
require '../models/Refer2.model.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Refarrals on Immunization - II</title>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm.css">
        <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/logo.png">
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
        <form action="Refer2_page.php" method="post" >
        <div>
                <div class="caption-container1">
                <div class="caption-container"><h3>යොමු කිරීම් - වගුව II</h3></div>
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id'];?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search"></center>
                    

                    <table style="width:100% ;margin-bottom: 50px;">
                        <tr>
                            <th colspan="4" align="left">රෝහල්ගත වීම / බරපතල රෝග තත්වයන්</th>    
                        </tr>
                        <tr>
                            <th>දිනය</th>
                            <th>රෝහල්ගත කිරීමට හේතුව</th>
                            <th>රෝග විනිශ්චය</th>
                            <th>ආපසු යොමු කිරීම/පසු විපරම්වල ප්‍රතිඵල</th>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate1" value="<?php if (isset($_POST['ndate1'])) echo $_POST['ndate1'];?>"></td>
                            <td align="center"><textarea name="nreason1" rows="2" style="width:100%" ><?php if (isset($_POST['nreason1'])) echo $_POST['nreason1'];?></textarea></td>
                            <td align="center"><textarea name="nplace1" rows="2" style="width:100%" ><?php if (isset($_POST['nplace1'])) echo $_POST['nplace1'];?></textarea></td>
                            <td align="center"><textarea name="nresult1" rows="2" style="width:100%" ><?php if (isset($_POST['nresult1'])) echo $_POST['nresult1'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate2" value="<?php if (isset($_POST['ndate2'])) echo $_POST['ndate2'];?>"></td>
                            <td align="center"><textarea name="nreason2" rows="2" style="width:100%" ><?php if (isset($_POST['nreason2'])) echo $_POST['nreason2'];?></textarea></td>
                            <td align="center"><textarea name="nplace2" rows="2" style="width:100%" ><?php if (isset($_POST['nplace2'])) echo $_POST['nplace2'];?></textarea></td>
                            <td align="center"><textarea name="nresult2" rows="2" style="width:100%" ><?php if (isset($_POST['nresult2'])) echo $_POST['nresult2'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate3" value="<?php if (isset($_POST['ndate3'])) echo $_POST['ndate3'];?>"></td>
                            <td align="center"><textarea name="nreason3" rows="2" style="width:100%" ><?php if (isset($_POST['nreason3'])) echo $_POST['nreason3'];?></textarea></td>
                            <td align="center"><textarea name="nplace3" rows="2" style="width:100%" ><?php if (isset($_POST['nplace3'])) echo $_POST['nplace3'];?></textarea></td>
                            <td align="center"><textarea name="nresult3" rows="2" style="width:100%" ><?php if (isset($_POST['nresult3'])) echo $_POST['nresult3'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate4" value="<?php if (isset($_POST['ndate4'])) echo $_POST['ndate4'];?>"></td>
                            <td align="center"><textarea name="nreason4" rows="2" style="width:100%" ><?php if (isset($_POST['nreason4'])) echo $_POST['nreason4'];?></textarea></td>
                            <td align="center"><textarea name="nplace4" rows="2" style="width:100%" ><?php if (isset($_POST['nplace4'])) echo $_POST['nplace4'];?></textarea></td>
                            <td align="center"><textarea name="nresult4" rows="2" style="width:100%" ><?php if (isset($_POST['nresult4'])) echo $_POST['nresult4'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate5" value="<?php if (isset($_POST['ndate5'])) echo $_POST['ndate5'];?>"></td>
                            <td align="center"><textarea name="nreason5" rows="2" style="width:100%" ><?php if (isset($_POST['nreason5'])) echo $_POST['nreason5'];?></textarea></td>
                            <td align="center"><textarea name="nplace5" rows="2" style="width:100%" ><?php if (isset($_POST['nplace5'])) echo $_POST['nplace5'];?></textarea></td>
                            <td align="center"><textarea name="nresult5" rows="2" style="width:100%" ><?php if (isset($_POST['nresult5'])) echo $_POST['nresult5'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate6" value="<?php if (isset($_POST['ndate6'])) echo $_POST['ndate6'];?>"></td>
                            <td align="center"><textarea name="nreason6" rows="2" style="width:100%" ><?php if (isset($_POST['nreason6'])) echo $_POST['nreason6'];?></textarea></td>
                            <td align="center"><textarea name="nplace6" rows="2" style="width:100%" ><?php if (isset($_POST['nplace6'])) echo $_POST['nplace6'];?></textarea></td>
                            <td align="center"><textarea name="nresult6" rows="2" style="width:100%" ><?php if (isset($_POST['nresult6'])) echo $_POST['nresult6'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate7" value="<?php if (isset($_POST['ndate7'])) echo $_POST['ndate7'];?>"></td>
                            <td align="center"><textarea name="nreason7" rows="2" style="width:100%" ><?php if (isset($_POST['nreason7'])) echo $_POST['nreason7'];?></textarea></td>
                            <td align="center"><textarea name="nplace7" rows="2" style="width:100%" ><?php if (isset($_POST['nplace7'])) echo $_POST['nplace7'];?></textarea></td>
                            <td align="center"><textarea name="nresult7" rows="2" style="width:100%" ><?php if (isset($_POST['nresult7'])) echo $_POST['nresult7'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate8" value="<?php if (isset($_POST['ndate8'])) echo $_POST['ndate8'];?>"></td>
                            <td align="center"><textarea name="nreason8" rows="2" style="width:100%" ><?php if (isset($_POST['nreason8'])) echo $_POST['nreason8'];?></textarea></td>
                            <td align="center"><textarea name="nplace8" rows="2" style="width:100%" ><?php if (isset($_POST['nplace8'])) echo $_POST['nplace8'];?></textarea></td>
                            <td align="center"><textarea name="nresult8" rows="2" style="width:100%" ><?php if (isset($_POST['nresult8'])) echo $_POST['nresult8'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate9" value="<?php if (isset($_POST['ndate9'])) echo $_POST['ndate9'];?>"></td>
                            <td align="center"><textarea name="nreason9" rows="2" style="width:100%" ><?php if (isset($_POST['nreason9'])) echo $_POST['nreason9'];?></textarea></td>
                            <td align="center"><textarea name="nplace9" rows="2" style="width:100%" ><?php if (isset($_POST['nplace9'])) echo $_POST['nplace9'];?></textarea></td>
                            <td align="center"><textarea name="nresult9" rows="2" style="width:100%" ><?php if (isset($_POST['nresult9'])) echo $_POST['nresult9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate10" value="<?php if (isset($_POST['ndate10'])) echo $_POST['ndate10'];?>"></td>
                            <td align="center"><textarea name="nreason10" rows="2" style="width:100%" ><?php if (isset($_POST['nreason10'])) echo $_POST['nreason10'];?></textarea></td>
                            <td align="center"><textarea name="nplace10" rows="2" style="width:100%" ><?php if (isset($_POST['nplace10'])) echo $_POST['nplace10'];?></textarea></td>
                            <td align="center"><textarea name="nresult10" rows="2" style="width:100%" ><?php if (isset($_POST['nresult10'])) echo $_POST['nresult10'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate11" value="<?php if (isset($_POST['ndate11'])) echo $_POST['ndate11'];?>"></td>
                            <td align="center"><textarea name="nreason11" rows="2" style="width:100%" ><?php if (isset($_POST['nreason11'])) echo $_POST['nreason11'];?></textarea></td>
                            <td align="center"><textarea name="nplace11" rows="2" style="width:100%" ><?php if (isset($_POST['nplace11'])) echo $_POST['nplace11'];?></textarea></td>
                            <td align="center"><textarea name="nresult11" rows="2" style="width:100%" ><?php if (isset($_POST['nresult11'])) echo $_POST['nresult11'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate12" value="<?php if (isset($_POST['ndate12'])) echo $_POST['ndate12'];?>"></td>
                            <td align="center"><textarea name="nreason12" rows="2" style="width:100%" ><?php if (isset($_POST['nreason12'])) echo $_POST['nreason12'];?></textarea></td>
                            <td align="center"><textarea name="nplace12" rows="2" style="width:100%" ><?php if (isset($_POST['nplace12'])) echo $_POST['nplace12'];?></textarea></td>
                            <td align="center"><textarea name="nresult12" rows="2" style="width:100%" ><?php if (isset($_POST['nresult12'])) echo $_POST['nresult12'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate13" value="<?php if (isset($_POST['ndate13'])) echo $_POST['ndate13'];?>"></td>
                            <td align="center"><textarea name="nreason13" rows="2" style="width:100%" ><?php if (isset($_POST['nreason13'])) echo $_POST['nreason13'];?></textarea></td>
                            <td align="center"><textarea name="nplace13" rows="2" style="width:100%" ><?php if (isset($_POST['nplace13'])) echo $_POST['nplace13'];?></textarea></td>
                            <td align="center"><textarea name="nresult13" rows="2" style="width:100%" ><?php if (isset($_POST['nresult13'])) echo $_POST['nresult13'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate14" value="<?php if (isset($_POST['ndate14'])) echo $_POST['ndate14'];?>"></td>
                            <td align="center"><textarea name="nreason14" rows="2" style="width:100%" ><?php if (isset($_POST['nreason14'])) echo $_POST['nreason14'];?></textarea></td>
                            <td align="center"><textarea name="nplace14" rows="2" style="width:100%" ><?php if (isset($_POST['nplace14'])) echo $_POST['nplace14'];?></textarea></td>
                            <td align="center"><textarea name="nresult14" rows="2" style="width:100%" ><?php if (isset($_POST['nresult14'])) echo $_POST['nresult14'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate15" value="<?php if (isset($_POST['ndate15'])) echo $_POST['ndate15'];?>"></td>
                            <td align="center"><textarea name="nreason15" rows="2" style="width:100%" ><?php if (isset($_POST['nreason15'])) echo $_POST['nreason15'];?></textarea></td>
                            <td align="center"><textarea name="nplace15" rows="2" style="width:100%" ><?php if (isset($_POST['nplace15'])) echo $_POST['nplace15'];?></textarea></td>
                            <td align="center"><textarea name="nresult15" rows="2" style="width:100%" ><?php if (isset($_POST['nresult15'])) echo $_POST['nresult15'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate16" value="<?php if (isset($_POST['ndate16'])) echo $_POST['ndate16'];?>"></td>
                            <td align="center"><textarea name="nreason16" rows="2" style="width:100%" ><?php if (isset($_POST['nreason16'])) echo $_POST['nreason16'];?></textarea></td>
                            <td align="center"><textarea name="nplace16" rows="2" style="width:100%" ><?php if (isset($_POST['nplace16'])) echo $_POST['nplace16'];?></textarea></td>
                            <td align="center"><textarea name="nresult16" rows="2" style="width:100%" ><?php if (isset($_POST['nresult16'])) echo $_POST['nresult16'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate17" value="<?php if (isset($_POST['ndate17'])) echo $_POST['ndate17'];?>"></td>
                            <td align="center"><textarea name="nreason17" rows="2" style="width:100%" ><?php if (isset($_POST['nreason17'])) echo $_POST['nreason17'];?></textarea></td>
                            <td align="center"><textarea name="nplace17" rows="2" style="width:100%" ><?php if (isset($_POST['nplace17'])) echo $_POST['nplace17'];?></textarea></td>
                            <td align="center"><textarea name="nresult17" rows="2" style="width:100%" ><?php if (isset($_POST['nresult17'])) echo $_POST['nresult17'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate18" value="<?php if (isset($_POST['ndate18'])) echo $_POST['ndate18'];?>"></td>
                            <td align="center"><textarea name="nreason18" rows="2" style="width:100%" ><?php if (isset($_POST['nreason18'])) echo $_POST['nreason18'];?></textarea></td>
                            <td align="center"><textarea name="nplace18" rows="2" style="width:100%" ><?php if (isset($_POST['nplace18'])) echo $_POST['nplace18'];?></textarea></td>
                            <td align="center"><textarea name="nresult18" rows="2" style="width:100%" ><?php if (isset($_POST['nresult18'])) echo $_POST['nresult18'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="ndate19" value="<?php if (isset($_POST['ndate19'])) echo $_POST['ndate19'];?>"></td>
                            <td align="center"><textarea name="nreason19" rows="2" style="width:100%" ><?php if (isset($_POST['nreason19'])) echo $_POST['nreason19'];?></textarea></td>
                            <td align="center"><textarea name="nplace19" rows="2" style="width:100%" ><?php if (isset($_POST['nplace19'])) echo $_POST['nplace19'];?></textarea></td>
                            <td align="center"><textarea name="nresult19" rows="2" style="width:100%" ><?php if (isset($_POST['nresult19'])) echo $_POST['nresult19'];?></textarea></td>
                        </tr>
                        
                    </table>
                    <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                    <center><input type="submit" class="link" name="update" style="margin-bottom: 50px; margin-right: 50px;" value="Update"></center>
                    <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->
                </div>
            </div>
        </form>
    </body>
</html>

