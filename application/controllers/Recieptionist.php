<?php
require_once "Staff.php";
class Recieptionist extends Staff{
    function _construct($username, $password, $category,$id){
        parent::construct($username, $password, $category,$id);
    }
}

//  $john=new Recieptionist('John','23','CEO','15000');
// echo $john->get_id();
// echo $john->get_username();
// echo $john->get_category();
?>