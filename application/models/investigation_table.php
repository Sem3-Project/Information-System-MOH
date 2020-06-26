<?php
require_once 'table.php';
class Investigations_table extends table{
    //---------------------------write all data fields in investigations form here----------------------------------------
    var $id = null;
    var $ausT1 = "";    var $ausT2 = "";   var $ausT3 = "";
    var $menT1 = "";    var $menT2 = "";   var $menT3 = "";

    var $respirEx = "";
    var $breastEx = "";
    //---------------------------change var to int appropriately-------------------------------------------------------
    var $bs1 = 0;       var $bs1res = "";
    var $bs2 = 0;       var $bs2res = "";

    var $heam1 = 0;     var $heam1res = "";
    var $heam2 = 0;     var $heam2res = "";

    var $other = "";
    var $anti = "";
    var $kick = "";

    var $dentref = "";      var $dentex = "";       var $denttreat = "";
    var $syppoa = 0;        var $syptake = "";      var $sypreci = "";      var $sypres = "";       var $sypref = "";
    var $hivtake = "";      var $hivinform = "";    

    var $tdate1 = "";       var $tbatch1 = "";
    var $tdate2 = "";       var $tbatch2 = "";
    var $tdate3 = "";       var $tbatch3 = "";
    var $tdate4 = "";       var $tbatch4 = "";
    var $tdate5 = "";       var $tbatch5 = "";
    var $tne = "";          var $tnebatch = "";

    //table name is assigned here
    var $tableName="investigations";
}
?>