<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "moh";

$id=""; $sMonth = ""; $cMonth = ""; $cStatus = "";  $shead = ""; $chead = ""; $cshead = ""; $slook = "";  $clook = ""; $cslook = "";   
$ssound = ""; $csound = ""; $cssound = ""; $sreaction = ""; $creaction = ""; $csreaction = "";  $ssmile = ""; $csmile = ""; $cssmile = ""; 
$smonth = ""; $cmonth = ""; $cstatus = "";  $sheart = ""; $cheart = ""; $csheart = ""; $sfinger = "";  $cfinger = ""; $csfinger = "";   
$shand = ""; $chand = ""; $cshand = ""; $shsound = ""; $chsound = ""; $cshsound = "";  $ssingle = ""; $csingle = ""; $cssingle = "";
$sssmile = ""; $cssmile = ""; $csssmile = "";  $smonths = ""; $cmonths = ""; $cstatuses = ""; $shrise = "";  $chrise = ""; $cshrise = "";   
$ssame = ""; $csame = ""; $cssame = "";$schange = ""; $cchange = ""; $cschange = "";  $sagain = ""; $cagain = ""; $csagain = "";
$snine = ""; $cnine = ""; $csnine = "";  $ssit = ""; $csit = ""; $cssit = ""; $sstand = "";  $cstand = ""; $csstand = "";   
$sitem = ""; $citem = ""; $csitem = "";$smimicry = ""; $cmimicry = ""; $csmimicry = "";  $sword = ""; $cword = ""; $csword = "";
$sadvice = ""; $cadvice = ""; $csadvice = "";  $stwelve = ""; $ctwelve = ""; $cstwelve = ""; $swalk = "";  $cwalk = ""; $cswalk = "";   
$sgive = ""; $cgive = ""; $csgive = ""; $sfamiliar = ""; $cfamiliar = ""; $csfamiliar = "";  $sball = ""; $cball = ""; $csball = "";
$spart = ""; $cpart = ""; $cspart = "";  $seighteen = ""; $ceighteen = ""; $cseighteen = ""; $sawalk = "";  $cawalk = ""; $csawalk = "";   
$sstair = ""; $cstair = ""; $csstair = ""; $sblock = ""; $cblock = ""; $csblock = "";  $seat = ""; $ceat = ""; $cseat = "";
$stenWord = ""; $ctenWord = ""; $cstenWord = "";  $slip = ""; $clip = ""; $cslip = ""; $syear = "";  $cyear = ""; $csyear = "";   
$srun = ""; $crun = ""; $csrun = ""; $sup = ""; $cup = ""; $csup = "";  $scircle = ""; $ccircle = ""; $cscircle = "";
$ssentence = ""; $csentence = ""; $cssentence = "";  $sthree = ""; $cthree = ""; $csthree = ""; $sleg = "";  $cleg = ""; $csleg = "";   
$sjump = ""; $cjump = ""; $csjump = ""; $sshoe = ""; $cshoe = ""; $csshoe = "";  $scopy = ""; $ccopy = ""; $cscopy = "";
$scount = ""; $ccount = ""; $cscount = "";  $snear = ""; $cnear = ""; $csnear = ""; $scomplex = "";  $ccomplex = ""; $cscomplex = "";   
$sfour = ""; $cfour = ""; $csfour = ""; $slegJump = ""; $clegJump = ""; $cslegJump = "";  $sdressing = ""; $cdressing = ""; $csdressing = "";
$sfood = ""; $cfood = ""; $csfood = "";  $sskeleton = ""; $cskeleton = ""; $csskeleton = ""; $splay = "";  $cplay = ""; $csplay = "";   
$stime = ""; $ctime = ""; $cstime = ""; $sname = ""; $cname = ""; $csname = "";  

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}catch (Exception $ex){
    echo 'Error';
}

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['sMonth']; $posts[2] = $_POST['cMonth']; $posts[3] = $_POST['cStatus'];$posts[4] = $_POST['shead'];$posts[5] = $_POST['chead']; 
    $posts[6] = $_POST['cshead']; $posts[7] = $_POST['slook']; $posts[8] = $_POST['clook']; $posts[9] = $_POST['cslook']; 
    
    $posts[10] = $_POST['ssound']; $posts[11] = $_POST['csound']; $posts[12] = $_POST['cssound'];$posts[13] = $_POST['sreaction']; $posts[14] = $_POST['creaction'];
    $posts[15] = $_POST['creaction'];$posts[16] = $_POST['csreaction']; $posts[17] = $_POST['ssmile']; $posts[18] = $_POST['cssmile']; 

    $posts[19] = $_POST['smonth']; $posts[20] = $_POST['cmonth'];$posts[21] = $_POST['cstatus']; $posts[22] = $_POST['sheart']; $posts[23] = $_POST['cheart'];
    $posts[24] = $_POST['csheart']; $posts[25] = $_POST['sfinger']; $posts[26] = $_POST['cfinger']; $posts[27] = $_POST['csfinger']; 
    
    $posts[28] = $_POST['shand']; $posts[29] = $_POST['chand']; $posts[30] = $_POST['cshand']; $posts[31] = $_POST['shsound']; $posts[32] = $_POST['chsound']; 
    $posts[33] = $_POST['cshsound']; $posts[34] = $_POST['ssingle']; $posts[35] = $_POST['csingle']; $posts[36] = $_POST['cssingle']; 

    $posts[37] = $_POST['sssmile']; $posts[38] = $_POST['cssmile']; $posts[39] = $_POST['csssmile']; $posts[40] = $_POST['smonths']; $posts[41] = $_POST['cmonths']; 
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

    $posts[91] = $_POST['spart']; $posts[92] = $_POST['cpart']; $posts[93] = $_POST['cspart'];$posts[94] = $_POST['seighteen'];$posts[95] = $_POST['ceighteen']; 
    $posts[96] = $_POST['cseighteen']; $posts[97] = $_POST['sawalk']; $posts[98] = $_POST['cawalk']; $posts[99] = $_POST['csawalk']; 

    $posts[100] = $_POST['sstair']; $posts[101] = $_POST['cstair']; $posts[102] = $_POST['csstair'];$posts[103] = $_POST['sblock'];$posts[104] = $_POST['cblock']; 
    $posts[105] = $_POST['csblock']; $posts[106] = $_POST['seat']; $posts[107] = $_POST['ceat']; $posts[108] = $_POST['cseat']; 

    $posts[109] = $_POST['stenWord']; $posts[110]= $_POST['ctenWord']; $posts[111] = $_POST['cstenWord'];$posts[112] = $_POST['slip'];$posts[113] = $_POST['clip']; 
    $posts[114] = $_POST['cslip']; $posts[115] = $_POST['syear']; $posts[116] = $_POST['cyear']; $posts[117] = $_POST['csyear']; 

    $posts[118] = $_POST['srun']; $posts[119] = $_POST['crun']; $posts[120] = $_POST['csrun'];$posts[121] = $_POST['sup'];$posts[122] = $_POST['cup']; 
    $posts[123] = $_POST['csup']; $posts[124] = $_POST['scircle']; $posts[125] = $_POST['ccircle']; $posts[126] = $_POST['cscircle']; 

    $posts[127] = $_POST['ssentence']; $posts[128] = $_POST['csentence']; $posts[129] = $_POST['cssentence'];$posts[130] = $_POST['sthree'];$posts[131] = $_POST['cthree']; 
    $posts[132] = $_POST['csthree']; $posts[133] = $_POST['sleg']; $posts[134] = $_POST['cleg']; $posts[135] = $_POST['csleg']; 
    
    $posts[136] = $_POST['sjump']; $posts[137] = $_POST['cjump']; $posts[138] = $_POST['csjump'];$posts[139] = $_POST['sshoe'];$posts[140] = $_POST['cshoe']; 
    $posts[141] = $_POST['csshoe']; $posts[142] = $_POST['scopy']; $posts[143] = $_POST['ccopy']; $posts[144] = $_POST['cscopy']; 

    $posts[145] = $_POST['scount']; $posts[146] = $_POST['ccount']; $posts[147] = $_POST['cscount'];$posts[148] = $_POST['snear'];$posts[149] = $_POST['cnear']; 
    $posts[150] = $_POST['csnear']; $posts[151] = $_POST['scomplex']; $posts[152] = $_POST['ccomplex']; $posts[153] = $_POST['cscomplex']; 

    $posts[154] = $_POST['sfour']; $posts[155] = $_POST['cfour']; $posts[156] = $_POST['csfour'];$posts[157] = $_POST['slegJump'];$posts[158] = $_POST['clegJump']; 
    $posts[159] = $_POST['cslegJump']; $posts[160] = $_POST['sdressing']; $posts[161] = $_POST['cdressing']; $posts[162] = $_POST['csdressing']; 

    $posts[163] = $_POST['sfood']; $posts[164] = $_POST['cfood']; $posts[165] = $_POST['csfood'];$posts[166] = $_POST['sskeleton'];$posts[167] = $_POST['cskeleton']; 
    $posts[168] = $_POST['csskeleton']; $posts[169] = $_POST['splay']; $posts[170] = $_POST['cplay']; $posts[171] = $_POST['csplay']; 

    $posts[172] = $_POST['stime']; $posts[173] = $_POST['ctime']; $posts[174] = $_POST['cstime'];
    $posts[175] = $_POST['sname'];$posts[176] = $_POST['cname']; $posts[177] = $_POST['csname'];
    
    return $posts;
}

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `table3`(`id`,`sMonth`,`cMonth`,`cStatus`,`shead`,`chead`,`cshead`,`slook`,`clook`,`cslook`,
    `ssound`,`csound`,`cssound`,`sreaction`,`creaction`,`csreaction`,`ssmile`,`csmile`,`cssmile`,
    `smonth`,`cmonth`,`cstatus`,`sheart`,`cheart`,`csheart`,`sfinger`,`cfinger`,`csfinger`,
    `shand`,`chand`,`cshand`,`shsound`,`chsound`,`cshsound`,`ssingle`,`csingle`,`cssingle`,
    `sssmile`,`cssmile`,`csssmile`,`smonths`,`cmonths`,`cstatuses`,`shrise`,`chrise`,`cshrise`,
    `ssame`,`csame`,`cssame`,`schange`,`cchange`,`cschange`,`sagain`,`cagain`,`csagain`,
    `snine`,`cnine`,`csnine`,`ssit`,`csit`,`cssit`,`sstand`,`cstand`,`csstand`,
    `sitem`,`citem`,`csitem`,`smimicry`,`cmimicry`,`csmimicry`,`sword`,`cword`,`csword`,
    `sadvice`,`cadvice`,`csadvice`,`stwelve`,`ctwelve`,`cstwelve`,`swalk`,`cwalk`,`cswalk`, 
    `sgive`,`cgive`,`csgive`,`sfamiliar`,`cfamiliar`,`csfamiliar`,`sball`,`cball`,`csball`,
    `spart`,`cpart`,`cspart`,`seighteen`,`ceighteen`,`cseighteen`,`sawalk`,`cawalk`,`csawalk`,
    `sstair`,`cstair`,`csstair`,`sblock`,`cblock`,`csblock`,`seat`,`ceat`,`cseat`,
    `stenWord`,`ctenWord`,`cstenWord`,`slip`,`clip`,`cslip`,`syear`,`cyear`,`csyear`,   
    `srun`,`crun`,`csrun`,`sup`,`cup`,`csup`,`scircle`,`ccircle`,`cscircle`,
    `ssentence`,`csentence`,`cssentence`,`sthree`,`cthree`,`csthree`,`sleg`,`cleg`,`csleg`, 
    `sjump`,`cjump`,`csjump`,`sshoe`,`cshoe`,`csshoe`,`scopy`,`ccopy`,`cscopy`,
    `scount`,`ccount`,`cscount`,`snear`,`cnear`,`csnear`,`scomplex`,`ccomplex`,`cscomplex`,  
    `sfour`,`cfour`,`csfour`,`slegJump`,`clegJump`,`cslegJump`,`sdressing`,`cdressing`,`csdressing`,
    `sfood`,`cfood`,`csfood`,`sskeleton`,`cskeleton`,`csskeleton`,`splay`,`cplay`,`csplay`,  
    `stime`,`ctime`,`cstime`,`sname`,`cname`,`csname`) 
    VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]',
    '$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]',
    '$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]','$data[24]','$data[25]','$data[26]',
    '$data[27]','$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]','$data[34]','$data[35]',
    '$data[36]','$data[37]','$data[38]','$data[39]','$data[40]','$data[41]','$data[42]','$data[43]','$data[44]',
    '$data[45]','$data[46]','$data[47]','$data[48]','$data[49]','$data[50]','$data[51]','$data[52]','$data[53]',
    '$data[54]','$data[55]','$data[56]','$data[57]','$data[58]','$data[59]','$data[60]','$data[61]','$data[62]',
    '$data[63]','$data[64]','$data[65]','$data[66]','$data[67]','$data[68]','$data[69]','$data[70]','$data[71]',
    '$data[72]','$data[73]','$data[74]','$data[75]','$data[76]','$data[77]','$data[78]','$data[79]','$data[80]',
    '$data[81]','$data[82]','$data[83]','$data[84]','$data[85]','$data[86]','$data[87]','$data[88]','$data[89]',
    '$data[90]','$data[91]','$data[92]','$data[93]','$data[94]','$data[95]','$data[96]','$data[97]','$data[98]',
    '$data[99]','$data[100]','$data[101]','$data[102]','$data[103]','$data[104]','$data[105]','$data[106]','$data[107]',
    '$data[108]','$data[109]','$data[110]','$data[111]','$data[112]','$data[113]','$data[114]','$data[115]','$data[116]',
    '$data[117]','$data[118]','$data[119]','$data[120]','$data[121]','$data[122]','$data[123]','$data[124]','$data[125]',
    '$data[126]','$data[127]','$data[128]','$data[129]','$data[130]','$data[131]','$data[132]','$data[133]','$data[134]',
    '$data[135]','$data[136]','$data[137]','$data[138]','$data[139]','$data[140]','$data[141]','$data[142]','$data[143]',
    '$data[144]','$data[145]','$data[146]','$data[147]','$data[148]','$data[149]','$data[150]','$data[151]','$data[152]',
    '$data[153]','$data[154]','$data[155]','$data[156]','$data[157]','$data[158]','$data[159]','$data[160]','$data[161]',
    '$data[162]','$data[163]','$data[164]','$data[165]','$data[166]','$data[167]','$data[168]','$data[169]','$data[170]',
    '$data[171]','$data[172]','$data[173]','$data[174]','$data[175]','$data[176]','$data[177]')";
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
    $search_Query = "SELECT * FROM table3 WHERE id = $data[0]";
    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $id= $row['id']; $sMonth = $row['sMonth']; $cMonth = $row['cMonth']; $cStatus = $row['cStatus'];$shead = $row['shead'];$chead = $row['chead']; 
                $cshead = $row['cshead']; $slook = $row['slook']; $clook = $row['clook']; $cslook = $row['cslook']; 
                $ssound = $row['ssound']; $csound = $row['csound']; $cssound = $row['cssound'];$sreaction = $row['sreaction']; $creaction = $row['creaction'];
                $csreaction = $row['creaction'];$ssmile = $row['csreaction']; $csmile = $row['ssmile']; $cssmile = $row['cssmile']; 
                $smonth = $row['smonth']; $cmonth = $row['cmonth'];$cstatus = $row['cstatus']; $sheart = $row['sheart']; $cheart = $row['cheart'];
                $csheart = $row['csheart']; $sfinger = $row['sfinger']; $cfinger = $row['cfinger']; $csfinger = $row['csfinger']; 
                $shand = $row['shand']; $chand = $row['chand']; $cshand = $row['cshand']; $shsound = $row['shsound']; $chsound = $row['chsound']; 
                $cshsound = $row['cshsound']; $ssingle = $row['ssingle']; $csingle = $row['csingle']; $cssingle = $row['cssingle']; 
                $sssmile = $row['sssmile']; $cssmile = $row['cssmile']; $csssmile = $row['csssmile']; $smonths = $row['smonths']; $cmonths = $row['cmonths']; 
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
                $spart = $row['spart']; $cpart = $row['cpart']; $cspart = $row['cspart'];$seighteen = $row['seighteen'];$ceighteen = $row['ceighteen']; 
                $cseighteen = $row['cseighteen']; $sawalk = $row['sawalk']; $cawalk= $row['cawalk']; $csawalk = $row['csawalk']; 
                $sstair = $row['sstair']; $cstair= $row['cstair']; $csstair = $row['csstair'];$sblock = $row['sblock'];$posts[103] = $row['cblock']; 
                $csblock = $row['csblock']; $seat = $row['seat']; $ceat = $row['ceat']; $cseat = $row['cseat']; 
                $stenWord = $row['stenWord']; $ctenWord= $row['ctenWord']; $cstenWord = $row['cstenWord'];$slip= $row['slip'];$cblock = $row['clip']; 
                $cslip = $row['cslip']; $syear = $row['syear']; $cyear = $row['cyear']; $csyear = $row['csyear']; 
                $srun = $row['srun']; $crun = $row['crun']; $csrun = $row['csrun'];$sup = $row['sup'];$cup = $row['cup']; 
                $csup = $row['csup']; $scircle = $row['scircle']; $ccircle = $row['ccircle']; $cscircle = $row['cscircle']; 
                $ssentence = $row['ssentence']; $csentence = $row['csentence']; $cssentence = $row['cssentence'];$sthree = $row['sthree'];$cthree = $row['cthree']; 
                $csthree = $row['csthree']; $sleg = $row['sleg']; $cleg = $row['cleg']; $csleg = $row['csleg'];          
                $sjump = $row['sjump']; $cjump = $row['cjump']; $csjump = $row['csjump'];$sshoe = $row['sshoe'];$cshoe = $row['cshoe']; 
                $csshoe = $row['csshoe']; $scopy = $row['scopy']; $ccopy = $row['ccopy']; $cscopy = $row['cscopy']; 
                $scount = $row['scount']; $ccount = $row['ccount']; $cscount = $row['cscount'];$snear = $row['snear'];$cnear = $row['cnear']; 
                $csnear = $row['csnear']; $scomplex = $row['scomplex']; $ccomplex = $row['ccomplex']; $cscomplex = $row['cscomplex']; 
                $sfour = $row['sfour']; $cfour= $row['cfour']; $csfour = $row['csfour'];$slegJump = $row['slegJump'];$clegJump = $row['clegJump']; 
                $cslegJump = $row['cslegJump']; $sdressing = $row['sdressing']; $cdressing = $row['cdressing']; $csdressing = $row['csdressing']; 
                $sfood = $row['sfood']; $cfood = $row['cfood']; $csfood = $row['csfood'];$sskeleton= $row['sskeleton'];$cskeleton = $row['cskeleton']; 
                $csskeleton = $row['csskeleton']; $splay = $row['splay']; $cplay = $row['cplay']; $csplay = $row['csplay']; 
                $stime = $row['stime']; $ctime = $row['ctime']; $cstime = $row['cstime'];
                $sname = $row['sname'];$cname = $row['cname']; $csname = $row['csname'];
            }
        }else{
            echo 'No data for this id';
        }
    }else{
        echo 'Result Error';
    }
}

