<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "moh";

$idn=""; $sMonth = ""; $cMonth = ""; $cStatus = "";  $shead = ""; $chead = ""; $cshead = ""; $slook = "";  $clook = ""; $cslook = "";   
$ssound = ""; $csound = ""; $cssound = ""; $sreaction = ""; $creaction = ""; $csreaction = "";  $ssmile = ""; $csmile = ""; $cssmile = ""; 
$smonth1 = ""; $cmonth1 = ""; $cstatus1 = "";  $sheart = ""; $cheart = ""; $csheart = ""; $sfinger = "";  $cfinger = ""; $csfinger = "";   
$shand = ""; $chand = ""; $cshand = ""; $shsound = ""; $chsound = ""; $cshsound = "";  $ssingle = ""; $csingle = ""; $cssingle = "";
$sssmile = ""; $cssmile1 = ""; $csssmile = "";  $smonths = ""; $cmonths = ""; $cstatuses = ""; $shrise = "";  $chrise = ""; $cshrise = "";   
$ssame = ""; $csame = ""; $cssame = "";$schange = ""; $cchange = ""; $cschange = "";  $sagain = ""; $cagain = ""; $csagain = "";
$snine = ""; $cnine = ""; $csnine = "";  $ssit = ""; $csit = ""; $cssit = ""; $sstand = "";  $cstand = ""; $csstand = "";   
$sitem = ""; $citem = ""; $csitem = "";$smimicry = ""; $cmimicry = ""; $csmimicry = "";  $sword = ""; $cword = ""; $csword = "";
$sadvice = ""; $cadvice = ""; $csadvice = "";  $stwelve = ""; $ctwelve = ""; $cstwelve = ""; $swalk = "";  $cwalk = ""; $cswalk = "";   
$sgive = ""; $cgive = ""; $csgive = ""; $sfamiliar = ""; $cfamiliar = ""; $csfamiliar = "";  $sball = ""; $cball = ""; $csball = "";
$spart = ""; $cpart = ""; $cspart = "";  

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}catch (Exception $ex){
    echo 'Error';
}

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['idn'];$posts[1] = $_POST['sMonth']; $posts[2] = $_POST['cMonth']; $posts[3] = $_POST['cStatus'];$posts[4] = $_POST['shead'];$posts[5] = $_POST['chead']; 
    $posts[6] = $_POST['cshead']; $posts[7] = $_POST['slook']; $posts[8] = $_POST['clook']; $posts[9] = $_POST['cslook']; 
    
    $posts[10] = $_POST['ssound']; $posts[11] = $_POST['csound']; $posts[12] = $_POST['cssound'];$posts[13] = $_POST['sreaction']; $posts[14] = $_POST['creaction'];
    $posts[15] = $_POST['csreaction'];$posts[16] = $_POST['ssmile']; $posts[17] = $_POST['csmile']; $posts[18] = $_POST['cssmile']; 

    $posts[19] = $_POST['smonth1']; $posts[20] = $_POST['cmonth1'];$posts[21] = $_POST['cstatus1']; $posts[22] = $_POST['sheart']; $posts[23] = $_POST['cheart'];
    $posts[24] = $_POST['csheart']; $posts[25] = $_POST['sfinger']; $posts[26] = $_POST['cfinger']; $posts[27] = $_POST['csfinger']; 
    
    $posts[28] = $_POST['shand']; $posts[29] = $_POST['chand']; $posts[30] = $_POST['cshand']; $posts[31] = $_POST['shsound']; $posts[32] = $_POST['chsound']; 
    $posts[33] = $_POST['cshsound']; $posts[34] = $_POST['ssingle']; $posts[35] = $_POST['csingle']; $posts[36] = $_POST['cssingle']; 

    $posts[37] = $_POST['sssmile']; $posts[38] = $_POST['cssmile1']; $posts[39] = $_POST['csssmile']; $posts[40] = $_POST['smonths']; $posts[41] = $_POST['cmonths']; 
    $posts[42] = $_POST['cstatuses']; $posts[43] = $_POST['shrise']; $posts[44] = $_POST['chrise']; $posts[45] = $_POST['cshrise']; 
    
    $posts[46] = $_POST['ssame']; $posts[47] = $_POST['csame']; $posts[48] = $_POST['cssame']; $posts[49] = $_POST['schange']; $posts[50] = $_POST['cchange']; 
    $posts[51] = $_POST['cschange']; $posts[52] = $_POST['sagain']; $posts[53] = $_POST['cagain']; $posts[54] = $_POST['csagain'];

    $posts[55] = $_POST['snine']; $posts[56] = $_POST['cnine']; $posts[57] = $_POST['csnine']; $posts[58] = $_POST['ssit']; $posts[59] = $_POST['csit']; 
    $posts[60] = $_POST['cssit']; $posts[61] = $_POST['sstand']; $posts[62] = $_POST['cstand']; $posts[63] = $_POST['csstand']; 

    $posts[64] = $_POST['sitem']; $posts[65] = $_POST['citem']; $posts[66] = $_POST['csitem'];$posts[67] = $_POST['smimicry'];$posts[68] = $_POST['cmimicry']; 
    $posts[69] = $_POST['csmimicry']; $posts[70] = $_POST['sword']; $posts[71] = $_POST['cword']; $posts[72] = $_POST['csword']; 

    $posts[73] = $_POST['sadvice']; $posts[74] = $_POST['cadvice']; $posts[75] = $_POST['csadvice'];$posts[76] = $_POST['stwelve'];$posts[77] = $_POST['ctwelve']; 
    $posts[78] = $_POST['cstwelve']; $posts[79] = $_POST['swalk']; $posts[80] = $_POST['cwalk']; $posts[81] = $_POST['cswalk']; 

    $posts[82] = $_POST['sgive']; $posts[83] = $_POST['cgive']; $posts[84] = $_POST['csgive'];$posts[85] = $_POST['sfamiliar'];$posts[86] = $_POST['cfamiliar']; 
    $posts[87] = $_POST['csfamiliar']; $posts[88] = $_POST['sball']; $posts[89] = $_POST['cball']; $posts[90] = $_POST['csball']; 

    $posts[91] = $_POST['spart']; $posts[92] = $_POST['cpart']; $posts[93] = $_POST['cspart'];
    
    return $posts;
}

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `table3`(`idn`,`sMonth`,`cMonth`,`cStatus`,`shead`,`chead`,`cshead`,`slook`,`clook`,`cslook`,
    `ssound`,`csound`,`cssound`,`sreaction`,`creaction`,`csreaction`,`ssmile`,`csmile`,`cssmile`,
    `smonth1`,`cmonth1`,`cstatus1`,`sheart`,`cheart`,`csheart`,`sfinger`,`cfinger`,`csfinger`,
    `shand`,`chand`,`cshand`,`shsound`,`chsound`,`cshsound`,`ssingle`,`csingle`,`cssingle`,
    `sssmile`,`cssmile1`,`csssmile`,`smonths`,`cmonths`,`cstatuses`,`shrise`,`chrise`,`cshrise`,
    `ssame`,`csame`,`cssame`,`schange`,`cchange`,`cschange`,`sagain`,`cagain`,`csagain`,
    `snine`,`cnine`,`csnine`,`ssit`,`csit`,`cssit`,`sstand`,`cstand`,`csstand`,
    `sitem`,`citem`,`csitem`,`smimicry`,`cmimicry`,`csmimicry`,`sword`,`cword`,`csword`,
    `sadvice`,`cadvice`,`csadvice`,`stwelve`,`ctwelve`,`cstwelve`,`swalk`,`cwalk`,`cswalk`, 
    `sgive`,`cgive`,`csgive`,`sfamiliar`,`cfamiliar`,`csfamiliar`,`sball`,`cball`,`csball`,
    `spart`,`cpart`,`cspart`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]',
    '$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]',
    '$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]','$data[24]','$data[25]','$data[26]',
    '$data[27]','$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]','$data[34]','$data[35]',
    '$data[36]','$data[37]','$data[38]','$data[39]','$data[40]','$data[41]','$data[42]','$data[43]','$data[44]',
    '$data[45]','$data[46]','$data[47]','$data[48]','$data[49]','$data[50]','$data[51]','$data[52]','$data[53]',
    '$data[54]','$data[55]','$data[56]','$data[57]','$data[58]','$data[59]','$data[60]','$data[61]','$data[62]',
    '$data[63]','$data[64]','$data[65]','$data[66]','$data[67]','$data[68]','$data[69]','$data[70]','$data[71]',
    '$data[72]','$data[73]','$data[74]','$data[75]','$data[76]','$data[77]','$data[78]','$data[79]','$data[80]',
    '$data[81]','$data[82]','$data[83]','$data[84]','$data[85]','$data[86]','$data[87]','$data[88]','$data[89]',
    '$data[90]','$data[91]','$data[92]','$data[93]')";
    try{
        $insert_Result = mysqli_query($connect,$insert_Query);
        if($insert_Result){
            if(mysqli_affected_rows($connect) > 0){
                echo 'Data inserted'; 
            }else{
                echo 'Data not inserted';
            }
        }
    }catch (Exception $ex){
        echo 'Error Insert' .$ex->getMessage();
    }
}

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table3 WHERE idn = $data[0]";
    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $idn= $row['idn']; $sMonth = $row['sMonth']; $cMonth = $row['cMonth']; $cStatus = $row['cStatus'];$shead = $row['shead'];$chead = $row['chead']; 
                $cshead = $row['cshead']; $slook = $row['slook']; $clook = $row['clook']; $cslook = $row['cslook']; 
                $ssound = $row['ssound']; $csound = $row['csound']; $cssound = $row['cssound'];$sreaction = $row['sreaction']; $creaction = $row['creaction'];
                $csreaction = $row['creaction'];$ssmile = $row['csreaction']; $csmile = $row['ssmile']; $cssmile = $row['cssmile']; 
                $smonth1 = $row['smonth1']; $cmonth1 = $row['cmonth1'];$cstatus1 = $row['cstatus1']; $sheart = $row['sheart']; $cheart = $row['cheart'];
                $csheart = $row['csheart']; $sfinger = $row['sfinger']; $cfinger = $row['cfinger']; $csfinger = $row['csfinger']; 
                $shand = $row['shand']; $chand = $row['chand']; $cshand = $row['cshand']; $shsound = $row['shsound']; $chsound = $row['chsound']; 
                $cshsound = $row['cshsound']; $ssingle = $row['ssingle']; $csingle = $row['csingle']; $cssingle = $row['cssingle']; 
                $sssmile = $row['sssmile']; $cssmile1 = $row['cssmile1']; $csssmile = $row['csssmile']; $smonths = $row['smonths']; $cmonths = $row['cmonths']; 
                $cstatuses = $row['cstatuses']; $shrise = $row['shrise']; $chrise = $row['chrise']; $cshrise = $row['cshrise']; 
                $ssame = $row['ssame']; $csame = $row['csame']; $cssame = $row['cssame']; $schange = $row['schange']; $cchange = $row['cchange']; 
                $cschange = $row['cschange']; $sagain = $row['sagain']; $cagain = $row['cagain']; $csagain = $row['csagain'];
                $snine = $row['snine']; $cnine= $row['cnine']; $csnine = $row['csnine']; $ssit = $row['ssit']; $csit = $row['csit']; 
                $cssit = $row['cssit']; $sstand = $row['sstand']; $cstand = $row['cstand']; $csstand = $row['csstand']; 
                $sitem = $row['sitem']; $citem = $row['citem']; $csitem= $row['csitem'];$smimicry = $row['smimicry'];$cmimicry = $row['cmimicry']; 
                $csmimicry = $row['csmimicry']; $sword = $row['sword']; $cword = $row['cword']; $csword = $row['csword']; 
                $sadvice = $row['sadvice']; $cadvice = $row['cadvice']; $csadvice = $row['csadvice'];$stwelve = $row['stwelve'];$ctwelve = $row['ctwelve']; 
                $cstwelve = $row['cstwelve']; $swalk = $row['swalk']; $cwalk = $row['cwalk']; $cswalk = $row['cswalk']; 
                $sgive= $row['sgive']; $cgive = $row['cgive']; $csgive = $row['csgive'];$sfamiliar = $row['sfamiliar'];$cfamiliar = $row['cfamiliar']; 
                $csfamiliar = $row['csfamiliar']; $sball = $row['sball']; $cball = $row['cball']; $csball = $row['csball']; 
                $spart = $row['spart']; $cpart = $row['cpart']; $cspart = $row['cspart'];
            }
        }else{
            echo 'No data for this idn';
        }
    }else{
        echo 'Result Error';
    }
}

