<?php
require '../../framework/libraries/Model.php';
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
}$dbObj->closeConnection();
 
?>


