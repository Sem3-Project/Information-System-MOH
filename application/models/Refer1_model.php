<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id=""; $date1 = ""; $reason1 = ""; $place1 = "";  $result1 = ""; $date2 = ""; $reason2 = ""; $place2 = ""; $result2 = ""; 
$date3 = ""; $reason3 = ""; $place3 = ""; $result3 = ""; $date4 = "";  $reason4 = ""; $place4 = ""; $result4 = ""; 
$date5 = ""; $reason5 = ""; $place5 = ""; $result5 = ""; $date6 = ""; $reason6 = ""; $place6 = "";  $result6 = ""; 
$date7 = ""; $reason7 = ""; $place7 = ""; $result7 = "";  $date8 = ""; $reason8 = ""; $place8 = ""; $result8 = ""; 
$date9 = "";$reason9 = ""; $place9 = ""; $result9 = ""; $date10 = ""; $reason10 = ""; $place10 = ""; $result10 = ""; 
$date11 = ""; $reason11 = "";  $place11 = ""; $result11 = ""; $date12 = ""; $reason12 = ""; $place12  = ""; $result12 = ""; 
$date13 = ""; $reason13 = ""; $place13 = ""; $result13 = "";  $date14 = ""; $reason14 = ""; $place14 = ""; $result14 = ""; 
$date15 = ""; $reason15 = ""; $place15 = ""; $result15 = ""; $date16 = ""; $reason16 = "";  $place16 = ""; $result16 = ""; 
$date17 = ""; $reason17 = ""; $place17 = ""; $result17 = ""; $date18 = ""; $reason18 = ""; $place18 = ""; $result18 = "";  
$date19 = ""; $reason19 = ""; $place19 = ""; $result19 = ""; $date20 = ""; $reason20 = ""; $place20 = ""; $result20 = ""; 

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['date1']; $posts[2] = $_POST['reason1']; $posts[3] = $_POST['place1'];$posts[4] = $_POST['result1'];$posts[5] = $_POST['date2']; 
    $posts[6] = $_POST['reason2']; $posts[7] = $_POST['place2']; $posts[8] = $_POST['result2']; $posts[9] = $_POST['date3']; $posts[10] = $_POST['reason3']; 
    
    $posts[11] = $_POST['place3']; $posts[12] = $_POST['result3'];$posts[13] = $_POST['date4']; $posts[14] = $_POST['reason4']; $posts[15] = $_POST['place4'];
    $posts[16] = $_POST['result4']; $posts[17] = $_POST['date5']; $posts[18] = $_POST['reason5']; $posts[19] = $_POST['place5']; $posts[20] = $_POST['result5'];
      
    $posts[21] = $_POST['date6']; $posts[22] = $_POST['reason6']; $posts[23] = $_POST['place6']; $posts[24] = $_POST['result6']; $posts[25] = $_POST['date7']; 
    $posts[26] = $_POST['reason7']; $posts[27] = $_POST['place7']; $posts[28] = $_POST['result7']; $posts[29] = $_POST['date8']; $posts[30] = $_POST['reason8']; 
    
    $posts[31] = $_POST['place8']; $posts[32] = $_POST['result8']; $posts[33] = $_POST['date9']; $posts[34] = $_POST['reason9']; $posts[35] = $_POST['place9']; 
    $posts[36] = $_POST['result9']; $posts[37] = $_POST['date10']; $posts[38] = $_POST['reason10']; $posts[39] = $_POST['place10']; 
    
    $posts[40] = $_POST['result10']; $posts[41] = $_POST['date11']; $posts[42] = $_POST['reason11']; $posts[43] = $_POST['place11']; $posts[44] = $_POST['result11']; 
    $posts[45] = $_POST['date12']; $posts[46] = $_POST['reason12']; $posts[47] = $_POST['place12']; $posts[48] = $_POST['result12']; $posts[49] = $_POST['date13']; 
    
    $posts[50] = $_POST['reason13']; $posts[51] = $_POST['place13']; $posts[52] = $_POST['result13']; $posts[53] = $_POST['date14']; $posts[54] = $_POST['reason14'];
    $posts[55] = $_POST['place14']; $posts[56] = $_POST['result14']; $posts[57] = $_POST['date15']; $posts[58] = $_POST['reason15']; $posts[59] = $_POST['place15']; 
    
    $posts[60] = $_POST['result15']; $posts[61] = $_POST['date16']; $posts[62] = $_POST['reason16']; $posts[63] = $_POST['place16']; $posts[64] = $_POST['result16']; 
    $posts[65] = $_POST['date17']; $posts[66] = $_POST['reason17'];$posts[67] = $_POST['place17'];$posts[68] = $_POST['result17']; $posts[69] = $_POST['date18']; 
    
    $posts[70] = $_POST['reason18']; $posts[71] = $_POST['place18']; $posts[72] = $_POST['result18']; 
    $posts[73] = $_POST['date19']; $posts[74] = $_POST['reason19']; $posts[75] = $_POST['place19'];
    
    $posts[76] = $_POST['result19'];$posts[77] = $_POST['date20']; $posts[78] = $_POST['reason20']; 
    $posts[79] = $_POST['place20']; $posts[80] = $_POST['result20']; 
    return $posts;
}
$refer1 = new table();

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table9 WHERE id = $data[0]";
    $search_Result = $refer1->featuredLoad($dbObj, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $id= $row['id']; $date1 = $row['date1']; $reason1 = $row['reason1']; $place1 = $row['place1'];$result1 = $row['result1'];$date2 = $row['date2']; 
                $reason2 = $row['reason2']; $place2 = $row['place2']; $result2 = $row['result2']; $date3 = $row['date3']; 
                $reason3 = $row['reason3']; $place3 = $row['place3']; $result3 = $row['result3'];$date4 = $row['date4']; $reason4 = $row['reason4'];
                $place4 = $row['place4'];$result4 = $row['result4']; $date5 = $row['date5']; $reason5 = $row['reason5']; 
                $place5 = $row['place5']; $result5 = $row['result5'];$date6 = $row['date6']; $reason6 = $row['reason6']; $place6 = $row['place6'];
                $result6 = $row['result6']; $date7 = $row['date7']; $reason7 = $row['reason7']; $place7 = $row['place7']; 
                $result7 = $row['result7']; $date8 = $row['date8']; $reason8 = $row['reason8']; $place8 = $row['place8']; $result8 = $row['result8']; 
                $date9 = $row['date9']; $reason9 = $row['reason9']; $place9 = $row['place9']; $result9 = $row['result9']; 
                $date10 = $row['date10']; $reason10 = $row['reason10']; $place10 = $row['place10']; $result10 = $row['result10']; $date11 = $row['date11']; 
                $reason11 = $row['reason11']; $place11 = $row['place11']; $result11 = $row['result11']; $date12 = $row['date12']; 
                $reason12 = $row['reason12']; $place12 = $row['place12']; $result12 = $row['result12']; $date13 = $row['date13']; $reason13 = $row['reason13']; 
                $place13 = $row['place13']; $result13 = $row['result13']; $date14 = $row['date14']; $reason14 = $row['reason14'];
                $place14 = $row['place14']; $result14= $row['result14']; $date15 = $row['date15']; $reason15 = $row['reason15']; $place15 = $row['place15']; 
                $result15 = $row['result15']; $date16 = $row['date16']; $reason16 = $row['reason16']; $place16 = $row['place16']; 
                $result16 = $row['result16']; $date17 = $row['date17']; $reason17= $row['reason17'];$place17 = $row['place17'];$result17 = $row['result17']; 
                $date18 = $row['date18']; $reason18 = $row['reason18']; $place18 = $row['place18']; $result18 = $row['result18']; 
                $date19 = $row['date19']; $reason19 = $row['reason19']; $place19 = $row['place19'];$result19 = $row['result19'];$date20 = $row['date20']; 
                $reason20 = $row['reason20']; $place20 = $row['place20']; $result20 = $row['result20']; 
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
    $update_Query = "UPDATE `table9` SET `date1`='$data[1]', `reason1`='$data[2]', `place1`='$data[3]',`result1`='$data[4]', `date2`='$data[5]', 
    `reason2`='$data[6]',`place2`='$data[7]', `result2`='$data[8]', `date3`='$data[9]',
    `reason3`='$data[10]', `place3`='$data[11]', `result3`='$data[12]',`date4`='$data[13]', `reason4`='$data[14]', 
    `place4`='$data[15]',`result4`='$data[16]', `date5`='$data[17]', `reason5`='$data[18]',
    `place5`='$data[19]', `result5`='$data[20]', `date6`='$data[21]',`reason6`='$data[22]', `place6`='$data[23]',
    `result6`='$data[24]', `date7`='$data[25]', `reason7`='$data[26]',`place7`='$data[27]', 
    `result7`='$data[28]', `date8`='$data[29]',`reason8`='$data[30]',`place8`='$data[31]', `result8`='$data[32]', 
    `date9`='$data[33]',`reason9`='$data[34]', `place9`='$data[35]', `result9`='$data[36]',
    `date10`='$data[37]', `reason10`='$data[38]', `place10`='$data[39]',`result10`='$data[40]',`date11`='$data[41]', 
    `reason11`='$data[42]', `place11`='$data[43]',`result11`='$data[44]', `date12`='$data[45]', 
    `reason12`='$data[46]',`place12`='$data[47]', `result12`='$data[48]', `date13`='$data[49]',`reason13`='$data[50]',
    `place13`='$data[51]', `result13`='$data[52]', `date14`='$data[53]',`reason14`='$data[54]', 
    `place14`='$data[55]', `result14`='$data[56]',`date15`='$data[57]', `reason15`='$data[58]', `place15`='$data[59]',
    `result15`='$data[60]',`date16`='$data[61]',`reason16`='$data[62]', `place16`='$data[63]', 
    `result16`='$data[64]',`date17`='$data[65]',`reason17`='$data[66]',`place17`='$data[67]',`result17`='$data[68]',
    `date18`='$data[69]',`reason18`='$data[70]',`place18`='$data[71]',`result18`='$data[72]',
    `date19`='$data[73]',`reason19`='$data[74]',`place19`='$data[75]',`result19`='$data[76]',`date20`='$data[77]',
    `reason20`='$data[78]',`place20`='$data[79]',`result20`='$data[80]'
     WHERE `id` = $data[0]";

    try{
        $update_Result = $refer1->featuredLoad($dbObj, $update_Query);

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