<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Child.php';
    include '../controllers/Refer2.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id= $_POST['id']; 
    $ndate1 = $_POST['ndate1']; $nreason1 = $_POST['nreason1']; $nplace1 = $_POST['nplace1'];$nresult1 = $_POST['nresult1'];
    $ndate2 = $_POST['ndate2']; $nreason2 = $_POST['nreason2']; $nplace2 = $_POST['nplace2']; $nresult2 = $_POST['nresult2']; 
    $ndate3 = $_POST['ndate3']; $nreason3 = $_POST['nreason3']; $nplace3 = $_POST['nplace3']; $nresult3 = $_POST['nresult3'];
    $ndate4 = $_POST['ndate4']; $nreason4 = $_POST['nreason4'];$nplace4 = $_POST['nplace4'];$nresult4 = $_POST['nresult4']; 
    $ndate5 = $_POST['ndate5']; $nreason5 = $_POST['nreason5']; $nplace5 = $_POST['nplace5']; $nresult5 = $_POST['nresult5'];
    $ndate6 = $_POST['ndate6']; $nreason6 = $_POST['nreason6']; $nplace6 = $_POST['nplace6'];$nresult6 = $_POST['nresult6']; 
    $ndate7 = $_POST['ndate7']; $nreason7 = $_POST['nreason7']; $nplace7 = $_POST['nplace7']; $nresult7 = $_POST['nresult7']; 
    $ndate8 = $_POST['ndate8']; $nreason8 = $_POST['nreason8']; $nplace8 = $_POST['nplace8']; $nresult8 = $_POST['nresult8']; 
    $ndate9 = $_POST['ndate9']; $nreason9 = $_POST['nreason9']; $nplace9 = $_POST['nplace9']; $nresult9 = $_POST['nresult9']; 
    $ndate10 = $_POST['ndate10']; $nreason10 = $_POST['nreason10']; $nplace10 = $_POST['nplace10']; $nresult10 = $_POST['nresult10']; 
    $ndate11 = $_POST['ndate11']; $nreason11 = $_POST['nreason11']; $nplace11 = $_POST['nplace11']; $nresult11 = $_POST['nresult11']; 
    $ndate12 = $_POST['ndate12']; $nreason12 = $_POST['nreason12']; $nplace12 = $_POST['nplace12']; $nresult12 = $_POST['nresult12']; 
    $ndate13 = $_POST['ndate13']; $nreason13 = $_POST['nreason13']; $nplace13 = $_POST['nplace13']; $nresult13 = $_POST['nresult13']; 
    $ndate14 = $_POST['ndate14']; $nreason14 = $_POST['nreason14'];$nplace14 = $_POST['nplace14']; $nresult14= $_POST['nresult14']; 
    $ndate15 = $_POST['ndate15']; $nreason15 = $_POST['nreason15']; $nplace15 = $_POST['nplace15']; $nresult15 = $_POST['nresult15']; 
    $ndate16 = $_POST['ndate16']; $nreason16 = $_POST['nreason16']; $nplace16 = $_POST['nplace16']; $nresult16 = $_POST['nresult16']; 
    $ndate17 = $_POST['ndate17']; $nreason17= $_POST['nreason17'];$nplace17 = $_POST['nplace17'];$nresult17 = $_POST['nresult17']; 
    $ndate18 = $_POST['ndate18']; $nreason18 = $_POST['nreason18']; $nplace18 = $_POST['nplace18']; $nresult18 = $_POST['nresult18']; 
    $ndate19 = $_POST['ndate19']; $nreason19 = $_POST['nreason19']; $nplace19 = $_POST['nplace19'];$nresult19 = $_POST['nresult19'];

  // $tblName = 'table10';

   $tempinves = new Refer2();
   $result = $tempinves->load($dbObj, $id);

  
   if ($result){
       $inves = new Refer2();
        $data = array("id" => $id,"ndate1" => $ndate1, "nreason1" => $nreason1, "nplace1" => $nplace1,"nresult1" => $nresult1,
                        "ndate2" => $ndate2, "nreason2" => $nreason2, "nplace2" => $nplace2, "nresult2" => $nresult2, 
                        "ndate3" => $ndate3, "nreason3" => $nreason3, "nplace3" => $nplace3, "nresult3" => $nresult3,
                        "ndate4" => $ndate4, "nreason4" => $nreason4,"nplace4" => $nplace4,"nresult4" => $nresult4, 
                        "ndate5" => $ndate5, "nreason5" => $nreason5, "nplace5" => $nplace5, "nresult5" => $nresult5,
                        "ndate6" => $ndate6, "nreason6" => $nreason6, "nplace6" => $nplace6,"nresult6" => $nresult6, 
                        "ndate7" => $ndate7, "nreason7" => $nreason7, "nplace7" => $nplace7, "nresult7" => $nresult7, 
                        "ndate8" => $ndate8, "nreason8" => $nreason8, "nplace8" => $nplace8, "nresult8" => $nresult8, 
                        "ndate9" => $ndate9, "nreason9" => $nreason9, "nplace9" => $nplace9, "nresult9" => $nresult9, 
                        "ndate10" => $ndate10, "nreason10" => $nreason10, "nplace10" => $nplace10, "nresult10" => $nresult10, 
                        "ndate11" => $ndate11, "nreason11" => $nreason11, "nplace11" => $nplace11, "nresult11" => $nresult11, 
                        "ndate12" => $ndate12, "nreason12" => $nreason12, "nplace12" => $nplace12, "nresult12" => $nresult12, 
                        "ndate13" => $ndate13, "nreason13" => $nreason13, "nplace13" => $nplace13, "nresult13" => $nresult13, 
                        "ndate14" => $ndate14, "nreason14" => $nreason14,"nplace14" => $nplace14, "nresult14" => $nresult14, 
                        "ndate15" => $ndate15, "nreason15" => $nreason15, "nplace15" => $nplace15, "nresult15" => $nresult15, 
                        "ndate16" => $ndate16, "nreason16" => $nreason16, "nplace16" => $nplace16, "nresult16" => $nresult16, 
                        "ndate17" => $ndate17, "nreason17" => $nreason17,"nplace17" => $nplace17,"nresult17" => $nresult17, 
                        "ndate18" => $ndate18, "nreason18" => $nreason18, "nplace18" => $nplace18, "nresult18" => $nresult18, 
                        "ndate19" => $ndate19, "nreason19" => $nreason19, "nplace19" => $nplace19,"nresult19" => $nresult19);
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
        $search_Query = "SELECT * FROM table10 WHERE id = '$id'";
    
        $search_Result = $refer->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }
        $_POST['ndate1'] = $posts[1];    $_POST['nreason1'] = $posts[2];    $_POST['nplace1'] = $posts[3];    $_POST['nresult1'] = $posts[4];  
        $_POST['ndate2'] = $posts[5];    $_POST['nreason2'] = $posts[6];    $_POST['nplace2'] = $posts[7];    $_POST['nresult2'] = $posts[8];
        $_POST['ndate3'] = $posts[9];    $_POST['nreason3'] = $posts[10];    $_POST['nplace3'] = $posts[11];    $_POST['nresult3'] = $posts[12];
        $_POST['ndate4'] = $posts[13];    $_POST['nreason4'] = $posts[14];    $_POST['nplace4'] = $posts[15];    $_POST['nresult4'] = $posts[16];  
        $_POST['ndate5'] = $posts[17];    $_POST['nreason5'] = $posts[18];    $_POST['nplace5'] = $posts[19];    $_POST['nresult5'] = $posts[20];
        $_POST['ndate6'] = $posts[21];    $_POST['nreason6'] = $posts[22];    $_POST['nplace6'] = $posts[23];    $_POST['nresult6'] = $posts[24];  
        $_POST['ndate7'] = $posts[25];    $_POST['nreason7'] = $posts[26];    $_POST['nplace7'] = $posts[27];    $_POST['nresult7'] = $posts[28];
        $_POST['ndate8'] = $posts[29];    $_POST['nreason8'] = $posts[30];    $_POST['nplace8'] = $posts[31];    $_POST['nresult8'] = $posts[32];
        $_POST['ndate9'] = $posts[33];    $_POST['nreason9'] = $posts[34];    $_POST['nplace9'] = $posts[35];    $_POST['nresult9'] = $posts[36];  
        $_POST['ndate10'] = $posts[37];    $_POST['nreason10'] = $posts[38];    $_POST['nplace10'] = $posts[39];    $_POST['nresult10'] = $posts[40];
        $_POST['ndate11'] = $posts[41];    $_POST['nreason11'] = $posts[42];   $_POST['nplace11'] = $posts[43];     $_POST['nresult11'] = $posts[44];
        $_POST['ndate12'] = $posts[45];     $_POST['nreason12'] = $posts[46];     $_POST['nplace12'] = $posts[47];     $_POST['nresult12'] = $posts[48];
        $_POST['ndate13'] = $posts[49];     $_POST['nreason13'] = $posts[50];     $_POST['nplace13'] = $posts[51];    $_POST['nresult13'] = $posts[52];
        $_POST['ndate14'] = $posts[53];     $_POST['nreason14'] = $posts[54];     $_POST['nplace14'] = $posts[55];    $_POST['nresult14'] = $posts[56];
        $_POST['ndate15'] = $posts[57];     $_POST['nreason15'] = $posts[58];     $_POST['nplace15'] = $posts[59];    $_POST['nresult15'] = $posts[60];
        $_POST['ndate16'] = $posts[61];     $_POST['nreason16'] = $posts[62];     $_POST['nplace16'] = $posts[63];    $_POST['nresult16'] = $posts[64];
        $_POST['ndate17'] = $posts[65];     $_POST['nreason17'] = $posts[66];     $_POST['nplace17'] = $posts[67];    $_POST['nresult17'] = $posts[68];
        $_POST['ndate18'] = $posts[69];     $_POST['nreason18'] = $posts[70];     $_POST['nplace18'] = $posts[71];    $_POST['nresult18'] = $posts[72];
        $_POST['ndate19'] = $posts[73];     $_POST['nreason19'] = $posts[74];     $_POST['nplace19'] = $posts[75];    $_POST['nresult19'] = $posts[76];




        unset($posts);
        $posts = array();
    }

}
?> 
                       