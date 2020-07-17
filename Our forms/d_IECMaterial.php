<!doctype html>
<?php
$host="localhost";
$user = "root";
$password = "";
$database = "moh";

$id="";
$Companion="";
$Intended_Hospital_Delivery="";
$Intended_Hospital_Emergency="";
$Mode_of_Transport_Delivery="";
$Mode_of_Transport_Emergency="";
$Average_cost_Delivery="";
$Average_cost_Emergency="";
$Distance_from_Home_Delivery="";
$Distance_from_Home_Emergency="";
$Time_taken_to_reach_Delivery="";
$Time_taken_to_reach_Emergency="";
$first_date="";
$first_Husband="";
$first_wife="";
$first_Other="";
$sec_date="";
$sec_Husband="";
$sec_wife="";
$sec_Other="";
$third_date="";
$third_Husband="";
$third_wife="";
$third_Other="";
$pre_pregnancy_book="";
$Feeding_breastmilk_book="";
$pre_childhood_book="";
$family_planing_book="";
$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";
$d7="";
$d8="";
$d9="";
$d10="";
$d11="";
$d12="";
$cd1="";
$cd2="";
$cd3="";
$cd4="";
$cd5="";
$cd6="";
$cd7="";
$cd8="";
$cd9="";
$cd10="";
$cd11="";
$cd12="";
$Conselling_date="";
$chosen_method="";
$reson_not_method="";
$Consent_form_date="";

//connect to mysql database
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connect = mysqli_connect($host, $user, $password, $database);
    
}catch(Exception $ex){
    echo 'Error in connecting';
}

