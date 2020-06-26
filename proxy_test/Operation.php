<?php
//require_once IFolder;
require_once 'user_1.php';
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

?>