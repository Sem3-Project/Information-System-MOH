<?php
//require_once IFolder;
require_once 'User_1.php';
class Folder implements IFolder{
    protected $use;
    public function ADD($use){
        //add method
        echo "Access approved for adding.<br>";

    }
    // public function UPDATE(){
    //     echo "Access approved for updating";
    // }
}

?>