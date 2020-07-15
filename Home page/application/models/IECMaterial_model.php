<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

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
$IECMat = new table();

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM `data2` WHERE id='$info[0]'";
    $search_result=$IECMat->featuredLoad($dbObj,$search_query);
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
        $pdate_result=$IECMat->featuredLoad($dbObj,$update_query);
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