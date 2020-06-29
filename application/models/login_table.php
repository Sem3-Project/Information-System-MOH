<?php

//class login 
class login extends table
{
    var $id=null;
    var $password=null;
    var $catagory=null;
    var $password_1 = null;
    var $password_2 = null;
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

<!--?php
class User_1{
    var $name;
    var $id;
    var $catagory;

    function __construct($name, $id, $catagory) {
        $this->name = $name;
        $this->id = $id;
        $this->catagory = $catagory;
    }

    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }

    function set_id($id) {
        $this->id = $id;
    }
    function get_id() {
        return $this->id;
    }

    function set_catagory($catagory) {
        $this->catagory = $catagory;
    }
    function get_catagory() {
        return $this->catagory;
    }
}

?-->