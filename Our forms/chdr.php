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

                <h3>උපතේ සිට අවුරුදු 5 දක්වා වැඩීම/සංවර්ධනය පිළිබඳ පියවර (අපේක්ෂිත සංවර්ධනය)</h3>
                <table style="width:100% ;margin-bottom: 50px;" >
                    <tr>
                        <th style="width:37%">වයස</th>
                        <th style="width:20%">සිදුවන විට වයස මාස</th>
                        <th style="width:20%">තහවුරු කරන විට වයස මාස</th>
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
                        <td><input type ="number" name="smonth" value="<?php echo $smonth;?>"></td>
                        <td><input type ="number" name="cmonth" value="<?php echo $cmonth;?>"></td>
                        <td><input type ="text" name="cstatus" style="width:100%;" value="<?php echo $csstatus;?>"></td>
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
                        <td><input type ="number" name="cssmile" value="<?php echo $cssmile;?>"></td>
                        <td><input type ="text" name="csssmile" style="width:100%;" value="<?php echo $csssmile;?>"></td>
                    </tr>
                    <tr>
                        <th>මාස 6 සිට 9 දක්වා</th>
                        <td><input type ="number" name="smonths" value="<?php echo $smonths;?>"></td>
                        <td><input type ="number" name="cmonths" value="<?php echo $cmonths;?>"></td>
                        <td><input type ="text" name="cstatuses" style="width:100%;" value="<?php echo $csstatuses;?>"></td>
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