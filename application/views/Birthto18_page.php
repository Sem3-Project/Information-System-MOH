<?php
require '../models/Birthto18_model.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Development from Birth to 5 Years - I</title>
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
        <form action="Birthto18_page.php" method="post" >
            <div>
                <div class="caption-container1">
                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="idn" value="<?php echo $idn;?>">
                    <br><br>
                    <input type="submit" name="search"  class="link" value="Search"></center>

                    <div class="caption-container"><h3>උපතේ සිට අවුරුදු 5 දක්වා වැඩීම/සංවර්ධනය පිළිබඳ පියවර (අපේක්ෂිත සංවර්ධනය) -  වගුව I</h3></div>
                    <table style="width:100% ;margin-bottom: 50px;" >
                        <tr>
                            <th style="width:37%">වයස</th>
                            <th style="width:20%">*සිදුවන විට වයස මාස</th>
                            <th style="width:20%">**තහවුරු කරන විට වයස මාස</th>
                            <th style="width:23%">තහවුරු කල නිලධාරියාගේ තනතුර </th>
                        </tr>
                        <tr>  
                            <th>සති 6 සිට මාස 3 දක්වා</th>
                            <td><input type ="number" name="sMonth" value="<?php echo $sMonth;?>"></td>
                            <td><input type ="number" name="cMonth" value="<?php echo $cMonth;?>"></td>
                            <td><input type ="text" name="cStatus" style="width:100%;" value="<?php echo $cStatus;?>"></td>
                        </tr>
                        <tr>
                            <td>1. මුනින් අතට වැතිර සිටින විට හිස ඔසවයි.</td>
                            <td><input type ="number" name="shead" value="<?php echo $shead;?>"></td>
                            <td><input type ="number" name="chead" value="<?php echo $chead;?>"></td>
                            <td><input type ="text" name="cshead" style="width:100%;" value="<?php echo $cshead;?>"></td>
                        </tr>
                        <tr>
                            <td>2. එක තැනක සිට තව තැනකට චලනය වන දෙයක් දෙස දිගටම බලා සිටී.</td>
                            <td><input type ="number" name="slook" value="<?php echo $slook;?>"></td>
                            <td><input type ="number" name="clook" value="<?php echo $clook;?>"></td>
                            <td><input type ="text" name="cslook" style="width:100%;" value="<?php echo $cslook;?>"></td>
                        </tr>
                        <tr>
                            <td>3. හදිසියේ ඇතිවූ විශාල ශබ්දයකට තම ක්‍රියාකාරිත්වය නැවැත්වීමෙන් හෝ එය වැඩි කීරීමෙන් ප්‍රතිචාර දක්වයි.</td>
                            <td><input type ="number" name="ssound" value="<?php echo $ssound;?>"></td>
                            <td><input type ="number" name="csound" value="<?php echo $csound;?>"></td>
                            <td><input type ="text" name="cssound" style="width:100%;" value="<?php echo $cssound;?>"></td>
                        </tr>
                        <tr>
                            <td>4. යම් උත්තේජනයක් සඳහා ප්‍රතිචාර දැක්වීමක් ලෙස ආ---- ඕ----ඊ----වැනි ශබ්ද නඟයි.</td>
                            <td><input type ="number" name="sreaction" value="<?php echo $sreaction;?>"></td>
                            <td><input type ="number" name="creaction" value="<?php echo $creaction;?>"></td>
                            <td><input type ="text" name="csreaction" style="width:100%;" value="<?php echo $csreaction;?>"></td>
                        </tr>
                        <tr>
                            <td>5. මව හදුනාගෙන සිනාසෙයි.</td>
                            <td><input type ="number" name="ssmile" value="<?php echo $ssmile;?>"></td>
                            <td><input type ="number" name="csmile" value="<?php echo $csmile;?>"></td>
                            <td><input type ="text" name="cssmile" style="width:100%;" value="<?php echo $cssmile;?>"></td>
                        </tr>
                        <tr> 
                            <th>මාස 3 සිට 6 දක්වා</th>
                            <td><input type ="number" name="smonth1" value="<?php echo $smonth1;?>"></td>
                            <td><input type ="number" name="cmonth1" value="<?php echo $cmonth1;?>"></td>
                            <td><input type ="text" name="cstatus1" style="width:100%;" value="<?php echo $cstatus1;?>"></td>
                        </tr>
                        <tr>
                            <td>1. මුනින් අතට සිටින විට හිස හා පපුව ඉහළට ඔසවයි.</td>
                            <td><input type ="number" name="sheart" value="<?php echo $sheart;?>"></td>
                            <td><input type ="number" name="cheart" value="<?php echo $cheart;?>"></td>
                            <td><input type ="text" name="csheart" style="width:100%;" value="<?php echo $csheart;?>"></td>
                        </tr>
                        <tr>
                            <td>2. ඇඟිලි එකිනෙක පටලවා ගනිමින් තම අත් සමඟ සෙල්ලම් කරයි.</td>
                            <td><input type ="number" name="sfinger" value="<?php echo $sfinger;?>"></td>
                            <td><input type ="number" name="cfinger" value="<?php echo $cfinger;?>"></td>
                            <td><input type ="text" name="csfinger" style="width:100%;" value="<?php echo $csfinger;?>"></td>
                        </tr>
                        <tr>
                            <td>3. යම් ද්‍රව්‍ය දෙසට අත දිගු කර මුළු අත්ලෙන්ම අල්ලා ගනියි.</td>
                            <td><input type ="number" name="shand" value="<?php echo $shand;?>"></td>
                            <td><input type ="number" name="chand" value="<?php echo $chand;?>"></td>
                            <td><input type ="text" name="cshand" style="width:100%;" value="<?php echo $cshand;?>"></td>
                        </tr>
                        <tr>
                            <td>4. ශබ්දයක් ඇසුනු විට ඒ දෙසට හිස හරවයි.</td>
                            <td><input type ="number" name="shsound" value="<?php echo $shsound;?>"></td>
                            <td><input type ="number" name="chsound" value="<?php echo $chsound;?>"></td>
                            <td><input type ="text" name="cshsound" style="width:100%;" value="<?php echo $cshsound;?>"></td>
                        </tr>
                        <tr>
                            <td>5. තනි අකුරේ ශබ්ද පිට කරයි ගා----ඩා----ටා---බා----</td>
                            <td><input type ="number" name="ssingle" value="<?php echo $ssingle;?>"></td>
                            <td><input type ="number" name="csingle" value="<?php echo $csingle;?>"></td>
                            <td><input type ="text" name="cssingle" style="width:100%;" value="<?php echo $cssingle;?>"></td>
                        </tr>
                        <tr>
                            <td>6. ශබ්ද නඟා සිනාසෙයි.</td>
                            <td><input type ="number" name="sssmile" value="<?php echo $sssmile;?>"></td>
                            <td><input type ="number" name="cssmile1" value="<?php echo $cssmile1;?>"></td>
                            <td><input type ="text" name="csssmile" style="width:100%;" value="<?php echo $csssmile;?>"></td>
                        </tr>
                        <tr>
                            <th>මාස 6 සිට 9 දක්වා</th>
                            <td><input type ="number" name="smonths" value="<?php echo $smonths;?>"></td>
                            <td><input type ="number" name="cmonths" value="<?php echo $cmonths;?>"></td>
                            <td><input type ="text" name="cstatuses" style="width:100%;" value="<?php echo $cstatuses;?>"></td>
                        </tr>
                        <tr>
                            <td>1. උඩු අතට වැතිර සිටින විට හිස ඔසවයි.</td>
                            <td><input type ="number" name="shrise" value="<?php echo $shrise;?>"></td>
                            <td><input type ="number" name="chrise" value="<?php echo $chrise;?>"></td>
                            <td><input type ="text" name="cshrise" style="width:100%;" value="<?php echo $cshrise;?>"></td>
                        </tr>
                        <tr>
                            <td>2. උඩු අතට සිට මුනින් අතටත් මුනින් අතට සිට උඩ අතටත් හැරෙයි.</td>
                            <td><input type ="number" name="ssame" value="<?php echo $ssame;?>"></td>
                            <td><input type ="number" name="csame" value="<?php echo $csame;?>"></td>
                            <td><input type ="text" name="cssame" style="width:100%;" value="<?php echo $cssame;?>"></td>
                        </tr>
                        <tr>
                            <td>3. එක් අතකින් අනික් අතට යම් දෙයක් මාරු කරයි.</td>
                            <td><input type ="number" name="schange" value="<?php echo $schange;?>"></td>
                            <td><input type ="number" name="cchange" value="<?php echo $cchange;?>"></td>
                            <td><input type ="text" name="cschange" style="width:100%;" value="<?php echo $cschange;?>"></td>
                        </tr>
                        <tr>
                            <td>4. යම් ශබ්දයක් නැවත නැවත ශබ්ද කරයි ඩා-ඩා-බා-බා-ටා-ටා. </td>
                            <td><input type ="number" name="sagain" value="<?php echo $sagain;?>"></td>
                            <td><input type ="number" name="cagain" value="<?php echo $cagain;?>"></td>
                            <td><input type ="text" name="csagain" style="width:100%;" value="<?php echo $csagain;?>"></td>
                        </tr>
                        <tr>
                            <th>මාස 9 සිට 12 දක්වා</th>
                            <td><input type ="number" name="snine" value="<?php echo $snine;?>"></td>
                            <td><input type ="number" name="cnine" value="<?php echo $cnine;?>"></td>
                            <td><input type ="text" name="csnine" style="width:100%;" value="<?php echo $csnine;?>"></td>
                        </tr>
                        <tr>
                            <td>1. උදව් නැතිව හිඳගනී.</td>
                            <td><input type ="number" name="ssit" value="<?php echo $ssit;?>"></td>
                            <td><input type ="number" name="csit" value="<?php echo $csit;?>"></td>
                            <td><input type ="text" name="cssit" style="width:100%;" value="<?php echo $cssit;?>"></td>
                        </tr>
                        <tr>
                            <td>2. තනිවම අල්ලාගෙන සිටගනී.</td>
                            <td><input type ="number" name="sstand" value="<?php echo $sstand;?>"></td>
                            <td><input type ="number" name="cstand" value="<?php echo $cstand;?>"></td>
                            <td><input type ="text" name="csstand" style="width:100%;" value="<?php echo $csstand;?>"></td>
                        </tr>
                        <tr>
                            <td>3. මහපට ඇඟිල්ල හා දබර ඇඟිල්ල ආධාරයෙන් කුඩා දේවල් අල්ලා ගනී.</td>
                            <td><input type ="number" name="sitem" value="<?php echo $sitem;?>"></td>
                            <td><input type ="number" name="citem" value="<?php echo $citem;?>"></td>
                            <td><input type ="text" name="csitem" style="width:100%;" value="<?php echo $csitem;?>"></td>
                        </tr>
                        <tr>
                            <td>4. ශබ්ද අනුකරණය කරයි.</td>
                            <td><input type ="number" name="smimicry" value="<?php echo $smimicry;?>"></td>
                            <td><input type ="number" name="cmimicry" value="<?php echo $cmimicry;?>"></td>
                            <td><input type ="text" name="csmimicry" style="width:100%;" value="<?php echo $csmimicry;?>"></td>
                        </tr>
                        <tr>
                            <td>5. තනි වචන උච්චාරණය කරයි. තේරුමක් ඇති ශබ්ද පිට කරයි.</td>
                            <td><input type ="number" name="sword" value="<?php echo $sword;?>"></td>
                            <td><input type ="number" name="cword" value="<?php echo $cword;?>"></td>
                            <td><input type ="text" name="csword" style="width:100%;" value="<?php echo $csword;?>"></td>
                        </tr>
                        <tr>
                            <td>6. සරල උපදෙස් තේරුම් ගනී. උදා : අත්පුඩි ගැසීම, අත වැනීම.(සමු ගැනීමේදී)</td>
                            <td><input type ="number" name="sadvice" value="<?php echo $sadvice;?>"></td>
                            <td><input type ="number" name="cadvice" value="<?php echo $cadvice;?>"></td>
                            <td><input type ="text" name="csadvice" style="width:100%;" value="<?php echo $csadvice;?>"></td>
                        </tr>
                        <tr>
                            <th>මාස 12 සිට 18 දක්වා</th>
                            <td><input type ="number" name="stwelve" value="<?php echo $stwelve;?>"></td>
                            <td><input type ="number" name="ctwelve" value="<?php echo $ctwelve;?>"></td>
                            <td><input type ="text" name="cstwelve" style="width:100%;" value="<?php echo $cstwelve;?>"></td>
                        </tr>
                        <tr>
                            <td>1. උදව් ඇතිව ඇවිදියි.</td>
                            <td><input type ="number" name="swalk" value="<?php echo $swalk;?>"></td>
                            <td><input type ="number" name="cwalk" value="<?php echo $cwalk;?>"></td>
                            <td><input type ="text" name="cswalk" style="width:100%;" value="<?php echo $cswalk;?>"></td>
                        </tr>
                        <tr>
                            <td>2. අඩුම ගණනේ වචන 2-3 ක් වත් කීමට පුලුවන. උදා : දෙන්න, අර.</td>
                            <td><input type ="number" name="sgive" value="<?php echo $sgive;?>"></td>
                            <td><input type ="number" name="cgive" value="<?php echo $cgive;?>"></td>
                            <td><input type ="text" name="csgive" style="width:100%;" value="<?php echo $csgive;?>"></td>
                        </tr>
                        <tr>
                            <td>3. හුරු පුරුදු දේවල් ගැන ඇසූ විට අත දිගු කර පෙන්වයි.</td>
                            <td><input type ="number" name="sfamiliar" value="<?php echo $sfamiliar;?>"></td>
                            <td><input type ="number" name="cfamiliar" value="<?php echo $cfamiliar;?>"></td>
                            <td><input type ="text" name="csfamiliar" style="width:100%;" value="<?php echo $csfamiliar;?>"></td>
                        </tr>
                        <tr>
                            <td>4. කුඩා බෝලයක් පෙරලිය හැක.</td>
                            <td><input type ="number" name="sball" value="<?php echo $sball;?>"></td>
                            <td><input type ="number" name="cball" value="<?php echo $cball;?>"></td>
                            <td><input type ="text" name="csball" style="width:100%;" value="<?php echo $csball;?>"></td>
                        </tr>
                        <tr>
                            <td>5. අඩුම වශයෙන් එක් ශරීර අවයවයක් වත් හඳුනා ගත හැක.</td>
                            <td><input type ="number" name="spart" value="<?php echo $spart;?>"></td>
                            <td><input type ="number" name="cpart" value="<?php echo $cpart;?>"></td>
                            <td><input type ="text" name="cspart" style="width:100%;" value="<?php echo $cspart;?>"></td>
                        </tr>
                    </table>
                    <!-- <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add"> -->
                    <center><input type="submit" class="link" name="update" style="margin-bottom: 50px;" value="Update"></center>
                    <!-- <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete"> -->
                </div>
            </div>
        </form>
    </body>
</html>