//get data from the form
function getData(){
    $data=array();
    $data[0]=$_POST['id'];
    $data[1]=$_POST['Companion'];
    $data[2]=$_POST['Intended_Hospital_Delivery'];
    $data[3]=$_POST['Intended_Hospital_Emergency'];
    $data[4]=$_POST['Mode_of_Transport_Delivery'];
    $data[5]=$_POST['Mode_of_Transport_Emergency'];
    $data[6]=$_POST['Average_cost_Delivery'];
    $data[7]=$_POST['Average_cost_Emergency'];
    $data[8]=$_POST['Distance_from_Home_Delivery'];
    $data[9]=$_POST['Distance_from_Home_Emergency'];
    $data[10]=$_POST['Time_taken_to_reach_Delivery'];
    $data[11]=$_POST['Time_taken_to_reach_Emergency'];
    $data[12]=$_POST['first_date'];
    $data[13]=$_POST['first_Husband'];
    $data[14]=$_POST['first_wife'];
    $data[15]=$_POST['first_Other'];
    $data[16]=$_POST['sec_date'];
    $data[17]=$_POST['sec_Husband'];
    $data[18]=$_POST['sec_wife'];
    $data[19]=$_POST['sec_Other'];
    $data[20]=$_POST['third_date'];
    $data[21]=$_POST['third_Husband'];
    $data[22]=$_POST['third_wife'];
    $data[23]=$_POST['third_Other'];
    $data[24]=$_POST['pre_pregnancy_book'];
    $data[25]=$_POST['Feeding_breastmilk_book'];
    $data[26]=$_POST['pre_childhood_book'];
    $data[27]=$_POST['family_planing_book'];
    $data[28]=$_POST['d1'];
    $data[29]=$_POST['d2'];
    $data[30]=$_POST['d3'];
    $data[31]=$_POST['d4'];
    $data[32]=$_POST['d5'];
    $data[33]=$_POST['d6'];
    $data[34]=$_POST['d7'];
    $data[35]=$_POST['d8'];
    $data[36]=$_POST['d9'];
    $data[37]=$_POST['d10'];
    $data[38]=$_POST['d11'];
    $data[39]=$_POST['d12'];
    $data[40]=$_POST['cd1'];
    $data[41]=$_POST['cd2'];
    $data[42]=$_POST['cd3'];
    $data[43]=$_POST['cd4'];
    $data[44]=$_POST['cd5'];
    $data[45]=$_POST['cd6'];
    $data[46]=$_POST['cd7'];
    $data[47]=$_POST['cd8'];
    $data[48]=$_POST['cd9'];
    $data[49]=$_POST['cd10'];
    $data[50]=$_POST['cd11'];
    $data[51]=$_POST['cd12'];
    $data[52]=$_POST['Conselling_date'];
    $data[53]=$_POST['chosen_method'];
    $data[54]=$_POST['reson_not_method'];
    $data[55]=$_POST['Consent_form_date'];
    return $data;
}

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM `data2` WHERE id='$info[0]'";
    $search_result=mysqli_query($connect,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
        
                        $id=$row['id'];
                        $Companion=$row['Companion'];
                        $Intended_Hospital_Delivery=$row['Intended_Hospital_Delivery'];
                        $Intended_Hospital_Emergency=$row['Intended_Hospital_Emergency'];
                        $Mode_of_Transport_Delivery=$row['Mode_of_Transport_Delivery'];
                        $Mode_of_Transport_Emergency=$row['Mode_of_Transport_Emergency'];
                        $Average_cost_Delivery=$row['Average_cost_Delivery'];
                        $Average_cost_Emergency=$row['Average_cost_Emergency'];
                        $Distance_from_Home_Delivery=$row['Distance_from_Home_Delivery'];
                        $Distance_from_Home_Emergency=$row['Distance_from_Home_Emergency'];
                        $Time_taken_to_reach_Delivery=$row['Time_taken_to_reach_Delivery'];
                        $Time_taken_to_reach_Emergency=$row['Time_taken_to_reach_Emergency'];
                        $first_date=$row['first_date'];
                        $first_Husband=$row['first_Husband'];
                        $first_wife=$row['first_wife'];
                        $first_Other=$row['first_Other'];
                        $sec_date=$row['sec_date'];
                        $sec_Husband=$row['sec_Husband'];
                        $sec_wife=$row['sec_wife'];
                        $sec_Other=$row['sec_Other'];
                        $third_date=$row['third_date'];
                        $third_Husband=$row['third_Husband'];
                        $third_wife=$row['third_wife'];
                        $third_Other=$row['third_Other'];
                        $pre_pregnancy_book=$row['pre_pregnancy_book'];
                        $Feeding_breastmilk_book=$row['Feeding_breastmilk_book'];
                        $pre_childhood_book=$row['pre_childhood_book'];
                        $family_planing_book=$row['family_planing_book'];
                        $d1=$row['d1'];
                        $d2=$row['d2'];
                        $d3=$row['d3'];
                        $d4=$row['d4'];
                        $d5=$row['d5'];
                        $d6=$row['d6'];
                        $d7=$row['d7'];
                        $d8=$row['d8'];
                        $d9=$row['d9'];
                        $d10=$row['d10'];
                        $d11=$row['d11'];
                        $d12=$row['d12'];
                        $cd1=$row['cd1'];
                        $cd2=$row['cd2'];
                        $cd3=$row['cd3'];
                        $cd4=$row['cd4'];
                        $cd5=$row['cd5'];
                        $cd6=$row['cd6'];
                        $cd7=$row['cd7'];
                        $cd8=$row['cd8'];
                        $cd9=$row['cd9'];
                        $cd10=$row['cd10'];
                        $cd11=$row['cd11'];
                        $cd12=$row['cd12'];
                        $Conselling_date=$row['Conselling_date'];
                        $chosen_method=$row['chosen_method'];
                        $reson_not_method=$row['reson_not_method'];
                        $Consent_form_date=$row['Consent_form_date'];
                
                    }
                }else{
                    echo("no data are available");
                }
        }else{
            echo("result error");
        }
    }
}


//insert
if(isset($_POST['Insert'])){
    $info=getData();
    $insert_query="INSERT INTO `data2`(`id`, `Companion`, `Intended_Hospital_Delivery`,
     `Intended_Hospital_Emergency`, `Mode_of_Transport_Delivery`, `Mode_of_Transport_Emergency`, `Average_cost_Delivery`, 
     `Average_cost_Emergency`, `Distance_from_Home_Delivery`, `Distance_from_Home_Emergency`, `Time_taken_to_reach_Delivery`,
      `Time_taken_to_reach_Emergency`, `first_date`, `first_Husband`, `first_wife`, `first_Other`, `sec_date`, `sec_Husband`, 
      `sec_wife`, `sec_Other`, `third_date`, `third_Husband`, `third_wife`, `third_Other`, `pre_pregnancy_book`, `Feeding_breastmilk_book`,
       `pre_childhood_book`, `family_planing_book`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `d10`, `d11`, `d12`, `cd1`, `cd2`,
        `cd3`, `cd4`, `cd5`, `cd6`, `cd7`, `cd8`, `cd9`, `cd10`, `cd11`, `cd12`, `Conselling_date`, `chosen_method`, `reson_not_method`, 
        `Consent_form_date`)
         VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]','$info[12]'
         ,'$info[13]','$info[14]','$info[15]','$info[16]','$info[17]','$info[18]','$info[19]','$info[20]','$info[21]','$info[22]','$info[23]','$info[24]','$info[25]'
         ,'$info[26]','$info[27]','$info[28]','$info[29]','$info[30]','$info[31]','$info[32]','$info[33]','$info[34]','$info[35]','$info[36]','$info[37]'
         ,'$info[38]','$info[39]','$info[40]','$info[41]','$info[42]','$info[43]','$info[44]','$info[45]','$info[46]','$info[47]','$info[48]','$info[49]','$info[50]'
         ,'$info[51]','$info[52]','$info[53]','$info[54]','$info[55]')";
    try{
        $insert_result=mysqli_query($connect,$insert_query);
        if($insert_result){
            if(mysqli_affected_rows($connect)>0){
                echo("data inserted successfully");

            }else{
                echo("data are not inserted");
            }
        }
    }catch(Exception $ex){
        echo("error inserted".$ex->getMessage());
    }
}

