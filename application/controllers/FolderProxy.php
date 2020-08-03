<?php
require_once 'IOperation.php';
//require_once 'login_table.php';
require_once 'Operation.php';
//require '../models/login_table.php';

class FolderProxy implements IOperation{
    //private $folder;
    protected $user;
    var $session_value; //---------------------recheck---------------------------
    //var $session_value=(isset($_SESSION['catagory']))?$_SESSION['catagory']:'';
    function _contruct($user){
        $this->user = $user;
    }
     //----------------------------re check -------------------------------------------------------------
   /* public function isAdmin()
    {
	if ((isset($_SESSION['id']) && $_SESSION['id']['catagory'] == 'Patient-Mother') || (isset($_SESSION['id']) && $_SESSION['id']['catagory'] == 'Patient-Child')) {
		return true;
	}else{
		return false;
	}
    } */


    public function permit($user){
        try{
            $name_of_user_1=$user->get_designation();
            $user_id = $user->get_id();
          
            $_SESSION['id'] = $user_id;      // Storing id of the logged in user, in the session variable 
            $_SESSION['catagory']=$name_of_user_1;//===clear if errors occur==
            $_SESSION['success'] = "You have logged in"; //welcome message
        
            if ($name_of_user_1=='Patient-Mother'|| $name_of_user_1=='Patient-Child'){

                header("Location:../views/user.php");
                //$this-> folder=new Folder();
                $folder=new Operation();
                echo "Not granted for editing.<br>";
                $folder->permit($user);
                // header("Location:../../index.php");
               
            }
            else{
                 //$_SESSION['id'] = $user_id; 
                header("Location:../views/newHome.php");
               // $session_value = "admin";
                echo 'Access granted.<br>';
            }
        }catch(Exception $ex){
            echo 'error.<br>';
        }
    }
      /*  function allowEdit() {
            $session_value=(isset($_SESSION['catagory']))?$_SESSION['catagory']:'';

            $userType= "<?php echo $session_value; ?>";
            if($userType == "Patient-Mother" || $userType == "Patient-Mother"){
                return true;
            }else{
                echo("Not allowed for editing");
                return false;
            }
        }   */

        

    
    // public function UPDATE(){
    //     $name_of_userr_1=$userr_1->get_designation();
    //     if ($name_of_userr_1=='CEO'){
    //         $this-> folder=new Folder();
    //         echo "Access granted for updating";
    //         folder.UPDATE();
    //     }
    //     else{
    //         echo 'Access denied';
    //     }
        
    // }
}

?>





<!--?php
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

?-->