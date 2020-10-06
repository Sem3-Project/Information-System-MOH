<?php
require '../models/M18_5year.model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Development from Birth to 5 Years - II</title>
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
        <form action="M18_5year_page.php" method="post" >
            <div>
                <div class="caption-container1">
                <div class="caption-container"><h3>උපතේ සිට අවුරුදු 5 දක්වා වැඩීම/සංවර්ධනය පිළිබඳ පියවර (අපේක්ෂිත සංවර්ධනය) - වගුව II</h3></div>

                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id'];?>">
                    <br><br>
                    <input type="submit" name="search"  class="link" value="Search"></center>

                    <table style="width:100% ;margin-bottom: 50px;" >
                        <tr>
                            <th style="width:37%">වයස</th>
                            <th style="width:20%">*සිදුවන විට වයස මාස</th>
                            <th style="width:20%">**තහවුරු කරන විට වයස මාස</th>
                            <th style="width:23%">තහවුරු කල නිලධාරියාගේ තනතුර </th>
                        </tr>
                        <tr>
                            <th>මාස 18 සිට අවුරුදු 2 දක්වා</th>
                            <td><input type ="number" name="seighteen" value="<?php if (isset($_POST['seighteen'])) echo $_POST['seighteen'];?>"></td>
                            <td><input type ="number" name="ceighteen" value="<?php if (isset($_POST['ceighteen'])) echo $_POST['ceighteen'];?>"></td>
                            <td><input type ="text" name="cseighteen" style="width:100%;" value="<?php if (isset($_POST['cseighteen'])) echo $_POST['cseighteen'];?>"></td>
                        </tr>
                        <tr>
                            <td>1. උදව් නැතිව ඇවිදීමට පුලුවන.</td>
                            <td><input type ="number" name="sawalk" value="<?php if (isset($_POST['sawalk'])) echo $_POST['sawalk'];?>"></td>
                            <td><input type ="number" name="cawalk" value="<?php if (isset($_POST['cawalk'])) echo $_POST['cawalk'];?>"></td>
                            <td><input type ="text" name="csawalk" style="width:100%;" value="<?php if (isset($_POST['csawalk'])) echo $_POST['csawalk'];?>"></td>
                        </tr>
                        <tr>
                            <td>2. උදව් ඇතිව පඩිපෙලක් නැගීමට පුලුවන.</td>
                            <td><input type ="number" name="sstair" value="<?php if (isset($_POST['sstair'])) echo $_POST['sstair'];?>"></td>
                            <td><input type ="number" name="cstair" value="<?php if (isset($_POST['cstair'])) echo $_POST['cstair'];?>"></td>
                            <td><input type ="text" name="csstair" style="width:100%;" value="<?php if (isset($_POST['csstair'])) echo $_POST['csstair'];?>"></td>
                        </tr>
                        <tr>
                            <td>3. බ්ලොක්ස් 2-3 ක් යොදාගෙන කුලුනක් සෑදීමට හැක.</td>
                            <td><input type ="number" name="sblock" value="<?php if (isset($_POST['sblock'])) echo $_POST['sblock'];?>"></td>
                            <td><input type ="number" name="cblock" value="<?php if (isset($_POST['cblock'])) echo $_POST['cblock'];?>"></td>
                            <td><input type ="text" name="csblock" style="width:100%;" value="<?php if (isset($_POST['csblock'])) echo $_POST['csblock'];?>"></td>
                        </tr>
                        <tr>
                            <td>4. තනිවම කෑම ගැනීමට හැකියාව ඇත.</td>
                            <td><input type ="number" name="seat" value="<?php if (isset($_POST['seat'])) echo $_POST['seat'];?>"></td>
                            <td><input type ="number" name="ceat" value="<?php if (isset($_POST['ceat'])) echo $_POST['ceat'];?>"></td>
                            <td><input type ="text" name="cseat" style="width:100%;" value="<?php if (isset($_POST['cseat'])) echo $_POST['cseat'];?>"></td>
                        </tr>
                        <tr>
                            <td>5. වචන 10 ක් පමණ කථා කිරීමට පුලුවන. අඩුම ගණනේ වචන 2 ක් සහිත වාක්‍යයක් වත් කථා කිරීමට හැකිය. උදා : තාත්තා එන්න - කාරය දෙන්න.</td>
                            <td><input type ="number" name="stenWord" value="<?php if (isset($_POST['stenWord'])) echo $_POST['stenWord'];?>"></td>
                            <td><input type ="number" name="ctenWord" value="<?php if (isset($_POST['ctenWord'])) echo $_POST['ctenWord'];?>"></td>
                            <td><input type ="text" name="cstenWord" style="width:100%;" value="<?php if (isset($_POST['cstenWord'])) echo $_POST['cstenWord'];?>"></td>
                        </tr>
                        <tr>
                            <td>6. සිප ගැනීමට තොල් උල් කරයි.</td>
                            <td><input type ="number" name="slip" value="<?php if (isset($_POST['slip'])) echo $_POST['slip'];?>"></td>
                            <td><input type ="number" name="clip" value="<?php if (isset($_POST['clip'])) echo $_POST['clip'];?>"></td>
                            <td><input type ="text" name="cslip" style="width:100%;" value="<?php if (isset($_POST['cslip'])) echo $_POST['cslip'];?>"></td>
                        </tr>
                        <tr>
                            <th>අවුරුදු 2 සිට 3 දක්වා</th>
                            <td><input type ="number" name="syear" value="<?php if (isset($_POST['syear'])) echo $_POST['syear'];?>"></td>
                            <td><input type ="number" name="cyear" value="<?php if (isset($_POST['cyear'])) echo $_POST['cyear'];?>"></td>
                            <td><input type ="text" name="csyear" style="width:100%;" value="<?php if (isset($_POST['csyear'])) echo $_POST['csyear'];?>"></td>
                        </tr>
                        <tr>
                            <td>1. වැටෙන්නේ නැතිව දිවීමට හැකියාව ඇත.</td>
                            <td><input type ="number" name="srun" value="<?php if (isset($_POST['srun'])) echo $_POST['srun'];?>"></td>
                            <td><input type ="number" name="crun" value="<?php if (isset($_POST['crun'])) echo $_POST['crun'];?>"></td>
                            <td><input type ="text" name="csrun" style="width:100%;" value="<?php if (isset($_POST['csrun'])) echo $_POST['csrun'];?>"></td>
                        </tr>
                        <tr>
                            <td>2. වැටෙන්නේ නැතිව පඩිපෙල දිගේ ඉහළ පහළ යාමට හැකිය.</td>
                            <td><input type ="number" name="sup" value="<?php if (isset($_POST['sup'])) echo $_POST['sup'];?>"></td>
                            <td><input type ="number" name="cup" value="<?php if (isset($_POST['cup'])) echo $_POST['cup'];?>"></td>
                            <td><input type ="text" name="csup" style="width:100%;" value="<?php if (isset($_POST['csup'])) echo $_POST['csup'];?>"></td>
                        </tr>
                        <tr>
                            <td>3. රවුමක් / වක්‍ර සහිත රූපයක් පිටපත් කිරීමට පුලුවන.</td>
                            <td><input type ="number" name="scircle" value="<?php if (isset($_POST['scircle'])) echo $_POST['scircle'];?>"></td>
                            <td><input type ="number" name="ccircle" value="<?php if (isset($_POST['ccircle'])) echo $_POST['ccircle'];?>"></td>
                            <td><input type ="text" name="cscircle" style="width:100%;" value="<?php if (isset($_POST['cscircle'])) echo $_POST['cscircle'];?>"></td>
                        </tr>
                        <tr>
                            <td>4. වචන 3 ක් හෝ ඊට වැඩි සංඛ්‍යාවකින් වාක්‍යයක් ගොඩ නැගීමට හැකියාව ඇත.</td>
                            <td><input type ="number" name="ssentence" value="<?php if (isset($_POST['ssentence'])) echo $_POST['ssentence'];?>"></td>
                            <td><input type ="number" name="csentence" value="<?php if (isset($_POST['csentence'])) echo $_POST['csentence'];?>"></td>
                            <td><input type ="text" name="cssentence" style="width:100%;" value="<?php if (isset($_POST['cssentence'])) echo $_POST['cssentence'];?>"></td>
                        </tr>
                        <tr>
                            <th>අවුරුදු 3 සිට 4 දක්වා</th>
                            <td><input type ="number" name="sthree" value="<?php if (isset($_POST['sthree'])) echo $_POST['sthree'];?>"></td>
                            <td><input type ="number" name="cthree" value="<?php if (isset($_POST['cthree'])) echo $_POST['cthree'];?>"></td>
                            <td><input type ="text" name="csthree" style="width:100%;" value="<?php if (isset($_POST['csthree'])) echo $_POST['csthree'];?>"></td>
                        </tr>
                        <tr>
                            <td>1. තනි කකුලෙන් සිට ගනී.</td>
                            <td><input type ="number" name="sleg" value="<?php if (isset($_POST['sleg'])) echo $_POST['sleg'];?>"></td>
                            <td><input type ="number" name="cleg" value="<?php if (isset($_POST['cleg'])) echo $_POST['cleg'];?>"></td>
                            <td><input type ="text" name="csleg" style="width:100%;" value="<?php if (isset($_POST['csleg'])) echo $_POST['csleg'];?>"></td>
                        </tr>
                        <tr>
                            <td>2. පඩියකින් පැනීමට හැකිය.</td>
                            <td><input type ="number" name="sjump" value="<?php if (isset($_POST['sjump'])) echo $_POST['sjump'];?>"></td>
                            <td><input type ="number" name="cjump" value="<?php if (isset($_POST['cjump'])) echo $_POST['cjump'];?>"></td>
                            <td><input type ="text" name="csjump" style="width:100%;" value="<?php if (isset($_POST['csjump'])) echo $_POST['csjump'];?>"></td>
                        </tr>
                        <tr>
                            <td>3. සපත්තු දැමීම හා ඇඳුම් ඇඳ ගැනීම කල හැක. (බොත්තම් දමා ගැනීම හැර)</td>
                            <td><input type ="number" name="sshoe" value="<?php if (isset($_POST['sshoe'])) echo $_POST['sshoe'];?>"></td>
                            <td><input type ="number" name="cshoe" value="<?php if (isset($_POST['cshoe'])) echo $_POST['cshoe'];?>"></td>
                            <td><input type ="text" name="csshoe" style="width:100%;" value="<?php if (isset($_POST['csshoe'])) echo $_POST['csshoe'];?>"></td>
                        </tr>
                        <tr>
                            <td>4. වෘත්ත හා රටා පිටපත් කරයි.</td>
                            <td><input type ="number" name="scopy" value="<?php if (isset($_POST['scopy'])) echo $_POST['scopy'];?>"></td>
                            <td><input type ="number" name="ccopy" value="<?php if (isset($_POST['ccopy'])) echo $_POST['ccopy'];?>"></td>
                            <td><input type ="text" name="cscopy" style="width:100%;" value="<?php if (isset($_POST['cscopy'])) echo $_POST['cscopy'];?>"></td>
                        </tr>
                        <tr>
                            <td>5. තුනට ගණන් කරයි.</td>
                            <td><input type ="number" name="scount" value="<?php if (isset($_POST['scount'])) echo $_POST['scount'];?>"></td>
                            <td><input type ="number" name="ccount" value="<?php if (isset($_POST['ccount'])) echo $_POST['ccount'];?>"></td>
                            <td><input type ="text" name="cscount" style="width:100%;" value="<?php if (isset($_POST['cscount'])) echo $_POST['cscount'];?>"></td>
                        </tr>
                        <tr>
                            <td>6. අඩුම තරමින් උඩ-යට ලඟ-දුර වැනි පද දෙකක්වත් දනී.</td>
                            <td><input type ="number" name="snear" value="<?php if (isset($_POST['snear'])) echo $_POST['snear'];?>"></td>
                            <td><input type ="number" name="cnear" value="<?php if (isset($_POST['cnear'])) echo $_POST['cnear'];?>"></td>
                            <td><input type ="text" name="csnear" style="width:100%;" value="<?php if (isset($_POST['csnear'])) echo $_POST['csnear'];?>"></td>
                        </tr>
                        <tr>
                            <td>7. සම්පූර්ණ වාක්‍ය හා සංකීර්ණ වාක්‍ය පවා භාවිතා කළ හැකිය.</td>
                            <td><input type ="number" name="scomplex" value="<?php if (isset($_POST['scomplex'])) echo $_POST['scomplex'];?>"></td>
                            <td><input type ="number" name="ccomplex" value="<?php if (isset($_POST['ccomplex'])) echo $_POST['ccomplex'];?>"></td>
                            <td><input type ="text" name="cscomplex" style="width:100%;" value="<?php if (isset($_POST['cscomplex'])) echo $_POST['cscomplex'];?>"></td>
                        </tr>
                        <tr>
                            <th>අවුරුදු 4 සිට 5 දක්වා</th>
                            <td><input type ="number" name="sfour" value="<?php if (isset($_POST['sfour'])) echo $_POST['sfour'];?>"></td>
                            <td><input type ="number" name="cfour" value="<?php if (isset($_POST['cfour'])) echo $_POST['cfour'];?>"></td>
                            <td><input type ="text" name="csfour" style="width:100%;" value="<?php if (isset($_POST['csfour'])) echo $_POST['csfour'];?>"></td>
                        </tr>
                        <tr>
                            <td>1. තනි කකුලෙන් පැනීමට හැකිය.</td>
                            <td><input type ="number" name="slegJump" value="<?php if (isset($_POST['slegJump'])) echo $_POST['slegJump'];?>"></td>
                            <td><input type ="number" name="clegJump" value="<?php if (isset($_POST['clegJump'])) echo $_POST['clegJump'];?>"></td>
                            <td><input type ="text" name="cslegJump" style="width:100%;" value="<?php if (isset($_POST['cslegJump'])) echo $_POST['cslegJump'];?>"></td>
                        </tr>
                        <tr>
                            <td>2. තනිව ඇඳුම් ඇඳගනී.</td>
                            <td><input type ="number" name="sdressing" value="<?php if (isset($_POST['sdressing'])) echo $_POST['sdressing'];?>"></td>
                            <td><input type ="number" name="cdressing" value="<?php if (isset($_POST['cdressing'])) echo $_POST['cdressing'];?>"></td>
                            <td><input type ="text" name="csdressing" style="width:100%;" value="<?php if (isset($_POST['csdressing'])) echo $_POST['csdressing'];?>"></td>
                        </tr>
                        <tr>
                            <td>3. තනිවම ආහාර ගනී.</td>
                            <td><input type ="number" name="sfood" value="<?php if (isset($_POST['sfood'])) echo $_POST['sfood'];?>"></td>
                            <td><input type ="number" name="cfood" value="<?php if (isset($_POST['cfood'])) echo $_POST['cfood'];?>"></td>
                            <td><input type ="text" name="csfood" style="width:100%;" value="<?php if (isset($_POST['csfood'])) echo $_POST['csfood'];?>"></td>
                        </tr>
                        <tr>
                            <td>4. සරල මිනිස් රූප ඇඳීමට හැකියාව ඇත.</td>
                            <td><input type ="number" name="sskeleton" value="<?php if (isset($_POST['sskeleton'])) echo $_POST['sskeleton'];?>"></td>
                            <td><input type ="number" name="cskeleton" value="<?php if (isset($_POST['cskeleton'])) echo $_POST['cskeleton'];?>"></td>
                            <td><input type ="text" name="csskeleton" style="width:100%;" value="<?php if (isset($_POST['csskeleton'])) echo $_POST['csskeleton'];?>"></td>
                        </tr>
                        <tr>
                            <td>5. සෙල්ලම් කරන විට වැඩිමහල් දරුවන් හා සහයෝගයෙන් ක්‍රියා කරයි.</td>
                            <td><input type ="number" name="splay" value="<?php if (isset($_POST['splay'])) echo $_POST['splay'];?>"></td>
                            <td><input type ="number" name="cplay" value="<?php if (isset($_POST['cplay'])) echo $_POST['cplay'];?>"></td>
                            <td><input type ="text" name="csplay" style="width:100%;" value="<?php if (isset($_POST['csplay'])) echo $_POST['csplay'];?>"></td>
                        </tr>
                        <tr>
                            <td>6. ක්‍රියා පදය, අතීත, වර්තමාන සහ අනාගත කාල වලට අනුව නිවැරදිව භාවිත කරමින් පින්තූරයක් විස්තර කළ හැක.</td>
                            <td><input type ="number" name="stime" value="<?php if (isset($_POST['stime'])) echo $_POST['stime'];?>"></td>
                            <td><input type ="number" name="ctime" value="<?php if (isset($_POST['ctime'])) echo $_POST['ctime'];?>"></td>
                            <td><input type ="text" name="cstime" style="width:100%;" value="<?php if (isset($_POST['cstime'])) echo $_POST['cstime'];?>"></td>
                        </tr>
                        <tr>
                            <td>7. තම සම්පූර්ණ නම සහ වයස ප්‍රකාශ කල හැක.</td>
                            <td><input type ="number" name="sname" value="<?php if (isset($_POST['sname'])) echo $_POST['sname'];?>"></td>
                            <td><input type ="number" name="cname" value="<?php if (isset($_POST['cname'])) echo $_POST['cname'];?>"></td>
                            <td><input type ="text" name="csname" style="width:100%;" value="<?php if (isset($_POST['csname'])) echo $_POST['csname'];?>"></td>
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

           

