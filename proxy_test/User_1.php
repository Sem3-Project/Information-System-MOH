<?php
class User_1{
    private $name;
    private $id;
    private $designation;

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