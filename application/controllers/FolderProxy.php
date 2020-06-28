<?php
require_once 'IOperation.php';
require_once 'User_1.php';
require_once 'Operation.php';
class FolderProxy implements IOperation{
    //private $folder;
    protected $user;

    function _contruct($user){
        $this->user = $user;
    }
    
    public function ADD($user){
        try{
            $name_of_user_1=$user->get_designation();
            if ($name_of_user_1=='CEO'){
                //$this-> folder=new Folder();
                $folder=new Operation();
                echo "Acccess granted for adding.<br>";
                $folder->ADD($user);
            }
            else{
                echo 'Access denied.<br>';
            }
        }catch(Exception $ex){
            echo 'error.<br>';
        }
        
        

        

    }
    // public function UPDATE(){
    //     $name_of_userr_1=$userr_1->get_designation();
    //     if ($name_of_userr_1=='CEO'){
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