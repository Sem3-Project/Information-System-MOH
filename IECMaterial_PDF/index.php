<?php
require('fpdf181/fpdf.php');


class myPDF extends FPDF{
    function header(){
        $this->SetFont('Arial','',6);
        $this->Cell(0,10,'MOH, Gampaha',0,0,'L');
        // $this->Ln();
        // $this->SetFont('Arial','B',20);
        // $this->Cell(0,10,'Record',0,0,'C');
        $this->Ln(10);
        
    }

    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'page'.$this->PageNo(),0,0,'C');
    }


    function ViewTable($db){//------------------------------this part should be change according to the form--------------------------------
        
        $this->SetFont('Times','',12);
        $stmt=$db->query("SELECT * FROM `data2` WHERE id='987211362v'");
        $detail=$stmt->fetch(PDO::FETCH_OBJ);
        $this->Cell(20,8,'ID:',0,0,'L');
        $this->Cell(30,8,$detail->id,1,0,'C');
        $this->Ln(20);

        $this->Cell(30,8,'Companion :',0,0,'L');//------------------this is the name we given------------------------
        $this->Cell(30,8,$detail->Companion,1,0,'C');//----------------------this is the name in database------------------------
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
        $this->Ln();//---------------------
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
        $this->Cell(0,10,'Mid wife visit',0,0,'C');
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
