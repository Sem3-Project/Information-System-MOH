<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Child.php';
    include '../controllers/Birthto18.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id= $_POST['id']; 
    $sMonth = $_POST['sMonth']; $cMonth = $_POST['cMonth']; $cStatus = $_POST['cStatus'];$shead = $_POST['shead'];$chead = $_POST['chead']; 
    $cshead = $_POST['cshead']; $slook = $_POST['slook']; $clook = $_POST['clook']; $cslook = $_POST['cslook']; 
    $ssound = $_POST['ssound']; $csound = $_POST['csound']; $cssound = $_POST['cssound'];$sreaction = $_POST['sreaction']; $creaction = $_POST['creaction'];
    $csreaction = $_POST['csreaction'];$ssmile = $_POST['ssmile']; $csmile = $_POST['csmile']; $cssmile = $_POST['cssmile']; 
    $smonth1 = $_POST['smonth1']; $cmonth1 = $_POST['cmonth1'];$cstatus1 = $_POST['cstatus1']; $sheart = $_POST['sheart']; $cheart = $_POST['cheart'];
    $csheart = $_POST['csheart']; $sfinger = $_POST['sfinger']; $cfinger = $_POST['cfinger']; $csfinger = $_POST['csfinger']; 
    $shand = $_POST['shand']; $chand = $_POST['chand']; $cshand = $_POST['cshand']; $shsound = $_POST['shsound']; $chsound = $_POST['chsound']; 
    $cshsound = $_POST['cshsound']; $ssingle = $_POST['ssingle']; $csingle = $_POST['csingle']; $cssingle = $_POST['cssingle']; 
    $sssmile = $_POST['sssmile']; $cssmile1 = $_POST['cssmile1']; $csssmile = $_POST['csssmile']; $smonths = $_POST['smonths']; $cmonths = $_POST['cmonths']; 
    $cstatuses = $_POST['cstatuses']; $shrise = $_POST['shrise']; $chrise = $_POST['chrise']; $cshrise = $_POST['cshrise']; 
    $ssame = $_POST['ssame']; $csame = $_POST['csame']; $cssame = $_POST['cssame']; $schange = $_POST['schange']; $cchange = $_POST['cchange']; 
    $cschange = $_POST['cschange']; $sagain = $_POST['sagain']; $cagain = $_POST['cagain']; $csagain = $_POST['csagain'];
    $snine = $_POST['snine']; $cnine= $_POST['cnine']; $csnine = $_POST['csnine']; $ssit = $_POST['ssit']; $csit = $_POST['csit']; 
    $cssit = $_POST['cssit']; $sstand = $_POST['sstand']; $cstand = $_POST['cstand']; $csstand = $_POST['csstand']; 
    $sitem = $_POST['sitem']; $citem = $_POST['citem']; $csitem= $_POST['csitem'];$smimicry = $_POST['smimicry'];$cmimicry = $_POST['cmimicry']; 
    $csmimicry = $_POST['csmimicry']; $sword = $_POST['sword']; $cword = $_POST['cword']; $csword = $_POST['csword']; 
    $sadvice = $_POST['sadvice']; $cadvice = $_POST['cadvice']; $csadvice = $_POST['csadvice'];$stwelve = $_POST['stwelve'];$ctwelve = $_POST['ctwelve']; 
    $cstwelve = $_POST['cstwelve']; $swalk = $_POST['swalk']; $cwalk = $_POST['cwalk']; $cswalk = $_POST['cswalk']; 
    $sgive= $_POST['sgive']; $cgive = $_POST['cgive']; $csgive = $_POST['csgive'];$sfamiliar = $_POST['sfamiliar'];$cfamiliar = $_POST['cfamiliar']; 
    $csfamiliar = $_POST['csfamiliar']; $sball = $_POST['sball']; $cball = $_POST['cball']; $csball = $_POST['csball']; 
    $spart = $_POST['spart']; $cpart = $_POST['cpart']; $cspart = $_POST['cspart'];

  // $tblName = 'table3';

   $tempinves = new Birthto18();
   $result = $tempinves->load($dbObj, $id);

  
   if ($result){
       $inves = new Birthto18();
        $data = array( "id" => $id, "sMonth" => $sMonth, "cMonth" => $cMonth, "cStatus" => $cStatus,"shead" => $shead,"chead" => $chead, 
                        "cshead" => $cshead, "slook" => $slook, "clook" => $clook, "cslook" => $cslook, 
                        "ssound" => $ssound, "csound" => $csound, "cssound" => $cssound,"sreaction" => $sreaction, "creaction" => $creaction,
                        "csreaction" => $csreaction,"ssmile" => $ssmile, "csmile" => $csmile, "cssmile" => $cssmile, 
                        "smonth1" => $smonth1, "cmonth1" => $cmonth1,"cstatus1" => $cstatus1, "sheart" => $sheart, "cheart" => $cheart,
                        "csheart" => $csheart, "sfinger" => $sfinger, "cfinger" => $cfinger, "csfinger" => $csfinger, 
                        "shand" => $shand, "chand" => $chand, "cshand" => $cshand, "shsound" => $shsound, "chsound" => $chsound, 
                        "cshsound" => $cshsound, "ssingle" => $ssingle, "csingle" => $csingle, "cssingle" => $cssingle, 
                        "sssmile" => $sssmile, "cssmile1" => $cssmile1, "csssmile" => $csssmile, "smonths" => $smonths, "cmonths" => $cmonths, 
                        "cstatuses" => $cstatuses, "shrise" => $shrise, "chrise" => $chrise, "cshrise" => $cshrise, 
                        "ssame" => $ssame, "csame" => $csame, "cssame" => $cssame, "schange" => $schange, "cchange" => $cchange, 
                        "cschange" => $cschange, "sagain" => $sagain, "cagain" => $cagain, "csagain" => $csagain,
                        "snine" => $snine, "cnine" => $cnine, "csnine" => $csnine, "ssit" => $ssit, "csit" => $csit, 
                        "cssit" => $cssit, "sstand" => $sstand, "cstand" => $cstand, "csstand" => $csstand, 
                        "sitem" => $sitem, "citem" => $citem, "csitem" => $csitem,"smimicry" => $smimicry,"cmimicry" => $cmimicry, 
                        "csmimicry" => $csmimicry, "sword" => $sword, "cword" => $cword, "csword" => $csword, 
                        "sadvice" => $sadvice, "cadvice" => $cadvice, "csadvice" => $csadvice,"stwelve" => $stwelve,"ctwelve" => $ctwelve, 
                        "cstwelve" => $cstwelve, "swalk" => $swalk, "cwalk" => $cwalk, "cswalk" => $cswalk, 
                        "sgive" => $sgive, "cgive" => $cgive, "csgive" => $csgive,"sfamiliar" => $sfamiliar,"cfamiliar" => $cfamiliar, 
                        "csfamiliar" => $csfamiliar, "sball" => $sball, "cball" => $cball, "csball" => $csball, 
                        "spart" => $spart, "cpart" => $cpart, "cspart" => $cspart);
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
        $refer = new table();
        $search_Query = "SELECT * FROM table3 WHERE id = '$id'";
    
        $search_Result = $refer->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }
        $_POST['sMonth'] = $posts[1];    $_POST['cMonth'] = $posts[2];    $_POST['cStatus'] = $posts[3];    $_POST['shead'] = $posts[4];  
        $_POST['chead'] = $posts[5];    $_POST['cshead'] = $posts[6];    $_POST['slook'] = $posts[7];    $_POST['clook'] = $posts[8];
        $_POST['cslook'] = $posts[9];    $_POST['ssound'] = $posts[10];    $_POST['csound'] = $posts[11];    $_POST['cssound'] = $posts[12];
        $_POST['sreaction'] = $posts[13];    $_POST['creaction'] = $posts[14];    $_POST['csreaction'] = $posts[15];    $_POST['ssmile'] = $posts[16];  
        $_POST['csmile'] = $posts[17];    $_POST['cssmile'] = $posts[18];    $_POST['smonth1'] = $posts[19];    $_POST['cmonth1'] = $posts[20];
        $_POST['cstatus1'] = $posts[21];    $_POST['sheart'] = $posts[22];    $_POST['cheart'] = $posts[23];    $_POST['csheart'] = $posts[24];  
        $_POST['sfinger'] = $posts[25];    $_POST['cfinger'] = $posts[26];    $_POST['csfinger'] = $posts[27];    $_POST['shand'] = $posts[28];
        $_POST['chand'] = $posts[29];    $_POST['cshand'] = $posts[30];    $_POST['shsound'] = $posts[31];    $_POST['chsound'] = $posts[32];
        $_POST['cshsound'] = $posts[33];    $_POST['ssingle'] = $posts[34];    $_POST['csingle'] = $posts[35];    $_POST['cssingle'] = $posts[36];  
        $_POST['sssmile'] = $posts[37];    $_POST['cssmile1'] = $posts[38];    $_POST['csssmile'] = $posts[39];    $_POST['smonths'] = $posts[40];
        $_POST['cmonths'] = $posts[41];    $_POST['cstatuses'] = $posts[42];   $_POST['shrise'] = $posts[43];     $_POST['chrise'] = $posts[44];
        $_POST['cshrise'] = $posts[45];     $_POST['ssame'] = $posts[46];     $_POST['csame'] = $posts[47];     $_POST['cssame'] = $posts[48];
        $_POST['schange'] = $posts[49];     $_POST['cchange'] = $posts[50];     $_POST['cschange'] = $posts[51];    $_POST['sagain'] = $posts[52];
        $_POST['cagain'] = $posts[53];     $_POST['csagain'] = $posts[54];     $_POST['snine'] = $posts[55];    $_POST['cnine'] = $posts[56];
        $_POST['csnine'] = $posts[57];     $_POST['ssit'] = $posts[58];     $_POST['csit'] = $posts[59];    $_POST['cssit'] = $posts[60];
        $_POST['sstand'] = $posts[61];     $_POST['cstand'] = $posts[62];     $_POST['csstand'] = $posts[63];    $_POST['sitem'] = $posts[64];
        $_POST['citem'] = $posts[65];     $_POST['csitem'] = $posts[66];     $_POST['smimicry'] = $posts[67];    $_POST['cmimicry'] = $posts[68];
        $_POST['csmimicry'] = $posts[69];     $_POST['sword'] = $posts[70];     $_POST['cword'] = $posts[71];    $_POST['csword'] = $posts[72];
        $_POST['sadvice'] = $posts[73];     $_POST['cadvice'] = $posts[74];     $_POST['csadvice'] = $posts[75];    $_POST['stwelve'] = $posts[76];
        $_POST['ctwelve'] = $posts[77];     $_POST['cstwelve'] = $posts[78];     $_POST['swalk'] = $posts[79];    $_POST['cwalk'] = $posts[80];
        $_POST['cswalk'] = $posts[81];     $_POST['sgive'] = $posts[82];     $_POST['cgive'] = $posts[83];    $_POST['csgive'] = $posts[84];
        $_POST['sfamiliar'] = $posts[85];     $_POST['cfamiliar'] = $posts[86];     $_POST['csfamiliar'] = $posts[87];    $_POST['sball'] = $posts[88];
        $_POST['cball'] = $posts[89];     $_POST['csball'] = $posts[90];     $_POST['spart'] = $posts[91];    $_POST['cpart'] = $posts[92];
        $_POST['cspart'] = $posts[93];  


        unset($posts);
        $posts = array();
    }

}
?> 
                       