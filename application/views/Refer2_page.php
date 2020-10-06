<?php
require '../models/Refer1.model.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Refarrals on Immunization - I</title>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="../../public/css/newForm.css">
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
        <form action="Refer1_page.php" method="post" >
            <div>
                <div class="caption-container1">
                <div class="caption-container"><h3>යොමු කිරීම් - වගුව I</h3></div>
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id'];?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search"></center>
                    
                
                    <table style="width:100% ;margin-bottom: 50px;">
                        <tr>
                            <th>දිනය</th>
                            <th>යොමු කිරීමට හේතුව</th>
                            <th>යොමු කල ස්ථානය</th>
                            <th>ආපසු යොමු කිරීම/පසු විපරම්වල ප්‍රතිඵල</th>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date1" value="<?php if (isset($_POST['date1'])) echo $_POST['date1'];?>"></td>
                            <td align="center"><textarea name="reason1" rows="2" style="width:100%" ><?php if (isset($_POST['reason1'])) echo $_POST['reason1'];?></textarea></td>
                            <td align="center"><textarea name="place1" rows="2" style="width:100%" ><?php if (isset($_POST['place1'])) echo $_POST['place1'];?></textarea></td>
                            <td align="center"><textarea name="result1" rows="2" style="width:100%" ><?php if (isset($_POST['result1'])) echo $_POST['result1'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date2" value="<?php if (isset($_POST['date2'])) echo $_POST['date2'];?>"></td>
                            <td align="center"><textarea name="reason2" rows="2" style="width:100%" ><?php if (isset($_POST['reason2'])) echo $_POST['reason2'];?></textarea></td>
                            <td align="center"><textarea name="place2" rows="2" style="width:100%" ><?php if (isset($_POST['place2'])) echo $_POST['place2'];?></textarea></td>
                            <td align="center"><textarea name="result2" rows="2" style="width:100%" ><?php if (isset($_POST['result2'])) echo $_POST['result2'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date3" value="<?php if (isset($_POST['date3'])) echo $_POST['date3'];?>"></td>
                            <td align="center"><textarea name="reason3" rows="2" style="width:100%" ><?php if (isset($_POST['reason3'])) echo $_POST['reason3'];?></textarea></td>
                            <td align="center"><textarea name="place3" rows="2" style="width:100%" ><?php if (isset($_POST['place3'])) echo $_POST['place3'];?></textarea></td>
                            <td align="center"><textarea name="result3" rows="2" style="width:100%" ><?php if (isset($_POST['result3'])) echo $_POST['result3'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date4" value="<?php if (isset($_POST['date4'])) echo $_POST['date4'];?>"></td>
                            <td align="center"><textarea name="reason4" rows="2" style="width:100%" ><?php if (isset($_POST['reason4'])) echo $_POST['reason4'];?></textarea></td>
                            <td align="center"><textarea name="place4" rows="2" style="width:100%" ><?php if (isset($_POST['place4'])) echo $_POST['place4'];?></textarea></td>
                            <td align="center"><textarea name="result4" rows="2" style="width:100%" ><?php if (isset($_POST['result4'])) echo $_POST['result4'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date5" value="<?php if (isset($_POST['date5'])) echo $_POST['date5'];?>"></td>
                            <td align="center"><textarea name="reason5" rows="2" style="width:100%" ><?php if (isset($_POST['reason5'])) echo $_POST['reason5'];?></textarea></td>
                            <td align="center"><textarea name="place5" rows="2" style="width:100%" ><?php if (isset($_POST['place5'])) echo $_POST['place5'];?></textarea></td>
                            <td align="center"><textarea name="result5" rows="2" style="width:100%" ><?php if (isset($_POST['result5'])) echo $_POST['result5'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date6" value="<?php if (isset($_POST['date6'])) echo $_POST['date6'];?>"></td>
                            <td align="center"><textarea name="reason6" rows="2" style="width:100%" ><?php if (isset($_POST['reason6'])) echo $_POST['reason6'];?></textarea></td>
                            <td align="center"><textarea name="place6" rows="2" style="width:100%" ><?php if (isset($_POST['place6'])) echo $_POST['place6'];?></textarea></td>
                            <td align="center"><textarea name="result6" rows="2" style="width:100%" ><?php if (isset($_POST['result6'])) echo $_POST['result6'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date7" value="<?php if (isset($_POST['date7'])) echo $_POST['date7'];?>"></td>
                            <td align="center"><textarea name="reason7" rows="2" style="width:100%" ><?php if (isset($_POST['reason7'])) echo $_POST['reason7'];?></textarea></td>
                            <td align="center"><textarea name="place7" rows="2" style="width:100%" ><?php if (isset($_POST['place7'])) echo $_POST['place7'];?></textarea></td>
                            <td align="center"><textarea name="result7" rows="2" style="width:100%" ><?php if (isset($_POST['result7'])) echo $_POST['result7'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date8" value="<?php if (isset($_POST['date8'])) echo $_POST['date8'];?>"></td>
                            <td align="center"><textarea name="reason8" rows="2" style="width:100%" ><?php if (isset($_POST['reason8'])) echo $_POST['reason8'];?></textarea></td>
                            <td align="center"><textarea name="place8" rows="2" style="width:100%" ><?php if (isset($_POST['place8'])) echo $_POST['place8'];?></textarea></td>
                            <td align="center"><textarea name="result8" rows="2" style="width:100%" ><?php if (isset($_POST['result8'])) echo $_POST['result8'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date9" value="<?php if (isset($_POST['date9'])) echo $_POST['date9'];?>"></td>
                            <td align="center"><textarea name="reason9" rows="2" style="width:100%" ><?php if (isset($_POST['reason9'])) echo $_POST['reason9'];?></textarea></td>
                            <td align="center"><textarea name="place9" rows="2" style="width:100%" ><?php if (isset($_POST['place9'])) echo $_POST['place9'];?></textarea></td>
                            <td align="center"><textarea name="result9" rows="2" style="width:100%" ><?php if (isset($_POST['result9'])) echo $_POST['result9'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date10" value="<?php if (isset($_POST['date10'])) echo $_POST['date10'];?>"></td>
                            <td align="center"><textarea name="reason10" rows="2" style="width:100%" ><?php if (isset($_POST['reason10'])) echo $_POST['reason10'];?></textarea></td>
                            <td align="center"><textarea name="place10" rows="2" style="width:100%" ><?php if (isset($_POST['place10'])) echo $_POST['place10'];?></textarea></td>
                            <td align="center"><textarea name="result10" rows="2" style="width:100%" ><?php if (isset($_POST['result10'])) echo $_POST['result10'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date11" value="<?php if (isset($_POST['date11'])) echo $_POST['date11'];?>"></td>
                            <td align="center"><textarea name="reason11" rows="2" style="width:100%" ><?php if (isset($_POST['reason11'])) echo $_POST['reason11'];?></textarea></td>
                            <td align="center"><textarea name="place11" rows="2" style="width:100%" ><?php if (isset($_POST['place11'])) echo $_POST['place11'];?></textarea></td>
                            <td align="center"><textarea name="result11" rows="2" style="width:100%" ><?php if (isset($_POST['result11'])) echo $_POST['result11'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date12" value="<?php if (isset($_POST['date12'])) echo $_POST['date12'];?>"></td>
                            <td align="center"><textarea name="reason12" rows="2" style="width:100%" ><?php if (isset($_POST['reason12'])) echo $_POST['reason12'];?></textarea></td>
                            <td align="center"><textarea name="place12" rows="2" style="width:100%" ><?php if (isset($_POST['place12'])) echo $_POST['place12'];?></textarea></td>
                            <td align="center"><textarea name="result12" rows="2" style="width:100%" ><?php if (isset($_POST['result12'])) echo $_POST['result12'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date13" value="<?php if (isset($_POST['date13'])) echo $_POST['date13'];?>"></td>
                            <td align="center"><textarea name="reason13" rows="2" style="width:100%" ><?php if (isset($_POST['reason13'])) echo $_POST['reason13'];?></textarea></td>
                            <td align="center"><textarea name="place13" rows="2" style="width:100%" ><?php if (isset($_POST['place13'])) echo $_POST['place13'];?></textarea></td>
                            <td align="center"><textarea name="result13" rows="2" style="width:100%" ><?php if (isset($_POST['result13'])) echo $_POST['result13'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date14" value="<?php if (isset($_POST['date14'])) echo $_POST['date14'];?>"></td>
                            <td align="center"><textarea name="reason14" rows="2" style="width:100%" ><?php if (isset($_POST['reason14'])) echo $_POST['reason14'];?></textarea></td>
                            <td align="center"><textarea name="place14" rows="2" style="width:100%" ><?php if (isset($_POST['place14'])) echo $_POST['place14'];?></textarea></td>
                            <td align="center"><textarea name="result14" rows="2" style="width:100%" ><?php if (isset($_POST['result14'])) echo $_POST['result14'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date15" value="<?php if (isset($_POST['date15'])) echo $_POST['date15'];?>"></td>
                            <td align="center"><textarea name="reason15" rows="2" style="width:100%" ><?php if (isset($_POST['reason15'])) echo $_POST['reason15'];?></textarea></td>
                            <td align="center"><textarea name="place15" rows="2" style="width:100%" ><?php if (isset($_POST['place15'])) echo $_POST['place15'];?></textarea></td>
                            <td align="center"><textarea name="result15" rows="2" style="width:100%" ><?php if (isset($_POST['result15'])) echo $_POST['result15'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date16" value="<?php if (isset($_POST['date16'])) echo $_POST['date16'];?>"></td>
                            <td align="center"><textarea name="reason16" rows="2" style="width:100%" ><?php if (isset($_POST['reason16'])) echo $_POST['reason16'];?></textarea></td>
                            <td align="center"><textarea name="place16" rows="2" style="width:100%" ><?php if (isset($_POST['place16'])) echo $_POST['place16'];?></textarea></td>
                            <td align="center"><textarea name="result16" rows="2" style="width:100%" ><?php if (isset($_POST['result16'])) echo $_POST['result16'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date17" value="<?php if (isset($_POST['date17'])) echo $_POST['date17'];?>"></td>
                            <td align="center"><textarea name="reason17" rows="2" style="width:100%" ><?php if (isset($_POST['reason17'])) echo $_POST['reason17'];?></textarea></td>
                            <td align="center"><textarea name="place17" rows="2" style="width:100%" ><?php if (isset($_POST['place17'])) echo $_POST['place17'];?></textarea></td>
                            <td align="center"><textarea name="result17" rows="2" style="width:100%" ><?php if (isset($_POST['result17'])) echo $_POST['result17'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date18" value="<?php if (isset($_POST['date18'])) echo $_POST['date18'];?>"></td>
                            <td align="center"><textarea name="reason18" rows="2" style="width:100%" ><?php if (isset($_POST['reason18'])) echo $_POST['reason18'];?></textarea></td>
                            <td align="center"><textarea name="place18" rows="2" style="width:100%" ><?php if (isset($_POST['place18'])) echo $_POST['place18'];?></textarea></td>
                            <td align="center"><textarea name="result18" rows="2" style="width:100%" ><?php if (isset($_POST['result18'])) echo $_POST['result18'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date19" value="<?php if (isset($_POST['date19'])) echo $_POST['date19'];?>"></td>
                            <td align="center"><textarea name="reason19" rows="2" style="width:100%" ><?php if (isset($_POST['reason19'])) echo $_POST['reason19'];?></textarea></td>
                            <td align="center"><textarea name="place19" rows="2" style="width:100%" ><?php if (isset($_POST['place19'])) echo $_POST['place19'];?></textarea></td>
                            <td align="center"><textarea name="result19" rows="2" style="width:100%" ><?php if (isset($_POST['result19'])) echo $_POST['result19'];?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date20" value="<?php if (isset($_POST['date20'])) echo $_POST['date20'];?>"></td>
                            <td align="center"><textarea name="reason20" rows="2" style="width:100%" ><?php if (isset($_POST['reason20'])) echo $_POST['reason20'];?></textarea></td>
                            <td align="center"><textarea name="place20" rows="2" style="width:100%" ><?php if (isset($_POST['place20'])) echo $_POST['place20'];?></textarea></td>
                            <td align="center"><textarea name="result20" rows="2" style="width:100%" ><?php if (isset($_POST['result20'])) echo $_POST['result20'];?></textarea></td>
                        </tr>
                    </table>
                    <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                    <center><input type="submit" class="link" name="update" style="margin-bottom: 50px; " value="Update"></center>
                    <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->
                </div>
            </div>
        </form>
    </body>
</html>
