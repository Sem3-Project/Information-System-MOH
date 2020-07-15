<?php
class User_1{
    var $name;
    var $id;
    var $designation;

    function __construct($name, $id, $designation) {
        $this->name = $name;
        $this->id = $id;
        $this->designation = $designation;
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

    function set_designation($designation) {
        $this->designation = $designation;
    }
    function get_designation() {
        return $this->designation;
    }
}

?>






<!--?php
class User_1{
    private $id;
    private $password;
    private $catagory;

    function __construct($id, $password, $catagory) {
        $this->id = $id;
        $this->password = $password;
        $this->catagory = $catagory;
    }

    function set_id($id) {
        $this->id = $id;
    }
    function get_id() {
        return $this->id;
    }

    function set_password($password) {
        $this->password = $password;
    }
    function get_password() {
        return $this->password;
    }

    function set_catagory($catagory) {
        $this->catagory = $catagory;
    }
    function get_catagory() {
        return $this->catagory;
    }
}

?-->