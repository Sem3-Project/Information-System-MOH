<?php

class View
{
    public $Stu_details;
    public $user_list;

    public function __construct() {
    }

    public function render($name, $no_header = false) {
        if ($no_header === true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
			require 'views/footer.php';
        }
    }
}