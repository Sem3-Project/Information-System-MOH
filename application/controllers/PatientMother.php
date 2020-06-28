<?php
require_once "User_1.php";

//---------------------prototype clss---------------------
class PatientMother extends User_1{
    
    public function _construct($username, $password, $category){
        $this->username = $username;
        $this->password = $password;
        $this->category = $category;
        
    }
//------------------------using the function clone.So it is cloanable.----------------
    function __clone() {
    }
}

//$john=new PatientMother('John','23','CEO','15000');
//echo $john->get_id();
// echo $john->get_username();
// $baby=clone $john;
// echo $baby->get_username();
// echo $john->get_category();

?>