<?php
require_once 'State_pdf.php';
require_once "context_pdf.php";
require_once "IdleState_pdf.php";
require_once '../index_pdf.php';

class IdleState extends State
{
    public function handle1($id): void
    {
        $pdf=new myPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('P','A4',0);
        $pdf->Output();
    }
}
?>