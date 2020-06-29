<?php
//require_once "User_1.php";
require_once "login_table.php";

//--------------------class which is used prototype--------------------
class PatientChild extends login{
    public function _construct( $password, $catagory, $id){
        $prototype=new PatientMother( $password, $catagory, $id);
        $baby=clone $prototype;//-----------create the clone of PatientMother as $baby
        $this->id = $baby->get_id();
        $this->password = $baby->get_password();
        $this->catagory = $baby->get_designation();
        //return ($baby);
    }
}
// $baby=new PatientChild('niwi','12','patient');
// var_dump($baby);


// $baby_1=new PatientChild('niwithi','2','patient');
// var_dump($baby_1);
// echo $baby_1->get_username();

?>