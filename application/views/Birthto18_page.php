<?php
require '../models/Birthto18.model.php';
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
        <form action="Birthto18_page.php" method="post" >
            <div>
                <div class="caption-container1">
                <div class="caption-container"><h3>උපතේ සිට අවුරුදු 5 දක්වා වැඩීම/සංවර්ධනය පිළිබඳ පියවර (අපේක්ෂිත සංවර්ධනය) -  වගුව I</h3></div>

                    <div class="caption-container"><h3>Search NIC :</h3></div>
                    <center><input type="text" text-align="center" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
                    style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php if (isset($_POST ['id'])) echo $_POST ['id'];?>">
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
                            <th>සති 6 සිට මාස 3 දක්වා</th>
                            <td><input type ="number" name="sMonth" value="<?php if (isset($_POST ['sMonth'])) echo $_POST ['sMonth'];?>"></td>
                            <td><input type ="number" name="cMonth" value="<?php if (isset($_POST ['cMonth'])) echo $_POST ['cMonth'];?>"></td>
                            <td><input type ="text" name="cStatus" style="width:100%;" value="<?php if (isset($_POST ['cStatus'])) echo $_POST ['cStatus'];?>"></td>
                        </tr>
                        <tr>
                            <td>1. මුනින් අතට වැතිර සිටින විට හිස ඔසවයි.</td>
                            <td><input type ="number" name="shead" value="<?php if (isset($_POST ['shead'])) echo $_POST ['shead'];?>"></td>
                            <td><input type ="number" name="chead" value="<?php if (isset($_POST ['chead'])) echo $_POST ['chead'];?>"></td>
                            <td><input type ="text" name="cshead" style="width:100%;" value="<?php if (isset($_POST ['cshead'])) echo $_POST ['cshead'];?>"></td>
                        </tr>
                        <tr>
                            <td>2. එක තැනක සිට තව තැනකට චලනය වන දෙයක් දෙස දිගටම බලා සිටී.</td>
                            <td><input type ="number" name="slook" value="<?php if (isset($_POST ['slook'])) echo $_POST ['slook'];?>"></td>
                            <td><input type ="number" name="clook" value="<?php if (isset($_POST ['clook'])) echo $_POST ['clook'];?>"></td>
                            <td><input type ="text" name="cslook" style="width:100%;" value="<?php if (isset($_POST ['cslook'])) echo $_POST ['cslook'];?>"></td>
                        </tr>
                        <tr>
                            <td>3. හදිසියේ ඇතිවූ විශාල ශබ්දයකට තම ක්‍රියාකාරිත්වය නැවැත්වීමෙන් හෝ එය වැඩි කීරීමෙන් ප්‍රතිචාර දක්වයි.</td>
                            <td><input type ="number" name="ssound" value="<?php if (isset($_POST ['ssound'])) echo $_POST ['ssound'];?>"></td>
                            <td><input type ="number" name="csound" value="<?php if (isset($_POST ['csound'])) echo $_POST ['csound'];?>"></td>
                            <td><input type ="text" name="cssound" style="width:100%;" value="<?php if (isset($_POST ['cssound'])) echo $_POST ['cssound'];?>"></td>
                        </tr>
                        <tr>
                            <td>4. යම් උත්තේජනයක් සඳහා ප්‍රතිචාර දැක්වීමක් ලෙස ආ---- ඕ----ඊ----වැනි ශබ්ද නඟයි.</td>
                            <td><input type ="number" name="sreaction" value="<?php if (isset($_POST ['sreaction'])) echo $_POST ['sreaction'];?>"></td>
                            <td><input type ="number" name="creaction" value="<?php if (isset($_POST ['creaction'])) echo $_POST ['creaction'];?>"></td>
                            <td><input type ="text" name="csreaction" style="width:100%;" value="<?php if (isset($_POST ['csreaction'])) echo $_POST ['csreaction'];?>"></td>
                        </tr>
                        <tr>
                            <td>5. මව හදුනාගෙන සිනාසෙයි.</td>
                            <td><input type ="number" name="ssmile" value="<?php if (isset($_POST ['ssmile'])) echo $_POST ['ssmile'];?>"></td>
                            <td><input type ="number" name="csmile" value="<?php if (isset($_POST ['csmile'])) echo $_POST ['csmile'];?>"></td>
                            <td><input type ="text" name="cssmile" style="width:100%;" value="<?php if (isset($_POST ['cssmile'])) echo $_POST ['cssmile'];?>"></td>
                        </tr>
                        <tr> 
                            <th>මාස 3 සිට 6 දක්වා</th>
                            <td><input type ="number" name="smonth1" value="<?php if (isset($_POST ['smonth1'])) echo $_POST ['smonth1'];?>"></td>
                            <td><input type ="number" name="cmonth1" value="<?php if (isset($_POST ['cmonth1'])) echo $_POST ['cmonth1'];?>"></td>
                            <td><input type ="text" name="cstatus1" style="width:100%;" value="<?php if (isset($_POST ['cstatus1'])) echo $_POST ['cstatus1'];?>"></td>
                        </tr>
                        <tr>
                            <td>1. මුනින් අතට සිටින විට හිස හා පපුව ඉහළට ඔසවයි.</td>
                            <td><input type ="number" name="sheart" value="<?php if (isset($_POST ['sheart'])) echo $_POST ['sheart'];?>"></td>
                            <td><input type ="number" name="cheart" value="<?php if (isset($_POST ['cheart'])) echo $_POST ['cheart'];?>"></td>
                            <td><input type ="text" name="csheart" style="width:100%;" value="<?php if (isset($_POST ['csheart'])) echo $_POST ['csheart'];?>"></td>
                        </tr>
                        <tr>
                            <td>2. ඇඟිලි එකිනෙක පටලවා ගනිමින් තම අත් සමඟ සෙල්ලම් කරයි.</td>
                            <td><input type ="number" name="sfinger" value="<?php if (isset($_POST ['sfinger'])) echo $_POST ['sfinger'];?>"></td>
                            <td><input type ="number" name="cfinger" value="<?php if (isset($_POST ['cfinger'])) echo $_POST ['cfinger'];?>"></td>
                            <td><input type ="text" name="csfinger" style="width:100%;" value="<?php if (isset($_POST ['csfinger'])) echo $_POST ['csfinger'];?>"></td>
                        </tr>
                        <tr>
                            <td>3. යම් ද්‍රව්‍ය දෙසට අත දිගු කර මුළු අත්ලෙන්ම අල්ලා ගනියි.</td>
                            <td><input type ="number" name="shand" value="<?php if (isset($_POST ['shand'])) echo $_POST ['shand'];?>"></td>
                            <td><input type ="number" name="chand" value="<?php if (isset($_POST ['chand'])) echo $_POST ['chand'];?>"></td>
                            <td><input type ="text" name="cshand" style="width:100%;" value="<?php if (isset($_POST ['cshand'])) echo $_POST ['cshand'];?>"></td>
                        </tr>
                        <tr>
                            <td>4. ශබ්දයක් ඇසුනු විට ඒ දෙසට හිස හරවයි.</td>
                            <td><input type ="number" name="shsound" value="<?php if (isset($_POST ['shsound'])) echo $_POST ['shsound'];?>"></td>
                            <td><input type ="number" name="chsound" value="<?php if (isset($_POST ['chsound'])) echo $_POST ['chsound'];?>"></td>
                            <td><input type ="text" name="cshsound" style="width:100%;" value="<?php if (isset($_POST ['cshsound'])) echo $_POST ['cshsound'];?>"></td>
                        </tr>
                        <tr>
                            <td>5. තනි අකුරේ ශබ්ද පිට කරයි ගා----ඩා----ටා---බා----</td>
                            <td><input type ="number" name="ssingle" value="<?php if (isset($_POST ['ssingle'])) echo $_POST ['ssingle'];?>"></td>
                            <td><input type ="number" name="csingle" value="<?php if (isset($_POST ['csingle'])) echo $_POST ['csingle'];?>"></td>
                            <td><input type ="text" name="cssingle" style="width:100%;" value="<?php if (isset($_POST ['cssingle'])) echo $_POST ['cssingle'];?>"></td>
                        </tr>
                        <tr>
                            <td>6. ශබ්ද නඟා සිනාසෙයි.</td>
                            <td><input type ="number" name="sssmile" value="<?php if (isset($_POST ['sssmile'])) echo $_POST ['sssmile'];?>"></td>
                            <td><input type ="number" name="cssmile1" value="<?php if (isset($_POST ['cssmile1'])) echo $_POST ['cssmile1'];?>"></td>
                            <td><input type ="text" name="csssmile" style="width:100%;" value="<?php if (isset($_POST ['csssmile'])) echo $_POST ['csssmile'];?>"></td>
                        </tr>
                        <tr>
                            <th>මාස 6 සිට 9 දක්වා</th>
                            <td><input type ="number" name="smonths" value="<?php if (isset($_POST ['smonths'])) echo $_POST ['smonths'];?>"></td>
                            <td><input type ="number" name="cmonths" value="<?php if (isset($_POST ['cmonths'])) echo $_POST ['cmonths'];?>"></td>
                            <td><input type ="text" name="cstatuses" style="width:100%;" value="<?php if (isset($_POST ['cstatuses'])) echo $_POST ['cstatuses'];?>"></td>
                        </tr>
                        <tr>
                            <td>1. උඩු අතට වැතිර සිටින විට හිස ඔසවයි.</td>
                            <td><input type ="number" name="shrise" value="<?php if (isset($_POST ['shrise'])) echo $_POST ['shrise'];?>"></td>
                            <td><input type ="number" name="chrise" value="<?php if (isset($_POST ['chrise'])) echo $_POST ['chrise'];?>"></td>
                            <td><input type ="text" name="cshrise" style="width:100%;" value="<?php if (isset($_POST ['cshrise'])) echo $_POST ['cshrise'];?>"></td>
                        </tr>
                        <tr>
                            <td>2. උඩු අතට සිට මුනින් අතටත් මුනින් අතට සිට උඩ අතටත් හැරෙයි.</td>
                            <td><input type ="number" name="ssame" value="<?php if (isset($_POST ['ssame'])) echo $_POST ['ssame'];?>"></td>
                            <td><input type ="number" name="csame" value="<?php if (isset($_POST ['csame'])) echo $_POST ['csame'];?>"></td>
                            <td><input type ="text" name="cssame" style="width:100%;" value="<?php if (isset($_POST ['cssame'])) echo $_POST ['cssame'];?>"></td>
                        </tr>
                        <tr>
                            <td>3. එක් අතකින් අනික් අතට යම් දෙයක් මාරු කරයි.</td>
                            <td><input type ="number" name="schange" value="<?php if (isset($_POST ['schange'])) echo $_POST ['schange'];?>"></td>
                            <td><input type ="number" name="cchange" value="<?php if (isset($_POST ['cchange'])) echo $_POST ['cchange'];?>"></td>
                            <td><input type ="text" name="cschange" style="width:100%;" value="<?php if (isset($_POST ['cschange'])) echo $_POST ['cschange'];?>"></td>
                        </tr>
                        <tr>
                            <td>4. යම් ශබ්දයක් නැවත නැවත ශබ්ද කරයි ඩා-ඩා-බා-බා-ටා-ටා. </td>
                            <td><input type ="number" name="sagain" value="<?php if (isset($_POST ['sagain'])) echo $_POST ['sagain'];?>"></td>
                            <td><input type ="number" name="cagain" value="<?php if (isset($_POST ['cagain'])) echo $_POST ['cagain'];?>"></td>
                            <td><input type ="text" name="csagain" style="width:100%;" value="<?php if (isset($_POST ['csagain'])) echo $_POST ['csagain'];?>"></td>
                        </tr>
                        <tr>
                            <th>මාස 9 සිට 12 දක්වා</th>
                            <td><input type ="number" name="snine" value="<?php if (isset($_POST ['snine'])) echo $_POST ['snine'];?>"></td>
                            <td><input type ="number" name="cnine" value="<?php if (isset($_POST ['cnine'])) echo $_POST ['cnine'];?>"></td>
                            <td><input type ="text" name="csnine" style="width:100%;" value="<?php if (isset($_POST ['csnine'])) echo $_POST ['csnine'];?>"></td>
                        </tr>
                        <tr>
                            <td>1. උදව් නැතිව හිඳගනී.</td>
                            <td><input type ="number" name="ssit" value="<?php if (isset($_POST ['ssit'])) echo $_POST ['ssit'];?>"></td>
                            <td><input type ="number" name="csit" value="<?php if (isset($_POST ['csit'])) echo $_POST ['csit'];?>"></td>
                            <td><input type ="text" name="cssit" style="width:100%;" value="<?php if (isset($_POST ['cssit'])) echo $_POST ['cssit'];?>"></td>
                        </tr>
                        <tr>
                            <td>2. තනිවම අල්ලාගෙන සිටගනී.</td>
                            <td><input type ="number" name="sstand" value="<?php if (isset($_POST ['sstand'])) echo $_POST ['sstand'];?>"></td>
                            <td><input type ="number" name="cstand" value="<?php if (isset($_POST ['cstand'])) echo $_POST ['cstand'];?>"></td>
                            <td><input type ="text" name="csstand" style="width:100%;" value="<?php if (isset($_POST ['csstand'])) echo $_POST ['csstand'];?>"></td>
                        </tr>
                        <tr>
                            <td>3. මහපට ඇඟිල්ල හා දබර ඇඟිල්ල ආධාරයෙන් කුඩා දේවල් අල්ලා ගනී.</td>
                            <td><input type ="number" name="sitem" value="<?php if (isset($_POST ['sitem'])) echo $_POST ['sitem'];?>"></td>
                            <td><input type ="number" name="citem" value="<?php if (isset($_POST ['citem'])) echo $_POST ['citem'];?>"></td>
                            <td><input type ="text" name="csitem" style="width:100%;" value="<?php if (isset($_POST ['csitem'])) echo $_POST ['csitem'];?>"></td>
                        </tr>
                        <tr>
                            <td>4. ශබ්ද අනුකරණය කරයි.</td>
                            <td><input type ="number" name="smimicry" value="<?php if (isset($_POST ['smimicry'])) echo $_POST ['smimicry'];?>"></td>
                            <td><input type ="number" name="cmimicry" value="<?php if (isset($_POST ['cmimicry'])) echo $_POST ['cmimicry'];?>"></td>
                            <td><input type ="text" name="csmimicry" style="width:100%;" value="<?php if (isset($_POST ['csmimicry'])) echo $_POST ['csmimicry'];?>"></td>
                        </tr>
                        <tr>
                            <td>5. තනි වචන උච්චාරණය කරයි. තේරුමක් ඇති ශබ්ද පිට කරයි.</td>
                            <td><input type ="number" name="sword" value="<?php if (isset($_POST ['sword'])) echo $_POST ['sword'];?>"></td>
                            <td><input type ="number" name="cword" value="<?php if (isset($_POST ['cword'])) echo $_POST ['cword'];?>"></td>
                            <td><input type ="text" name="csword" style="width:100%;" value="<?php if (isset($_POST ['csword'])) echo $_POST ['csword'];?>"></td>
                        </tr>
                        <tr>
                            <td>6. සරල උපදෙස් තේරුම් ගනී. උදා : අත්පුඩි ගැසීම, අත වැනීම.(සමු ගැනීමේදී)</td>
                            <td><input type ="number" name="sadvice" value="<?php if (isset($_POST ['sadvice'])) echo $_POST ['sadvice'];?>"></td>
                            <td><input type ="number" name="cadvice" value="<?php if (isset($_POST ['cadvice'])) echo $_POST ['cadvice'];?>"></td>
                            <td><input type ="text" name="csadvice" style="width:100%;" value="<?php if (isset($_POST ['csadvice'])) echo $_POST ['csadvice'];?>"></td>
                        </tr>
                        <tr>
                            <th>මාස 12 සිට 18 දක්වා</th>
                            <td><input type ="number" name="stwelve" value="<?php if (isset($_POST ['stwelve'])) echo $_POST ['stwelve'];?>"></td>
                            <td><input type ="number" name="ctwelve" value="<?php if (isset($_POST ['ctwelve'])) echo $_POST ['ctwelve'];?>"></td>
                            <td><input type ="text" name="cstwelve" style="width:100%;" value="<?php if (isset($_POST ['cstwelve'])) echo $_POST ['cstwelve'];?>"></td>
                        </tr>
                        <tr>
                            <td>1. උදව් ඇතිව ඇවිදියි.</td>
                            <td><input type ="number" name="swalk" value="<?php if (isset($_POST ['swalk'])) echo $_POST ['swalk'];?>"></td>
                            <td><input type ="number" name="cwalk" value="<?php if (isset($_POST ['cwalk'])) echo $_POST ['cwalk'];?>"></td>
                            <td><input type ="text" name="cswalk" style="width:100%;" value="<?php if (isset($_POST ['cswalk'])) echo $_POST ['cswalk'];?>"></td>
                        </tr>
                        <tr>
                            <td>2. අඩුම ගණනේ වචන 2-3 ක් වත් කීමට පුලුවන. උදා : දෙන්න, අර.</td>
                            <td><input type ="number" name="sgive" value="<?php if (isset($_POST ['sgive'])) echo $_POST ['sgive'];?>"></td>
                            <td><input type ="number" name="cgive" value="<?php if (isset($_POST ['cgive'])) echo $_POST ['cgive'];?>"></td>
                            <td><input type ="text" name="csgive" style="width:100%;" value="<?php if (isset($_POST ['csgive'])) echo $_POST ['csgive'];?>"></td>
                        </tr>
                        <tr>
                            <td>3. හුරු පුරුදු දේවල් ගැන ඇසූ විට අත දිගු කර පෙන්වයි.</td>
                            <td><input type ="number" name="sfamiliar" value="<?php if (isset($_POST ['sfamiliar'])) echo $_POST ['sfamiliar'];?>"></td>
                            <td><input type ="number" name="cfamiliar" value="<?php if (isset($_POST ['cfamiliar'])) echo $_POST ['cfamiliar'];?>"></td>
                            <td><input type ="text" name="csfamiliar" style="width:100%;" value="<?php if (isset($_POST ['csfamiliar'])) echo $_POST ['csfamiliar'];?>"></td>
                        </tr>
                        <tr>
                            <td>4. කුඩා බෝලයක් පෙරලිය හැක.</td>
                            <td><input type ="number" name="sball" value="<?php if (isset($_POST ['sball'])) echo $_POST ['sball'];?>"></td>
                            <td><input type ="number" name="cball" value="<?php if (isset($_POST ['cball'])) echo $_POST ['cball'];?>"></td>
                            <td><input type ="text" name="csball" style="width:100%;" value="<?php if (isset($_POST ['csball'])) echo $_POST ['csball'];?>"></td>
                        </tr>
                        <tr>
                            <td>5. අඩුම වශයෙන් එක් ශරීර අවයවයක් වත් හඳුනා ගත හැක.</td>
                            <td><input type ="number" name="spart" value="<?php if (isset($_POST ['spart'])) echo $_POST ['spart'];?>"></td>
                            <td><input type ="number" name="cpart" value="<?php if (isset($_POST ['cpart'])) echo $_POST ['cpart'];?>"></td>
                            <td><input type ="text" name="cspart" style="width:100%;" value="<?php if (isset($_POST ['cspart'])) echo $_POST ['cspart'];?>"></td>
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
