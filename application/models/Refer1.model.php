<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Child.php';
    include '../controllers/Refer1.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id= $_POST['id']; 
    $date1 = $_POST['date1']; $reason1 = $_POST['reason1']; $place1 = $_POST['place1'];$result1 = $_POST['result1'];
    $date2 = $_POST['date2']; $reason2 = $_POST['reason2']; $place2 = $_POST['place2']; $result2 = $_POST['result2']; 
    $date3 = $_POST['date3']; $reason3 = $_POST['reason3']; $place3 = $_POST['place3']; $result3 = $_POST['result3'];
    $date4 = $_POST['date4']; $reason4 = $_POST['reason4'];$place4 = $_POST['place4'];$result4 = $_POST['result4']; 
    $date5 = $_POST['date5']; $reason5 = $_POST['reason5']; $place5 = $_POST['place5']; $result5 = $_POST['result5'];
    $date6 = $_POST['date6']; $reason6 = $_POST['reason6']; $place6 = $_POST['place6'];$result6 = $_POST['result6']; 
    $date7 = $_POST['date7']; $reason7 = $_POST['reason7']; $place7 = $_POST['place7']; $result7 = $_POST['result7']; 
    $date8 = $_POST['date8']; $reason8 = $_POST['reason8']; $place8 = $_POST['place8']; $result8 = $_POST['result8']; 
    $date9 = $_POST['date9']; $reason9 = $_POST['reason9']; $place9 = $_POST['place9']; $result9 = $_POST['result9']; 
    $date10 = $_POST['date10']; $reason10 = $_POST['reason10']; $place10 = $_POST['place10']; $result10 = $_POST['result10']; 
    $date11 = $_POST['date11']; $reason11 = $_POST['reason11']; $place11 = $_POST['place11']; $result11 = $_POST['result11']; 
    $date12 = $_POST['date12']; $reason12 = $_POST['reason12']; $place12 = $_POST['place12']; $result12 = $_POST['result12']; 
    $date13 = $_POST['date13']; $reason13 = $_POST['reason13']; $place13 = $_POST['place13']; $result13 = $_POST['result13']; 
    $date14 = $_POST['date14']; $reason14 = $_POST['reason14'];$place14 = $_POST['place14']; $result14= $_POST['result14']; 
    $date15 = $_POST['date15']; $reason15 = $_POST['reason15']; $place15 = $_POST['place15']; $result15 = $_POST['result15']; 
    $date16 = $_POST['date16']; $reason16 = $_POST['reason16']; $place16 = $_POST['place16']; $result16 = $_POST['result16']; 
    $date17 = $_POST['date17']; $reason17= $_POST['reason17'];$place17 = $_POST['place17'];$result17 = $_POST['result17']; 
    $date18 = $_POST['date18']; $reason18 = $_POST['reason18']; $place18 = $_POST['place18']; $result18 = $_POST['result18']; 
    $date19 = $_POST['date19']; $reason19 = $_POST['reason19']; $place19 = $_POST['place19'];$result19 = $_POST['result19'];
    $date20 = $_POST['date20']; $reason20 = $_POST['reason20']; $place20 = $_POST['place20']; $result20 = $_POST['result20']; 

  // $tblName = 'table9';

   $tempinves = new Refer1();
   $result = $tempinves->load($dbObj, $id);

  
   if ($result){
       $inves = new Refer1();
        $data = array("id" => $id,"date1" => $date1, "reason1" => $reason1, "place1" => $place1,"result1" => $result1,
                        "date2" => $date2, "reason2" => $reason2, "place2" => $place2, "result2" => $result2, 
                        "date3" => $date3, "reason3" => $reason3, "place3" => $place3, "result3" => $result3,
                        "date4" => $date4, "reason4" => $reason4,"place4" => $place4,"result4" => $result4, 
                        "date5" => $date5, "reason5" => $reason5, "place5" => $place5, "result5" => $result5,
                        "date6" => $date6, "reason6" => $reason6, "place6" => $place6,"result6" => $result6, 
                        "date7" => $date7, "reason7" => $reason7, "place7" => $place7, "result7" => $result7, 
                        "date8" => $date8, "reason8" => $reason8, "place8" => $place8, "result8" => $result8, 
                        "date9" => $date9, "reason9" => $reason9, "place9" => $place9, "result9" => $result9, 
                        "date10" => $date10, "reason10" => $reason10, "place10" => $place10, "result10" => $result10, 
                        "date11" => $date11, "reason11" => $reason11, "place11" => $place11, "result11" => $result11, 
                        "date12" => $date12, "reason12" => $reason12, "place12" => $place12, "result12" => $result12, 
                        "date13" => $date13, "reason13" => $reason13, "place13" => $place13, "result13" => $result13, 
                        "date14" => $date14, "reason14" => $reason14,"place14" => $place14, "result14" => $result14, 
                        "date15" => $date15, "reason15" => $reason15, "place15" => $place15, "result15" => $result15, 
                        "date16" => $date16, "reason16" => $reason16, "place16" => $place16, "result16" => $result16, 
                        "date17" => $date17, "reason17" => $reason17,"place17" => $place17,"result17" => $result17, 
                        "date18" => $date18, "reason18" => $reason18, "place18" => $place18, "result18" => $result18, 
                        "date19" => $date19, "reason19" => $reason19, "place19" => $place19,"result19" => $result19,
                        "date20" => $date20, "reason20" => $reason20, "place20" => $place20, "result20" => $result20 );
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
        $search_Query = "SELECT * FROM table9 WHERE id = '$id'";
    
        $search_Result = $refer->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }
        $_POST['date1'] = $posts[1];    $_POST['reason1'] = $posts[2];    $_POST['place1'] = $posts[3];    $_POST['result1'] = $posts[4];  
        $_POST['date2'] = $posts[5];    $_POST['reason2'] = $posts[6];    $_POST['place2'] = $posts[7];    $_POST['result2'] = $posts[8];
        $_POST['date3'] = $posts[9];    $_POST['reason3'] = $posts[10];    $_POST['place3'] = $posts[11];    $_POST['result3'] = $posts[12];
        $_POST['date4'] = $posts[13];    $_POST['reason4'] = $posts[14];    $_POST['place4'] = $posts[15];    $_POST['result4'] = $posts[16];  
        $_POST['date5'] = $posts[17];    $_POST['reason5'] = $posts[18];    $_POST['place5'] = $posts[19];    $_POST['result5'] = $posts[20];
        $_POST['date6'] = $posts[21];    $_POST['reason6'] = $posts[22];    $_POST['place6'] = $posts[23];    $_POST['result6'] = $posts[24];  
        $_POST['date7'] = $posts[25];    $_POST['reason7'] = $posts[26];    $_POST['place7'] = $posts[27];    $_POST['result7'] = $posts[28];
        $_POST['date8'] = $posts[29];    $_POST['reason8'] = $posts[30];    $_POST['place8'] = $posts[31];    $_POST['result8'] = $posts[32];
        $_POST['date9'] = $posts[33];    $_POST['reason9'] = $posts[34];    $_POST['place9'] = $posts[35];    $_POST['result9'] = $posts[36];  
        $_POST['date10'] = $posts[37];    $_POST['reason10'] = $posts[38];    $_POST['place10'] = $posts[39];    $_POST['result10'] = $posts[40];
        $_POST['date11'] = $posts[41];    $_POST['reason11'] = $posts[42];   $_POST['place11'] = $posts[43];     $_POST['result11'] = $posts[44];
        $_POST['date12'] = $posts[45];     $_POST['reason12'] = $posts[46];     $_POST['place12'] = $posts[47];     $_POST['result12'] = $posts[48];
        $_POST['date13'] = $posts[49];     $_POST['reason13'] = $posts[50];     $_POST['place13'] = $posts[51];    $_POST['result13'] = $posts[52];
        $_POST['date14'] = $posts[53];     $_POST['reason14'] = $posts[54];     $_POST['place14'] = $posts[55];    $_POST['result14'] = $posts[56];
        $_POST['date15'] = $posts[57];     $_POST['reason15'] = $posts[58];     $_POST['place15'] = $posts[59];    $_POST['result15'] = $posts[60];
        $_POST['date16'] = $posts[61];     $_POST['reason16'] = $posts[62];     $_POST['place16'] = $posts[63];    $_POST['result16'] = $posts[64];
        $_POST['date17'] = $posts[65];     $_POST['reason17'] = $posts[66];     $_POST['place17'] = $posts[67];    $_POST['result17'] = $posts[68];
        $_POST['date18'] = $posts[69];     $_POST['reason18'] = $posts[70];     $_POST['place18'] = $posts[71];    $_POST['result18'] = $posts[72];
        $_POST['date19'] = $posts[73];     $_POST['reason19'] = $posts[74];     $_POST['place19'] = $posts[75];    $_POST['result19'] = $posts[76];
        $_POST['date20'] = $posts[77];     $_POST['reason20'] = $posts[78];     $_POST['place20'] = $posts[79];    $_POST['result20'] = $posts[80];




        unset($posts);
        $posts = array();
    }

}
?> 
                       