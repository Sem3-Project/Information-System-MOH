<?php
require_once 'State.php';
require_once '../index.php';
class PDFState extends State
{
    public function handle1(): void//---------------------in here we connect database details to form. this is the processing part-------------------
    {
        //echo "PDFState handles request1.\n";
        $db=new PDO('mysql:host=localhost;dbname=new_reg','root','');
        $pdf=new myPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('P','A4',0);
        //$pdf->headerTable();
        $pdf->ViewTable($db);
        $pdf->Output();
        $context_1 = new Context();
        $context_1->transitionTo(new IdleState);
    }
}

?>