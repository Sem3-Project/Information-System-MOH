<?php

require '../../framework/libraries/Model.php';

class Investigation extends Mother{

    var $id = null;
    var $ausT1 = null;
    var $ausT2 =null;  
    var $ausT3 = null;
    var $tableName = "investigations";

    var $menT1 = null;  var $menT2 = null;   var $menT3 = null;

    var $respirEx = null;
    var $breastEx = null;
    var $bs1 = 0;       var $bs1res = null;
    var $bs2 = 0;       var $bs2res = null;

    var $heam1 = 0;     var $heam1res = null;
    var $heam2 = 0;     var $heam2res = null;

    var $other = null;
    var $anti = null;
    var $kick = null;

    var $dentref = null;     var  $dentex = null;      
    var  $denttreat = null;  var $syppoa = 0;       
    var  $syptake = null;      var $sypreci = null;     
    var  $sypres = null;      var  $sypref = null;
    var $hivtake = null;    var $hivinform = null;    

    var $tdate1 = null;       var $tbatch1 = null;
    var $tdate2 = null;       var $tbatch2 = null;
    var $tdate3 = null;       var $tbatch3 = null;
    var $tdate4 = null;       var $tbatch4 = null;
    var $tdate5 = null;       var $tbatch5 = null;
    var $tne = null;          var $tnebatch = null;

}
?>