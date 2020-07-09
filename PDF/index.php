<?php
require('fpdf181/fpdf.php');
//$db=new PDO('mysql:host=localhost;dbname=new_reg','root','');

class myPDF extends FPDF{
    function header(){
        $this->SetFont('Arial','B',20);
        $this->Cell(0,10,'Employee',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(0,10,'street',0,0,'C');
        $this->Ln(20);
    }

    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'page'.$this->PageNo(),0,0,'C');
    }

    // function headerTable(){
    //     $this->SetFont('Times','B',12);
    //     $this->Cell(40,10,'Name',1,0,'C');
    //     $this->Cell(20,10,'Age',1,0,'C');
    //     $this->Ln();
    // }

    function ViewTable($db){//------------------------------this part should be change according to the form--------------------------------
        $this->SetFont('Times','',12);
        $stmt=$db->query('SELECT * FROM `new_reg`');
        while($data=$stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(20,10,'Name:',0,0,'L');//------------------this is the name we given------------------------
            $this->Cell(40,10,$data->name,1,0,'L');//----------------------this is the name in database------------------------
            $this->Ln(20);
            $this->Cell(20,10,'Age:',0,0,'L');
            $this->Cell(20,10,$data->Age,1,0,'L');
            $this->Ln(20);

        }
    }
}

// $pdf=new myPDF();
// $pdf->AliasNbPages();
// $pdf->AddPage('P','A4',0);
// //$pdf->headerTable();
// $pdf->ViewTable($db);
// $pdf->Output();




?>
