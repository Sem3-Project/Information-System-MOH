<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "moh";

$id=""; $lsquint1 = ""; $lsquint2 = ""; $lsquint3 = "";  $rsquint1 = ""; $rsquint2 = ""; $rsquint3 = ""; $lvision1 = ""; $lvision2 = ""; $lvision3 = ""; 
$rvision1 = ""; $rvision2 = ""; $rvision3 = ""; $lhearing1 = "";  $lhearing2 = ""; $lhearing3 = ""; $rhearing1 = ""; $rhearing2 = ""; $rhearing3 = ""; 
$speech1 = ""; $speech2 = ""; $speech3 = ""; $tooth1 = ""; $tooth2 = "";  $tooth3 = ""; $teeth1 = ""; $teeth2 = ""; $teeth3 = ""; 
$ynt1 = "";  $ynt2 = ""; $ynt3 = ""; $mark1 = ""; $mark2 = ""; $mark3 = "";$bone1 = ""; $bone2 = ""; $bone3 = ""; 
$heart1 = ""; $heart2 = ""; $heart3 = ""; $lungs1 = ""; $lungs2 = ""; $lungs3 = "";  $ovarious1 = ""; $ovarious2 = ""; $ovarious3 = ""; 
$ovarious4 = ""; $tvarious1  = ""; $tvarious2 = ""; $tvarious3 = ""; $tvarious4 = ""; $thvarious1 = ""; $thvarious2 = "";  $thvarious3 = ""; $thvarious4 = ""; 
$fvarious1 = ""; $fvarious2 = ""; $fvarious3 = ""; $fvarious4 = ""; $tname1 = ""; $tname2 = ""; $tname3 = ""; $tposition1 = "";  $tposition2 = ""; $tposition3 = ""; 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}catch (Exception $ex){
    echo 'Error';
}

