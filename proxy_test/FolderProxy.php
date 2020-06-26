<?php
require_once 'IFolder.php';
require_once 'User_1.php';
require_once 'Folder.php';
class FolderProxy implements IFolder{
    //private $folder;
    protected $use;

    function _contruct($use){
        $this->use = $use;
    }
    
    public function ADD($use){
        try{
            $name_of_User_1=$use->get_designation();
            if ($name_of_User_1=='CEO'){
                //$this-> folder=new Folder();
                $folder=new Folder();
                echo "Acccess granted for adding.<br>";
                $folder->ADD($use);
            }
            else{
                echo 'Access denied.<br>';
            }
        }catch(Exception $ex){
            echo 'error.<br>';
        }
        
        

        

    }
    // public function UPDATE(){
    //     $name_of_User_1=$User_1->get_designation();
    //     if ($name_of_User_1=='CEO'){
    //         $this-> folder=new Folder();
    //         echo "Acccess granted for updating";
    //         folder.UPDATE();
    //     }
    //     else{
    //         echo 'Access denied';
    //     }
        
    // }
}

?>