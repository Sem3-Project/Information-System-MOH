<?php
require_once "Staff.php";
class Doctor extends Staff{
    function _construct($password, $catagory,$id){
        parent::construct( $password, $catagory,$id);
    }
}

//  $john=new Doctor('John','23','CEO','15000');
// echo $john->get_id();
// echo $john->get_username();
// echo $john->get_category();
?>