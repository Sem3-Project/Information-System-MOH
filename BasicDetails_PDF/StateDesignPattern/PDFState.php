<?php
require_once 'State.php';
require_once '../index.php';
class PDFState extends State
{
    public function handle1($id): void//---------------------in here we connect database details to form. this is the processing part-------------------
    {
<<<<<<< HEAD
        //=========================check in3,4==============================================
        $newid='987211362v';
=======
        // $newid='987211362v';
>>>>>>> 634a8367029aa2e2cee39d85a99e84966f237e28
        //echo "PDFState handles request1.\n";
        $db=new PDO('mysql:host=localhost;dbname=moh','root','');//---------------change into your database name here-------------------------
        $pdf=new myPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('P','A4',0);
        $pdf->ViewTable($db,$id);
        $pdf->Output();
        $context_1 = new Context();
        $context_1->transitionTo(new IdleState);
    }
}

?>