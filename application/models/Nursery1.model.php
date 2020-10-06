<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Child.php';
    include '../controllers/Nursery1.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id= $_POST['id']; $date1 = $_POST['date1']; $date2 = $_POST['date2']; $date3 = $_POST['date3'];$age1 = $_POST['age1'];$age2 = $_POST['age2']; 
    $age3 = $_POST['age3']; $teacher1 = $_POST['teacher1']; $teacher2 = $_POST['teacher2']; $teacher3 = $_POST['teacher3']; 
    $attendance1 = $_POST['attendance1']; $attendance2 = $_POST['attendance2']; $attendance3 = $_POST['attendance3'];$house1 = $_POST['house1']; $house2 = $_POST['house2'];
    $house3 = $_POST['house3'];$clean1 = $_POST['clean1']; $clean2 = $_POST['clean2']; $clean3 = $_POST['clean3']; 
    $activity1 = $_POST['activity1']; $activity2 = $_POST['activity2'];$activity3 = $_POST['activity3']; $behaviour1 = $_POST['behaviour1']; $behaviour2 = $_POST['behaviour2'];
    $behaviour3 = $_POST['behaviour3']; $speak1 = $_POST['speak1']; $speak2 = $_POST['speak2']; $speak3 = $_POST['speak3']; 
    $hearing1 = $_POST['hearing1']; $hearing2 = $_POST['hearing2']; $hearing3 = $_POST['hearing3']; $vees1 = $_POST['vees1']; $vees2 = $_POST['vees2']; 
    $vees3 = $_POST['vees3']; $fit1 = $_POST['fit1']; $fit2 = $_POST['fit2']; $fit3 = $_POST['fit3']; 
    $mental1 = $_POST['mental1']; $mental2 = $_POST['mental2']; $mental3 = $_POST['mental3']; $weight1 = $_POST['weight1']; $weight2 = $_POST['weight2']; 
    $weight3 = $_POST['weight3']; $type1 = $_POST['type1']; $type2 = $_POST['type2']; $type3 = $_POST['type3']; 
    $interrupt1 = $_POST['interrupt1']; $interrupt2 = $_POST['interrupt2']; $interrupt3 = $_POST['interrupt3']; $height1 = $_POST['height1']; $height2 = $_POST['height2']; 
    $height3 = $_POST['height3']; $sheight1 = $_POST['sheight1']; $sheight2 = $_POST['sheight2']; $sheight3 = $_POST['sheight3'];
    $night1 = $_POST['night1']; $night2= $_POST['night2']; $night3 = $_POST['night3']; $bito1 = $_POST['bito1']; $bito2 = $_POST['bito2']; 
    $bito3 = $_POST['bito3']; $ni1 = $_POST['ni1']; $ni2 = $_POST['ni2']; $ni3 = $_POST['ni3']; 
    $louse1 = $_POST['louse1']; $louse2 = $_POST['louse2']; $louse3= $_POST['louse3'];

  // $tblName = 'table7';

   $tempinves = new Nursery1();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $inves = new Nursery1();
      
        $data = array(

            "id" =>$id, "date1" =>$date1, "date2" =>$date2, "date3" =>$date3,"age1" =>$age1,"age2" =>$age2, 
            "age3" =>$age3, "teacher1" =>$teacher1, "teacher2" =>$teacher2, "teacher3" =>$teacher3, 
            "attendance1" =>$attendance1, "attendance2" =>$attendance2, "attendance3" =>$attendance3,"house1" =>$house1, "house2" =>$house2,
            "house3" =>$house3,"clean1" =>$clean1, "clean2" =>$clean2, "clean3" =>$clean3, 
            "activity1" =>$activity1, "activity2" =>$activity2,"activity3" =>$activity3, "behaviour1" =>$behaviour1, "behaviour2" =>$behaviour2,
            "behaviour3" =>$behaviour3, "speak1" =>$speak1, "speak2" =>$speak2, "speak3" =>$speak3, 
            "hearing1" =>$hearing1, "hearing2" =>$hearing2, "hearing3" =>$hearing3, "vees1" =>$vees1, "vees2" =>$vees2, 
            "vees3" =>$vees3, "fit1" =>$fit1, "fit2" =>$fit2, "fit3" =>$fit3, 
            "mental1" =>$mental1, "mental2" =>$mental2, "mental3" =>$mental3, "weight1" =>$weight1, "weight2" =>$weight2, 
            "weight3" =>$weight3, "type1" =>$type1, "type2" =>$type2, "type3" =>$type3, 
            "interrupt1" =>$interrupt1, "interrupt2" =>$interrupt2, "interrupt3" =>$interrupt3, "height1" =>$height1, "height2" =>$height2, 
            "height3" =>$height3, "sheight1" =>$sheight1, "sheight2" =>$sheight2, "sheight3" =>$sheight3,
            "night1" =>$night1, "night2" =>$night2, "night3" =>$night3, "bito1" =>$bito1, "bito2" =>$bito2, 
            "bito3" =>$bito3, "ni1" =>$ni1, "ni2" =>$ni2, "ni3" =>$ni3, 
            "louse1" =>$louse1, "louse2" =>$louse2, "louse3" =>$louse3);
            
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
        $nursery1 = new table();
        $search_Query = "SELECT * FROM table7 WHERE id = '$id'";
    
        $search_Result = $nursery1->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }

        $_POST['date1'] = $posts[1];    $_POST['date2'] = $posts[2];    $_POST['date3'] = $posts[3];    $_POST['age1'] = $posts[4];  
        $_POST['age2'] = $posts[5];    $_POST['age3'] = $posts[6];    $_POST['teacher1'] = $posts[7];    $_POST['teacher2'] = $posts[8];
        $_POST['teacher3'] = $posts[9];    $_POST['attendance1'] = $posts[10];    $_POST['attendance2'] = $posts[11];    $_POST['attendance3'] = $posts[12];
        $_POST['house1'] = $posts[13];    $_POST['house2'] = $posts[14];    $_POST['house3'] = $posts[15];    $_POST['clean1'] = $posts[16];  
        $_POST['clean2'] = $posts[17];    $_POST['clean3'] = $posts[18];    $_POST['activity1'] = $posts[19];    $_POST['activity2'] = $posts[20];
        $_POST['activity3'] = $posts[21];    $_POST['behaviour1'] = $posts[22];    $_POST['behaviour2'] = $posts[23];    $_POST['behaviour3'] = $posts[24];  
        $_POST['speak1'] = $posts[25];    $_POST['speak2'] = $posts[26];    $_POST['speak3'] = $posts[27];    $_POST['hearing1'] = $posts[28];
        $_POST['hearing2'] = $posts[29];    $_POST['hearing3'] = $posts[30];    $_POST['vees1'] = $posts[31];    $_POST['vees2'] = $posts[32];
        $_POST['vees3'] = $posts[33];    $_POST['fit1'] = $posts[34];    $_POST['fit2'] = $posts[35];    $_POST['fit3'] = $posts[36];  
        $_POST['mental1'] = $posts[37];    $_POST['mental2'] = $posts[38];    $_POST['mental3'] = $posts[39];    $_POST['weight1'] = $posts[40];
        $_POST['weight2'] = $posts[41];$_POST['weight3'] = $posts[42];   $_POST['type1'] = $posts[43];     $_POST['type2'] = $posts[44];
        $_POST['type3'] = $posts[45];     $_POST['interrupt1'] = $posts[46];     $_POST['interrupt2'] = $posts[47];     $_POST['interrupt3'] = $posts[48];
        $_POST['height1'] = $posts[49];     $_POST['height2'] = $posts[50];     $_POST['height3'] = $posts[51];    $_POST['sheight1'] = $posts[52];
        $_POST['sheight2'] = $posts[53];     $_POST['sheight3'] = $posts[54];     $_POST['night1'] = $posts[55];    $_POST['night2'] = $posts[56];
        $_POST['night3'] = $posts[57];     $_POST['bito1'] = $posts[58];     $_POST['bito2'] = $posts[59];    $_POST['bito3'] = $posts[60];
        $_POST['ni1'] = $posts[61];     $_POST['ni2'] = $posts[62];     $_POST['ni3'] = $posts[63];    $_POST['louse1'] = $posts[64];
        $_POST['louse2'] = $posts[65];     $_POST['louse3'] = $posts[66];     

        unset($posts);
        $posts = array();
    }

}
?> 
  