<?php
require '../models/Refer1_model.php';
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
                <a href="login_page.php"><img src="../../public/images/logout.png" class="logout-image"></a>
                <a href="home.php"><img src="../../public/images/home.png" class="home-image"></a>
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
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo $id;?>">
                    <br><br>
                    <input type="submit" name="search" class="link" value="Search"></center>
                    <div class="caption-container"><h3>යොමු කිරීම් - වගුව I</h3></div>
                
                    <table style="width:100% ;margin-bottom: 50px;">
                        <tr>
                            <th>දිනය</th>
                            <th>යොමු කිරීමට හේතුව</th>
                            <th>යොමු කල ස්ථානය</th>
                            <th>ආපසු යොමු කිරීම/පසු විපරම්වල ප්‍රතිඵල</th>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date1" value="<?php echo $date1;?>"></td>
                            <td align="center"><textarea name="reason1" rows="2" style="width:100%" ><?php echo $reason1;?></textarea></td>
                            <td align="center"><textarea name="place1" rows="2" style="width:100%" ><?php echo $place1;?></textarea></td>
                            <td align="center"><textarea name="result1" rows="2" style="width:100%" ><?php echo $result1;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date2" value="<?php echo $date2;?>"></td>
                            <td align="center"><textarea name="reason2" rows="2" style="width:100%" ><?php echo $reason2;?></textarea></td>
                            <td align="center"><textarea name="place2" rows="2" style="width:100%" ><?php echo $place2;?></textarea></td>
                            <td align="center"><textarea name="result2" rows="2" style="width:100%" ><?php echo $result2;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date3" value="<?php echo $date3;?>"></td>
                            <td align="center"><textarea name="reason3" rows="2" style="width:100%" ><?php echo $reason3;?></textarea></td>
                            <td align="center"><textarea name="place3" rows="2" style="width:100%" ><?php echo $place3;?></textarea></td>
                            <td align="center"><textarea name="result3" rows="2" style="width:100%" ><?php echo $result3;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date4" value="<?php echo $date4;?>"></td>
                            <td align="center"><textarea name="reason4" rows="2" style="width:100%" ><?php echo $reason4;?></textarea></td>
                            <td align="center"><textarea name="place4" rows="2" style="width:100%" ><?php echo $place4;?></textarea></td>
                            <td align="center"><textarea name="result4" rows="2" style="width:100%" ><?php echo $result4;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date5" value="<?php echo $date5;?>"></td>
                            <td align="center"><textarea name="reason5" rows="2" style="width:100%" ><?php echo $reason5;?></textarea></td>
                            <td align="center"><textarea name="place5" rows="2" style="width:100%" ><?php echo $place5;?></textarea></td>
                            <td align="center"><textarea name="result5" rows="2" style="width:100%" ><?php echo $result5;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date6" value="<?php echo $date6;?>"></td>
                            <td align="center"><textarea name="reason6" rows="2" style="width:100%" ><?php echo $reason6;?></textarea></td>
                            <td align="center"><textarea name="place6" rows="2" style="width:100%" ><?php echo $place6;?></textarea></td>
                            <td align="center"><textarea name="result6" rows="2" style="width:100%" ><?php echo $result6;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date7" value="<?php echo $date7;?>"></td>
                            <td align="center"><textarea name="reason7" rows="2" style="width:100%" ><?php echo $reason7;?></textarea></td>
                            <td align="center"><textarea name="place7" rows="2" style="width:100%" ><?php echo $place7;?></textarea></td>
                            <td align="center"><textarea name="result7" rows="2" style="width:100%" ><?php echo $result7;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date8" value="<?php echo $date8;?>"></td>
                            <td align="center"><textarea name="reason8" rows="2" style="width:100%" ><?php echo $reason8;?></textarea></td>
                            <td align="center"><textarea name="place8" rows="2" style="width:100%" ><?php echo $place8;?></textarea></td>
                            <td align="center"><textarea name="result8" rows="2" style="width:100%" ><?php echo $result8;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date9" value="<?php echo $date9;?>"></td>
                            <td align="center"><textarea name="reason9" rows="2" style="width:100%" ><?php echo $reason9;?></textarea></td>
                            <td align="center"><textarea name="place9" rows="2" style="width:100%" ><?php echo $place9;?></textarea></td>
                            <td align="center"><textarea name="result9" rows="2" style="width:100%" ><?php echo $result9;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date10" value="<?php echo $date10;?>"></td>
                            <td align="center"><textarea name="reason10" rows="2" style="width:100%" ><?php echo $reason10;?></textarea></td>
                            <td align="center"><textarea name="place10" rows="2" style="width:100%" ><?php echo $place10;?></textarea></td>
                            <td align="center"><textarea name="result10" rows="2" style="width:100%" ><?php echo $result10;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date11" value="<?php echo $date11;?>"></td>
                            <td align="center"><textarea name="reason11" rows="2" style="width:100%" ><?php echo $reason11;?></textarea></td>
                            <td align="center"><textarea name="place11" rows="2" style="width:100%" ><?php echo $place11;?></textarea></td>
                            <td align="center"><textarea name="result11" rows="2" style="width:100%" ><?php echo $result11;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date12" value="<?php echo $date12;?>"></td>
                            <td align="center"><textarea name="reason12" rows="2" style="width:100%" ><?php echo $reason12;?></textarea></td>
                            <td align="center"><textarea name="place12" rows="2" style="width:100%" ><?php echo $place12;?></textarea></td>
                            <td align="center"><textarea name="result12" rows="2" style="width:100%" ><?php echo $result12;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date13" value="<?php echo $date13;?>"></td>
                            <td align="center"><textarea name="reason13" rows="2" style="width:100%" ><?php echo $reason13;?></textarea></td>
                            <td align="center"><textarea name="place13" rows="2" style="width:100%" ><?php echo $place13;?></textarea></td>
                            <td align="center"><textarea name="result13" rows="2" style="width:100%" ><?php echo $result13;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date14" value="<?php echo $date14;?>"></td>
                            <td align="center"><textarea name="reason14" rows="2" style="width:100%" ><?php echo $reason14;?></textarea></td>
                            <td align="center"><textarea name="place14" rows="2" style="width:100%" ><?php echo $place14;?></textarea></td>
                            <td align="center"><textarea name="result14" rows="2" style="width:100%" ><?php echo $result14;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date15" value="<?php echo $date15;?>"></td>
                            <td align="center"><textarea name="reason15" rows="2" style="width:100%" ><?php echo $reason15;?></textarea></td>
                            <td align="center"><textarea name="place15" rows="2" style="width:100%" ><?php echo $place15;?></textarea></td>
                            <td align="center"><textarea name="result15" rows="2" style="width:100%" ><?php echo $result15;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date16" value="<?php echo $date16;?>"></td>
                            <td align="center"><textarea name="reason16" rows="2" style="width:100%" ><?php echo $reason16;?></textarea></td>
                            <td align="center"><textarea name="place16" rows="2" style="width:100%" ><?php echo $place16;?></textarea></td>
                            <td align="center"><textarea name="result16" rows="2" style="width:100%" ><?php echo $result16;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date17" value="<?php echo $date17;?>"></td>
                            <td align="center"><textarea name="reason17" rows="2" style="width:100%" ><?php echo $reason17;?></textarea></td>
                            <td align="center"><textarea name="place17" rows="2" style="width:100%" ><?php echo $place17;?></textarea></td>
                            <td align="center"><textarea name="result17" rows="2" style="width:100%" ><?php echo $result17;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date18" value="<?php echo $date18;?>"></td>
                            <td align="center"><textarea name="reason18" rows="2" style="width:100%" ><?php echo $reason18;?></textarea></td>
                            <td align="center"><textarea name="place18" rows="2" style="width:100%" ><?php echo $place18;?></textarea></td>
                            <td align="center"><textarea name="result18" rows="2" style="width:100%" ><?php echo $result18;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date19" value="<?php echo $date19;?>"></td>
                            <td align="center"><textarea name="reason19" rows="2" style="width:100%" ><?php echo $reason19;?></textarea></td>
                            <td align="center"><textarea name="place19" rows="2" style="width:100%" ><?php echo $place19;?></textarea></td>
                            <td align="center"><textarea name="result19" rows="2" style="width:100%" ><?php echo $result19;?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center"><input type ="date" name="date20" value="<?php echo $date20;?>"></td>
                            <td align="center"><textarea name="reason20" rows="2" style="width:100%" ><?php echo $reason20;?></textarea></td>
                            <td align="center"><textarea name="place20" rows="2" style="width:100%" ><?php echo $place20;?></textarea></td>
                            <td align="center"><textarea name="result20" rows="2" style="width:100%" ><?php echo $result20;?></textarea></td>
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
