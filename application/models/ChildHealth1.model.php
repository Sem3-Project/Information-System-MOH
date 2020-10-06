<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Child.php';
    include '../controllers/ChildHealth1.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){
    $id= $_POST['id']; $day1 = $_POST['day1']; $day2 = $_POST['day2']; $day3 = $_POST['day3'];$day4 = $_POST['day4'];$day5 = $_POST['day5']; 
    $attack1 = $_POST['attack1']; $attack2 = $_POST['attack2']; $attack3 = $_POST['attack3']; $attack4 = $_POST['attack4']; 
    $attack5 = $_POST['attack5']; $eye1 = $_POST['eye1']; $eye2 = $_POST['eye2'];$eye3 = $_POST['eye3']; $eye4 = $_POST['eye4'];
    $eye5 = $_POST['eye5'];$left1 = $_POST['left1']; $left2 = $_POST['left2']; $left3 = $_POST['left3']; 
    $left4 = $_POST['left4']; $left5 = $_POST['left5'];$right1 = $_POST['right1']; $right2 = $_POST['right2']; $right3 = $_POST['right3'];
    $right4 = $_POST['right4']; $right5 = $_POST['right5']; $hleft1 = $_POST['hleft1']; $hleft2 = $_POST['hleft2']; 
    $hleft3 = $_POST['hleft3']; $hleft4 = $_POST['hleft4']; $hleft5 = $_POST['hleft5']; $hright1 = $_POST['hright1']; $hright2 = $_POST['hright2']; 
    $hright3 = $_POST['hright3']; $hright4 = $_POST['hright4']; $hright5 = $_POST['hright5']; $tooth1 = $_POST['tooth1']; 
    $tooth2 = $_POST['tooth2']; $fault1 = $_POST['fault1']; $fault2 = $_POST['fault2']; $weight1 = $_POST['weight1']; $weight2 = $_POST['weight2']; 
    $weight3 = $_POST['weight3']; $weight4 = $_POST['weight4']; $weight5 = $_POST['weight5']; $height1 = $_POST['height1']; 
    $height2 = $_POST['height2']; $height3 = $_POST['height3']; $height4 = $_POST['height4']; $height5 = $_POST['height5']; $develop1 = $_POST['develop1']; 
    $develop2 = $_POST['develop2']; $develop3 = $_POST['develop3']; $develop4 = $_POST['develop4']; $develop5 = $_POST['develop5'];
    $heart1 = $_POST['heart1']; $heart2= $_POST['heart2']; $heart3 = $_POST['heart3']; $heart4 = $_POST['heart4']; $heart5 = $_POST['heart5']; 
    $joint1 = $_POST['joint1']; $joint2 = $_POST['joint2']; $joint3 = $_POST['joint3']; $joint4 = $_POST['joint4']; 
    $joint5 = $_POST['joint5']; $disease1 = $_POST['disease1']; $disease2= $_POST['disease2'];$disease3 = $_POST['disease3'];$disease4 = $_POST['disease4']; 
    $disease5 = $_POST['disease5']; $adisease0 = $_POST['adisease0']; $adisease1 = $_POST['adisease1']; $adisease2 = $_POST['adisease2']; 
    $adisease3 = $_POST['adisease3']; $adisease4 = $_POST['adisease4']; $adisease5 = $_POST['adisease5'];$bdisease0 = $_POST['bdisease0'];$bdisease1 = $_POST['bdisease1']; 
    $bdisease2 = $_POST['bdisease2']; $bdisease3 = $_POST['bdisease3']; $bdisease4 = $_POST['bdisease4']; $bdisease5 = $_POST['bdisease5']; 
    $cdisease0= $_POST['cdisease0']; $cdisease1 = $_POST['cdisease1']; $cdisease2 = $_POST['cdisease2'];$cdisease3 = $_POST['cdisease3'];$cdisease4 = $_POST['cdisease4']; 
    $cdisease5 = $_POST['cdisease5']; $ddisease0 = $_POST['ddisease0']; $ddisease1 = $_POST['ddisease1']; $ddisease2 = $_POST['ddisease2']; 
    $ddisease3 = $_POST['ddisease3']; $ddisease4 = $_POST['ddisease4']; $ddisease5 = $_POST['ddisease5'];$edisease0 = $_POST['edisease0'];$edisease1 = $_POST['edisease1']; 
    $edisease2 = $_POST['edisease2']; $edisease3 = $_POST['edisease3']; $edisease4= $_POST['edisease4']; $edisease5 = $_POST['edisease5']; 
    $fdisease0 = $_POST['fdisease0']; $fdisease1= $_POST['fdisease1']; $fdisease2 = $_POST['fdisease2'];$fdisease3 = $_POST['fdisease3'];$fdisease4 = $_POST['fdisease4']; 
    $fdisease5 = $_POST['fdisease5']; $name1 = $_POST['name1']; $name2 = $_POST['name2']; $name3 = $_POST['name3']; 
    $name4 = $_POST['name4']; $name5= $_POST['name5']; $position1 = $_POST['position1'];$position2= $_POST['position2'];$position3 = $_POST['position3']; 
    $position4 = $_POST['position4']; $position5 = $_POST['position5']; 

  // $tblName = 'table5';

   $tempinves = new ChildHealth1();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $inves = new ChildHealth1();
      
        $data = array("id" =>$id, "day1" =>$day1, "day2" =>$day2, "day3" =>$day3,"day4" =>$day4,"day5" =>$day5, 
                        "attack1" =>$attack1, "attack2" =>$attack2, "attack3" =>$attack3, "attack4" =>$attack4, 
                        "attack5" =>$attack5, "eye1" =>$eye1, "eye2" =>$eye2,"eye3" =>$eye3, "eye4" =>$eye4,
                        "eye5" =>$eye5,"left1" =>$left1, "left2" =>$left2, "left3" =>$left3, 
                        "left4" =>$left4, "left5" =>$left5,"right1" =>$right1, "right2" =>$right2, "right3" =>$right3,
                        "right4" =>$right4, "right5" =>$right5, "hleft1" =>$hleft1, "hleft2" =>$hleft2, 
                        "hleft3" =>$hleft3, "hleft4" =>$hleft4, "hleft5" =>$hleft5, "hright1" =>$hright1, "hright2" =>$hright2, 
                        "hright3" =>$hright3, "hright4" =>$hright4, "hright5" =>$hright5, "tooth1" =>$tooth1, 
                        "tooth2" =>$tooth2, "fault1" =>$fault1, "fault2" =>$fault2, "weight1" =>$weight1, "weight2" =>$weight2, 
                        "weight3" =>$weight3, "weight4" =>$weight4, "weight5" =>$weight5, "height1" =>$height1, 
                        "height2" =>$height2, "height3" =>$height3, "height4" =>$height4, "height5" =>$height5, "develop1" =>$develop1, 
                        "develop2" =>$develop2, "develop3" =>$develop3, "develop4" =>$develop4, "develop5" =>$develop5,
                        "heart1" =>$heart1, "heart2"=>$heart2, "heart3" =>$heart3, "heart4" =>$heart4, "heart5" =>$heart5, 
                        "joint1" =>$joint1, "joint2" =>$joint2, "joint3" =>$joint3, "joint4" =>$joint4, 
                        "joint5" =>$joint5, "disease1" =>$disease1, "disease2"=>$disease2,"disease3" =>$disease3,"disease4" =>$disease4, 
                        "disease5" =>$disease5, "adisease0" =>$adisease0, "adisease1" =>$adisease1, "adisease2" =>$adisease2, 
                        "adisease3" =>$adisease3, "adisease4" =>$adisease4, "adisease5" =>$adisease5,"bdisease0" =>$bdisease0,"bdisease1" =>$bdisease1, 
                        "bdisease2" =>$bdisease2, "bdisease3" =>$bdisease3, "bdisease4" =>$bdisease4, "bdisease5" =>$bdisease5, 
                        "cdisease0" =>$cdisease0, "cdisease1" =>$cdisease1, "cdisease2" =>$cdisease2,"cdisease3" =>$cdisease3,"cdisease4" =>$cdisease4, 
                        "cdisease5" =>$cdisease5, "ddisease0" =>$ddisease0, "ddisease1" =>$ddisease1, "ddisease2" =>$ddisease2, 
                        "ddisease3" =>$ddisease3, "ddisease4" =>$ddisease4, "ddisease5" =>$ddisease5,"edisease0" =>$edisease0,"edisease1" =>$edisease1, 
                        "edisease2" =>$edisease2, "edisease3" =>$edisease3, "edisease4"=>$edisease4, "edisease5" =>$edisease5, 
                        "fdisease0" =>$fdisease0, "fdisease1"=>$fdisease1, "fdisease2" =>$fdisease2,"fdisease3" =>$fdisease3,"fdisease4" =>$fdisease4, 
                        "fdisease5" =>$fdisease5, "name1" =>$name1, "name2" =>$name2, "name3" =>$name3, 
                        "name4" =>$name4, "name5"=>$name5, "position1" =>$position1,"position2"=>$position2,"position3" =>$position3, 
                        "position4" =>$position4, "position5" =>$position5);
            
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
        $childHealth1 = new table();
        $search_Query = "SELECT * FROM table5 WHERE id = '$id'";
    
        $search_Result = $childHealth1->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }

        $_POST['day1'] = $posts[1];    $_POST['day2'] = $posts[2];    $_POST['day3'] = $posts[3];    $_POST['day4'] = $posts[4];  
        $_POST['day5'] = $posts[5];    $_POST['attack1'] = $posts[6];    $_POST['attack2'] = $posts[7];    $_POST['attack3'] = $posts[8];
        $_POST['attack4'] = $posts[9];    $_POST['attack5'] = $posts[10];    $_POST['eye1'] = $posts[11];    $_POST['eye2'] = $posts[12];
        $_POST['eye3'] = $posts[13];    $_POST['eye4'] = $posts[14];    $_POST['eye5'] = $posts[15];    $_POST['left1'] = $posts[16];  
        $_POST['left2'] = $posts[17];    $_POST['left3'] = $posts[18];    $_POST['left4'] = $posts[19];    $_POST['left5'] = $posts[20];
        $_POST['right1'] = $posts[21];    $_POST['right2'] = $posts[22];    $_POST['right3'] = $posts[23];    $_POST['right4'] = $posts[24];  
        $_POST['right5'] = $posts[25];    $_POST['hleft1'] = $posts[26];    $_POST['hleft2'] = $posts[27];    $_POST['hleft3'] = $posts[28];
        $_POST['hleft4'] = $posts[29];    $_POST['hleft5'] = $posts[30];    $_POST['hright1'] = $posts[31];    $_POST['hright2'] = $posts[32];
        $_POST['hright3'] = $posts[33];    $_POST['hright4'] = $posts[34];    $_POST['hright5'] = $posts[35];    $_POST['tooth1'] = $posts[36];  
        $_POST['tooth2'] = $posts[37];    $_POST['fault1'] = $posts[38];    $_POST['fault2'] = $posts[39];    $_POST['weight1'] = $posts[40];
        $_POST['weight2'] = $posts[41];$_POST['weight3'] = $posts[42];   $_POST['weight4'] = $posts[43];     $_POST['weight5'] = $posts[44];
        $_POST['height1'] = $posts[45];     $_POST['height2'] = $posts[46];     $_POST['height3'] = $posts[47];     $_POST['height4'] = $posts[48];
        $_POST['height5'] = $posts[49];     $_POST['develop1'] = $posts[50];     $_POST['develop2'] = $posts[51];    $_POST['develop3'] = $posts[52];
        $_POST['develop4'] = $posts[53];     $_POST['develop5'] = $posts[54];     $_POST['heart1'] = $posts[55];    $_POST['heart2'] = $posts[56];
        $_POST['heart3'] = $posts[57];     $_POST['heart4'] = $posts[58];     $_POST['heart5'] = $posts[59];    $_POST['joint1'] = $posts[60];
        $_POST['joint2'] = $posts[61];     $_POST['joint3'] = $posts[62];     $_POST['joint4'] = $posts[63];    $_POST['joint5'] = $posts[64];
        $_POST['disease1'] = $posts[65];     $_POST['disease2'] = $posts[66];     $_POST['disease3'] = $posts[67];    $_POST['disease4'] = $posts[68];
        $_POST['disease5'] = $posts[69];     $_POST['adisease0'] = $posts[70];     $_POST['adisease1'] = $posts[71];    $_POST['adisease2'] = $posts[72];
        $_POST['adisease3'] = $posts[73];     $_POST['adisease4'] = $posts[74];     $_POST['adisease5'] = $posts[75];    $_POST['bdisease0'] = $posts[76];
        $_POST['bdisease1'] = $posts[77];     $_POST['bdisease2'] = $posts[78];     $_POST['bdisease3'] = $posts[79];    $_POST['bdisease4'] = $posts[80];
        $_POST['bdisease5'] = $posts[81];     $_POST['cdisease0'] = $posts[82];     $_POST['cdisease1'] = $posts[83];    $_POST['cdisease2'] = $posts[84];
        $_POST['cdisease3'] = $posts[85];     $_POST['cdisease4'] = $posts[86];     $_POST['cdisease5'] = $posts[87];    
        $_POST['ddisease0'] = $posts[88];$_POST['ddisease1'] = $posts[89];     $_POST['ddisease2'] = $posts[90];     $_POST['ddisease3'] = $posts[91];    $_POST['ddisease4'] = $posts[92];
        $_POST['ddisease5'] = $posts[93];    $_POST['edisease0'] = $posts[94];     $_POST['edisease1'] = $posts[95];    $_POST['edisease2'] = $posts[96];
        $_POST['edisease3'] = $posts[97];     $_POST['edisease4'] = $posts[98];     $_POST['edisease5'] = $posts[99];    $_POST['fdisease0'] = $posts[100];
        $_POST['fdisease1'] = $posts[101];     $_POST['fdisease2'] = $posts[102];     $_POST['fdisease3'] = $posts[103];    $_POST['fdisease4'] = $posts[104];
        $_POST['fdisease5'] = $posts[105];    $_POST['name1'] = $posts[106];     $_POST['name2'] = $posts[107];     $_POST['name3'] = $posts[108];    $_POST['name4'] = $posts[109];
        $_POST['name5'] = $posts[110]; $_POST['position1'] = $posts[111];     $_POST['position2'] = $posts[112];     $_POST['position3'] = $posts[113];    $_POST['position4'] = $posts[114];
        $_POST['position5'] = $posts[115];

        unset($posts);
        $posts = array();
    }

}
?> 
  