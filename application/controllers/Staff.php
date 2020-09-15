<?php
require_once "User_1.php";
abstract class Staff extends User_1{
    private $id;
    public function _construct($username, $password, $category,$id){
        $this->username = $username;
        $this->password = $password;
        $this->category = $category;
        $this->id = $id;
    }
    function get_id() {
        return $this->id;
    }
}



?>