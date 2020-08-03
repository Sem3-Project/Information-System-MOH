<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();
    //---------------------------write all data fields in investigations form here----------------------------------------
     $id = null;
     $ausT1 = null;     $ausT2 = null;    $ausT3 = null;
     $menT1 = null;     $menT2 = null;    $menT3 = null;

     $respirEx = null;
     $breastEx = null;
    //---------------------------all are written as !!! may change later-------------------------------------------------------
     $bs1 = 0;        $bs1res = null;
     $bs2 = 0;        $bs2res = null;

     $heam1 = 0;      $heam1res = null;
     $heam2 = 0;      $heam2res = null;

     $other = null;
     $anti = null;
     $kick = null;

     $dentref = null;       $dentex = null;        $denttreat = null;
     $syppoa = 0;         $syptake = null;       $sypreci = null;       $sypres = null;        $sypref = null;
     $hivtake = null;       $hivinform = null;    

     $tdate1 = null;        $tbatch1 = null;
     $tdate2 = null;        $tbatch2 = null;
     $tdate3 = null;        $tbatch3 = null;
     $tdate4 = null;        $tbatch4 = null;
     $tdate5 = null;        $tbatch5 = null;
     $tne = null;           $tnebatch = null;

    //table name is assigned here
    // $tableName="investigations";


//$b = new Investigations_table();
//$result = $b->load($dbObj, $_GET['id']);

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id'];           $posts[1] = $_POST['ausT1'];        $posts[2] = $_POST['ausT2'];
    $posts[3] = $_POST['ausT3'];        $posts[4] = $_POST['menT1'];        $posts[5] = $_POST['menT2'];
    $posts[6] = $_POST['menT3'];        $posts[7] = $_POST['respirEx'];     $posts[8] = $_POST['breastEx'];
    $posts[9] = $_POST['bs1'];          $posts[10] = $_POST['bs1res'];      $posts[11] = $_POST['bs2'];
    $posts[12] = $_POST['bs2res'];      $posts[13] = $_POST['heam1'];       $posts[14] = $_POST['heam1res'];
    $posts[15] = $_POST['heam2'];       $posts[16] = $_POST['heam2res'];    $posts[17] = $_POST['other'];
    $posts[18] = $_POST['anti'];        $posts[19] = $_POST['kick'];        $posts[20] = $_POST['dentref'];
    $posts[21] = $_POST['dentex'];      $posts[22] = $_POST['denttreat'];   $posts[23] = $_POST['syppoa'];
    $posts[24] = $_POST['syptake'];     $posts[25] = $_POST['sypreci'];     $posts[26] = $_POST['sypres'];
    $posts[27] = $_POST['sypref'];      $posts[28] = $_POST['hivtake'];     $posts[29] = $_POST['hivinform'];
    $posts[30] = $_POST['tdate1'];      $posts[31] = $_POST['tbatch1'];     $posts[32] = $_POST['tdate2'];
    $posts[33] = $_POST['tbatch2'];     $posts[34] = $_POST['tdate3'];      $posts[35] = $_POST['tbatch3'];
    $posts[36] = $_POST['tdate4'];      $posts[37] = $_POST['tbatch4'];     $posts[38] = $_POST['tdate5'];
    $posts[39] = $_POST['tbatch5'];     $posts[40] = $_POST['tne'];         $posts[41] = $_POST['tnebatch'];
    return $posts;
}
$inves = new table();

