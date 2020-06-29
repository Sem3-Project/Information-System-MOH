<?php
require_once "login_page.php";

//---------------------prototype clss---------------------
class PatientMother extends login{
    
    public function _construct($username, $password, $catagory){
        $this->username = $username;
        $this->password = $password;
        $this->catagory = $catagory;
        
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