//delete
if(isset($_POST['delete'])){
    $data = getPosts();
    $delete_Query = "DELETE FROM `table3` WHERE `idn` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);

        if($delete_Result){
            if(mysqli_affected_rows($connect)>0){
               echo 'data deleted';
            }else{
                echo 'data not deleted';
            }
        }
    }catch (Exception $ex){
        echo 'Error Delete' .$ex->getMessage();
    }
}

//update
if(isset($_POST['update'])){
    $data = getPosts();
    $update_Query = "UPDATE `table3` SET `sMonth`='$data[1]', `cMonth`='$data[2]', `cStatus`='$data[3]',`shead`='$data[4]', `chead`='$data[5]', 
    `cshead`='$data[6]',`slook`='$data[7]', `clook`='$data[8]', `cslook`='$data[9]',
    `ssound`='$data[10]', `csound`='$data[11]', `cssound`='$data[12]',`sreaction`='$data[13]', `creaction`='$data[14]', 
    `csreaction`='$data[15]',`ssmile`='$data[16]', `csmile`='$data[17]', `cssmile`='$data[18]',
    `smonth1`='$data[19]', `cmonth1`='$data[20]', `cstatus1`='$data[21]',`sheart`='$data[22]', `cheart`='$data[23]',
    `csheart`='$data[24]', `sfinger`='$data[25]', `cfinger`='$data[26]',`csfinger`='$data[27]', 
    `shand`='$data[28]', `chand`='$data[29]',`cshand`='$data[30]',`shsound`='$data[31]', `chsound`='$data[32]', 
    `cshsound`='$data[33]',`ssingle`='$data[34]', `csingle`='$data[35]', `cssingle`='$data[36]',
    `sssmile`='$data[37]', `cssmile1`='$data[38]', `csssmile`='$data[39]',`smonths`='$data[40]',`cmonths`='$data[41]', 
    `cstatuses`='$data[42]', `shrise`='$data[43]',`chrise`='$data[44]', `cshrise`='$data[45]', 
    `ssame`='$data[46]',`csame`='$data[47]', `cssame`='$data[48]', `schange`='$data[49]',`cchange`='$data[50]',
    `cschange`='$data[51]', `sagain`='$data[52]', `cagain`='$data[53]',`csagain`='$data[54]', 
    `snine`='$data[55]', `cnine`='$data[56]',`csnine`='$data[57]', `ssit`='$data[58]', `csit`='$data[59]',
    `cssit`='$data[60]',`sstand`='$data[61]',`cstand`='$data[62]', `csstand`='$data[63]', 
    `sitem`='$data[64]',`citem`='$data[65]',`csitem`='$data[66]',`smimicry`='$data[67]',`cmimicry`='$data[68]',
    `csmimicry`='$data[69]',`sword`='$data[70]',`cword`='$data[71]',`csword`='$data[72]',
    `sadvice`='$data[73]',`cadvice`='$data[74]',`csadvice`='$data[75]',`stwelve`='$data[76]',`ctwelve`='$data[77]',
    `cstwelve`='$data[78]',`swalk`='$data[79]',`cwalk`='$data[80]',`cswalk`='$data[81]', 
    `sgive`='$data[82]',`cgive`='$data[83]',`csgive`='$data[84]',`sfamiliar`='$data[85]',`cfamiliar`='$data[86]',
    `csfamiliar`='$data[87]',`sball`='$data[88]',`cball`='$data[89]',`csball`='$data[90]',
    `spart`='$data[91]',`cpart`='$data[92]',`cspart`='$data[93]'
     WHERE `idn` = $data[0]";

    try{
        $update_Result = mysqli_query($connect, $update_Query);

        if($update_Result){
            if(mysqli_affected_rows($connect)>0){
               echo 'data updated';
            }else{
                echo 'data not updated';
            }
        }
    }catch (Exception $ex){
        echo 'Error update' .$ex->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="cssClinic/newStyle.css">
    </head>
    <body>
        <form action="chdr.php" method="post" >
            <div>
                <h3>Search NIC :</h3>
                <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="idn" value="<?php echo $idn;?>">
                <br><br>
                <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">

                <h3>උපතේ සිට අවුරුදු 5 දක්වා වැඩීම/සංවර්ධනය පිළිබඳ පියවර (අපේක්ෂිත සංවර්ධනය) -  වගුව I</h3>
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
                <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">
            </div>
        </form>
    </body>
</html>
