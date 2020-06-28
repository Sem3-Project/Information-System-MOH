<?php
require '../../framework/libraries/Controller.php';
require_once '../models/table.php';
require '../../framework/libraries/Model.php';
require '../models/investigation_table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();
$b = new Investigations_table();
$result = $b->load($dbObj, $_GET['id']);
?>