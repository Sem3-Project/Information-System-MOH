<?php
require '../controllers/tableNew.php';
require '../controllers/Edit.php';
abstract Class Child extends table implements Editable{

    function Child(){}

    function search($dbObj)
    {
        $sql = $this->buildQuery('search');
        $dbObj->doQuery($sql);
    }

    function update($dbObj)
    {
        $sql = $this->buildQuery('update');
        $dbObj->doQuery($sql);
    }
    
}
?>