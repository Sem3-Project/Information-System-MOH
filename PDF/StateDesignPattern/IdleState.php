<?php
require_once 'State.php';
require_once "context.php";
require_once "IdleState.php";
require_once '../index.php';
// require_once'../index.php';
class IdleState extends State
{
    public function handle1(): void
    {
        $pdf=new myPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('P','A4',0);
        $pdf->Output();
        //echo "IdleState handles request1.\n";
        
        // echo "ConcreteStateA wants to change the state of the context.\n";
        // $this->context->transitionTo(new ConcreteStateB);
    }
}
?>