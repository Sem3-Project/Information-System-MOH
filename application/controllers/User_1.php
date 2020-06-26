<?php
class User_1{
    private $username;
    private $password;
    private $category;

    function __construct($username, $password, $category) {
        $this->username = $username;
        $this->password = $password;
        $this->category = $category;
    }



    function set_username($username) {
        $this->username = $username;
    }
    function get_username() {
        return $this->username;
    }


    function set_password($password) {
        $this->password = $password;
    }
    function get_password() {
        return $this->password;
    }


    function set_category($category) {
        $this->category = $category;
    }
    function get_category() {
        return $this->category;
    }
}

?>