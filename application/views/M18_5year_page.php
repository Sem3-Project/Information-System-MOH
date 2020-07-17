<?php
require '../models/M18_5year_model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="cssClinic/newStyle.css">
    </head>
    <body>
        <form action="M18_5year_page.php" method="post" >
            <div>
                <h3>Search NIC :</h3>
                <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="id" value="<?php echo $id;?>">
                <br><br>
                <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">

                <h3>උපතේ සිට අවුරුදු 5 දක්වා වැඩීම/සංවර්ධනය පිළිබඳ පියවර (අපේක්ෂිත සංවර්ධනය) - වගුව II</h3>
                <table style="width:100% ;margin-bottom: 50px;" >
                    <tr>
                        <th style="width:37%">වයස</th>
                        <th style="width:20%">*සිදුවන විට වයස මාස</th>
                        <th style="width:20%">**තහවුරු කරන විට වයස මාස</th>
                        <th style="width:23%">තහවුරු කල නිලධාරියාගේ තනතුර </th>
                    </tr>
                    <tr>
                        <th>මාස 18 සිට අවුරුදු 2 දක්වා</th>
                        <td><input type ="number" name="seighteen" value="<?php echo $seighteen;?>"></td>
                        <td><input type ="number" name="ceighteen" value="<?php echo $ceighteen;?>"></td>
                        <td><input type ="text" name="cseighteen" style="width:100%;" value="<?php echo $cseighteen;?>"></td>
                    </tr>
                    <tr>
                        <td>1. උදව් නැතිව ඇවිදීමට පුලුවන.</td>
                        <td><input type ="number" name="sawalk" value="<?php echo $sawalk;?>"></td>
                        <td><input type ="number" name="cawalk" value="<?php echo $cawalk;?>"></td>
                        <td><input type ="text" name="csawalk" style="width:100%;" value="<?php echo $csawalk;?>"></td>
                    </tr>
                    <tr>
                        <td>2. උදව් ඇතිව පඩිපෙලක් නැගීමට පුලුවන.</td>
                        <td><input type ="number" name="sstair" value="<?php echo $sstair;?>"></td>
                        <td><input type ="number" name="cstair" value="<?php echo $cstair;?>"></td>
                        <td><input type ="text" name="csstair" style="width:100%;" value="<?php echo $csstair;?>"></td>
                    </tr>
                    <tr>
                        <td>3. බ්ලොක්ස් 2-3 ක් යොදාගෙන කුලුනක් සෑදීමට හැක.</td>
                        <td><input type ="number" name="sblock" value="<?php echo $sblock;?>"></td>
                        <td><input type ="number" name="cblock" value="<?php echo $cblock;?>"></td>
                        <td><input type ="text" name="csblock" style="width:100%;" value="<?php echo $csblock;?>"></td>
                    </tr>
                    <tr>
                        <td>4. තනිවම කෑම ගැනීමට හැකියාව ඇත.</td>
                        <td><input type ="number" name="seat" value="<?php echo $seat;?>"></td>
                        <td><input type ="number" name="ceat" value="<?php echo $ceat;?>"></td>
                        <td><input type ="text" name="cseat" style="width:100%;" value="<?php echo $cseat;?>"></td>
                    </tr>
                    <tr>
                        <td>5. වචන 10 ක් පමණ කථා කිරීමට පුලුවන. අඩුම ගණනේ වචන 2 ක් සහිත වාක්‍යයක් වත් කථා කිරීමට හැකිය. උදා : තාත්තා එන්න - කාරය දෙන්න.</td>
                        <td><input type ="number" name="stenWord" value="<?php echo $stenWord;?>"></td>
                        <td><input type ="number" name="ctenWord" value="<?php echo $ctenWord;?>"></td>
                        <td><input type ="text" name="cstenWord" style="width:100%;" value="<?php echo $cstenWord;?>"></td>
                    </tr>
                    <tr>
                        <td>6. සිප ගැනීමට තොල් උල් කරයි.</td>
                        <td><input type ="number" name="slip" value="<?php echo $slip;?>"></td>
                        <td><input type ="number" name="clip" value="<?php echo $clip;?>"></td>
                        <td><input type ="text" name="cslip" style="width:100%;" value="<?php echo $cslip;?>"></td>
                    </tr>
                    <tr>
                        <th>අවුරුදු 2 සිට 3 දක්වා</th>
                        <td><input type ="number" name="syear" value="<?php echo $syear;?>"></td>
                        <td><input type ="number" name="cyear" value="<?php echo $cyear;?>"></td>
                        <td><input type ="text" name="csyear" style="width:100%;" value="<?php echo $csyear;?>"></td>
                    </tr>
                    <tr>
                        <td>1. වැටෙන්නේ නැතිව දිවීමට හැකියාව ඇත.</td>
                        <td><input type ="number" name="srun" value="<?php echo $srun;?>"></td>
                        <td><input type ="number" name="crun" value="<?php echo $crun;?>"></td>
                        <td><input type ="text" name="csrun" style="width:100%;" value="<?php echo $csrun;?>"></td>
                    </tr>
                    <tr>
                        <td>2. වැටෙන්නේ නැතිව පඩිපෙල දිගේ ඉහළ පහළ යාමට හැකිය.</td>
                        <td><input type ="number" name="sup" value="<?php echo $sup;?>"></td>
                        <td><input type ="number" name="cup" value="<?php echo $cup;?>"></td>
                        <td><input type ="text" name="csup" style="width:100%;" value="<?php echo $csup;?>"></td>
                    </tr>
                    <tr>
                        <td>3. රවුමක් / වක්‍ර සහිත රූපයක් පිටපත් කිරීමට පුලුවන.</td>
                        <td><input type ="number" name="scircle" value="<?php echo $scircle;?>"></td>
                        <td><input type ="number" name="ccircle" value="<?php echo $ccircle;?>"></td>
                        <td><input type ="text" name="cscircle" style="width:100%;" value="<?php echo $cscircle;?>"></td>
                    </tr>
                    <tr>
                        <td>4. වචන 3 ක් හෝ ඊට වැඩි සංඛ්‍යාවකින් වාක්‍යයක් ගොඩ නැගීමට හැකියාව ඇත.</td>
                        <td><input type ="number" name="ssentence" value="<?php echo $ssentence;?>"></td>
                        <td><input type ="number" name="csentence" value="<?php echo $csentence;?>"></td>
                        <td><input type ="text" name="cssentence" style="width:100%;" value="<?php echo $cssentence;?>"></td>
                    </tr>
                    <tr>
                        <th>අවුරුදු 3 සිට 4 දක්වා</th>
                        <td><input type ="number" name="sthree" value="<?php echo $sthree;?>"></td>
                        <td><input type ="number" name="cthree" value="<?php echo $cthree;?>"></td>
                        <td><input type ="text" name="csthree" style="width:100%;" value="<?php echo $csthree;?>"></td>
                    </tr>
                    <tr>
                        <td>1. තනි කකුලෙන් සිට ගනී.</td>
                        <td><input type ="number" name="sleg" value="<?php echo $sleg;?>"></td>
                        <td><input type ="number" name="cleg" value="<?php echo $cleg;?>"></td>
                        <td><input type ="text" name="csleg" style="width:100%;" value="<?php echo $csleg;?>"></td>
                    </tr>
                    <tr>
                        <td>2. පඩියකින් පැනීමට හැකිය.</td>
                        <td><input type ="number" name="sjump" value="<?php echo $sjump;?>"></td>
                        <td><input type ="number" name="cjump" value="<?php echo $cjump;?>"></td>
                        <td><input type ="text" name="csjump" style="width:100%;" value="<?php echo $csjump;?>"></td>
                    </tr>
                    <tr>
                        <td>3. සපත්තු දැමීම හා ඇඳුම් ඇඳ ගැනීම කල හැක. (බොත්තම් දමා ගැනීම හැර)</td>
                        <td><input type ="number" name="sshoe" value="<?php echo $sshoe;?>"></td>
                        <td><input type ="number" name="cshoe" value="<?php echo $cshoe;?>"></td>
                        <td><input type ="text" name="csshoe" style="width:100%;" value="<?php echo $csshoe;?>"></td>
                    </tr>
                    <tr>
                        <td>4. වෘත්ත හා රටා පිටපත් කරයි.</td>
                        <td><input type ="number" name="scopy" value="<?php echo $scopy;?>"></td>
                        <td><input type ="number" name="ccopy" value="<?php echo $ccopy;?>"></td>
                        <td><input type ="text" name="cscopy" style="width:100%;" value="<?php echo $cscopy;?>"></td>
                    </tr>
                    <tr>
                        <td>5. තුනට ගණන් කරයි.</td>
                        <td><input type ="number" name="scount" value="<?php echo $scount;?>"></td>
                        <td><input type ="number" name="ccount" value="<?php echo $ccount;?>"></td>
                        <td><input type ="text" name="cscount" style="width:100%;" value="<?php echo $cscount;?>"></td>
                    </tr>
                    <tr>
                        <td>6. අඩුම තරමින් උඩ-යට ලඟ-දුර වැනි පද දෙකක්වත් දනී.</td>
                        <td><input type ="number" name="snear" value="<?php echo $snear;?>"></td>
                        <td><input type ="number" name="cnear" value="<?php echo $cnear;?>"></td>
                        <td><input type ="text" name="csnear" style="width:100%;" value="<?php echo $csnear;?>"></td>
                    </tr>
                    <tr>
                        <td>7. සම්පූර්ණ වාක්‍ය හා සංකීර්ණ වාක්‍ය පවා භාවිතා කළ හැකිය.</td>
                        <td><input type ="number" name="scomplex" value="<?php echo $scomplex;?>"></td>
                        <td><input type ="number" name="ccomplex" value="<?php echo $ccomplex;?>"></td>
                        <td><input type ="text" name="cscomplex" style="width:100%;" value="<?php echo $cscomplex;?>"></td>
                    </tr>
                    <tr>
                        <th>අවුරුදු 4 සිට 5 දක්වා</th>
                        <td><input type ="number" name="sfour" value="<?php echo $sfour;?>"></td>
                        <td><input type ="number" name="cfour" value="<?php echo $cfour;?>"></td>
                        <td><input type ="text" name="csfour" style="width:100%;" value="<?php echo $csfour;?>"></td>
                    </tr>
                    <tr>
                        <td>1. තනි කකුලෙන් පැනීමට හැකිය.</td>
                        <td><input type ="number" name="slegJump" value="<?php echo $slegJump;?>"></td>
                        <td><input type ="number" name="clegJump" value="<?php echo $clegJump;?>"></td>
                        <td><input type ="text" name="cslegJump" style="width:100%;" value="<?php echo $cslegJump;?>"></td>
                    </tr>
                    <tr>
                        <td>2. තනිව ඇඳුම් ඇඳගනී.</td>
                        <td><input type ="number" name="sdressing" value="<?php echo $sdressing;?>"></td>
                        <td><input type ="number" name="cdressing" value="<?php echo $cdressing;?>"></td>
                        <td><input type ="text" name="csdressing" style="width:100%;" value="<?php echo $csdressing;?>"></td>
                    </tr>
                    <tr>
                        <td>3. තනිවම ආහාර ගනී.</td>
                        <td><input type ="number" name="sfood" value="<?php echo $sfood;?>"></td>
                        <td><input type ="number" name="cfood" value="<?php echo $cfood;?>"></td>
                        <td><input type ="text" name="csfood" style="width:100%;" value="<?php echo $csfood;?>"></td>
                    </tr>
                    <tr>
                        <td>4. සරල මිනිස් රූප ඇඳීමට හැකියාව ඇත.</td>
                        <td><input type ="number" name="sskeleton" value="<?php echo $sskeleton;?>"></td>
                        <td><input type ="number" name="cskeleton" value="<?php echo $cskeleton;?>"></td>
                        <td><input type ="text" name="csskeleton" style="width:100%;" value="<?php echo $csskeleton;?>"></td>
                    </tr>
                    <tr>
                        <td>5. සෙල්ලම් කරන විට වැඩිමහල් දරුවන් හා සහයෝගයෙන් ක්‍රියා කරයි.</td>
                        <td><input type ="number" name="splay" value="<?php echo $splay;?>"></td>
                        <td><input type ="number" name="cplay" value="<?php echo $cplay;?>"></td>
                        <td><input type ="text" name="csplay" style="width:100%;" value="<?php echo $csplay;?>"></td>
                    </tr>
                    <tr>
                        <td>6. ක්‍රියා පදය, අතීත, වර්තමාන සහ අනාගත කාල වලට අනුව නිවැරදිව භාවිත කරමින් පින්තූරයක් විස්තර කළ හැක.</td>
                        <td><input type ="number" name="stime" value="<?php echo $stime;?>"></td>
                        <td><input type ="number" name="ctime" value="<?php echo $ctime;?>"></td>
                        <td><input type ="text" name="cstime" style="width:100%;" value="<?php echo $cstime;?>"></td>
                    </tr>
                    <tr>
                        <td>7. තම සම්පූර්ණ නම සහ වයස ප්‍රකාශ කල හැක.</td>
                        <td><input type ="number" name="sname" value="<?php echo $sname;?>"></td>
                        <td><input type ="number" name="cname" value="<?php echo $cname;?>"></td>
                        <td><input type ="text" name="csname" style="width:100%;" value="<?php echo $csname;?>"></td>
                    </tr>
                </table>
                <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">
            </div>
        </form>
    </body>
</html>