<?php
require_once "context.php";
require_once "IdleState.php";
require_once "PDFState.php";

//-------------------------this is the running part-------------------------------
$context_1 = new Context();
$context_1->transitionTo(new PDFState);//----------------using this part state will be change from idlestate to pdfstate-------------------------
$context_1->request1();

?>