function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id']; $posts[1] = $_POST['lsquint1']; $posts[2] = $_POST['lsquint2']; $posts[3] = $_POST['lsquint3'];$posts[4] = $_POST['rsquint1'];
    $posts[5] = $_POST['rsquint2']; $posts[6] = $_POST['rsquint3']; $posts[7] = $_POST['lvision1']; $posts[8] = $_POST['lvision2']; $posts[9] = $_POST['lvision3']; 
    
    $posts[10] = $_POST['rvision1']; $posts[11] = $_POST['rvision2']; $posts[12] = $_POST['rvision3'];$posts[13] = $_POST['lhearing1']; $posts[14] = $_POST['lhearing2']; 
    $posts[15] = $_POST['lhearing3'];$posts[16] = $_POST['rhearing1']; $posts[17] = $_POST['rhearing2']; $posts[18] = $_POST['rhearing3']; 
    
    $posts[19] = $_POST['speech1']; $posts[20] = $_POST['speech2'];$posts[21] = $_POST['speech3']; $posts[22] = $_POST['tooth1']; $posts[23] = $_POST['tooth2']; 
    $posts[24] = $_POST['tooth3']; $posts[25] = $_POST['teeth1']; $posts[26] = $_POST['teeth2']; $posts[27] = $_POST['teeth3']; 
    
    $posts[28] = $_POST['ynt1']; $posts[29] = $_POST['ynt2']; $posts[30] = $_POST['ynt3']; $posts[31] = $_POST['mark1']; $posts[32] = $_POST['mark2']; 
    $posts[33] = $_POST['mark3']; $posts[34] = $_POST['bone1']; $posts[35] = $_POST['bone2']; $posts[36] = $_POST['bone3']; 
    
    $posts[37] = $_POST['heart1']; $posts[38] = $_POST['heart2']; $posts[39] = $_POST['heart3']; $posts[40] = $_POST['lungs1']; $posts[41] = $_POST['lungs2']; 
    $posts[42] = $_POST['lungs3']; $posts[43] = $_POST['ovarious1']; $posts[44] = $_POST['ovarious2']; $posts[45] = $_POST['ovarious3']; 
    
    $posts[46] = $_POST['ovarious4']; $posts[47] = $_POST['tvarious1']; $posts[48] = $_POST['tvarious2']; $posts[49] = $_POST['tvarious3']; 
    $posts[50] = $_POST['tvarious4']; $posts[51] = $_POST['thvarious1']; $posts[52] = $_POST['thvarious2']; $posts[53] = $_POST['thvarious3']; 
    
    $posts[54] = $_POST['thvarious4'];$posts[55] = $_POST['fvarious1']; $posts[56] = $_POST['fvarious2']; $posts[57] = $_POST['fvarious3']; 
    $posts[58] = $_POST['fvarious4']; $posts[59] = $_POST['tname1']; $posts[60] = $_POST['tname2']; $posts[61] = $_POST['tname3']; $posts[62] = $_POST['tposition1']; 
    $posts[63] = $_POST['tposition2']; $posts[64] = $_POST['tposition3']; 
    
    return $posts;
}

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `table8`(`id`,`lsquint1`,`lsquint2`,`lsquint3`,`rsquint1`,`rsquint2`,`rsquint3`,`lvision1`,`lvision2`,`lvision3`,`rvision1`,
    `rvision2`,`rvision3`,`lhearing1`,`lhearing2`,`lhearing3`,`rhearing1`,`rhearing2`,`rhearing3`,`speech1`,`speech2`,
    `speech3`,`tooth1`,`tooth2`,`tooth3`,`teeth1`,`teeth2`,`teeth3`,`ynt1`,`ynt2`,`ynt3`,
    `mark1`,`mark2`,`mark3`,`bone1`,`bone2`,`bone3`,`heart1`,`heart2`,`heart3`,
    `lungs1`,`lungs2`,`lungs3`,`ovarious1`,`ovarious2`,`ovarious3`,`ovarious4`,`tvarious1`,`tvarious2`,`tvarious3`,
    `tvarious4`,`thvarious1`,`thvarious2`,`thvarious3`,`thvarious4`,`fvarious1`,`fvarious2`,`fvarious3`,`fvarious4`,`tname1`,
    `tname2`,`tname3`,`tposition1`,`tposition2`,`tposition3`) 
    VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]',
    '$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]',
    '$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]','$data[24]','$data[25]','$data[26]',
    '$data[27]','$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]','$data[34]','$data[35]',
    '$data[36]','$data[37]','$data[38]','$data[39]','$data[40]','$data[41]','$data[42]','$data[43]','$data[44]',
    '$data[45]','$data[46]','$data[47]','$data[48]','$data[49]','$data[50]','$data[51]','$data[52]','$data[53]',
    '$data[54]','$data[55]','$data[56]','$data[57]','$data[58]','$data[59]','$data[60]','$data[61]','$data[62]',
    '$data[63]','$data[64]')";
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
    $search_Query = "SELECT * FROM table8 WHERE id = $data[0]";
    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result){
        if(mysqli_num_rows($search_Result)){
            while ($row=mysqli_fetch_array($search_Result)){
                
                $id= $row['id']; $lsquint1 = $row['lsquint1']; $lsquint2 = $row['lsquint2']; $lsquint3 = $row['lsquint3'];$rsquint1 = $row['rsquint1'];$rsquint2 = $row['rsquint2']; 
                $rsquint3 = $row['rsquint3']; $lvision1 = $row['lvision1']; $lvision2 = $row['lvision2']; $lvision3 = $row['lvision3']; 
                $rvision1 = $row['rvision1']; $rvision2 = $row['rvision2']; $rvision3 = $row['rvision3'];$lhearing1 = $row['lhearing1']; $lhearing2 = $row['lhearing2'];
                $lhearing3 = $row['lhearing3'];$rhearing1 = $row['rhearing1']; $rhearing2 = $row['rhearing2']; $rhearing3 = $row['rhearing3']; 
                $speech1 = $row['speech1']; $speech2 = $row['speech2'];$speech3 = $row['speech3']; $tooth1 = $row['tooth1']; $tooth2 = $row['tooth2'];
                $tooth3 = $row['tooth3']; $teeth1 = $row['teeth1']; $teeth2 = $row['teeth2']; $teeth3 = $row['teeth3']; 
                $ynt1 = $row['ynt1']; $ynt2 = $row['ynt2']; $ynt3 = $row['ynt3']; $mark1 = $row['mark1']; $mark2 = $row['mark2']; 
                $mark3 = $row['mark3']; $bone1 = $row['bone1']; $bone2 = $row['bone2']; $bone3 = $row['bone3']; 
                $heart1 = $row['heart1']; $heart2 = $row['heart2']; $heart3 = $row['heart3']; $lungs1 = $row['lungs1']; $lungs2 = $row['lungs2']; 
                $lungs3 = $row['lungs3']; $ovarious1 = $row['ovarious1']; $ovarious2 = $row['ovarious2']; $ovarious3 = $row['ovarious3']; 
                $ovarious4 = $row['ovarious4']; $tvarious1 = $row['tvarious1']; $tvarious2 = $row['tvarious2']; $tvarious3 = $row['tvarious3']; $tvarious4 = $row['tvarious4']; 
                $thvarious1 = $row['thvarious1']; $thvarious2 = $row['thvarious2']; $thvarious3 = $row['thvarious3']; $thvarious4 = $row['thvarious4'];
                $fvarious1 = $row['fvarious1']; $fvarious2= $row['fvarious2']; $fvarious3 = $row['fvarious3']; $fvarious4 = $row['fvarious4']; $tname1 = $row['tname1']; 
                $tname2 = $row['tname2']; $tname3 = $row['tname3']; $tposition1 = $row['tposition1']; $tposition2 = $row['tposition2']; 
                $tposition3 = $row['tposition3']; 
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
    $delete_Query = "DELETE FROM `table8` WHERE `id` = $data[0]";
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
    $update_Query = "UPDATE `table8` SET `lsquint1`='$data[1]', `lsquint2`='$data[2]', `lsquint3`='$data[3]',`rsquint1`='$data[4]', `rsquint2`='$data[5]', 
    `rsquint3`='$data[6]',`lvision1`='$data[7]', `lvision2`='$data[8]', `lvision3`='$data[9]',
    `rvision1`='$data[10]', `rvision2`='$data[11]', `rvision3`='$data[12]',`lhearing1`='$data[13]', `lhearing2`='$data[14]', 
    `lhearing3`='$data[15]',`rhearing1`='$data[16]', `rhearing2`='$data[17]', `rhearing3`='$data[18]',
    `speech1`='$data[19]', `speech2`='$data[20]', `speech3`='$data[21]',`tooth1`='$data[22]', `tooth2`='$data[23]',
    `tooth3`='$data[24]', `teeth1`='$data[25]', `teeth2`='$data[26]',`teeth3`='$data[27]', 
    `ynt1`='$data[28]', `ynt2`='$data[29]',`ynt3`='$data[30]',`mark1`='$data[31]', `mark2`='$data[32]', 
    `mark3`='$data[33]',`bone1`='$data[34]', `bone2`='$data[35]', `bone3`='$data[36]',
    `heart1`='$data[37]', `heart2`='$data[38]', `heart3`='$data[39]',`lungs1`='$data[40]',`lungs2`='$data[41]', 
    `lungs3`='$data[42]', `ovarious1`='$data[43]',`ovarious2`='$data[44]', `ovarious3`='$data[45]', 
    `ovarious4`='$data[46]',`tvarious1`='$data[47]', `tvarious2`='$data[48]', `tvarious3`='$data[49]',`tvarious4`='$data[50]',
    `thvarious1`='$data[51]', `thvarious2`='$data[52]', `thvarious3`='$data[53]',`thvarious4`='$data[54]', 
    `fvarious1`='$data[55]', `fvarious2`='$data[56]',`fvarious3`='$data[57]', `fvarious4`='$data[58]', `tname1`='$data[59]',
    `tname2`='$data[60]',`tname3`='$data[61]',`tposition1`='$data[62]', `tposition2`='$data[63]', 
    `tposition3`='$data[64]'
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
        <form action="chdr2_1.php" method="post" >
            <div>
                <h3>Search NIC :</h3>
                <input type="text" placeholder="Type patient's NIC here" style="width: 50%; height: 30px; padding:5px;" name="id" value="<?php echo $id;?>">
                <br><br>
                <input type="submit" name="search" style="height: 30px; width: 150px;" value="Search">

                <h3>පෙර පාසැල් දරුවන්ගේ වෛද්‍ය පරීක්ෂණය - වගුව II</h3>
                <table style="width:100%" >
                    <tr>
                        <th></th>
                        <th style="width:15.5%">1</th>
                        <th style="width:15.5%">2</th>
                        <th style="width:15.5%">3</th>
                    </tr>
                </table>
                <table style="width:100%" >
                    <tr>
                        <th rowspan="2" align="left">වපරය </th>
                        <td>වම</td>
                        <th style="width:15.5%"><select id="lsquint1" name="lsquint1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lsquint1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lsquint1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="lsquint2" name="lsquint2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lsquint2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lsquint2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="lsquint3" name="lsquint3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lsquint3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lsquint3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <td>දකුණ</td>
                        <th style="width:15.5%"><select id="rsquint1" name="rsquint1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($rsquint1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($rsquint1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="rsquint2" name="rsquint2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($rsquint2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($rsquint2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="rsquint3" name="rsquint3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($rsquint3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($rsquint3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th rowspan="2" align="left">පෙනීම</th>
                        <td>වම</td>
                        <th style="width:15.5%"><select id="lvision1" name="lvision1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lvision1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lvision1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="lvision2" name="lvision2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lvision2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lvision2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="lvision3" name="lvision3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lvision3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lvision3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <td>දකුණ</td>
                        <th style="width:15.5%"><select id="rvision1" name="rvision1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($rvision1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($rvision1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="rvision2" name="rvision2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($rvision2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($rvision2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="rvision3" name="rvision3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($rvision3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($rvision3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th rowspan="2" align="left">ඇසීම</th>
                        <td>වම</td>
                        <th style="width:15.5%"><select id="lhearing1" name="lhearing1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lhearing1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lhearing1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="lhearing2" name="lhearing2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lhearing2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lhearing2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="lhearing3" name="lhearing3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lhearing3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lhearing3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <td>දකුණ</td>
                        <th style="width:15.5%"><select id="rhearing1" name="rhearing1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($rhearing1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($rhearing1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="rhearing2" name="rhearing2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($rhearing2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($rhearing2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="rhearing3" name="rhearing3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($rhearing3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($rhearing3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                </table>
                <table style="width:100% ;">
                    <tr>
                        <th align="left">කතාව</th>
                        <th style="width:15.5%"><select id="speech1" name="speech1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($speech1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($speech1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="speech2" name="speech2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($speech2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($speech2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="speech3" name="speech3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($speech3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($speech3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">දන්ත ව්‍යසනය</th>
                        <th style="width:15.5%"><select id="tooth1" name="tooth1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($tooth1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($tooth1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="tooth2" name="tooth2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($tooth2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($tooth2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="tooth3" name="tooth3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($tooth3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($tooth3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">දන්ත දෝෂ</th>
                        <th style="width:15.5%"><select id="teeth1" name="teeth1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($teeth1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($teeth1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="teeth2" name="teeth2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($teeth2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($teeth2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="teeth3" name="teeth3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($teeth3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($teeth3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">කණ, නාසය, උගුර</th>
                        <th style="width:15.5%"><select id="ynt1" name="ynt1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($ynt1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($ynt1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="ynt2" name="ynt2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($ynt2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($ynt2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="ynt3" name="ynt3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($ynt3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($ynt3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">අසංවේදී, ලප කැලැල්</th>
                        <th style="width:15.5%"><select id="mark1" name="mark1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($mark1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($mark1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="mark2" name="mark2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($mark2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($mark2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="mark3" name="mark3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($mark3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($mark3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">අස්ථි ආබාධ</th>
                        <th style="width:15.5%"><select id="bone1" name="bone1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($bone1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($bone1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="bone2" name="bone2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($bone2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($bone2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="bone3" name="bone3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($bone3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($bone3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">හෘදය</th>
                        <th style="width:15.5%"><select id="heart1" name="heart1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($heart1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($heart1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="heart2" name="heart2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($heart2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($heart2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="heart3" name="heart3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($heart3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($heart3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th align="left">පෙනහළු</th>
                        <th style="width:15.5%"><select id="lungs1" name="lungs1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lungs1=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lungs1=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="lungs2" name="lungs2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lungs2=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lungs2=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>

                        <th style="width:15.5%"><select id="lungs3" name="lungs3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="X" <?php if($lungs3=="X") echo 'selected="selected"';?>>X</option>
                        <option value="O" <?php if($lungs3=="O") echo 'selected="selected"';?>>O</option>
                        </select></th>
                    </tr>
                </table>
                <table style="width:100% ;">
                    <tr>
                        <td align="left" rowspan="4"><b>වෙනත් ආබාධ </b><br>(සදහන් කරන්න)</td>
                        <td align="center" style="width:30%"><textarea name="ovarious1" rows="2" cols="40" ><?php echo $ovarious1;?></textarea></td>
                        <td align="center" style="width:15.5%"><textarea name="ovarious2" rows="2" cols="20" ><?php echo $ovarious2;?></textarea></td>
                        <td align="center" style="width:15.5%"><textarea name="ovarious3" rows="2" cols="20" ><?php echo $ovarious3;?></textarea></td>
                        <td align="center" style="width:15.5%"><textarea name="ovarious4" rows="2" cols="20" ><?php echo $ovarious4;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><textarea name="tvarious1" rows="2" cols="40" ><?php echo $tvarious1;?></textarea></td>
                        <td align="center"><textarea name="tvarious2" rows="2" cols="20" ><?php echo $tvarious2;?></textarea></td>
                        <td align="center"><textarea name="tvarious3" rows="2" cols="20" ><?php echo $tvarious3;?></textarea></td>
                        <td align="center"><textarea name="tvarious4" rows="2" cols="20" ><?php echo $tvarious4;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><textarea name="thvarious1" rows="2" cols="40" ><?php echo $thvarious1;?></textarea></td>
                        <td align="center"><textarea name="thvarious2" rows="2" cols="20" ><?php echo $thvarious2;?></textarea></td>
                        <td align="center"><textarea name="thvarious3" rows="2" cols="20" ><?php echo $thvarious3;?></textarea></td>
                        <td align="center"><textarea name="thvarious4" rows="2" cols="20" ><?php echo $thvarious4;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><textarea name="fvarious1" rows="2" cols="40" ><?php echo $fvarious1;?></textarea></td>
                        <td align="center"><textarea name="fvarious2" rows="2" cols="20" ><?php echo $fvarious2;?></textarea></td>
                        <td align="center"><textarea name="fvarious3" rows="2" cols="20" ><?php echo $fvarious3;?></textarea></td>
                        <td align="center"><textarea name="fvarious4" rows="2" cols="20" ><?php echo $fvarious4;?></textarea></td>
                    </tr>
                </table>
                <table style="width:100% ;margin-bottom: 50px;">
                    <tr>
                        <td align="left">පරීක්ෂකගේ නම</td>
                        <td align="center" style="width:15.5%"><textarea name="tname1" rows="2" cols="20" ><?php echo $tname1;?></textarea></td>
                        <td align="center" style="width:15.5%"><textarea name="tname2" rows="2" cols="20" ><?php echo $tname2;?></textarea></td>
                        <td align="center" style="width:15.5%"><textarea name="tname3" rows="2" cols="20" ><?php echo $tname3;?></textarea></td>
                    </tr>
                    <tr>
                        <td align="left">පරීක්ෂකගේ තනතුර</td>
                        <th style="width:15.5%"><select id="tposition1" name="tposition1" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="Doctor" <?php if($tposition1=="Doctor") echo 'selected="selected"';?>>Doctor</option>
                        <option value="Midwife" <?php if($tposition1=="Midwife") echo 'selected="selected"';?>>Midwife</option>
                        </select></th>

                        <th style="width:15.5%"><select id="tposition2" name="tposition2" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="Doctor" <?php if($tposition2=="Doctor") echo 'selected="selected"';?>>Doctor</option>
                        <option value="Midwife" <?php if($tposition2=="Midwife") echo 'selected="selected"';?>>Midwife</option>
                        </select></th>

                        <th style="width:15.5%"><select id="tposition3" name="tposition3" style="width: 100px; height:30px;" >
                        <option value="not done">---Select---</option>
                        <option value="Doctor" <?php if($tposition3=="Doctor") echo 'selected="selected"';?>>Doctor</option>
                        <option value="Midwife" <?php if($tposition3=="Midwife") echo 'selected="selected"';?>>Midwife</option>
                        </select></th>
                    </tr>
                </table>
                <input type="submit" name="insert" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Add">
                <input type="submit" name="update" style="height: 30px; width: 150px; margin-bottom: 50px; margin-right: 50px;" value="Update">
                <input type="submit" name="delete" style="height: 30px; width: 150px; margin-bottom: 50px ;" value="Delete">

            </div>
        </form>
    </body>
</html>