<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "moh";

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

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}catch (Exception $ex){
    echo 'Error';
}

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

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `table9`(`id`,`date1`,`reason1`,`place1`,`result1`,`date2`,`reason2`,`place2`,`result2`,`date3`,`reason3`,
    `place3`,`result3`,`date4`,`reason4`,`place4`,`result4`,`date5`,`reason5`,`place5`,`result5`,
    `date6`,`reason6`,`place6`,`result6`,`date7`,`reason7`,`place7`,`result7`,`date8`,`reason8`,
    `place8`,`result8`,`date9`,`reason9`,`place9`,`result9`,`date10`,`reason10`,`place10`,
    `result10`,`date11`,`reason11`,`place11`,`result11`,`date12`,`reason12`,`place12`,`result12`,`date13`,
    `reason13`,`place13`,`result13`,`date14`,`reason14`,`place14`,`result14`,`date15`,`reason15`,`place15`,
    `result15`,`date16`,`reason16`,`place16`,`result16`,`date17`,`reason17`,`place17`,`result17`,`date18`,
    `reason18`,`place18`,`result18`,`date19`,`reason19`,`place19`,
    `result19`,`date20`,`reason20`,`place20`,`result20`) 
    VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]',
    '$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]',
    '$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]','$data[24]','$data[25]','$data[26]',
    '$data[27]','$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]','$data[34]','$data[35]',
    '$data[36]','$data[37]','$data[38]','$data[39]','$data[40]','$data[41]','$data[42]','$data[43]','$data[44]',
    '$data[45]','$data[46]','$data[47]','$data[48]','$data[49]','$data[50]','$data[51]','$data[52]','$data[53]',
    '$data[54]','$data[55]','$data[56]','$data[57]','$data[58]','$data[59]','$data[60]','$data[61]','$data[62]',
    '$data[63]','$data[64]','$data[65]','$data[66]','$data[67]','$data[68]','$data[69]','$data[70]','$data[71]',
    '$data[72]','$data[73]','$data[74]','$data[75]','$data[76]','$data[77]','$data[78]','$data[79]','$data[80]')";
    try{
        $insert_Result = mysqli_query($connect,$insert_Query);
        if($insert_Result){
            if(mysqli_affected_rows($connect) > 0){
                echo 'Data inserted'; 
            }else{
                echo 'Data not inserted';
            }
        }
    }catch (Exception $ex){
        echo 'Error Insert' .$ex->getMessage();
    }
}

//search

if(isset($_POST['search'])){
    $data = getPosts();
    $search_Query = "SELECT * FROM table9 WHERE id = $data[0]";
    $search_Result = mysqli_query($connect, $search_Query);

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
            echo 'No data for this id';
        }
    }else{
        echo 'Result Error';
    }
}

