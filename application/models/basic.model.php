<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>
<?php
    include '../controllers/Mother.php';
    include '../controllers/Investigation.php';
    
    $dbObj = Model::getInstance();
    $dbObj->connect('localhost', 'root', '', 'moh');
   
if(isset($_POST['update'])){

    $id=$_POST['id'];
    $BloodGroup=$_POST['BloodGroup'];
    $BMI=$_POST['BMI'];
    $height=$_POST['height'];
    $allergies=$_POST['allergies'];
    $Name_of_the_mother=$_POST['Name_of_the_mother'];
    $Name_of_the_Hospital_Clinic=$_POST['Name_of_the_Hospital_Clinic'];
    $age=$_POST['age'];
    $Name_of_the_Consultant_Obstetrician=$_POST['Name_of_the_Consultant_Obstetrician'];
    $Name_of_the_field_Clinic=$_POST['Name_of_the_field_Clinic'];
    $GramaNiladariDivision=$_POST['GramaNiladariDivision'];
    $RegistrationNoEligibleFamilyRegister=$_POST['RegistrationNoEligibleFamilyRegister'];
    $RegistrationDateEligibleFamilyRegister=$_POST['RegistrationDateEligibleFamilyRegister'];
    $RegistrationNoPregnantmothersRegister=$_POST['RegistrationNoPregnantmothersRegister'];
    $RegistrationDatePregnantmothersRegister=$_POST['RegistrationDatePregnantmothersRegister'];
    $IdentifiedAntenatalRiskConditionsModifiers=$_POST['IdentifiedAntenatalRiskConditionsModifiers'];
    $consanguinity=$_POST['consanguinity'];
    $RubellaImmunization=$_POST['RubellaImmunization'];
    $PreconceptionalFolicAcid=$_POST['PreconceptionalFolicAcid'];
    $PrePregnancyScreeningDone=$_POST['PrePregnancyScreeningDone'];
    $Planed_pregnancy_or_not=$_POST['Planed_pregnancy_or_not'];
    $Historyofsubfertility=$_POST['Historyofsubfertility'];
    $Family_planing_method_last_used=$_POST['Family_planing_method_last_used'];
    $G=$_POST['G'];
    $P=$_POST['P'];
    $C=$_POST['C'];
    $AgeOfYoungestChild=$_POST['AgeOfYoungestChild'];
    $LRMP=$_POST['LRMP'];
    $EDD=$_POST['EDD'];
    $US_corrected_EDD=$_POST['US_corrected_EDD'];
    $POA_at_dating_Scan=$_POST['POA_at_dating_Scan'];
    $Date_of_Quickening=$_POST['Date_of_Quickening'];
    $POA_at_Registration=$_POST['POA_at_Registration'];
    $tele=$_POST['tele'];

   

   $tempinves = new Basicdetail();
   $result1 = $tempinves->load($dbObj, $id);

  
   if ($result1){
       $inves = new Basicdetail();
      
        $data = array("id"=>$id, "BloodGroup"=>$BloodGroup, "BMI"=>$BMI, "height"=>$height, "allergies"=>$allergies,
                    "Name_of_the_mother"=>$Name_of_the_mother, 
                    "Name_of_the_Hospital_Clinic"=>$Name_of_the_Hospital_Clinic,"age"=>$age,"Name_of_the_Consultant_Obstetrician"=>$Name_of_the_Consultant_Obstetrician,
                    "Name_of_the_field_Clinic"=>$Name_of_the_field_Clinic,"GramaNiladariDivision"=>$GramaNiladariDivision,
                    "RegistrationNoEligibleFamilyRegister"=>$RegistrationNoEligibleFamilyRegister,
                    "RegistrationDateEligibleFamilyRegister"=>$RegistrationDateEligibleFamilyRegister,
                    "RegistrationNoPregnantmothersRegister"=>$RegistrationNoPregnantmothersRegister,
                    "RegistrationDatePregnantmothersRegister"=>$RegistrationDatePregnantmothersRegister,
                    "IdentifiedAntenatalRiskConditionsModifiers"=>$IdentifiedAntenatalRiskConditionsModifiers,
                    "consanguinity"=>$consanguinity,
                    "RubellaImmunization"=>$RubellaImmunization,"PreconceptionalFolicAcid"=>$PreconceptionalFolicAcid,
                    "PrePregnancyScreeningDone"=>$PrePregnancyScreeningDone,
                    "Planed_pregnancy_or_not"=>$Planed_pregnancy_or_not,"Historyofsubfertility"=>$Historyofsubfertility,
                    "Family_planing_method_last_used"=>$Family_planing_method_last_used,"G"=>$G,
                    "P"=>$P,"C"=>$C,"AgeOfYoungestChild"=>$AgeOfYoungestChild,"LRMP"=>$LRMP,"EDD"=>$EDD,
                    "US_corrected_EDD"=>$US_corrected_EDD,
                    "POA_at_dating_Scan"=>$POA_at_dating_Scan,"Date_of_Quickening"=>$Date_of_Quickening,
                    "POA_at_Registration"=>$POA_at_Registration,"tele"=>$tele);
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
        $investi = new table();
        $search_Query = "SELECT * FROM 'data' WHERE id = '$id'";
    
        $search_Result = $investi->featuredLoad($dbObj,$search_Query);

        $len=mysqli_num_rows($search_Result);
    
        $posts = array();
    
        for($i=0;$i<$len;$i++){
            
        foreach (mysqli_fetch_assoc($search_Result) as $key=>$id) {
               array_push($posts,$id);
            }
        }
        $_POST['BloodGroup'] = $posts[1];    $_POST['BMI'] = $posts[2];    $_POST['height'] = $posts[3];    $_POST['allergies'] = $posts[4];  
        $_POST['Name_of_the_mother'] = $posts[5];    $_POST['Name_of_the_Hospital_Clinic'] = $posts[6];    $_POST['age'] = $posts[7];    
        $_POST['tele'] = $posts[8];
        $_POST['Name_of_the_Consultant_Obstetrician'] = $posts[9];    $_POST['Name_of_the_field_Clinic'] = $posts[10];    
        $_POST['GramaNiladariDivision'] = $posts[11];    $_POST['RegistrationNoEligibleFamilyRegister'] = $posts[12];
        $_POST['RegistrationDateEligibleFamilyRegister'] = $posts[13];    $_POST['RegistrationNoPregnantmothersRegister'] = $posts[14];    
        $_POST['RegistrationDatePregnantmothersRegister'] = $posts[15];    $_POST['IdentifiedAntenatalRiskConditionsModifiers'] = $posts[16];  
        $_POST['consanguinity'] = $posts[17];    $_POST['RubellaImmunization'] = $posts[18];    $_POST['PrePregnancyScreeningDone'] = $posts[19];
        $_POST['PreconceptionalFolicAcid'] = $posts[20];
        $_POST['Planed_pregnancy_or_not'] = $posts[21];    $_POST['Historyofsubfertility'] = $posts[22];    
        $_POST['Family_planing_method_last_used'] = $posts[23];    $_POST['G'] = $posts[24];  
        $_POST['P'] = $posts[25];    $_POST['C'] = $posts[26];    $_POST['AgeOfYoungestChild'] = $posts[27];    $_POST['LRMP'] = $posts[28];
        $_POST['EDD'] = $posts[29];    $_POST['US_corrected_EDD'] = $posts[30];    $_POST['POA_at_dating_Scan'] = $posts[31];    
        $_POST['Date_of_Quickening'] = $posts[32];
        $_POST['POA_at_Registration'] = $posts[33];       


        unset($posts);
        $posts = array();
    }

}
?> 
  