<?php

require '../models/login_table.php';

class Operation implements IOperation{
    protected $user;
    var $session_value;
    public function permit($user){
        //grant access
        echo "Access denied for editing.<br>";   
    }
}

?>
