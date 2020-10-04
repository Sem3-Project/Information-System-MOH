<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Child.php';
    include '../controllers/childDetails2.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

   

   $id = $_POST['id'];
    $dat1 = $_POST['dat1'];
    $dat2 = $_POST['dat2'];
    $dat3 = $_POST['dat3'];
    $dat4 = $_POST['dat4'];
    $scolor1 =$_POST['scolor1'];  
    $scolor2 =$_POST['scolor2'];  
    $scolor3 =$_POST['scolor3'];  
    $scolor4 =$_POST['scolor4'];  
    $eye1 =$_POST['eye1'];
    $eye2 =$_POST['eye2'];
    $eye3 =$_POST['eye3'];
    $eye4 =$_POST['eye4'];
    $sc1 = $_POST['sc1'];  
    $sc2 = $_POST['sc2'];   
    $sc3 = $_POST['sc3'];   
    $sc4 = $_POST['sc4'];   
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];
    $m4 = $_POST['m4'];
    $pos1 = $_POST['pos1']; 
    $pos2 = $_POST['pos2']; 
    $pos3 = $_POST['pos3']; 
    $pos4 = $_POST['pos4'];           
    $rel1 = $_POST['rel1'];    
    $rel2 = $_POST['rel2'];        
    $rel3 = $_POST['rel3'];
    $rel4 = $_POST['rel4'];        
    $other1 = $_POST['other1'];
    $other2 = $_POST['other2'];
    $other3 = $_POST['other3'];
    $other4 = $_POST['other4'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];               $date3 = $_POST['date3'];             $date4 = $_POST['date4'];
    $date5 = $_POST['date5'];               $date6 = $_POST['date6'];             $date7 = $_POST['date7'];
    $date8 = $_POST['date8'];               $date9 = $_POST['date9'];             $date10 = $_POST['date10'];
    $date11 = $_POST['date11'];               $date12 = $_POST['date12'];             $date13 = $_POST['date13'];
    $date14 = $_POST['date14'];               $date15 = $_POST['date15'];             $date16 = $_POST['date16'];
    $date17 = $_POST['date17'];               $date18 = $_POST['date18'];             $date19 = $_POST['date19'];
    $date20 = $_POST['date20'];              

   $tempinves = new ChildDetail2();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $chdetail2 = new ChildDetail2();
      
        $data = array("id"=>$id, "dat1"=>$dat1, "dat2"=>$dat2, "dat3"=>$dat3, "dat4"=>$dat4, "scolor1"=>$scolor1, "scolor2"=>$scolor2,"scolor3"=>$scolor3,"scolor4"=>$scolor4,
                    "eye1"=>$eye1,"eye2"=>$eye2,"eye3"=>$eye3,"eye4"=>$eye4,"sc1"=>$sc1,"sc2"=>$sc2,"sc3"=>$sc3,"sc4"=>$sc4,
                    "m1"=>$m1,"m2"=>$m2,"m3"=>$m3,"m4"=>$m4,"pos1"=>$pos1,"pos2"=>$pos2,"pos3"=>$pos3,
                    "pos4"=>$pos4,"rel1"=>$rel1,"rel2"=>$rel2,"rel3"=>$rel3,"rel4"=>$rel4,"other1"=>$other1,
                    "other2"=>$other2,"other3"=>$other3,"other4"=>$other4,"date1"=>$date1,"date2"=>$date2,"date3"=>$date3,
                    "date4"=>$date4,"date5"=>$date5,"date6"=>$date6,"date7"=>$date7,"date8"=>$date8, "date9"=>$date9,
                    "date10"=>$date10,"date11"=>$date11,"date12"=>$date12,"date13"=>$date13,"date14"=>$date14, "date15"=>$date15,
                    "date16"=>$date16,"date17"=>$date17,"date18"=>$date18,"date19"=>$date19,"date20"=>$date20);
        $chdetail2->bind($data);
        $chdetail2->update($dbObj);
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
        $chdetail2 = new table();
        $search_Query = "SELECT * FROM childdata2 WHERE id = '$id'";
    
        $search_Result = $chdetail2->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }
        $_POST['dat1'] = $posts[1];    $_POST['dat2'] = $posts[2];    $_POST['dat3'] = $posts[3];    $_POST['dat4'] = $posts[4];  
        $_POST['scolor1'] = $posts[5];    $_POST['solor2'] = $posts[6];    $_POST['scolor3'] = $posts[7];    $_POST['scolor4'] = $posts[8];
        $_POST['eye1'] = $posts[9];    $_POST['eye2'] = $posts[10];    $_POST['eye3'] = $posts[11];    $_POST['eye4'] = $posts[12];
        $_POST['sc1'] = $posts[13];    $_POST['sc2'] = $posts[14];    $_POST['sc3'] = $posts[15];    $_POST['sc4'] = $posts[16];  
        $_POST['m1'] = $posts[17];    $_POST['m2'] = $posts[18];    $_POST['m3'] = $posts[19];    $_POST['m4'] = $posts[20];
        $_POST['pos1'] = $posts[21];    $_POST['pos2'] = $posts[22];    $_POST['pos3'] = $posts[23];    $_POST['pos4'] = $posts[24];  
        $_POST['rel1'] = $posts[25];    $_POST['rel2'] = $posts[26];    $_POST['rel3'] = $posts[27];    $_POST['rel4'] = $posts[28];
        $_POST['other1'] = $posts[29];    $_POST['other2'] = $posts[30];    $_POST['other3'] = $posts[31];    $_POST['other4'] = $posts[32];
        $_POST['date1'] = $posts[33];    $_POST['date2'] = $posts[34];    $_POST['date3'] = $posts[35];    $_POST['date4'] = $posts[36];  
        $_POST['date5'] = $posts[37];    $_POST['date6'] = $posts[38];    $_POST['date7'] = $posts[39];    $_POST['date8'] = $posts[40];
        $_POST['date9'] = $posts[41];    $_POST['date10'] = $posts[42];    $_POST['date11'] = $posts[43];    $_POST['date12'] = $posts[44];
        $_POST['date13'] = $posts[45];    $_POST['date14'] = $posts[46];    $_POST['date15'] = $posts[47];    $_POST['date16'] = $posts[48];
        $_POST['date17'] = $posts[49];    $_POST['date18'] = $posts[50];    $_POST['date19'] = $posts[51];    $_POST['date20'] = $posts[52];
            


        unset($posts);
        $posts = array();
    }

}
?> 
  