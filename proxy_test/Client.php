<?php
require_once 'User_1.php';
require 'FolderProxy.php';
class Client{
    protected $user;
    function _construct($user){
        $this->user=$user;

    }
    public function folderAccess($user){
        //$john=new User_1('john','23','CEO');
        $fold_proxy=new FolderProxy($user);
        $fold_proxy->ADD($user);
        //return $t;

    }

}
$john=new user_1('John','23','CEO');
$c=new Client($john);
$c->folderAccess($john);
echo'<br>';

$jon=new user_1('Jon','23','Accountant');
$c=new Client($jon);
$c->folderAccess($jon);
echo'<br>';

$johny=new user_1('Johny','23','CEO');
$c=new Client($johny);
$c->folderAccess($johny);


?>