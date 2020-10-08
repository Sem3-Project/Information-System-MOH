<?php
require_once 'IOperation.php';
require_once 'Operation.php';

class FolderProxy implements IOperation{
    protected $user;
    var $session_value; 
    function _contruct($user){
        $this->user = $user;
    }
    
    public function permit($user){
        try{
            $name_of_user_1=$user->get_designation();
            $user_id = $user->get_id();
          
            $_SESSION['id'] = $user_id;      // Storing id of the logged in user, in the session variable 
            $_SESSION['catagory']=$name_of_user_1;
            $_SESSION['success'] = "You have logged in";
        
            if ($name_of_user_1=='Patient-Mother'|| $name_of_user_1=='Patient-Child'){

                header("Location:../views/user.php");
                $folder=new Operation();
                echo "Not granted for editing.<br>";
                $folder->permit($user);
               
            }
            else{
                header("Location:../views/newHome.php");
                echo 'Access granted.<br>';
            }
        }catch(Exception $ex){
            echo 'error.<br>';
        }
    }
      
}

?>