//update
if(isset($_POST['Update'])){
    $info=getData();
    $update_query="UPDATE `data2` SET `id`='$info[0]',`Companion`='$info[1]',`Intended_Hospital_Delivery`='$info[2]',
    `Intended_Hospital_Emergency`='$info[3]',`Mode_of_Transport_Delivery`='$info[4]',`Mode_of_Transport_Emergency`='$info[5]',
    `Average_cost_Delivery`='$info[6]',`Average_cost_Emergency`='$info[7]',`Distance_from_Home_Delivery`='$info[8]',
    `Distance_from_Home_Emergency`='$info[9]',`Time_taken_to_reach_Delivery`='$info[10]',`Time_taken_to_reach_Emergency`='$info[11]',
    `first_date`='$info[12]',`first_Husband`='$info[13]',`first_wife`='$info[14]',`first_Other`='$info[15]',`sec_date`='$info[16]',
    `sec_Husband`='$info[17]',`sec_wife`='$info[18]',`sec_Other`='$info[19]',`third_date`='$info[20]',`third_Husband`='$info[21]',
    `third_wife`='$info[22]',`third_Other`='$info[23]',`pre_pregnancy_book`='$info[24]',`Feeding_breastmilk_book`='$info[25]',
    `pre_childhood_book`='$info[26]',`family_planing_book`='$info[27]',`d1`='$info[28]',`d2`='$info[29]',`d3`='$info[30]',`d4`='$info[31]',
    `d5`='$info[32]',`d6`='$info[33]',`d7`='$info[34]',`d8`='$info[35]',`d9`='$info[36]',`d10`='$info[37]',`d11`='$info[38]',`d12`='$info[39]',
    `cd1`='$info[40]',`cd2`='$info[41]',`cd3`='$info[42]',`cd4`='$info[43]',`cd5`='$info[44]',`cd6`='$info[45]',`cd7`='$info[46]',`cd8`='$info[47]',
    `cd9`='$info[48]',`cd10`='$info[49]',`cd11`='$info[50]',`cd12`='$info[51]',`Conselling_date`='$info[52]',`chosen_method`='$info[53]',
    `reson_not_method`='$info[54]',`Consent_form_date`='$info[55]' WHERE id='$info[0]'";

    try{
        $pdate_result=mysqli_query($connect,$update_query);
        if($pdate_result){
            if(mysqli_affected_rows($connect)>0){
                echo("data updated");
            }else{
                echo("data not updated");
            }
        }
    }catch(Exception $ex){
        echo("error in update".$ex->getMessage());
    }
}


?>

<html>
<head>
<meta charset="UTF-8">
<title>IEC Material</title>
</head>
<style> 
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<body>
<form method="POST" action="IECMaterial.php">
<input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's id here" value="<?php echo($id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>

<input type="Date" name="Companion" placeholder="ප්‍රසූත සහයිකාව පිළිබද දැනුවත් කිරීම/Companion of Choice at Labour Discussed: " value="<?php echo $Companion;?>"><br><br>

