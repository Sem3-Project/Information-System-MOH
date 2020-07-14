<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id="";
$BloodGroup="";
$BMI="";
$height="";
$allergies="";
$Name_of_the_mother="";
$Name_of_the_Hospital_Clinic="";
$age="";
$tele="";
$Name_of_the_Consultant_Obstetrician="";
$Name_of_the_field_Clinic="";
$GramaNiladariDivision="";
$RegistrationNoEligibleFamilyRegister="";
$RegistrationDateEligibleFamilyRegister="";
$RegistrationNoPregnantmothersRegister="";
$RegistrationDatePregnantmothersRegister="";
$IdentifiedAntenatalRiskConditionsModifiers="";
$consanguinity="";
$RubellaImmunization="";
$PrePregnancyScreeningDone="";
$PreconceptionalFolicAcid="";
$Planed_pregnancy_or_not="";
$Historyofsubfertility="";
$Family_planing_method_last_used="";
$G="";
$P="";
$C="";
$AgeOfYoungestChild="";
$LRMP="";
$EDD="";
$US_corrected_EDD="";
$POA_at_dating_Scan="";
$Date_of_Quickening="";
$POA_at_Registration="";

//get data from the form
function getData(){
    $data=array();
    $data[0]=$_POST['id'];
    $data[1]=$_POST['BloodGroup'];
    $data[2]=$_POST['BMI'];
    $data[3]=$_POST['height'];
    $data[4]=$_POST['allergies'];
    $data[5]=$_POST['Name_of_the_mother'];
    $data[6]=$_POST['Name_of_the_Hospital_Clinic'];
    $data[7]=$_POST['age'];
    $data[8]=$_POST['Name_of_the_Consultant_Obstetrician'];
    $data[9]=$_POST['Name_of_the_field_Clinic'];
    $data[10]=$_POST['GramaNiladariDivision'];
    $data[11]=$_POST['RegistrationNoEligibleFamilyRegister'];
    $data[12]=$_POST['RegistrationDateEligibleFamilyRegister'];
    $data[13]=$_POST['RegistrationNoPregnantmothersRegister'];
    $data[14]=$_POST['RegistrationDatePregnantmothersRegister'];
    $data[15]=$_POST['IdentifiedAntenatalRiskConditionsModifiers'];
    $data[16]=$_POST['consanguinity'];
    $data[17]=$_POST['RubellaImmunization'];
    $data[18]=$_POST['PrePregnancyScreeningDone'];
    $data[19]=$_POST['PreconceptionalFolicAcid'];
    $data[20]=$_POST['Planed_pregnancy_or_not'];
    $data[21]=$_POST['Historyofsubfertility'];
    $data[22]=$_POST['Family_planing_method_last_used'];
    $data[23]=$_POST['G'];
    $data[24]=$_POST['P'];
    $data[25]=$_POST['C'];
    $data[26]=$_POST['AgeOfYoungestChild'];
    $data[27]=$_POST['LRMP'];
    $data[28]=$_POST['EDD'];
    $data[29]=$_POST['US_corrected_EDD'];
    $data[30]=$_POST['POA_at_dating_Scan'];
    $data[31]=$_POST['Date_of_Quickening'];
    $data[32]=$_POST['POA_at_Registration'];
    $data[33]=$_POST['tele'];
    
    return $data;
}

$bDetails = new table();

//search

if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM `data` WHERE id='$info[0]'";
    $search_result=$bDetails->featuredLoad($dbObj,$search_Query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
        
                        $id=$row['id'];
                        $BloodGroup=$row['BloodGroup'];
                        $BMI=$row['BMI'];
                        $height=$row['height'];
                        $allergies=$row['allergies'];
                        $Name_of_the_mother=$row['Name_of_the_mother'];
                        $Name_of_the_Hospital_Clinic=$row['Name_of_the_Hospital_Clinic'];
                        $age=$row['age'];
                        $Name_of_the_Consultant_Obstetrician=$row['Name_of_the_Consultant_Obstetrician'];
                        $Name_of_the_field_Clinic=$row['Name_of_the_field_Clinic'];
                        $GramaNiladariDivision=$row['GramaNiladariDivision'];
                        $RegistrationNoEligibleFamilyRegister=$row['RegistrationNoEligibleFamilyRegister'];
                        $RegistrationDateEligibleFamilyRegister=$row['RegistrationDateEligibleFamilyRegister'];
                        $RegistrationNoPregnantmothersRegister=$row['RegistrationNoPregnantmothersRegister'];
                        $RegistrationDatePregnantmothersRegister=$row['RegistrationDatePregnantmothersRegister'];
                        $IdentifiedAntenatalRiskConditionsModifiers=$row['IdentifiedAntenatalRiskConditionsModifiers'];
                        $consanguinity=$row['consanguinity'];
                        $RubellaImmunization=$row['RubellaImmunization'];
                        $PrePregnancyScreeningDone=$row['PrePregnancyScreeningDone'];
                        $PreconceptionalFolicAcid=$row['PreconceptionalFolicAcid'];
                        $Planed_pregnancy_or_not=$row['Planed_pregnancy_or_not'];
                        $Historyofsubfertility=$row['Historyofsubfertility'];
                        $Family_planing_method_last_used=$row['Family_planing_method_last_used'];
                        $G=$row['G'];
                        $P=$row['P'];
                        $C=$row['C'];
                        $AgeOfYoungestChild=$row['AgeOfYoungestChild'];
                        $LRMP=$row['LRMP'];
                        $EDD=$row['EDD'];
                        $US_corrected_EDD=$row['US_corrected_EDD'];
                        $POA_at_dating_Scan=$row['POA_at_dating_Scan'];
                        $Date_of_Quickening=$row['Date_of_Quickening'];
                        $POA_at_Registration=$row['POA_at_Registration'];
                        $tele=$row['tele'];
                
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
    $update_query="UPDATE `data` SET `id`='$info[0]',`BloodGroup`='$info[1]',`BMI`='$info[2]',`height`='$info[3]',`allergies`='$info[4]',
    `Name_of_the_mother`='$info[5]',`Name_of_the_Hospital_Clinic`='$info[6]',`age`='$info[7]',`Name_of_the_Consultant_Obstetrician`='$info[8]',
    `Name_of_the_field_Clinic`='$info[9]',`GramaNiladariDivision`='$info[10]',`RegistrationNoEligibleFamilyRegister`='$info[11]',
    `RegistrationDateEligibleFamilyRegister`='$info[12]',`RegistrationNoPregnantmothersRegister`='$info[13]',
    `RegistrationDatePregnantmothersRegister`='$info[14]',`IdentifiedAntenatalRiskConditionsModifiers`='$info[15]',`consanguinity`='$info[16]',
    `RubellaImmunization`='$info[17]',`PrePregnancyScreeningDone`='$info[18]',`PreconceptionalFolicAcid`='$info[19]',
    `Planed_pregnancy_or_not`='$info[20]',`Historyofsubfertility`='$info[21]',`Family_planing_method_last_used`='$info[22]',
    `G`='$info[23]',`P`='$info[24]',`C`='$info[25]',`AgeOfYoungestChild`='$info[26]',`LRMP`='$info[27]',`EDD`='$info[28]',
    `US_corrected_EDD`='$info[29]',`POA_at_dating_Scan`='$info[30]',`Date_of_Quickening`='$info[31]',`POA_at_Registration`='$info[32]', `tele`='$info[33]'  
    WHERE id='$info[0]'";

    try{
        $pdate_result=$bDetails->featuredLoad($dbObj,$update_query);
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