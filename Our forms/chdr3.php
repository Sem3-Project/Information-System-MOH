<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="cssClinic/newStyle.css">
    </head>
    <body>
        <form action="moh.php" method="post" >
            <div>
                <h3>Search NIC :</h3>
                <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="id" value="<?php echo $id;?>">
                <br><br>
                <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">
                <h3>යොමු කිරීම්</h3>
                
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
                        <td align="center"><textarea name="result44" rows="2" style="width:100%" ><?php echo $result4;?></textarea></td>
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
                        <td align="center"><textarea name="nresult44" rows="2" style="width:100%" ><?php echo $nresult4;?></textarea></td>
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
                <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">

                
            </div>
        </form>
    </body>
</html>