<?php
require_once "User_1.php";

//--------------------class which is used prototype--------------------
class PatientChild extends User_1{
    public function _construct($username, $password, $category){
        $prototype=new PatientMother($username, $password, $category);
        $baby=clone $prototype;//-----------create the clone of PatientMother as $baby
        $this->username = $baby->get_username();
        $this->password = $baby->get_password();
        $this->category = $baby->get_category();
        //return ($baby);
    }
}
// $baby=new PatientChild('niwi','12','patient');
// var_dump($baby);


// $baby_1=new PatientChild('niwithi','2','patient');
// var_dump($baby_1);
// echo $baby_1->get_username();

?>