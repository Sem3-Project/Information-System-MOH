<?php
require '../models/Refer2_model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="cssClinic/newStyle.css">
    </head>
    <body>
        <form action="Refer2_page.php" method="post" >
            <div>
                <h3>Search NIC :</h3>
                <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="id" value="<?php echo $id;?>">
                <br><br>
                <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">
                <h3>යොමු කිරීම් - වගුව II</h3>

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
                        <td align="center"><input type ="date" name="ndate1" value="<?php echo $ndate1;?>"></td>
                        <td align="center"><textarea name="nreason1" rows="2" style="width:100%" ><?php echo $nreason1;?></textarea></td>
                        <td align="center"><textarea name="nplace1" rows="2" style="width:100%" ><?php echo $nplace1;?></textarea></td>
                        <td align="center"><textarea name="nresult1" rows="2" style="width:100%" ><?php echo $nresult1;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate2" value="<?php echo $ndate2;?>"></td>
                        <td align="center"><textarea name="nreason2" rows="2" style="width:100%" ><?php echo $nreason2;?></textarea></td>
                        <td align="center"><textarea name="nplace2" rows="2" style="width:100%" ><?php echo $nplace2;?></textarea></td>
                        <td align="center"><textarea name="nresult2" rows="2" style="width:100%" ><?php echo $nresult2;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate3" value="<?php echo $ndate3;?>"></td>
                        <td align="center"><textarea name="nreason3" rows="2" style="width:100%" ><?php echo $nreason3;?></textarea></td>
                        <td align="center"><textarea name="nplace3" rows="2" style="width:100%" ><?php echo $nplace3;?></textarea></td>
                        <td align="center"><textarea name="nresult3" rows="2" style="width:100%" ><?php echo $nresult3;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate4" value="<?php echo $ndate4;?>"></td>
                        <td align="center"><textarea name="nreason4" rows="2" style="width:100%" ><?php echo $nreason4;?></textarea></td>
                        <td align="center"><textarea name="nplace4" rows="2" style="width:100%" ><?php echo $nplace4;?></textarea></td>
                        <td align="center"><textarea name="nresult4" rows="2" style="width:100%" ><?php echo $nresult4;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate5" value="<?php echo $ndate5;?>"></td>
                        <td align="center"><textarea name="nreason5" rows="2" style="width:100%" ><?php echo $nreason5;?></textarea></td>
                        <td align="center"><textarea name="nplace5" rows="2" style="width:100%" ><?php echo $nplace5;?></textarea></td>
                        <td align="center"><textarea name="nresult5" rows="2" style="width:100%" ><?php echo $nresult5;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate6" value="<?php echo $ndate6;?>"></td>
                        <td align="center"><textarea name="nreason6" rows="2" style="width:100%" ><?php echo $nreason6;?></textarea></td>
                        <td align="center"><textarea name="nplace6" rows="2" style="width:100%" ><?php echo $nplace6;?></textarea></td>
                        <td align="center"><textarea name="nresult6" rows="2" style="width:100%" ><?php echo $nresult6;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate7" value="<?php echo $ndate7;?>"></td>
                        <td align="center"><textarea name="nreason7" rows="2" style="width:100%" ><?php echo $nreason7;?></textarea></td>
                        <td align="center"><textarea name="nplace7" rows="2" style="width:100%" ><?php echo $nplace7;?></textarea></td>
                        <td align="center"><textarea name="nresult7" rows="2" style="width:100%" ><?php echo $nresult7;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate8" value="<?php echo $ndate8;?>"></td>
                        <td align="center"><textarea name="nreason8" rows="2" style="width:100%" ><?php echo $nreason8;?></textarea></td>
                        <td align="center"><textarea name="nplace8" rows="2" style="width:100%" ><?php echo $nplace8;?></textarea></td>
                        <td align="center"><textarea name="nresult8" rows="2" style="width:100%" ><?php echo $nresult8;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate9" value="<?php echo $ndate9;?>"></td>
                        <td align="center"><textarea name="nreason9" rows="2" style="width:100%" ><?php echo $nreason9;?></textarea></td>
                        <td align="center"><textarea name="nplace9" rows="2" style="width:100%" ><?php echo $nplace9;?></textarea></td>
                        <td align="center"><textarea name="nresult9" rows="2" style="width:100%" ><?php echo $nresult9;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate10" value="<?php echo $ndate10;?>"></td>
                        <td align="center"><textarea name="nreason10" rows="2" style="width:100%" ><?php echo $nreason10;?></textarea></td>
                        <td align="center"><textarea name="nplace10" rows="2" style="width:100%" ><?php echo $nplace10;?></textarea></td>
                        <td align="center"><textarea name="nresult10" rows="2" style="width:100%" ><?php echo $nresult10;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate11" value="<?php echo $ndate11;?>"></td>
                        <td align="center"><textarea name="nreason11" rows="2" style="width:100%" ><?php echo $nreason11;?></textarea></td>
                        <td align="center"><textarea name="nplace11" rows="2" style="width:100%" ><?php echo $nplace11;?></textarea></td>
                        <td align="center"><textarea name="nresult11" rows="2" style="width:100%" ><?php echo $nresult11;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate12" value="<?php echo $ndate12;?>"></td>
                        <td align="center"><textarea name="nreason12" rows="2" style="width:100%" ><?php echo $nreason12;?></textarea></td>
                        <td align="center"><textarea name="nplace12" rows="2" style="width:100%" ><?php echo $nplace12;?></textarea></td>
                        <td align="center"><textarea name="nresult12" rows="2" style="width:100%" ><?php echo $nresult12;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate13" value="<?php echo $ndate13;?>"></td>
                        <td align="center"><textarea name="nreason13" rows="2" style="width:100%" ><?php echo $nreason13;?></textarea></td>
                        <td align="center"><textarea name="nplace13" rows="2" style="width:100%" ><?php echo $nplace13;?></textarea></td>
                        <td align="center"><textarea name="nresult13" rows="2" style="width:100%" ><?php echo $nresult13;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate14" value="<?php echo $ndate14;?>"></td>
                        <td align="center"><textarea name="nreason14" rows="2" style="width:100%" ><?php echo $nreason14;?></textarea></td>
                        <td align="center"><textarea name="nplace14" rows="2" style="width:100%" ><?php echo $nplace14;?></textarea></td>
                        <td align="center"><textarea name="nresult14" rows="2" style="width:100%" ><?php echo $nresult14;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate15" value="<?php echo $ndate15;?>"></td>
                        <td align="center"><textarea name="nreason15" rows="2" style="width:100%" ><?php echo $nreason15;?></textarea></td>
                        <td align="center"><textarea name="nplace15" rows="2" style="width:100%" ><?php echo $nplace15;?></textarea></td>
                        <td align="center"><textarea name="nresult15" rows="2" style="width:100%" ><?php echo $nresult15;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate16" value="<?php echo $ndate16;?>"></td>
                        <td align="center"><textarea name="nreason16" rows="2" style="width:100%" ><?php echo $nreason16;?></textarea></td>
                        <td align="center"><textarea name="nplace16" rows="2" style="width:100%" ><?php echo $nplace16;?></textarea></td>
                        <td align="center"><textarea name="nresult16" rows="2" style="width:100%" ><?php echo $nresult16;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate17" value="<?php echo $ndate17;?>"></td>
                        <td align="center"><textarea name="nreason17" rows="2" style="width:100%" ><?php echo $nreason17;?></textarea></td>
                        <td align="center"><textarea name="nplace17" rows="2" style="width:100%" ><?php echo $nplace17;?></textarea></td>
                        <td align="center"><textarea name="nresult17" rows="2" style="width:100%" ><?php echo $nresult17;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate18" value="<?php echo $ndate18;?>"></td>
                        <td align="center"><textarea name="nreason18" rows="2" style="width:100%" ><?php echo $nreason18;?></textarea></td>
                        <td align="center"><textarea name="nplace18" rows="2" style="width:100%" ><?php echo $nplace18;?></textarea></td>
                        <td align="center"><textarea name="nresult18" rows="2" style="width:100%" ><?php echo $nresult18;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="ndate19" value="<?php echo $ndate19;?>"></td>
                        <td align="center"><textarea name="nreason19" rows="2" style="width:100%" ><?php echo $nreason19;?></textarea></td>
                        <td align="center"><textarea name="nplace19" rows="2" style="width:100%" ><?php echo $nplace19;?></textarea></td>
                        <td align="center"><textarea name="nresult19" rows="2" style="width:100%" ><?php echo $nresult19;?></textarea></td>
                    </tr>
                </table>
                <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->
            </div>
        </form>
    </body>
</html>