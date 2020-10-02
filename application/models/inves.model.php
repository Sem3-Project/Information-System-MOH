<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Mother.php';
    include '../controllers/Investigation.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

   $id = $_POST['id'];
    $ausT1 = $_POST['ausT1'];
    $ausT2 =$_POST['ausT2'];  
    $ausT3 =$_POST['ausT3'];
    $menT1 = $_POST['menT1'];           $menT2 = $_POST['menT2'];
    $menT3 = $_POST['menT3'];           $respirEx = $_POST['respirEx'];         $breastEx = $_POST['breastEx'];
    $bs1 = $_POST['bs1'];               $bs1res = $_POST['bs1res'];             $bs2 = $_POST['bs2'];
    $bs2res = $_POST['bs2res'];         $heam1 = $_POST['heam1'];               $heam1res = $_POST['heam1res'];
    $heam2 = $_POST['heam2'];           $heam2res = $_POST['heam2res'];         $other = $_POST['other'];
    $anti = $_POST['anti'];             $kick = $_POST['kick'];                 $dentref = $_POST['dentref'];
    $dentex = $_POST['dentex'];         $denttreat = $_POST['denttreat'];       $syppoa = $_POST['syppoa'];
    $syptake = $_POST['syptake'];       $sypreci = $_POST['sypreci'];           $sypres = $_POST['sypres'];
    $sypref = $_POST['sypref'];         $hivtake = $_POST['hivtake'];           $hivinform = $_POST['hivinform'];
    $tdate1 = $_POST['tdate1'];         $tbatch1 = $_POST['tbatch1'];           $tdate2 = $_POST['tdate2'];
    $tbatch2 = $_POST['tbatch2'];       $tdate3 = $_POST['tdate3'];             $tbatch3 = $_POST['tbatch3'];
    $tdate4 = $_POST['tdate4'];         $tbatch4 = $_POST['tbatch4'];           $tdate5 = $_POST['tdate5'];
    $tbatch5 = $_POST['tbatch5'];       $tne = $_POST['tne'];                   $tnebatch = $_POST['tnebatch'];
  // $tblName = 'investigations';

   $tempinves = new Investigation();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $inves = new Investigation();
      
        $data = array("id"=>$id, "ausT1"=>$ausT1, "ausT2"=>$ausT2, "ausT3"=>$ausT3, "menT1"=>$menT1, "menT2"=>$menT2, "menT3"=>$menT3,"respirEx"=>$respirEx,"breastEx"=>$breastEx,
                    "bs1"=>$bs1,"bs1res"=>$bs1res,"bs2"=>$bs2,"bs2res"=>$bs2res,"heam1"=>$heam1,"heam1res"=>$heam1res,"heam2"=>$heam2,"heam2res"=>$heam2res,
                    "other"=>$other,"anti"=>$anti,"kick"=>$kick,"dentref"=>$dentref,"dentex"=>$dentex,"denttreat"=>$denttreat,"syppoa"=>$syppoa,
                    "syptake"=>$syptake,"sypreci"=>$sypreci,"sypres"=>$sypres,"sypref"=>$sypref,"hivtake"=>$hivtake,"hivinform"=>$hivinform,
                    "tdate1"=>$tdate1,"tbatch1"=>$tbatch1,"tdate2"=>$tdate2,"tbatch2"=>$tbatch2,"tdate3"=>$tdate3,"tbatch3"=>$tbatch3,
                    "tdate4"=>$tdate4,"tbatch4"=>$tbatch4,"tdate5"=>$tdate5,"tbatch5"=>$tbatch5,"tne"=>$tne, "tnebatch"=>$tnebatch);
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
        $investi = new table();
        $search_Query = "SELECT * FROM investigations WHERE id = '$id'";
    
        $search_Result = $investi->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }
        $_POST['ausT1'] = $posts[1];    $_POST['ausT2'] = $posts[2];    $_POST['ausT3'] = $posts[3];    $_POST['menT1'] = $posts[4];  
        $_POST['menT2'] = $posts[5];    $_POST['menT3'] = $posts[6];    $_POST['respirEx'] = $posts[7];    $_POST['breastEx'] = $posts[8];
        $_POST['bs1'] = $posts[9];    $_POST['bs1res'] = $posts[10];    $_POST['bs2'] = $posts[11];    $_POST['bs2res'] = $posts[12];
        $_POST['heam1'] = $posts[13];    $_POST['heam1res'] = $posts[14];    $_POST['heam2'] = $posts[15];    $_POST['heam2res'] = $posts[16];  
        $_POST['other'] = $posts[17];    $_POST['anti'] = $posts[18];    $_POST['kick'] = $posts[19];    $_POST['dentref'] = $posts[20];
        $_POST['dentex'] = $posts[21];    $_POST['denttreat'] = $posts[22];    $_POST['syppoa'] = $posts[23];    $_POST['syptake'] = $posts[24];  
        $_POST['sypreci'] = $posts[25];    $_POST['sypres'] = $posts[26];    $_POST['sypref'] = $posts[27];    $_POST['hivtake'] = $posts[28];
        $_POST['hivinform'] = $posts[29];    $_POST['tdate1'] = $posts[30];    $_POST['tbatch1'] = $posts[31];    $_POST['tdate2'] = $posts[32];
        $_POST['tbatch2'] = $posts[33];    $_POST['tdate3'] = $posts[34];    $_POST['tbatch3'] = $posts[35];    $_POST['tdate4'] = $posts[36];  
        $_POST['tbatch4'] = $posts[37];    $_POST['tdate5'] = $posts[38];    $_POST['tbatch5'] = $posts[39];    $_POST['tne'] = $posts[40];
        $_POST['tnebatch'] = $posts[41];       


        unset($posts);
        $posts = array();
    }

}
?> 
  