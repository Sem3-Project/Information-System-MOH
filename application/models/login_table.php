<?php

//class login 
class login extends table
{
    var $id=null;
    var $password=null;
    var $catagory=null;
    var $password_1 = null;
    var $password_2 = null;
    // $_SESSION['success'] = ""; 
    var $tableName="users";

    function __construct($id=null, $password=null, $catagory=null) {
        $this->id = $id;
        $this->password = $password;
        $this->catagory = $catagory;
    }

    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_password($name) {
        $this->name = $name;
    }
    function get_password() {
        return $this->name;
    }

    function set_id($id) {
        $this->id = $id;
    }
    function get_id() {
        return $this->id;
    }

    function set_designation($catagory) {
        $this->catagory = $catagory;
    }
    function get_designation() {
        return $this->catagory;
    }
}

?>

