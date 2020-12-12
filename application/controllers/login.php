<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>

<?php
session_start(); //session started
require '../../framework/libraries/Model.php';
require '../models/table.php';
require 'FolderProxy.php';

class Client{
    protected $user;
    function _construct($user){
        $this->user=$user;
    }
    public function folderAccess($user){
       
        $fold_proxy=new FolderProxy($user);
        $fold_proxy->permit($user);
    
    }

}

$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');
$message ="";

// LOGIN USER
if (isset($_POST['login_user'])) {

    if (empty($_POST['id']) || empty($_POST['password'])) {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","කරුණාකර අවශ්‍ය සියලු තොරතුරු ඇතුළත් කරන්න\nPlease enter all required details","error");';
        echo '}, 200);</script>';
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
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Error!","කරුණාකර නිවැරදි පරිශීලක නාමය ඇතුළත් කරන්න<br>Please enter correct username","error");';
                echo '}, 200);</script>';

        //select category
            }
            else if($log->password != $passwordEnc ){ 
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Error!","කරුණාකර නිවැරදි මුරපදය ඇතුළත් කරන්න<br>Please enter correct password","error");';
                echo '}, 200);</script>';
                        }

            else if ($log->catagory != $catagory){
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Error!","කරුණාකර නිවැරදි කාණ්ඩය තෝරන්න<br>Please select correct category","error");';
                echo '}, 200);</script>'; 
                       }

            else if($log->password == $passwordEnc && $log->id==$id && $log->catagory==$catagory ) {
                
                $detail=new login($id,$passwordEnc,$catagory);
                $c=new Client($detail); 
                $c->folderAccess($detail);

                die;
            }
            else{
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Error!","පරිශීලක නාමය හෝ මුරපදය වලංගු නැත\nUsername or password is invalid","error");';
                echo '}, 200);</script>'; 
            }
        }
        else{
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Error!","පරිශීලක නාමය හෝ මුරපදය වලංගු නැත\nUsername or password is invalid","error");';
            echo '}, 200);</script>';
        }
     
    }
    ?>
  
  <?php  
}$dbObj->closeConnection(); 



 
?>


