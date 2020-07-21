<?php
//https://jeroensormani.com/hiding-the-admin-bar/---------------------------must see---------------------------

require '../../framework/libraries/Model.php';
require '../models/table.php';
//require_once 'login_table.php';
require 'FolderProxy.php';
//require '../models/login_table.php';
//require 'Client.php';

//require 'errors.php'; -----------------------------------provide code to catch all possible errors --------------------------------------------------------------------

session_start(); //session started--------------------------



/*class Access{
function permit($user){
    try{
        $name_of_user_1=$user->get_designation();
        //if ($name_of_user_1=='CEO'){
        if ($name_of_user_1=='Patient-Mother'|| $name_of_user_1=='Patient-Child'){
            //$this-> folder=new Folder();
            $folder=new Operation();
            echo "Not granted for editing.<br>";
            $folder->permit($user);
        }
        else{
            echo 'Access granted.<br>';
        }
    }catch(Exception $ex){
        echo 'error.<br>';
        }
    }
}*/


//$access = new FolderProxy(); //instance of FolderProxy---------------/////-------------/////-------------------
//$access->_contruct($id);

class Client{
    protected $user;
    function _construct($user){
        $this->user=$user;
    }
    public function folderAccess($user){
        //$john=new User_1('john','23','CEO');
            // Storing id of the logged in user, in the session variable 
        
          
            // Welcome message 
        //$_SESSION['success'] = "You have logged in"; 
        $fold_proxy=new FolderProxy($user);
        $fold_proxy->permit($user);
        //return $t;
    }
    //function restrictUsers() {
      //  var adminType= "<?php echo $session_value; ?-->";
    //     if(adminType == "clerk" || adminType == "librarian"){
    //         return true;
    //     }else{
    //         alert("The area you are trying to enter is restricted to your admin type.\nPlease login as a valid admin.");
    //         return false;
    //     }
    // }
}


$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');
$message ="";

// LOGIN USER
if (isset($_POST['login_user'])) {

    if (empty($_POST['id']) || empty($_POST['password'])) {
        $message = "Username or password is invalid!";
    }
    else{
        $id = $_POST['id'];
        //$_SESSION['id'] = $id;
        $password = $_POST['password'];
        $catagory = $_POST['catagory'];
        $passwordEnc = md5("$password");
        $log = new login(); //place where form value variables assigned to NULL

        $sql = "Select * from users where id = '$id'";
        $result = $log->featuredLoad($dbObj, $sql);
        
        //$_SESSION['id'] = $user_id; 

        $numOfRows = mysqli_num_rows($result);
        if ($numOfRows == 1) {
            foreach (mysqli_fetch_assoc($result) as $key => $value) {
                $log->$key = $value;
            }
            
            if($id != $log->id ){
                $message = "Incorrect username..!";
                //echo '<script type="text/javascript">alert($message)</script>';
               
//-----------------------very imp. select cat-------------------------
            }
            else if($log->password != $passwordEnc ){ //------------------------------------should be changed to passwordEnc in final------------------------
                $message = "Incorrect password..!";
            
            }
            else if ($log->catagory != $catagory){
                $message = "Please select correct category!";
            }
            else if($log->password == $passwordEnc && $log->id==$id && $log->catagory==$catagory ) {
                
                
                // $_SESSION['loggedin'] = true;
                // $_SESSION['id'] = $id;

                // if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                //     echo "Welcome to the member's area, " . $_SESSION['id'] . "!";
                // } else {
                //     echo "Please log in first to see this page.";
                // }

                // $fold_proxy=new FolderProxy($user);
                // $fold_proxy->permit($user);
                $detail=new login($id,$passwordEnc,$catagory);
                $c=new Client($detail); 
                $c->folderAccess($detail);

                die;
            }
            else{
                $message = "Invalid username..!";
               
            }
        }
        // $john=new login($id,$passwordEnc,$catagory);
        // $c=new Client($john); 
        // $c->folderAccess($john);
        // $access = new Access();
        //permit($catagory);
    }
    ?>
    <!-- <script>alert($message)</script> -->
    <!-- //echo '<script type="text/javascript">alert($message)</script>'; -->
  
  <?php  
}$dbObj->closeConnection(); 

/*require '../../framework/libraries/Model.php';
require '../models/table.php';
require '../models/login_table.php';
//require 'errors.php'; -----------------------------------include error catching code --------------------------------------------------------------------

session_start();
$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');
$message ="";

// LOGIN USER
if (isset($_POST['login_user'])) {

    if (empty($_POST['id']) || empty($_POST['password'])) {
        $message = "Username or password is invalid!";
    }
    else{
        $id = $_POST['id'];
        $password = $_POST['password'];
        $catagory = $_POST['catagory'];
        $passwordEnc = md5("$password");
        $log = new login(); //place where form value variables assigned to NULL
        $sql = "Select * from users where id = '$id'";
        $result = $log->featuredLoad($dbObj, $sql);
     
        $numOfRows = mysqli_num_rows($result);
        if ($numOfRows == 1) {
            foreach (mysqli_fetch_assoc($result) as $key => $value) {
                $log->$key = $value;
            }
            
            if($id != $log->id ){
                $message = "Incorrect username..!";
               
//-----------------------very imp. select cat-------------------------
            }
            else if($log->password != $password ){ //------------------------------------should be changed to passwordEnc in final------------------------
                $message = "Incorrect password..!";
            
            }
            else if($log->password == $password && $log->id==$id ) {
           
                header("Location:../../index.php");
                echo "logged in successfully!";
            }
            else{
                $message = "Invalid username..!";
               
            }
        }
    }
}$dbObj->closeConnection();*/
 

 
?>


