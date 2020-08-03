<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

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

$birthto18 = new table();

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table3 WHERE idn = $data[0]";
    $search_Result = $birthto18->featuredLoad($dbObj, $search_Query);

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
        $update_Result = $birthto18->featuredLoad($dbObj, $update_Query);

        if($update_Result){
            echo '<script type="text/javascript">alert("Updated successfully!");</script>';
            // if(mysqli_affected_rows($connect)>0){
            //    echo 'data updated';
            // }else{
            //     echo 'data not updated';
            // }
        }
    }catch (Exception $ex){
        //echo 'Error update' .$ex->getMessage();
        echo '<script type="text/javascript">alert("Error!");</script>';
    }
}
?>