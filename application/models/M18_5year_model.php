<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>

<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id=""; $seighteen = ""; $ceighteen = ""; $cseighteen = ""; $sawalk = "";  $cawalk = ""; $csawalk = "";   
$sstair = ""; $cstair = ""; $csstair = ""; $sblock = ""; $cblock = ""; $csblock = "";  $seat = ""; $ceat = ""; $cseat = "";
$stenWord = ""; $ctenWord = ""; $cstenWord = "";  $slip = ""; $clip = ""; $cslip = ""; $syear = "";  $cyear = ""; $csyear = "";   
$srun = ""; $crun = ""; $csrun = ""; $sup = ""; $cup = ""; $csup = "";  $scircle = ""; $ccircle = ""; $cscircle = "";
$ssentence = ""; $csentence = ""; $cssentence = "";  $sthree = ""; $cthree = ""; $csthree = ""; $sleg = "";  $cleg = ""; $csleg = "";   
$sjump = ""; $cjump = ""; $csjump = ""; $sshoe = ""; $cshoe = ""; $csshoe = "";  $scopy = ""; $ccopy = ""; $cscopy = "";
$scount = ""; $ccount = ""; $cscount = "";  $snear = ""; $cnear = ""; $csnear = ""; $scomplex = "";  $ccomplex = ""; $cscomplex = "";   
$sfour = ""; $cfour = ""; $csfour = ""; $slegJump = ""; $clegJump = ""; $cslegJump = "";  $sdressing = ""; $cdressing = ""; $csdressing = "";
$sfood = ""; $cfood = ""; $csfood = "";  $sskeleton = ""; $cskeleton = ""; $csskeleton = ""; $splay = "";  $cplay = ""; $csplay = "";   
$stime = ""; $ctime = ""; $cstime = ""; $sname = ""; $cname = ""; $csname = "";  

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['seighteen'];$posts[2] = $_POST['ceighteen']; $posts[3] = $_POST['cseighteen']; $posts[4] = $_POST['sawalk']; 
    $posts[5] = $_POST['cawalk']; $posts[6] = $_POST['csawalk']; 

    $posts[7] = $_POST['sstair']; $posts[8] = $_POST['cstair']; $posts[9] = $_POST['csstair'];$posts[10] = $_POST['sblock'];$posts[11] = $_POST['cblock']; 
    $posts[12] = $_POST['csblock']; $posts[13] = $_POST['seat']; $posts[14] = $_POST['ceat']; $posts[15] = $_POST['cseat']; 

    $posts[16] = $_POST['stenWord']; $posts[17]= $_POST['ctenWord']; $posts[18] = $_POST['cstenWord'];$posts[19] = $_POST['slip'];$posts[20] = $_POST['clip']; 
    $posts[21] = $_POST['cslip']; $posts[22] = $_POST['syear']; $posts[23] = $_POST['cyear']; $posts[24] = $_POST['csyear']; 

    $posts[25] = $_POST['srun']; $posts[26] = $_POST['crun']; $posts[27] = $_POST['csrun'];$posts[28] = $_POST['sup'];$posts[29] = $_POST['cup']; 
    $posts[30] = $_POST['csup']; $posts[31] = $_POST['scircle']; $posts[32] = $_POST['ccircle']; $posts[33] = $_POST['cscircle']; 

    $posts[34] = $_POST['ssentence']; $posts[35] = $_POST['csentence']; $posts[36] = $_POST['cssentence'];$posts[37] = $_POST['sthree'];$posts[38] = $_POST['cthree']; 
    $posts[39] = $_POST['csthree']; $posts[40] = $_POST['sleg']; $posts[41] = $_POST['cleg']; $posts[42] = $_POST['csleg']; 
    
    $posts[43] = $_POST['sjump']; $posts[44] = $_POST['cjump']; $posts[45] = $_POST['csjump'];$posts[46] = $_POST['sshoe'];$posts[47] = $_POST['cshoe']; 
    $posts[48] = $_POST['csshoe']; $posts[49] = $_POST['scopy']; $posts[50] = $_POST['ccopy']; $posts[51] = $_POST['cscopy']; 

    $posts[52] = $_POST['scount']; $posts[53] = $_POST['ccount']; $posts[54] = $_POST['cscount'];$posts[55] = $_POST['snear'];$posts[56] = $_POST['cnear']; 
    $posts[57] = $_POST['csnear']; $posts[58] = $_POST['scomplex']; $posts[59] = $_POST['ccomplex']; $posts[60] = $_POST['cscomplex']; 

    $posts[61] = $_POST['sfour']; $posts[62] = $_POST['cfour']; $posts[63] = $_POST['csfour'];$posts[64] = $_POST['slegJump'];$posts[65] = $_POST['clegJump']; 
    $posts[66] = $_POST['cslegJump']; $posts[67] = $_POST['sdressing']; $posts[68] = $_POST['cdressing']; $posts[69] = $_POST['csdressing']; 

    $posts[70] = $_POST['sfood']; $posts[71] = $_POST['cfood']; $posts[72] = $_POST['csfood'];$posts[73] = $_POST['sskeleton'];$posts[74] = $_POST['cskeleton']; 
    $posts[75] = $_POST['csskeleton']; $posts[76] = $_POST['splay']; $posts[77] = $_POST['cplay']; $posts[78] = $_POST['csplay']; 

    $posts[79] = $_POST['stime']; $posts[80] = $_POST['ctime']; $posts[81] = $_POST['cstime'];
    $posts[82] = $_POST['sname'];$posts[83] = $_POST['cname']; $posts[84] = $_POST['csname'];

    return $posts;
}
$m18to5year = new table();

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table4 WHERE id = '$data[0]'";
    $search_Result = $m18to5year->featuredLoad($dbObj, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                $id= $row['id']; $seighteen = $row['seighteen'];$ceighteen = $row['ceighteen']; 
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
            echo '<script type="text/javascript">';
                    echo 'setTimeout(function () { swal("Error!","Please enter valid patient id","error");';
                    echo '}, 200);</script>';
        }
    }else{
        echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Error!","Result error!","error");';
            echo '}, 200);</script>';
    }
}


