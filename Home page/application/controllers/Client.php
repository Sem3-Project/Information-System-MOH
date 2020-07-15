<?php
//require_once 'User_1.php';
require '../models/table.php';
//require '../models/login_table.php';
require 'FolderProxy.php';
class Client{
    protected $user;
    function _construct($user){
        $this->user=$user;
    }
    public function folderAccess($user){
        //$john=new User_1('john','23','CEO');
        $fold_proxy=new FolderProxy($user);
        $fold_proxy->permit($user);
        //return $t;
    }

}
// $john=new login('John','23','Patient-Child');
// $c=new Client($john);
// $c->folderAccess($john);
// echo'<br>';

// $jon=new login('Jon','23','Patient-Mother');
// $c=new Client($jon);
// $c->folderAccess($jon);
// echo'<br>';

// $johny=new login('Johny','23','Doctor');
// $c=new Client($johny);
// $c->folderAccess($johny);


?>



<!--?php
require_once 'User_1.php';
require 'FolderProxy.php';

class Client{
    protected $user;
    function _construct($user){
        $this->user=$user;

    }
    public function folderAccess($user){
        //$john=new user_1('john','23','CEO');
        $fold_proxy=new FolderProxy($user);
        $fold_proxy->ADD($user);
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


?-->