//delete
if(isset($_POST['delete'])){
    $data = getPosts();
    $delete_Query = "DELETE FROM `table9` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);

        if($delete_Result){
            if(mysqli_affected_rows($connect)>0){
               echo 'data deleted';
            }else{
                echo 'data not deleted';
            }
        }
    }catch (Exception $ex){
        echo 'Error Delete' .$ex->getMessage();
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
        $update_Result = mysqli_query($connect, $update_Query);

        if($update_Result){
            if(mysqli_affected_rows($connect)>0){
               echo 'data updated';
            }else{
                echo 'data not updated';
            }
        }
    }catch (Exception $ex){
        echo 'Error update' .$ex->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewpoint" content="width-device-width initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="cssClinic/newStyle.css">
    </head>
    <body>
        <form action="chdr3.php" method="post" >
            <div>
                <h3>Search NIC :</h3>
                <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="id" value="<?php echo $id;?>">
                <br><br>
                <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">
                <h3>යොමු කිරීම් - වගුව I</h3>
                
                <table style="width:100% ;margin-bottom: 50px;">
                    <tr>
                        <th>දිනය</th>
                        <th>යොමු කිරීමට හේතුව</th>
                        <th>යොමු කල ස්ථානය</th>
                        <th>ආපසු යොමු කිරීම/පසු විපරම්වල ප්‍රතිඵල</th>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date1" value="<?php echo $date1;?>"></td>
                        <td align="center"><textarea name="reason1" rows="2" style="width:100%" ><?php echo $reason1;?></textarea></td>
                        <td align="center"><textarea name="place1" rows="2" style="width:100%" ><?php echo $place1;?></textarea></td>
                        <td align="center"><textarea name="result1" rows="2" style="width:100%" ><?php echo $result1;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date2" value="<?php echo $date2;?>"></td>
                        <td align="center"><textarea name="reason2" rows="2" style="width:100%" ><?php echo $reason2;?></textarea></td>
                        <td align="center"><textarea name="place2" rows="2" style="width:100%" ><?php echo $place2;?></textarea></td>
                        <td align="center"><textarea name="result2" rows="2" style="width:100%" ><?php echo $result2;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date3" value="<?php echo $date3;?>"></td>
                        <td align="center"><textarea name="reason3" rows="2" style="width:100%" ><?php echo $reason3;?></textarea></td>
                        <td align="center"><textarea name="place3" rows="2" style="width:100%" ><?php echo $place3;?></textarea></td>
                        <td align="center"><textarea name="result3" rows="2" style="width:100%" ><?php echo $result3;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date4" value="<?php echo $date4;?>"></td>
                        <td align="center"><textarea name="reason4" rows="2" style="width:100%" ><?php echo $reason4;?></textarea></td>
                        <td align="center"><textarea name="place4" rows="2" style="width:100%" ><?php echo $place4;?></textarea></td>
                        <td align="center"><textarea name="result4" rows="2" style="width:100%" ><?php echo $result4;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date5" value="<?php echo $date5;?>"></td>
                        <td align="center"><textarea name="reason5" rows="2" style="width:100%" ><?php echo $reason5;?></textarea></td>
                        <td align="center"><textarea name="place5" rows="2" style="width:100%" ><?php echo $place5;?></textarea></td>
                        <td align="center"><textarea name="result5" rows="2" style="width:100%" ><?php echo $result5;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date6" value="<?php echo $date6;?>"></td>
                        <td align="center"><textarea name="reason6" rows="2" style="width:100%" ><?php echo $reason6;?></textarea></td>
                        <td align="center"><textarea name="place6" rows="2" style="width:100%" ><?php echo $place6;?></textarea></td>
                        <td align="center"><textarea name="result6" rows="2" style="width:100%" ><?php echo $result6;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date7" value="<?php echo $date7;?>"></td>
                        <td align="center"><textarea name="reason7" rows="2" style="width:100%" ><?php echo $reason7;?></textarea></td>
                        <td align="center"><textarea name="place7" rows="2" style="width:100%" ><?php echo $place7;?></textarea></td>
                        <td align="center"><textarea name="result7" rows="2" style="width:100%" ><?php echo $result7;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date8" value="<?php echo $date8;?>"></td>
                        <td align="center"><textarea name="reason8" rows="2" style="width:100%" ><?php echo $reason8;?></textarea></td>
                        <td align="center"><textarea name="place8" rows="2" style="width:100%" ><?php echo $place8;?></textarea></td>
                        <td align="center"><textarea name="result8" rows="2" style="width:100%" ><?php echo $result8;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date9" value="<?php echo $date9;?>"></td>
                        <td align="center"><textarea name="reason9" rows="2" style="width:100%" ><?php echo $reason9;?></textarea></td>
                        <td align="center"><textarea name="place9" rows="2" style="width:100%" ><?php echo $place9;?></textarea></td>
                        <td align="center"><textarea name="result9" rows="2" style="width:100%" ><?php echo $result9;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date10" value="<?php echo $date10;?>"></td>
                        <td align="center"><textarea name="reason10" rows="2" style="width:100%" ><?php echo $reason10;?></textarea></td>
                        <td align="center"><textarea name="place10" rows="2" style="width:100%" ><?php echo $place10;?></textarea></td>
                        <td align="center"><textarea name="result10" rows="2" style="width:100%" ><?php echo $result10;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date11" value="<?php echo $date11;?>"></td>
                        <td align="center"><textarea name="reason11" rows="2" style="width:100%" ><?php echo $reason11;?></textarea></td>
                        <td align="center"><textarea name="place11" rows="2" style="width:100%" ><?php echo $place11;?></textarea></td>
                        <td align="center"><textarea name="result11" rows="2" style="width:100%" ><?php echo $result11;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date12" value="<?php echo $date12;?>"></td>
                        <td align="center"><textarea name="reason12" rows="2" style="width:100%" ><?php echo $reason12;?></textarea></td>
                        <td align="center"><textarea name="place12" rows="2" style="width:100%" ><?php echo $place12;?></textarea></td>
                        <td align="center"><textarea name="result12" rows="2" style="width:100%" ><?php echo $result12;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date13" value="<?php echo $date13;?>"></td>
                        <td align="center"><textarea name="reason13" rows="2" style="width:100%" ><?php echo $reason13;?></textarea></td>
                        <td align="center"><textarea name="place13" rows="2" style="width:100%" ><?php echo $place13;?></textarea></td>
                        <td align="center"><textarea name="result13" rows="2" style="width:100%" ><?php echo $result13;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date14" value="<?php echo $date14;?>"></td>
                        <td align="center"><textarea name="reason14" rows="2" style="width:100%" ><?php echo $reason14;?></textarea></td>
                        <td align="center"><textarea name="place14" rows="2" style="width:100%" ><?php echo $place14;?></textarea></td>
                        <td align="center"><textarea name="result14" rows="2" style="width:100%" ><?php echo $result14;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date15" value="<?php echo $date15;?>"></td>
                        <td align="center"><textarea name="reason15" rows="2" style="width:100%" ><?php echo $reason15;?></textarea></td>
                        <td align="center"><textarea name="place15" rows="2" style="width:100%" ><?php echo $place15;?></textarea></td>
                        <td align="center"><textarea name="result15" rows="2" style="width:100%" ><?php echo $result15;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date16" value="<?php echo $date16;?>"></td>
                        <td align="center"><textarea name="reason16" rows="2" style="width:100%" ><?php echo $reason16;?></textarea></td>
                        <td align="center"><textarea name="place16" rows="2" style="width:100%" ><?php echo $place16;?></textarea></td>
                        <td align="center"><textarea name="result16" rows="2" style="width:100%" ><?php echo $result16;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date17" value="<?php echo $date17;?>"></td>
                        <td align="center"><textarea name="reason17" rows="2" style="width:100%" ><?php echo $reason17;?></textarea></td>
                        <td align="center"><textarea name="place17" rows="2" style="width:100%" ><?php echo $place17;?></textarea></td>
                        <td align="center"><textarea name="result17" rows="2" style="width:100%" ><?php echo $result17;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date18" value="<?php echo $date18;?>"></td>
                        <td align="center"><textarea name="reason18" rows="2" style="width:100%" ><?php echo $reason18;?></textarea></td>
                        <td align="center"><textarea name="place18" rows="2" style="width:100%" ><?php echo $place18;?></textarea></td>
                        <td align="center"><textarea name="result18" rows="2" style="width:100%" ><?php echo $result18;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date19" value="<?php echo $date19;?>"></td>
                        <td align="center"><textarea name="reason19" rows="2" style="width:100%" ><?php echo $reason19;?></textarea></td>
                        <td align="center"><textarea name="place19" rows="2" style="width:100%" ><?php echo $place19;?></textarea></td>
                        <td align="center"><textarea name="result19" rows="2" style="width:100%" ><?php echo $result19;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type ="date" name="date20" value="<?php echo $date20;?>"></td>
                        <td align="center"><textarea name="reason20" rows="2" style="width:100%" ><?php echo $reason20;?></textarea></td>
                        <td align="center"><textarea name="place20" rows="2" style="width:100%" ><?php echo $place20;?></textarea></td>
                        <td align="center"><textarea name="result20" rows="2" style="width:100%" ><?php echo $result20;?></textarea></td>
                    </tr>
                </table>
                <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">
            </div>
        </form>
    </body>
</html>
