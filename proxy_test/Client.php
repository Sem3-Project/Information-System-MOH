<?php
require_once 'User_1.php';
require 'FolderProxy.php';
class Client{
    protected $use;
    function _construct($use){
        $this->use=$use;

    }
    public function folderAccess($use){
        //$john=new User_1('john','23','CEO');
        $fold_proxy=new FolderProxy($use);
        $fold_proxy->ADD($use);
        //return $t;

    }

}
$john=new User_1('John','23','CEO');
$c=new Client($john);
$c->folderAccess($john);
echo'<br>';

$jon=new User_1('Jon','23','Accountant');
$c=new Client($jon);
$c->folderAccess($jon);
echo'<br>';

$johny=new User_1('Johny','23','CEO');
$c=new Client($johny);
$c->folderAccess($johny);


?>