//update
if(isset($_POST['update'])){
    $data = getPosts();
    $update_Query = "UPDATE `table4` SET `seighteen`='$data[1]',`ceighteen`='$data[2]',
    `cseighteen`='$data[3]',`sawalk`='$data[4]',`cawalk`='$data[5]',`csawalk`='$data[6]',
    `sstair`='$data[7]',`cstair`='$data[8]',`csstair`='$data[9]',`sblock`='$data[10]',`cblock`='$data[11]',
    `csblock`='$data[12]',`seat`='$data[13]',`ceat`='$data[14]',`cseat`='$data[15]',
    `stenWord`='$data[16]',`ctenWord`='$data[17]',`cstenWord`='$data[18]',`slip`='$data[19]',`clip`='$data[20]',
    `cslip`='$data[21]',`syear`='$data[22]',`cyear`='$data[23]',`csyear`='$data[24]',  
    `srun`='$data[25]',`crun`='$data[26]',`csrun`='$data[27]',`sup`='$data[28]',`cup`='$data[29]',
    `csup`='$data[30]',`scircle`='$data[31]',`ccircle`='$data[32]',`cscircle`='$data[33]',
    `ssentence`='$data[34]',`csentence`='$data[35]',`cssentence`='$data[36]',`sthree`='$data[37]',`cthree`='$data[38]',
    `csthree`='$data[39]',`sleg`='$data[40]',`cleg`='$data[41]',`csleg`='$data[42]', 
    `sjump`='$data[43]',`cjump`='$data[44]',`csjump`='$data[45]',`sshoe`='$data[46]',`cshoe`='$data[47]',
    `csshoe`='$data[48]',`scopy`='$data[49]',`ccopy`='$data[50]',`cscopy`='$data[51]',
    `scount`='$data[52]',`ccount`='$data[53]',`cscount`='$data[54]',`snear`='$data[55]',`cnear`='$data[56]',
    `csnear`='$data[57]',`scomplex`='$data[58]',`ccomplex`='$data[59]',`cscomplex`='$data[60]',  
    `sfour`='$data[61]',`cfour`='$data[62]',`csfour`='$data[63]',`slegJump`='$data[64]',`clegJump`='$data[65]',
    `cslegJump`='$data[66]',`sdressing`='$data[67]',`cdressing`='$data[68]',`csdressing`='$data[69]',
    `sfood`='$data[70]',`cfood`='$data[71]',`csfood`='$data[72]',`sskeleton`='$data[73]',`cskeleton`='$data[74]',
    `csskeleton`='$data[75]',`splay`='$data[76]',`cplay`='$data[77]',`csplay`='$data[78]',  
    `stime`='$data[79]',`ctime`='$data[80]',`cstime`='$data[81]',`sname`='$data[82]',`cname`='$data[83]',`csname`='$data[84]'
    WHERE `id` = '$data[0]'";

    try{
        $update_Result = $m18to5year->featuredLoad($dbObj, $update_Query);

        if($update_Result){
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Success!","Data updated successfully!","success");';
            echo '}, 200);</script>';
        }
    }catch (Exception $ex){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Result error!","error");';
        echo '}, 200);</script>';
    }
}
?>
