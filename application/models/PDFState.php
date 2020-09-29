<?php
require_once 'State.php';
require_once '../index.php';
class PDFState extends State
{
    public function handle1($id): void//---------------------in here we connect database details to form. this is the processing part-------------------
    {
        // $newid='987211362v';
        //echo "PDFState handles request1.\n";
        $db=new PDO('mysql:host=localhost;dbname=moh','root','');//---------------change into your database name here-------------------------
        $pdf=new myPDF_Child();
        $pdf->AliasNbPages();
        $pdf->AddPage('P','A4',0);
        $pdf->ViewTable($db,$id);
        $pdf->Output();
        $context_1 = new Context();
        $context_1->transitionTo(new IdleState);
    }
}

?>