//SEARCH
if(isset($_POST['search'])){
    $data = getPosts();
    
    $search_Query = "SELECT * FROM investigations WHERE id = '$data[0]'";

    $search_Result = $inves->featuredLoad($dbObj,$search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while($row = mysqli_fetch_array($search_Result)){

                $id        = $row['id'];          $ausT1      = $row['ausT1'];       $ausT2     = $row['ausT2'];
                $ausT3     = $row['ausT3'];       $menT1      = $row['menT1'];       $menT2     = $row['menT2'];
                $menT3     = $row['menT3'];       $respirEx   = $row['respirEx'];    $breastEx  = $row['breastEx'];
                $bs1       = $row['bs1'];         $bs1res     = $row['bs1res'];      $bs2       = $row['bs2'];
                $bs2res    = $row['bs2res'];      $heam1      = $row['heam1'];       $heam1res  = $row['heam1res'];
                $heam2     = $row['heam2'];       $heam2res   = $row['heam2res'];    $other     = $row['other'];
                $anti      = $row['anti'];        $kick       = $row['kick'];        $dentref   = $row['dentref'];
                $dentex    = $row['dentex'];      $denttreat  = $row['denttreat'];   $syppoa    = $row['syppoa'];
                $syptake   = $row['syptake'];     $sypreci    = $row['sypreci'];     $sypres    = $row['sypres'];
                $sypref    = $row['sypref'];      $hivtake    = $row['hivtake'];     $hivinform = $row['hivinform'];
                $tdate1    = $row['tdate1'];      $tbatch1    = $row['tbatch1'];     $tdate2    = $row['tdate2'];
                $tbatch2   = $row['tbatch2'];     $tdate3     = $row['tdate3'];      $tbatch3   = $row['tbatch3'];
                $tdate4    = $row['tdate4'];      $tbatch4    = $row['tbatch4'];     $tdate5    = $row['tdate5'];
                $tbatch5   = $row['tbatch5'];     $tne        = $row['tne'];         $tnebatch  = $row['tnebatch'];
        
            }
        }else{
            echo 'No data found to the NIC';
        }
    }else{
        echo 'Result Error';
    }
}

//update
if(isset($_POST['update'])){
    $data = getPosts();
   $update_Query = "UPDATE `investigations` SET 
   
                `ausT1`     = '$data[1]',       `ausT2`      = '$data[2]',
                `ausT3`     = '$data[3]',       `menT1`      = '$data[4]',       `menT2`     = '$data[5]',
                `menT3`     = '$data[6]',       `respirEx`   = '$data[7]',       `breastEx`  = '$data[8]',
                `bs1`       = $data[9],         `bs1res`     = '$data[10]',      `bs2`       = $data[11],
                `bs2res`    = '$data[12]',      `heam1`      = $data[13],        `heam1res`  = '$data[14]',
                `heam2`     = $data[15],        `heam2res`   = '$data[16]',      `other`     = '$data[17]',
                `anti`      = '$data[18]',      `kick`       = '$data[19]',      `dentref`   = '$data[20]',
                `dentex`    = '$data[21]',      `denttreat`  = '$data[22]',      `syppoa`    = $data[23],
                `syptake`   = '$data[24]',      `sypreci`    = '$data[25]',      `sypres`    = '$data[26]',
                `sypref`    = '$data[27]',      `hivtake`    = '$data[28]',      `hivinform` = '$data[29]',
                `tdate1`    = '$data[30]',      `tbatch1`    = '$data[31]',      `tdate2`    = '$data[32]',
                `tbatch2`   = '$data[33]',      `tdate3`     = '$data[34]',      `tbatch3`   = '$data[35]',
                `tdate4`    = '$data[36]',      `tbatch4`    = '$data[37]',      `tdate5`    = '$data[38]',
                `tbatch5`   = '$data[39]',      `tne`        = '$data[40]',      `tnebatch`  = '$data[41]'

                WHERE `id` ='$data[0]'";

    try{
        $update_Result = $inves->featuredLoad($dbObj,$update_Query);
        if($update_Result){
            echo '<script type="text/javascript">alert("Updated successfully!");</script>';
            // if(mysqli_affected_rows($dbObj) > 0){
            //     echo 'Data updated successfully';
            // }else{
            //     echo 'Data Not updated';
            // }
        }
    }catch(Exception $ex){
        echo 'Error Update '.$ex->getMessage();
    }
}
?>