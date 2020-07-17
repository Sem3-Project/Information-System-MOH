<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "moh";

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

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}catch (Exception $ex){
    echo 'Error';
}

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

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `table4` (`id`,`seighteen`,`ceighteen`,`cseighteen`,`sawalk`,`cawalk`,`csawalk`,
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
    '$data[81]','$data[82]','$data[83]','$data[84]')";

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
    $search_Query = "SELECT * FROM table4 WHERE id = $data[0]";
    $search_Result = mysqli_query($connect, $search_Query);

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
            echo 'No data for this id';
        }
    }else{
        echo 'Result Error';
    }
}

//delete
if(isset($_POST['delete'])){
    $data = getPosts();
    $delete_Query = "DELETE FROM `table4` WHERE `id` = $data[0]";
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
        <form action="chdr_1.php" method="post" >
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


            
