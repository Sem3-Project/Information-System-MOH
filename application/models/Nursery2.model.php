<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Child.php';
    include '../controllers/Nursery2.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id= $_POST['id']; $lsquint1 = $_POST['lsquint1']; $lsquint2 = $_POST['lsquint2']; $lsquint3 = $_POST['lsquint3'];$rsquint1 = $_POST['rsquint1'];$rsquint2 = $_POST['rsquint2']; 
    $rsquint3 = $_POST['rsquint3']; $lvision1 = $_POST['lvision1']; $lvision2 = $_POST['lvision2']; $lvision3 = $_POST['lvision3']; 
    $rvision1 = $_POST['rvision1']; $rvision2 = $_POST['rvision2']; $rvision3 = $_POST['rvision3'];$lhearing1 = $_POST['lhearing1']; $lhearing2 = $_POST['lhearing2'];
    $lhearing3 = $_POST['lhearing3'];$rhearing1 = $_POST['rhearing1']; $rhearing2 = $_POST['rhearing2']; $rhearing3 = $_POST['rhearing3']; 
    $speech1 = $_POST['speech1']; $speech2 = $_POST['speech2'];$speech3 = $_POST['speech3']; $tooth1 = $_POST['tooth1']; $tooth2 = $_POST['tooth2'];
    $tooth3 = $_POST['tooth3']; $teeth1 = $_POST['teeth1']; $teeth2 = $_POST['teeth2']; $teeth3 = $_POST['teeth3']; 
    $ynt1 = $_POST['ynt1']; $ynt2 = $_POST['ynt2']; $ynt3 = $_POST['ynt3']; $mark1 = $_POST['mark1']; $mark2 = $_POST['mark2']; 
    $mark3 = $_POST['mark3']; $bone1 = $_POST['bone1']; $bone2 = $_POST['bone2']; $bone3 = $_POST['bone3']; 
    $heart1 = $_POST['heart1']; $heart2 = $_POST['heart2']; $heart3 = $_POST['heart3']; $lungs1 = $_POST['lungs1']; $lungs2 = $_POST['lungs2']; 
    $lungs3 = $_POST['lungs3']; $ovarious1 = $_POST['ovarious1']; $ovarious2 = $_POST['ovarious2']; $ovarious3 = $_POST['ovarious3']; 
    $ovarious4 = $_POST['ovarious4']; $tvarious1 = $_POST['tvarious1']; $tvarious2 = $_POST['tvarious2']; $tvarious3 = $_POST['tvarious3']; $tvarious4 = $_POST['tvarious4']; 
    $thvarious1 = $_POST['thvarious1']; $thvarious2 = $_POST['thvarious2']; $thvarious3 = $_POST['thvarious3']; $thvarious4 = $_POST['thvarious4'];
    $fvarious1 = $_POST['fvarious1']; $fvarious2= $_POST['fvarious2']; $fvarious3 = $_POST['fvarious3']; $fvarious4 = $_POST['fvarious4']; $tname1 = $_POST['tname1']; 
    $tname2 = $_POST['tname2']; $tname3 = $_POST['tname3']; $tposition1 = $_POST['tposition1']; $tposition2 = $_POST['tposition2']; 
    $tposition3 = $_POST['tposition3']; 

  // $tblName = 'table8';

   $tempinves = new Nursery2();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $inves = new Nursery2();
      
        $data = array(

            "id" =>$id, "lsquint1" =>$lsquint1, "lsquint2" =>$lsquint2, "lsquint3" =>$lsquint3,"rsquint1" =>$rsquint1,"rsquint2" =>$rsquint2, 
            "rsquint3" =>$rsquint3, "lvision1" =>$lvision1, "lvision2" =>$lvision2, "lvision3" =>$lvision3, 
            "rvision1" =>$rvision1, "rvision2" =>$rvision2, "rvision3" =>$rvision3,"lhearing1" =>$lhearing1, "lhearing2" =>$lhearing2,
            "lhearing3" =>$lhearing3,"rhearing1" =>$rhearing1, "rhearing2" =>$rhearing2, "rhearing3" =>$rhearing3, 
            "speech1" =>$speech1, "speech2" =>$speech2,"speech3" =>$speech3, "tooth1" =>$tooth1, "tooth2" =>$tooth2,
            "tooth3" =>$tooth3, "teeth1" =>$teeth1, "teeth2" =>$teeth2, "teeth3" =>$teeth3, 
            "ynt1" =>$ynt1, "ynt2" =>$ynt2, "ynt3" =>$ynt3, "mark1" =>$mark1, "mark2" =>$mark2, 
            "mark3" =>$mark3, "bone1" =>$bone1, "bone2" =>$bone2, "bone3" =>$bone3, 
            "heart1" =>$heart1, "heart2" =>$heart2, "heart3" =>$heart3, "lungs1" =>$lungs1, "lungs2" =>$lungs2, 
            "lungs3" =>$lungs3, "ovarious1" =>$ovarious1, "ovarious2" =>$ovarious2, "ovarious3" =>$ovarious3, 
            "ovarious4" =>$ovarious4, "tvarious1" =>$tvarious1, "tvarious2" =>$tvarious2, "tvarious3" =>$tvarious3, "tvarious4" =>$tvarious4, 
            "thvarious1" =>$thvarious1, "thvarious2" =>$thvarious2, "thvarious3" =>$thvarious3, "thvarious4" =>$thvarious4,
            "fvarious1" =>$fvarious1, "fvarious2" =>$fvarious2, "fvarious3" =>$fvarious3, "fvarious4" =>$fvarious4, "tname1" =>$tname1, 
            "tname2" =>$tname2, "tname3" =>$tname3, "tposition1" =>$tposition1, "tposition2" =>$tposition2, "tposition3" =>$tposition3);
            
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
        $nursery2 = new table();
        $search_Query = "SELECT * FROM table8 WHERE id = '$id'";
    
        $search_Result = $nursery2->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }

        $_POST['lsquint1'] = $posts[1];    $_POST['lsquint2'] = $posts[2];    $_POST['lsquint3'] = $posts[3];    $_POST['rsquint1'] = $posts[4];  
        $_POST['rsquint2'] = $posts[5];    $_POST['rsquint3'] = $posts[6];    $_POST['lvision1'] = $posts[7];    $_POST['lvision2'] = $posts[8];
        $_POST['lvision3'] = $posts[9];    $_POST['rvision1'] = $posts[10];    $_POST['rvision2'] = $posts[11];    $_POST['rvision3'] = $posts[12];
        $_POST['lhearing1'] = $posts[13];    $_POST['lhearing2'] = $posts[14];    $_POST['lhearing3'] = $posts[15];    $_POST['rhearing1'] = $posts[16];  
        $_POST['rhearing2'] = $posts[17];    $_POST['rhearing3'] = $posts[18];    $_POST['speech1'] = $posts[19];    $_POST['speech2'] = $posts[20];
        $_POST['speech3'] = $posts[21];    $_POST['tooth1'] = $posts[22];    $_POST['tooth2'] = $posts[23];    $_POST['tooth3'] = $posts[24];  
        $_POST['teeth1'] = $posts[25];    $_POST['teeth2'] = $posts[26];    $_POST['teeth3'] = $posts[27];    $_POST['ynt1'] = $posts[28];
        $_POST['ynt2'] = $posts[29];    $_POST['ynt3'] = $posts[30];    $_POST['mark1'] = $posts[31];    $_POST['mark2'] = $posts[32];
        $_POST['mark3'] = $posts[33];    $_POST['bone1'] = $posts[34];    $_POST['bone2'] = $posts[35];    $_POST['bone3'] = $posts[36];  
        $_POST['heart1'] = $posts[37];    $_POST['heart2'] = $posts[38];    $_POST['heart3'] = $posts[39];    $_POST['lungs1'] = $posts[40];
        $_POST['lungs2'] = $posts[41];$_POST['lungs3'] = $posts[42];   $_POST['ovarious1'] = $posts[43];     $_POST['ovarious2'] = $posts[44];
        $_POST['ovarious3'] = $posts[45];     $_POST['ovarious4'] = $posts[46];     $_POST['tvarious1'] = $posts[47];     $_POST['tvarious2'] = $posts[48];
        $_POST['tvarious3'] = $posts[49];     $_POST['tvarious4'] = $posts[50];     $_POST['thvarious1'] = $posts[51];    $_POST['thvarious2'] = $posts[52];
        $_POST['thvarious3'] = $posts[53];     $_POST['thvarious4'] = $posts[54];     $_POST['fvarious1'] = $posts[55];    $_POST['fvarious2'] = $posts[56];
        $_POST['fvarious3'] = $posts[57];     $_POST['fvarious4'] = $posts[58];     $_POST['tname1'] = $posts[59];    $_POST['tname2'] = $posts[60];
        $_POST['tname3'] = $posts[61];     $_POST['tposition1'] = $posts[62];     $_POST['tposition2'] = $posts[63];    $_POST['tposition3'] = $posts[64];
        
        unset($posts);
        $posts = array();
    }

}
?> 
  