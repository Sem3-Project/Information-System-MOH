<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id = "";
$day = "";
$dov="";
$poa=0;
$sugar = "";    $alb="";
$pallor="";     $ankle="";
$facial="";     $sys=0;
$dia = 0;       $fundalh=0;
$weight = 0;    $lie="";
$presen= "";    $engage="";
$fm="";         $fhs="";
$iron=0;        $fol=0;
$cal=0;         $vitc=0;
$food=0;        $officer="";
$post="";

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id'];           $posts[1] = $_POST['dov'];           $posts[2] = $_POST['poa'];           $posts[3] = $_POST['sugar'];
    $posts[4] = $_POST['alb'];          $posts[5] = $_POST['pallor'];        $posts[6] = $_POST['ankle'];
    $posts[7] = $_POST['facial'];       $posts[8] = $_POST['sys'];           $posts[9] = $_POST['dia'];
    $posts[10] = $_POST['fundalh'];     $posts[11] = $_POST['weight'];       $posts[12] = $_POST['lie'];
    $posts[13] = $_POST['presen'];      $posts[14] = $_POST['engage'];       $posts[15] = $_POST['fm'];
    $posts[16] = $_POST['fhs'];         $posts[17] = $_POST['iron'];         $posts[18] = $_POST['fol'];
    $posts[19] = $_POST['cal'];         $posts[20] = $_POST['vitc'];         $posts[21] = $_POST['food'];
    $posts[22] = $_POST['officer'];     $posts[23] = $_POST['post'];  
    return $posts;
}
$inves = new table();
//SEARCH
if(isset($_POST['search'])){

    $day = $_POST['day'];
    $data = getPosts();
   
    $search_Query = "SELECT * FROM $day WHERE id = '$data[0]'";
    //$search_Query = "SELECT * FROM `".$day."` WHERE id = '$data[0]'";
    //$search_Result = mysqli_query($connect, $search_Query);

    $search_Result = $inves->featuredLoad($dbObj,$search_Query);
    
    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while($row = mysqli_fetch_array($search_Result)){

                $id        = $row['id'];            $dov        = $row['dov'];          $poa       = $row['poa'];          $sugar     = $row['sugar'];
                $alb       = $row['alb'];           $pallor     = $row['pallor'];       $ankle     = $row['ankle'];
                $facial    = $row['facial'];        $sys        = $row['sys'];          $dia       = $row['dia'];
                $fundalh   = $row['fundalh'];       $weight     = $row['weight'];       $lie       = $row['lie'];
                $presen    = $row['presen'];        $engage     = $row['engage'];       $fm        = $row['fm'];
                $fhs       = $row['fhs'];           $iron       = $row['iron'];         $fol       = $row['fol'];
                $cal       = $row['cal'];           $vitc       = $row['vitc'];         $food      = $row['food'];
                $officer   = $row['officer'];       $post       = $row['post'];   
               
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
if(isset($_POST['save'])){
    $data = getPosts();    
    $day = $_POST['day'];
    
    $update_Query = "UPDATE $day SET
   
                `dov`     = '$data[1]',       `poa`      = $data[2],          `sugar`  = '$data[3]',
                `alb`     = '$data[4]',       `pallor`     = '$data[5]',      `ankle`  = '$data[6]',
                `facial`  = '$data[7]',       `sys`        = $data[8],        `dia`    = $data[9],
                `fundalh` = $data[10],        `weight`     = $data[11],       `lie`    = '$data[12]',
                `presen`  = '$data[13]',      `engage`     = '$data[14]',     `fm`     = '$data[15]',
                `fhs`     = '$data[16]',      `iron`       = $data[17],       `fol`    = $data[18],
                `cal`     = $data[19],        `vitc`       = $data[20],       `food`   = $data[21],
                `officer` = '$data[22]',      `post`       = '$data[23]'
               
                WHERE `id` ='$data[0]'";

    try{
        $update_Result = $inves->featuredLoad($dbObj,$update_Query);
        //$update_Result = mysqli_query($connect,$update_Query);
        if($update_Result){
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Success!","Data updated successfully!","success");';
            echo '}, 200);</script>';
                }
    }catch(Exception $ex){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Result error!","error");';
        echo '}, 200);</script>';
    }
}
?>