//delete
if(isset($_POST['delete'])){
    $data = getPosts();
    $delete_Query = "DELETE FROM `table3` WHERE `id` = $data[0]";
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
    `smonth`='$data[19]', `cmonth`='$data[20]', `cstatus`='$data[21]',`sheart`='$data[22]', `cheart`='$data[23]',
    `csheart`='$data[24]', `sfinger`='$data[25]', `cfinger`='$data[26]',`csfinger`='$data[27]', 
    `shand`='$data[28]', `chand`='$data[29]',`cshand`='$data[30]',`shsound`='$data[31]', `chsound`='$data[32]', 
    `cshsound`='$data[33]',`ssingle`='$data[34]', `csingle`='$data[35]', `cssingle`='$data[36]',
    `sssmile`='$data[37]', `cssmile`='$data[38]', `csssmile`='$data[39]',`smonths`='$data[40]',`cmonths`='$data[41]', 
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
    `spart`='$data[91]',`cpart`='$data[92]',`cspart`='$data[93]',`seighteen`='$data[94]',`ceighteen`='$data[95]',
    `cseighteen`='$data[96]',`sawalk`='$data[97]',`cawalk`='$data[98]',`csawalk`='$data[99]',
    `sstair`='$data[100]',`cstair`='$data[101]',`csstair`='$data[102]',`sblock`='$data[103]',`cblock`='$data[104]',
    `csblock`='$data[105]',`seat`='$data[106]',`ceat`='$data[107]',`cseat`='$data[108]',
    `stenWord`='$data[109]',`ctenWord`='$data[110]',`cstenWord`='$data[111]',`slip`='$data[112]',`clip`='$data[113]',
    `cslip`='$data[114]',`syear`='$data[115]',`cyear`='$data[116]',`csyear`='$data[117]',   
    `srun`='$data[118]',`crun`='$data[119]',`csrun`='$data[120]',`sup`='$data[121]',`cup`='$data[122]',
    `csup`='$data[123]',`scircle`='$data[124]',`ccircle`='$data[125]',`cscircle`='$data[126]',
    `ssentence`='$data[127]',`csentence`='$data[128]',`cssentence`='$data[129]',`sthree`='$data[130]',`cthree`='$data[131]',
    `csthree`='$data[132]',`sleg`='$data[133]',`cleg`='$data[134]',`csleg`='$data[135]', 
    `sjump`='$data[136]',`cjump`='$data[137]',`csjump`='$data[138]',`sshoe`='$data[139]',`cshoe`='$data[140]',
    `csshoe`='$data[141]',`scopy`='$data[142]',`ccopy`='$data[143]',`cscopy`='$data[144]',
    `scount`='$data[145]',`ccount`='$data[146]',`cscount`='$data[147]',`snear`='$data[148]',`cnear`='$data[149]',
    `csnear`='$data[150]',`scomplex`='$data[151]',`ccomplex`='$data[152]',`cscomplex`='$data[153]',  
    `sfour`='$data[154]',`cfour`='$data[155]',`csfour`='$data[156]',`slegJump`='$data[157]',`clegJump`='$data[158]',
    `cslegJump`='$data[159]',`sdressing`='$data[160]',`cdressing`='$data[161]',`csdressing`='$data[162]',
    `sfood`='$data[163]',`cfood`='$data[164]',`csfood`='$data[165]',`sskeleton`='$data[166]',`cskeleton`='$data[167]',
    `csskeleton`='$data[168]',`splay`='$data[169]',`cplay`='$data[170]',`csplay`='$data[171]',  
    `stime`='$data[172]',`ctime`='$data[173]',`cstime`='$data[174]',`sname`='$data[175]',`cname`='$data[176]',`csname`='$data[177]'
     WHERE `id` = $data[0]";

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