<table style="width:80%">
    <tr> 
        <td>"උපත සහ හදිසි අවස්ථාවන් සදහා සුදන්වීමේ සැලැස්ම /Birth and Emergency prepared plan"</td>
        <td>"ප්‍රසුතියේදී /Delivery"</td>
        <td>"හදිසි අවස්ථාවකදී /In an emergency"</td>
    </tr>

    <tr> 
        <td>යාමට බලාපොරොත්තුවන රෝහල/Intended Hospital</td>
        <td><input type="text" name="Intended_Hospital_Delivery" value="<?php echo($Intended_Hospital_Delivery);?>"></td>
        <td><input type="text" name="Intended_Hospital_Emergency" value="<?php echo($Intended_Hospital_Emergency);?>"></td>
    </tr>

    <tr> 
        <td>ප්‍රවාහන ආකාරය/Mode of Transport</td>
        <td><input type="text" name="Mode_of_Transport_Delivery" value="<?php echo($Mode_of_Transport_Delivery);?>"></td>
        <td><input type="text" name="Mode_of_Transport_Emergency" value="<?php echo($Mode_of_Transport_Emergency);?>"></td>
    </tr>

    <tr> 
        <td>ඒ සදහා දළ වියදම්/Average cost</td>
        <td><input type="text" name="Average_cost_Delivery" value="<?php echo($Average_cost_Delivery);?>"></td>
        <td><input type="text" name="Average_cost_Emergency" value="<?php echo($Average_cost_Emergency);?>"></td>
    </tr>

    <tr> 
        <td>නිවසේ සිට ඇති දුර/Distance from Home</td>
        <td><input type="text" name="Distance_from_Home_Delivery" value="<?php echo($Distance_from_Home_Delivery);?>"></td>
        <td><input type="text" name="Distance_from_Home_Emergency" value="<?php echo($Distance_from_Home_Emergency);?>"></td>
    </tr>

    <tr> 
        <td>ලග වීමට ගතවන කාලය/Time taken to reach</td>
        <td><input type="text" name="Time_taken_to_reach_Delivery" value="<?php echo($Time_taken_to_reach_Delivery);?>"></td>
        <td><input type="text" name="Time_taken_to_reach_Emergency" value="<?php echo($Time_taken_to_reach_Emergency);?>"></td>
    </tr>
    
    </table>
    <br><br>

    <table style="width:20%">
    <tr>
        <td>සැසිය/Session</td>
        <td>දිනය/Date</td>
        <td>ස්වාමි පුරුෂයා/Husband</td>
        <td>භාර්යාව/wife</td>
        <td>වෙනත්/Other</td>
    </tr>
    <tr>
        <td>1st T</td>
        <td><input type="Date" name="first_date" value="<?php echo($first_date);?>"></td>
        <td><input type="text" name="first_Husband"value="<?php echo($first_Husband);?>"></td>
        <td><input type="text" name="first_wife" value="<?php echo($first_wife);?>"></td>
        <td><input type="text" name="first_Other" value="<?php echo($first_Other);?>"></td>
    </tr>
    <tr>
        <td>2nd T</td>
        <td><input type="Date" name="sec_date" value="<?php echo($sec_date);?>"></td>
        <td><input type="text" name="sec_Husband" value="<?php echo($sec_Husband);?>"></td>
        <td><input type="text" name="sec_wife" value="<?php echo($sec_wife);?>"></td>
        <td><input type="text" name="sec_Other" value="<?php echo($sec_Other);?>"></td>
    </tr>
    <tr>
        <td>3rd T</td>
        <td><input type="Date" name="third_date" value="<?php echo($third_date);?>"></td>
        <td><input type="text" name="third_Husband" value="<?php echo($third_Husband);?>"></td>
        <td><input type="text" name="third_wife" value="<?php echo($third_wife);?>"></td>
        <td><input type="text" name="third_Other" value="<?php echo($third_Other);?>"></td>
    </tr>

    
    
    </table>
    <br><br>

    </table>

    <h2>තොරතුරු අධ්‍යාපනය සහ සන්නිවෙධනය සදහා වූ පොත්/IEC material</h2>
    <table>
    <tr>
        <td>පුර්ව ප්‍රසව සමය පිළිබද පොත්</td>
        <td><input type="Date" name="pre_pregnancy_book" value="<?php echo($pre_pregnancy_book);?>"></td>
    </tr>

    <tr>
        <td>මව්කිරි දීම පිළිබද පොත්</td>
        <td><input type="Date" name="Feeding_breastmilk_book" value="<?php echo($Feeding_breastmilk_book);?>"></td>
    </tr>
    <tr>
        <td>මුල් ළමා විය සංවර්ධනය පිළිබද පොත්</td>
        <td><input type="Date" name="pre_childhood_book" value="<?php echo($pre_childhood_book);?>"></td>
    </tr>
    <tr>
        <td>පව්ල් සැලසුම් ක්‍රම පිළිබධ පත්‍රිකාව</td>
        <td><input type="Date" name="family_planing_book" value="<?php echo($family_planing_book);?>"></td>
    </tr>
    </table>
    <br><br>

    <h2>පව්ල් සෞඛ්‍ය නිලධාරිනිය පැමිණෙන දිනය</h2>
    <table>
    <tr>
        <td><input type="Date" name="d1" value="<?php echo($d1);?>"></td> 
        <td><input type="Date" name="d2" value="<?php echo($d2);?>"></td>
        <td><input type="Date" name="d3" value="<?php echo($d3);?>"></td>
        <td><input type="Date" name="d4" value="<?php echo($d4);?>"></td>
        <td><input type="Date" name="d5" value="<?php echo($d5);?>"></td>
        <td><input type="Date" name="d6" value="<?php echo($d6);?>"></td>
    </tr>

    <tr>
        <td><input type="Date" name="d7" value="<?php echo($d7);?>"></td> 
        <td><input type="Date" name="d8" value="<?php echo($d8);?>"></td>
        <td><input type="Date" name="d9" value="<?php echo($d9);?>"></td>
        <td><input type="Date" name="d10" value="<?php echo($d10);?>"></td>
        <td><input type="Date" name="d11" value="<?php echo($d11);?>"></td>
        <td><input type="Date" name="d12" value="<?php echo($d12);?>"></td>
    </tr>

    
    </table>

    <h2>සායනයට පැමිණිය යුතු දිනය</h2>
    <table>
    
    <tr>
        <td><input type="Date" name="cd1" value="<?php echo($cd1);?>"></td> 
        <td><input type="Date" name="cd2" value="<?php echo($cd2);?>"></td>
        <td><input type="Date" name="cd3" value="<?php echo($cd3);?>"></td>
        <td><input type="Date" name="cd4" value="<?php echo($cd4);?>"></td>
        <td><input type="Date" name="cd5" value="<?php echo($cd5);?>"></td>
        <td><input type="Date" name="cd6" value="<?php echo($cd6);?>"></td>
    </tr>

    <tr>
        <td><input type="Date" name="cd7" value="<?php echo($cd7);?>"></td> 
        <td><input type="Date" name="cd8" value="<?php echo($cd8);?>"></td>
        <td><input type="Date" name="cd9" value="<?php echo($cd9);?>"></td>
        <td><input type="Date" name="cd10" value="<?php echo($cd10);?>"></td>
        <td><input type="Date" name="cd11" value="<?php echo($cd11);?>"></td>
        <td><input type="Date" name="cd12" value="<?php echo($cd12);?>"></td>
    </tr>
    </table>

    <h2>පව්ල් සැලසුම්/Family Planning</h2>

    <table>

    <tr>
        <td>උපදේශනය ලබාදුන් දිනය/Date of counselling</td>
        <td><input type="Date" name="Conselling_date" value="<?php echo($Conselling_date);?>"></td>
    </tr>

    <tr>
        <td>තෝරාගත් ක්‍රමය/chosen method</td>
        <td><select name="chosen_method">
                    <option  selected hidden value=""></option>
                    <option value="T" <?php if($chosen_method=="T") echo 'selected="selected"'; ?>>T</option>
                    <option value="PL" <?php if($chosen_method=="PL") echo 'selected="selected"'; ?>>PL</option>
                    <option value="L" <?php if($chosen_method=="L") echo 'selected="selected"'; ?>>L</option>
                    <option value="IP" <?php if($chosen_method=="IP") echo 'selected="selected"'; ?>>IP</option>
                    <option value="N" <?php if($chosen_method=="N") echo 'selected="selected"'; ?>>N</option>
                    <option value="P" <?php if($chosen_method=="P") echo 'selected="selected"'; ?>>P</option>
                    <option value="C" <?php if($chosen_method=="C") echo 'selected="selected"'; ?>>C</option>
                </select></td>
    </tr>

    <tr>
        <td>නැතිනම් හේතුව/Reason for not using a method</td>
        <td><input type="text" name="reson_not_method" value="<?php echo($reson_not_method);?>"></td>
    </tr>

    <tr>
        <td>කැමැත්ත දීමේ පත්‍රිකාව අත්සන් කල දිනය/sConsent form signed date</td>
        <td><input type="Date" name="Consent_form_date" value="<?php echo($Consent_form_date);?>"></td>
    </tr>
    
    </table>
    <br><br>

    <div>
        <input type="submit" name="Insert" value="Save"> 
         
    </div>

</form>
</body>

</html>