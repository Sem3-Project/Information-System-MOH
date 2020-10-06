<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Child.php';
    include '../controllers/ChildHealth2.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id= $_POST['id']; $day6 = $_POST['day6']; $day7 = $_POST['day7']; $day8 = $_POST['day8'];$day9 = $_POST['day9'];$attack6 = $_POST['attack6']; 
    $attack7 = $_POST['attack7']; $attack8 = $_POST['attack8']; $attack9 = $_POST['attack9']; $eye6 = $_POST['eye6']; 
    $eye7 = $_POST['eye7']; $eye8 = $_POST['eye8']; $eye9 = $_POST['eye9'];$left6 = $_POST['left6']; $left7 = $_POST['left7'];
    $left8 = $_POST['left8'];$left9 = $_POST['left9']; $right6 = $_POST['right6']; $right7 = $_POST['right7']; 
    $right8 = $_POST['right8']; $right9 = $_POST['right9'];$blind1 = $_POST['blind1']; $blind2 = $_POST['blind2']; $blind3 = $_POST['blind3'];
    $bito1 = $_POST['bito1']; $bito2 = $_POST['bito2']; $bito3 = $_POST['bito3']; $hleft6 = $_POST['hleft6']; 
    $hleft7 = $_POST['hleft7']; $hleft8 = $_POST['hleft8']; $hleft9 = $_POST['hleft9']; $hright6 = $_POST['hright6']; $hright7 = $_POST['hright7']; 
    $hright8 = $_POST['hright8']; $hright9 = $_POST['hright9']; $tooth3 = $_POST['tooth3']; $tooth4 = $_POST['tooth4']; 
    $tooth5 = $_POST['tooth5']; $tooth6 = $_POST['tooth6']; $fault3 = $_POST['fault3']; $fault4 = $_POST['fault4']; $fault5 = $_POST['fault5']; 
    $fault6 = $_POST['fault6']; $weight6 = $_POST['weight6']; $weight7 = $_POST['weight7']; $weight8 = $_POST['weight8']; 
    $weight9 = $_POST['weight9']; $height6 = $_POST['height6']; $height7 = $_POST['height7']; $height8 = $_POST['height8']; $height9 = $_POST['height9']; 
    $develop6 = $_POST['develop6']; $develop7 = $_POST['develop7']; $develop8 = $_POST['develop8']; $develop9 = $_POST['develop9'];
    $heart6 = $_POST['heart6']; $heart7= $_POST['heart7']; $heart8 = $_POST['heart8']; $heart9 = $_POST['heart9']; $joint6 = $_POST['joint6']; 
    $joint7 = $_POST['joint7']; $joint8 = $_POST['joint8']; $joint9 = $_POST['joint9']; $disease6 = $_POST['disease6']; 
    $disease7 = $_POST['disease7']; $disease8 = $_POST['disease8']; $disease9= $_POST['disease9'];$adisease6 = $_POST['adisease6'];$adisease7 = $_POST['adisease7']; 
    $adisease8 = $_POST['adisease8']; $adisease9 = $_POST['adisease9']; $bdisease6 = $_POST['bdisease6']; $bdisease7 = $_POST['bdisease7']; 
    $bdisease8 = $_POST['bdisease8']; $bdisease9 = $_POST['bdisease9']; $cdisease6 = $_POST['cdisease6'];$cdisease7 = $_POST['cdisease7'];$cdisease8 = $_POST['cdisease8']; 
    $cdisease9 = $_POST['cdisease9']; $ddisease6 = $_POST['ddisease6']; $ddisease7 = $_POST['ddisease7']; $ddisease8 = $_POST['ddisease8']; 
    $ddisease9= $_POST['ddisease9']; $edisease6 = $_POST['edisease6']; $edisease7 = $_POST['edisease7'];$edisease8 = $_POST['edisease8'];$edisease9 = $_POST['edisease9']; 
    $fdisease6 = $_POST['fdisease6']; $fdisease7 = $_POST['fdisease7']; $fdisease8 = $_POST['fdisease8']; $fdisease9 = $_POST['fdisease9']; 
    $name6 = $_POST['name6']; $name7 = $_POST['name7']; $name8 = $_POST['name8'];$name9 = $_POST['name9'];$position6 = $_POST['position6']; 
    $position7 = $_POST['position7']; $position8 = $_POST['position8']; $position9= $_POST['position9']; 

  // $tblName = 'table6';

   $tempinves = new ChildHealth2();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $inves = new ChildHealth2();
      
        $data = array(

            "id" =>$id, "day6" =>$day6, "day7" =>$day7, "day8" =>$day8,"day9" =>$day9,"attack6" =>$attack6, 
            "attack7" =>$attack7, "attack8" =>$attack8, "attack9" =>$attack9, "eye6" =>$eye6, 
            "eye7" =>$eye7, "eye8" =>$eye8, "eye9" =>$eye9,"left6" =>$left6, "left7" =>$left7,
            "left8" =>$left8,"left9" =>$left9, "right6" =>$right6, "right7" =>$right7, 
            "right8" =>$right8, "right9" =>$right9,"blind1" =>$blind1, "blind2" =>$blind2, "blind3" =>$blind3,
            "bito1" =>$bito1, "bito2" =>$bito2, "bito3" =>$bito3, "hleft6" =>$hleft6, 
            "hleft7" =>$hleft7, "hleft8" =>$hleft8, "hleft9" =>$hleft9, "hright6" =>$hright6, "hright7" =>$hright7, 
            "hright8" =>$hright8, "hright9" =>$hright9, "tooth3" =>$tooth3, "tooth4" =>$tooth4, 
            "tooth5" =>$tooth5, "tooth6" =>$tooth6, "fault3" =>$fault3, "fault4" =>$fault4, "fault5" =>$fault5, 
            "fault6" =>$fault6, "weight6" =>$weight6, "weight7" =>$weight7, "weight8" =>$weight8, 
            "weight9" =>$weight9, "height6" =>$height6, "height7" =>$height7, "height8" =>$height8, "height9" =>$height9, 
            "develop6" =>$develop6, "develop7" =>$develop7, "develop8" =>$develop8, "develop9" =>$develop9,
            "heart6" =>$heart6, "heart7" =>$heart7, "heart8" =>$heart8, "heart9" =>$heart9, "joint6" =>$joint6, 
            "joint7" =>$joint7, "joint8" =>$joint8, "joint9" =>$joint9, "disease6" =>$disease6, 
            "disease7" =>$disease7, "disease8" =>$disease8, "disease9" =>$disease9,"adisease6" =>$adisease6,"adisease7" =>$adisease7, 
            "adisease8" =>$adisease8, "adisease9" =>$adisease9, "bdisease6" =>$bdisease6, "bdisease7" =>$bdisease7, 
            "bdisease8" =>$bdisease8, "bdisease9" =>$bdisease9, "cdisease6" =>$cdisease6,"cdisease7" =>$cdisease7,"cdisease8" =>$cdisease8, 
            "cdisease9" =>$cdisease9, "ddisease6" =>$ddisease6, "ddisease7" =>$ddisease7, "ddisease8" =>$ddisease8, 
            "ddisease9" =>$ddisease9, "edisease6" =>$edisease6, "edisease7" =>$edisease7,"edisease8" =>$edisease8,"edisease9" =>$edisease9, 
            "fdisease6" =>$fdisease6, "fdisease7" =>$fdisease7, "fdisease8" =>$fdisease8, "fdisease9" =>$fdisease9, 
            "name6" =>$name6, "name7" =>$name7, "name8" =>$name8,"name9" =>$name9,"position6" =>$position6, 
            "position7" =>$position7, "position8" =>$position8, "position9" =>$position9);
            
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
        $childHealth2 = new table();
        $search_Query = "SELECT * FROM table6 WHERE id = '$id'";
    
        $search_Result = $childHealth2->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }

        $_POST['day6'] = $posts[1];    $_POST['day7'] = $posts[2];    $_POST['day8'] = $posts[3];    $_POST['day9'] = $posts[4];  
        $_POST['attack6'] = $posts[5];    $_POST['attack7'] = $posts[6];    $_POST['attack8'] = $posts[7];    $_POST['attack9'] = $posts[8];
        $_POST['eye6'] = $posts[9];    $_POST['eye7'] = $posts[10];    $_POST['eye8'] = $posts[11];    $_POST['eye9'] = $posts[12];
        $_POST['left6'] = $posts[13];    $_POST['left7'] = $posts[14];    $_POST['left8'] = $posts[15];    $_POST['left9'] = $posts[16];  
        $_POST['right6'] = $posts[17];    $_POST['right7'] = $posts[18];    $_POST['right8'] = $posts[19];    $_POST['right9'] = $posts[20];
        $_POST['blind1'] = $posts[21];    $_POST['blind2'] = $posts[22];    $_POST['blind3'] = $posts[23];    $_POST['bito1'] = $posts[24];  
        $_POST['bito2'] = $posts[25];    $_POST['bito3'] = $posts[26];    $_POST['hleft6'] = $posts[27];    $_POST['hleft7'] = $posts[28];
        $_POST['hleft8'] = $posts[29];    $_POST['hleft9'] = $posts[30];    $_POST['hright6'] = $posts[31];    $_POST['hright7'] = $posts[32];
        $_POST['hright8'] = $posts[33];    $_POST['hright9'] = $posts[34];    $_POST['tooth3'] = $posts[35];    $_POST['tooth4'] = $posts[36];  
        $_POST['tooth5'] = $posts[37];    $_POST['tooth6'] = $posts[38];    $_POST['fault3'] = $posts[39];    $_POST['fault4'] = $posts[40];
        $_POST['fault5'] = $posts[41];    $_POST['fault6'] = $posts[42];   $_POST['weight6'] = $posts[43];     $_POST['weight7'] = $posts[44];
        $_POST['weight8'] = $posts[45];     $_POST['weight9'] = $posts[46];     $_POST['height6'] = $posts[47];     $_POST['height7'] = $posts[48];
        $_POST['height8'] = $posts[49];     $_POST['height9'] = $posts[50];     $_POST['develop6'] = $posts[51];    $_POST['develop7'] = $posts[52];
        $_POST['develop8'] = $posts[53];     $_POST['develop9'] = $posts[54];     $_POST['heart6'] = $posts[55];    $_POST['heart7'] = $posts[56];
        $_POST['heart8'] = $posts[57];     $_POST['heart9'] = $posts[58];     $_POST['joint6'] = $posts[59];    $_POST['joint7'] = $posts[60];
        $_POST['joint8'] = $posts[61];     $_POST['joint9'] = $posts[62];     $_POST['disease6'] = $posts[63];    $_POST['disease7'] = $posts[64];
        $_POST['disease8'] = $posts[65];     $_POST['disease9'] = $posts[66];     $_POST['adisease6'] = $posts[67];    $_POST['adisease7'] = $posts[68];
        $_POST['adisease8'] = $posts[69];     $_POST['adisease9'] = $posts[70];     $_POST['bdisease6'] = $posts[71];    $_POST['bdisease7'] = $posts[72];
        $_POST['bdisease8'] = $posts[73];     $_POST['bdisease9'] = $posts[74];     $_POST['cdisease6'] = $posts[75];    $_POST['cdisease7'] = $posts[76];
        $_POST['cdisease8'] = $posts[77];     $_POST['cdisease9'] = $posts[78];     $_POST['ddisease6'] = $posts[79];    $_POST['ddisease7'] = $posts[80];
        $_POST['ddisease8'] = $posts[81];     $_POST['ddisease9'] = $posts[82];     $_POST['edisease6'] = $posts[83];    $_POST['edisease7'] = $posts[84];
        $_POST['edisease8'] = $posts[85];     $_POST['edisease9'] = $posts[86];     $_POST['fdisease6'] = $posts[87];    
        $_POST['fdisease7'] = $posts[88];$_POST['fdisease8'] = $posts[89];     $_POST['fdisease9'] = $posts[90];     $_POST['name6'] = $posts[91];    $_POST['name7'] = $posts[92];
        $_POST['name8'] = $posts[93];    $_POST['name9'] = $posts[94];     $_POST['position6'] = $posts[95];    $_POST['position7'] = $posts[96];
        $_POST['position8'] = $posts[97];     $_POST['position9'] = $posts[98];    
   
        unset($posts);
        $posts = array();
    }

}
?> 
  