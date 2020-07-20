<?php
require('fpdf181/fpdf.php');


class myPDF extends FPDF{
    function header(){
        $this->SetFont('Arial','',6);
        $this->Cell(0,10,'MOH, Gampaha',0,0,'L');
        $this->Ln(10);
        
    }


    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'page'.$this->PageNo(),0,0,'C');
    }

//------------------------------Following part should be change according to the form--------------------------------
    function ViewTable($db,$id){
        $this->SetFont('Arial','B',20);
        $this->Cell(0,10,'Pregnancy',0,0,'C');
        $this->Ln();
        $this->Cell(0,10,'Record',0,0,'C');
        $this->Ln(30);

        $this->SetFont('Times','',12);
        $stmt=$db->query("SELECT * FROM `data` WHERE id='$id'");
        $detail=$stmt->fetch(PDO::FETCH_OBJ);


        //------------------------------Basic Details.1st page in pregnancy Report------------------------------------

        $this->Cell(20,10,'ID:',0,0,'L');
        $this->Cell(30,10,$detail->id,1,0,'C');
        $this->Ln(20);

        $this->Cell(30,8,'Blood Group:',0,0,'L');//------------------this is the name we given. It will appear in the PDF.------------------------
        $this->Cell(20,8,$detail->BloodGroup,1,0,'C');//----------------------this is the variable name in database------------------------
        $this->Cell(50,8,'BMI:  ',0,0,'R');
        $this->Cell(20,8,$detail->BMI,1,0,'C');
        $this->Ln(20);

        $this->Cell(30,8,'Height:',0,0,'L');
        $this->Cell(20,8,$detail->height,1,0,'C');
        $this->Ln(20);

        $this->Cell(30,8,'Allergies:  ',0,0,'L');
        $this->Cell(100,8,$detail->allergies,1,0,'C');
        $this->Ln(20);
        
        $this->Cell(40,8,'Name of the mother :',0,0,'L');
        $this->Cell(70,8,$detail->Name_of_the_mother,1,0,'C');
        $this->Cell(50,8,'Age :  ',0,0,'R');
        $this->Cell(20,8,$detail->age,1,0,'C');
        $this->Ln(20);

        $this->Cell(40,8,'Name of the Hospital Clinic :',0,0,'L');
        $this->Ln();
        $this->Cell(150,8,$detail->Name_of_the_Hospital_Clinic,1,0,'C');
        $this->Ln(20);

        $this->Cell(70,8,'Name of the Consultant Obstetrician :',0,0,'R');
        $this->Ln();
        $this->Cell(150,8,$detail->Name_of_the_Consultant_Obstetrician,1,0,'C');
        $this->Ln(20);

        $this->Cell(50,8,'Telephone number :',0,0,'L');
        $this->Cell(30,8,$detail->tele,1,0,'C');
        $this->Ln(20);
        
        $this->Cell(50,8,'Name of the field Clinic :',0,0,'L');
        $this->Cell(70,8,$detail->Name_of_the_field_Clinic,1,0,'C');
        $this->Cell(50,8,'Grama Niladari Division :',0,0,'R');
        $this->Cell(20,8,$detail->GramaNiladariDivision,1,0,'C');
        $this->Ln(20);

        $this->Cell(80,8,'Registration No.(Eligible Family Register) :',0,0,'L');
        $this->Cell(10,8,$detail->RegistrationNoEligibleFamilyRegister,1,0,'C');
        $this->Cell(80,8,'Registration Date (Eligible Family Register) :',0,0,'R');
        $this->Cell(23,8,$detail->RegistrationDateEligibleFamilyRegister,1,0,'C');
        $this->Ln(20);

        $this->Cell(80,8,'Registration No.(Pregnant mothers Register) :',0,0,'L');
        $this->Cell(10,8,$detail->RegistrationNoPregnantmothersRegister,1,0,'C');
        $this->Cell(85,8,'Registration Date (Pregnant mothers Register) :',0,0,'R');
        $this->Cell(23,8,$detail->RegistrationDatePregnantmothersRegister,1,0,'C');
        $this->Ln(20);
        
        $this->Cell(150,8,'Identified Antenatal Risk Conditions Modifiers :',0,0,'L');
        $this->Ln();
        $this->Cell(150,8,$detail->IdentifiedAntenatalRiskConditionsModifiers,1,0,'C');
        $this->Ln(20);

        $this->Cell(70,8,'Consanguinity :',0,0,'L');
        $this->Cell(20,8,$detail->consanguinity,1,0,'C');
        $this->Cell(70,8,'Rubella Immunization :',0,0,'R');
        $this->Cell(20,8,$detail->RubellaImmunization,1,0,'C');
        $this->Ln(20);

        $this->Cell(70,8,'Prepregnancy Screening Done :',0,0,'L');
        $this->Cell(20,8,$detail->PrePregnancyScreeningDone,1,0,'C');
        $this->Cell(70,8,'Preconceptional Folic Acid :',0,0,'R');
        $this->Cell(20,8,$detail->PreconceptionalFolicAcid,1,0,'C');
        $this->Ln(20);

        $this->Cell(70,8,'Planed pregnancy or not :',0,0,'L');
        $this->Cell(20,8,$detail->Planed_pregnancy_or_not,1,0,'C');
        $this->Cell(70,8,'History of subfertility :',0,0,'R');
        $this->Cell(20,8,$detail->Historyofsubfertility,1,0,'C');
        $this->Ln(20);

        $this->Cell(80,8,'Family planing method last used :',0,0,'L');
        $this->Cell(70,8,$detail->Family_planing_method_last_used,1,0,'C');
        $this->Ln(20);

        $this->SetFont('Arial','B',16);
        $this->Cell(200,8,'Present obstetric history',0,0,'C');
        $this->Ln(20);

        $this->SetFont('Times','',12);
        $this->Cell(80,8,'Gravidity :',0,0,'L');
        $this->Ln();
        $this->Cell(20,8,'G :',0,0,'R');
        $this->Cell(20,8,$detail->G,1,0,'C');
        $this->Cell(20,8,'P :',0,0,'R');
        $this->Cell(20,8,$detail->P,1,0,'C');
        $this->Cell(20,8,'C :',0,0,'R');
        $this->Cell(20,8,$detail->C,1,0,'C');
        $this->Ln(20);

        $this->Cell(50,8,'Age Of Youngest Child :',0,0,'L');
        $this->Cell(40,8,$detail->AgeOfYoungestChild,1,0,'C');
        $this->Cell(50,8,'LRMP :',0,0,'R');
        $this->Cell(40,8,$detail->LRMP,1,0,'C');
        $this->Ln(20);

        $this->Cell(50,8,'EDD :',0,0,'L');
        $this->Cell(40,8,$detail->EDD,1,0,'C');
        $this->Cell(50,8,'US corrected EDD :',0,0,'R');
        $this->Cell(40,8,$detail->US_corrected_EDD,1,0,'C');
        $this->Ln(20);

        $this->Cell(50,8,'POA at dating Scan :',0,0,'L');
        $this->Cell(40,8,$detail->POA_at_dating_Scan,1,0,'C');
        $this->Cell(50,8,'Date of Quickening :',0,0,'R');
        $this->Cell(40,8,$detail->Date_of_Quickening,1,0,'C');
        $this->Ln(20);

        $this->Cell(50,8,'POA at Registration :',0,0,'L');
        $this->Cell(70,8,$detail->POA_at_Registration,1,0,'C');
        $this->Ln(20);

        


    }
}



?>
