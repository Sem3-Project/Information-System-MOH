<?php

class table
{
    public $id = null;
    public $tableName = null;

    function __construct()
    {
        
    }

    protected function buildQuery($task) 
    {
        $sql = '';
        if ($task == 'load') {
            $sql = "SELECT * from {$this->tableName} where id = '{$this->id}'";
            return $sql;
        } 
     
    }

    function load($dbObj, $id)
    {
        $this->id = $id;
      
        $sql = $this->buildQuery('load');
        $dbObj->doQuery($sql);

        if(mysqli_num_rows($dbObj->getResult())>0) {
            $rows = $dbObj->loadObjList();
            foreach ($rows as $key => $value) {
                if ($key == 'id') {
                    continue;
                }
                $this->$key = $value;

            }
            return true;
        }else{
            return false;
        }

    }

    function featuredLoad($dbObj,$sql){
        $result = mysqli_query($dbObj->getConnection(),$sql) or die("Database access failed..!!");
        return $result;
    }

}
?>