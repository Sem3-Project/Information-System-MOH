<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Child.php';
    include '../controllers/M18_5year.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id= $_POST['id']; $seighteen = $_POST['seighteen'];$ceighteen = $_POST['ceighteen']; 
    $cseighteen = $_POST['cseighteen']; $sawalk = $_POST['sawalk']; $cawalk= $_POST['cawalk']; $csawalk = $_POST['csawalk']; 
    $sstair = $_POST['sstair']; $cstair= $_POST['cstair']; $csstair = $_POST['csstair'];$sblock = $_POST['sblock'];$cblock = $_POST['cblock']; 
    $csblock = $_POST['csblock']; $seat = $_POST['seat']; $ceat = $_POST['ceat']; $cseat = $_POST['cseat']; 
    $stenWord = $_POST['stenWord']; $ctenWord= $_POST['ctenWord']; $cstenWord = $_POST['cstenWord'];$slip= $_POST['slip'];$clip = $_POST['clip']; 
    $cslip = $_POST['cslip']; $syear = $_POST['syear']; $cyear = $_POST['cyear']; $csyear = $_POST['csyear']; 
    $srun = $_POST['srun']; $crun = $_POST['crun']; $csrun = $_POST['csrun'];$sup = $_POST['sup'];$cup = $_POST['cup']; 
    $csup = $_POST['csup']; $scircle = $_POST['scircle']; $ccircle = $_POST['ccircle']; $cscircle = $_POST['cscircle']; 
    $ssentence = $_POST['ssentence']; $csentence = $_POST['csentence']; $cssentence = $_POST['cssentence'];$sthree = $_POST['sthree'];$cthree = $_POST['cthree']; 
    $csthree = $_POST['csthree']; $sleg = $_POST['sleg']; $cleg = $_POST['cleg']; $csleg = $_POST['csleg'];          
    $sjump = $_POST['sjump']; $cjump = $_POST['cjump']; $csjump = $_POST['csjump'];$sshoe = $_POST['sshoe'];$cshoe = $_POST['cshoe']; 
    $csshoe = $_POST['csshoe']; $scopy = $_POST['scopy']; $ccopy = $_POST['ccopy']; $cscopy = $_POST['cscopy']; 
    $scount = $_POST['scount']; $ccount = $_POST['ccount']; $cscount = $_POST['cscount'];$snear = $_POST['snear'];$cnear = $_POST['cnear']; 
    $csnear = $_POST['csnear']; $scomplex = $_POST['scomplex']; $ccomplex = $_POST['ccomplex']; $cscomplex = $_POST['cscomplex']; 
    $sfour = $_POST['sfour']; $cfour= $_POST['cfour']; $csfour = $_POST['csfour'];$slegJump = $_POST['slegJump'];$clegJump = $_POST['clegJump']; 
    $cslegJump = $_POST['cslegJump']; $sdressing = $_POST['sdressing']; $cdressing = $_POST['cdressing']; $csdressing = $_POST['csdressing']; 
    $sfood = $_POST['sfood']; $cfood = $_POST['cfood']; $csfood = $_POST['csfood'];$sskeleton= $_POST['sskeleton'];$cskeleton = $_POST['cskeleton']; 
    $csskeleton = $_POST['csskeleton']; $splay = $_POST['splay']; $cplay = $_POST['cplay']; $csplay = $_POST['csplay']; 
    $stime = $_POST['stime']; $ctime = $_POST['ctime']; $cstime = $_POST['cstime'];
    $sname = $_POST['sname'];$cname = $_POST['cname']; $csname = $_POST['csname'];

  // $tblName = 'table3';

   $tempinves = new M18_5year();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $inves = new M18_5year();
      
        $data = array(
            "id" =>$id, "seighteen" =>$seighteen,"ceighteen" =>$ceighteen, 
            "cseighteen" =>$cseighteen, "sawalk" =>$sawalk, "cawalk"=>$cawalk, "csawalk" =>$csawalk, 
            "sstair" =>$sstair, "cstair"=>$cstair, "csstair" =>$csstair,"sblock" =>$sblock,"cblock" =>$cblock, 
            "csblock" =>$csblock, "seat" =>$seat, "ceat" =>$ceat, "cseat" =>$cseat, 
            "stenWord" =>$stenWord, "ctenWord"=>$ctenWord, "cstenWord" =>$cstenWord,"slip"=>$slip,"clip" =>$clip, 
            "cslip" =>$cslip, "syear" =>$syear, "cyear" =>$cyear, "csyear" =>$csyear, 
            "srun" =>$srun, "crun" =>$crun, "csrun" =>$csrun,"sup" =>$sup,"cup" =>$cup, 
            "csup" =>$csup, "scircle" =>$scircle, "ccircle" =>$ccircle, "cscircle" =>$cscircle, 
            "ssentence" =>$ssentence, "csentence" =>$csentence, "cssentence" =>$cssentence,"sthree" =>$sthree,"cthree" =>$cthree, 
            "csthree" =>$csthree, "sleg" =>$sleg, "cleg" =>$cleg, "csleg" =>$csleg,          
            "sjump" =>$sjump, "cjump" =>$cjump, "csjump" =>$csjump,"sshoe" =>$sshoe,"cshoe" =>$cshoe, 
            "csshoe" =>$csshoe, "scopy" =>$scopy, "ccopy" =>$ccopy, "cscopy" =>$cscopy, 
            "scount" =>$scount, "ccount" =>$ccount, "cscount" =>$cscount,"snear" =>$snear,"cnear" =>$cnear, 
            "csnear" =>$csnear, "scomplex" =>$scomplex, "ccomplex" =>$ccomplex, "cscomplex" =>$cscomplex, 
            "sfour" =>$sfour, "cfour"=>$cfour, "csfour" =>$csfour,"slegJump" =>$slegJump,"clegJump" =>$clegJump, 
            "cslegJump" =>$cslegJump, "sdressing" =>$sdressing, "cdressing" =>$cdressing, "csdressing" =>$csdressing, 
            "sfood" =>$sfood, "cfood" =>$cfood, "csfood" =>$csfood,"sskeleton"=>$sskeleton,"cskeleton" =>$cskeleton, 
            "csskeleton" =>$csskeleton, "splay" =>$splay, "cplay" =>$cplay, "csplay" =>$csplay, 
            "stime" =>$stime, "ctime" =>$ctime, "cstime" =>$cstime,
            "sname" =>$sname,"cname" =>$cname, "csname" =>$csname);
            
        $inves->bind($data);
        $inves->update($dbObj);
        $_POST=array();

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Success!","Data updated successfully!","success");';
        echo '}, 200);</script>';
   }
}
if(isset($_POST['search'])){

    if (empty($_POST['id'])){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Please enter valid patient id","error");';
        echo '}, 200);</script>';
    }
    else{
        $id = $_POST['id'];
        $m18_5year = new table();
        $search_Query = "SELECT * FROM table4 WHERE id = '$id'";
    
        $search_Result = $m18_5year->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }

        $_POST['seighteen'] = $posts[1];    $_POST['ceighteen'] = $posts[2];    $_POST['cseighteen'] = $posts[3];    $_POST['sawalk'] = $posts[4];  
        $_POST['cawalk'] = $posts[5];    $_POST['csawalk'] = $posts[6];    $_POST['sstair'] = $posts[7];    $_POST['cstair'] = $posts[8];
        $_POST['csstair'] = $posts[9];    $_POST['sblock'] = $posts[10];    $_POST['cblock'] = $posts[11];    $_POST['csblock'] = $posts[12];
        $_POST['seat'] = $posts[13];    $_POST['ceat'] = $posts[14];    $_POST['cseat'] = $posts[15];    $_POST['stenWord'] = $posts[16];  
        $_POST['ctenWord'] = $posts[17];    $_POST['cstenWord'] = $posts[18];    $_POST['slip'] = $posts[19];    $_POST['clip'] = $posts[20];
        $_POST['cslip'] = $posts[21];    $_POST['syear'] = $posts[22];    $_POST['cyear'] = $posts[23];    $_POST['csyear'] = $posts[24];  
        $_POST['srun'] = $posts[25];    $_POST['crun'] = $posts[26];    $_POST['csrun'] = $posts[27];    $_POST['sup'] = $posts[28];
        $_POST['cup'] = $posts[29];    $_POST['csup'] = $posts[30];    $_POST['scircle'] = $posts[31];    $_POST['ccircle'] = $posts[32];
        $_POST['cscircle'] = $posts[33];    $_POST['ssentence'] = $posts[34];    $_POST['csentence'] = $posts[35];    $_POST['cssentence'] = $posts[36];  
        $_POST['sthree'] = $posts[37];    $_POST['cthree'] = $posts[38];    $_POST['csthree'] = $posts[39];    $_POST['sleg'] = $posts[40];
        $_POST['cleg'] = $posts[41];$_POST['csleg'] = $posts[42];   $_POST['sjump'] = $posts[43];     $_POST['cjump'] = $posts[44];
        $_POST['csjump'] = $posts[45];     $_POST['sshoe'] = $posts[46];     $_POST['cshoe'] = $posts[47];     $_POST['csshoe'] = $posts[48];
        $_POST['scopy'] = $posts[49];     $_POST['ccopy'] = $posts[50];     $_POST['cscopy'] = $posts[51];    $_POST['scount'] = $posts[52];
        $_POST['ccount'] = $posts[53];     $_POST['cscount'] = $posts[54];     $_POST['snear'] = $posts[55];    $_POST['cnear'] = $posts[56];
        $_POST['csnear'] = $posts[57];     $_POST['scomplex'] = $posts[58];     $_POST['ccomplex'] = $posts[59];    $_POST['cscomplex'] = $posts[60];
        $_POST['sfour'] = $posts[61];     $_POST['cfour'] = $posts[62];     $_POST['csfour'] = $posts[63];    $_POST['slegJump'] = $posts[64];
        $_POST['clegJump'] = $posts[65];     $_POST['cslegJump'] = $posts[66];     $_POST['sdressing'] = $posts[67];    $_POST['cdressing'] = $posts[68];
        $_POST['csdressing'] = $posts[69];     $_POST['sfood'] = $posts[70];     $_POST['cfood'] = $posts[71];    $_POST['csfood'] = $posts[72];
        $_POST['sskeleton'] = $posts[73];     $_POST['cskeleton'] = $posts[74];     $_POST['csskeleton'] = $posts[75];    $_POST['splay'] = $posts[76];
        $_POST['cplay'] = $posts[77];     $_POST['csplay'] = $posts[78];     $_POST['stime'] = $posts[79];    $_POST['ctime'] = $posts[80];
        $_POST['cstime'] = $posts[81];     $_POST['sname'] = $posts[82];     $_POST['cname'] = $posts[83];    $_POST['csname'] = $posts[84];

        unset($posts);
        $posts = array();
    }

}
?> 
  