<?php
require_once "User_1.php";
class PatientChild extends User_1{
    function _construct($username, $password, $category){
        parent::construct($username, $password, $category);
    }
}

//  $john=new Doctor('John','23','CEO','15000');
// echo $john->get_id();
// echo $john->get_username();
// echo $john->get_category();
?>