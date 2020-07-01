<?php
//require_once IFolder;
//require_once 'User_1.php';
require '../models/login_table.php';

class Operation implements IOperation{
    protected $user;
    var $session_value;
    public function permit($user){
        //grant access
        echo "Access denied for editing.<br>"; //---------------------------------add js code for disabling-------------------------------
        //$session_value = "user"; //-------------------recheck-------------------------------
    }
    // public function UPDATE(){
    //     echo "Access approved for updating";
    // }
}

?>




<!--?php
//require_once IFolder;
require_once 'User_1.php';
class Operation implements IOperation{

    protected $user;
    public function ADD($user){
        //add method
        echo "Access approved for adding.<br>";
    }
    // public function UPDATE(){
    //     echo "Access approved for updating";
    // }
    
}
$op = new Operation();
echo $op->ADD("CEO");

?-->