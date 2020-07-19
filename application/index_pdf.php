<?php
require('fpdf181/fpdf.php');


//ob_start();
class myPDF extends FPDF{
    function header(){
        //ob_start();
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

        //-----------------IEC Material.4th page in Pregnancy Report-----------------------



        $this->SetFont('Times','',12);
        $stmt=$db->query("SELECT * FROM `data2` WHERE id='$id'");
        $detail=$stmt->fetch(PDO::FETCH_OBJ);

        $this->Cell(30,8,'Companion :',0,0,'L');
        $this->Cell(30,8,$detail->Companion,1,0,'C');
        $this->Ln(20);

        $this->SetFont('Times','B',12);
        $this->Cell(80,10,'Birth and Emergency prepared plan',1,0,'C');
        $this->Cell(50,10,'Delivery',1,0,'C');
        $this->Cell(50,10,'In an emergency',1,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(80,10,'Intended Hospital',1,0,'C');
        $this->Cell(50,10,$detail->Intended_Hospital_Delivery,1,0,'C');
        $this->Cell(50,10,$detail->Intended_Hospital_Emergency,1,0,'C');
        $this->Ln();//---------------------
        $this->Cell(80,10,'Mode of Transport',1,0,'C');
        $this->Cell(50,10,$detail->Mode_of_Transport_Delivery,1,0,'C');
        $this->Cell(50,10,$detail->Mode_of_Transport_Emergency,1,0,'C');
        $this->Ln();
        $this->Cell(80,10,'Average cost',1,0,'C');
        $this->Cell(50,10,$detail->Average_cost_Delivery,1,0,'C');
        $this->Cell(50,10,$detail->Average_cost_Emergency,1,0,'C');
        $this->Ln();
        $this->Cell(80,10,'Distance from Home',1,0,'C');
        $this->Cell(50,10,$detail->Distance_from_Home_Delivery,1,0,'C');
        $this->Cell(50,10,$detail->Distance_from_Home_Emergency,1,0,'C');
        $this->Ln();
        $this->Cell(80,10,'Time taken to reach',1,0,'C');
        $this->Cell(50,10,$detail->Time_taken_to_reach_Delivery,1,0,'C');
        $this->Cell(50,10,$detail->Time_taken_to_reach_Emergency,1,0,'C');
        $this->Ln(30);
        


        $this->SetFont('Times','B',12);
        $this->Cell(30,10,'Session',1,0,'C');
        $this->Cell(40,10,'Date',1,0,'C');
        $this->Cell(40,10,'Husband',1,0,'C');
        $this->Cell(40,10,'wife',1,0,'C');
        $this->Cell(40,10,'Other',1,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(30,10,'1st T',1,0,'C');
        $this->Cell(40,10,$detail->first_date,1,0,'C');
        $this->Cell(40,10,$detail->first_Husband,1,0,'C');
        $this->Cell(40,10,$detail->first_wife,1,0,'C');
        $this->Cell(40,10,$detail->first_Other,1,0,'C');
        $this->Ln();//---------------------
        $this->Cell(30,10,'2nd T',1,0,'C');
        $this->Cell(40,10,$detail->sec_date,1,0,'C');
        $this->Cell(40,10,$detail->sec_Husband,1,0,'C');
        $this->Cell(40,10,$detail->sec_wife,1,0,'C');
        $this->Cell(40,10,$detail->sec_Other,1,0,'C');
        $this->Ln();
        $this->Cell(30,10,'3rd T',1,0,'C');
        $this->Cell(40,10,$detail->third_date,1,0,'C');
        $this->Cell(40,10,$detail->third_Husband,1,0,'C');
        $this->Cell(40,10,$detail->third_wife,1,0,'C');
        $this->Cell(40,10,$detail->third_Other,1,0,'C');
        $this->Ln(20);

        $this->SetFont('Arial','B',20);
        $this->Cell(0,10,'IEC',0,0,'C');
        $this->Ln();
        $this->Cell(0,10,'Material',0,0,'C');
        $this->Ln(30);

        $this->SetFont('Times','B',12);
        $this->Cell(50,10,'pre pregnancy book',1,0,'C');
        $this->SetFont('Times','',12);
        $this->Cell(40,10,$detail->pre_pregnancy_book,1,0,'C');
        $this->Ln();
        $this->SetFont('Times','B',12);
        $this->Cell(50,10,'Feeding breastmilk book',1,0,'C');
        $this->SetFont('Times','',12);
        $this->Cell(40,10,$detail->Feeding_breastmilk_book,1,0,'C');
        $this->Ln();
        $this->SetFont('Times','B',12);
        $this->Cell(50,10,'pre childhood book',1,0,'C');
        $this->SetFont('Times','',12);
        $this->Cell(40,10,$detail->pre_childhood_book,1,0,'C');
        $this->Ln();
        $this->SetFont('Times','B',12);
        $this->Cell(50,10,'family planing book',1,0,'C');
        $this->SetFont('Times','',12);
        $this->Cell(40,10,$detail->family_planing_book,1,0,'C');
        $this->Ln(30);

        $this->SetFont('Arial','B',20);
        $this->Cell(0,10,'Midwife visit',0,0,'C');
        $this->Ln();
        $this->Cell(0,10,'Dates',0,0,'C');
        $this->Ln(30);

        $this->SetFont('Times','',12);
        $this->Cell(50,10,$detail->d1,1,0,'C');
        $this->Cell(50,10,$detail->d2,1,0,'C');
        $this->Cell(50,10,$detail->d3,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,$detail->d4,1,0,'C');
        $this->Cell(50,10,$detail->d5,1,0,'C');
        $this->Cell(50,10,$detail->d6,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,$detail->d7,1,0,'C');
        $this->Cell(50,10,$detail->d8,1,0,'C');
        $this->Cell(50,10,$detail->d9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,$detail->d10,1,0,'C');
        $this->Cell(50,10,$detail->d11,1,0,'C');
        $this->Cell(50,10,$detail->d12,1,0,'C');
        $this->Ln(30);

        $this->SetFont('Arial','B',20);
        $this->Cell(0,10,'Clinic',0,0,'C');
        $this->Ln();
        $this->Cell(0,10,'Dates',0,0,'C');
        $this->Ln(30);

        $this->SetFont('Times','',12);
        $this->Cell(50,10,$detail->cd1,1,0,'C');
        $this->Cell(50,10,$detail->cd2,1,0,'C');
        $this->Cell(50,10,$detail->cd3,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,$detail->cd4,1,0,'C');
        $this->Cell(50,10,$detail->cd5,1,0,'C');
        $this->Cell(50,10,$detail->cd6,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,$detail->cd7,1,0,'C');
        $this->Cell(50,10,$detail->cd8,1,0,'C');
        $this->Cell(50,10,$detail->cd9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,$detail->cd10,1,0,'C');
        $this->Cell(50,10,$detail->cd11,1,0,'C');
        $this->Cell(50,10,$detail->cd12,1,0,'C');
        $this->Ln(20);

        $this->SetFont('Arial','B',20);
        $this->Cell(0,10,'Family Planing',0,0,'C');
        $this->Ln(20);

        $this->SetFont('Times','',12);
        $this->Cell(80,10,'Date of counselling',1,0,'C');
        $this->Cell(50,10,$detail->Conselling_date,1,0,'C');
        $this->Ln();
        $this->Cell(80,10,'chosen method',1,0,'C');
        $this->Cell(50,10,$detail->chosen_method,1,0,'C');
        $this->Ln();
        $this->Cell(80,10,'Reason for not using a method',1,0,'C');
        $this->Cell(50,10,$detail->reson_not_method,1,0,'C');
        $this->Ln();
        $this->Cell(80,10,'Consent form signed date',1,0,'C');
        $this->Cell(50,10,$detail->Consent_form_date,1,0,'C');
        $this->Ln(30);


    }
}



?>
