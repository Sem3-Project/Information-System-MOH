<?php
//require 'errors.php'; 

require '../../framework/libraries/Model.php';
require '../models/table.php';
require '../models/login_table.php';

session_start();
$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');
$message ="";

//Register user
if (isset($_POST['reg_user'])) {
    if (empty($_POST['id']) || empty($_POST['password_1']) || empty($_POST['password_2']) || empty($_POST['catagory'])) {
        $message = "Please fill all fields";
    }
    else if ($_POST['password_1'] != $_POST['password_2']) {
        $message = "The two passwords do not match";
    }
    else{
        $id = $_POST['id'];
        $password1 = $_POST['password_1'];
        $password2 = $_POST['password_2'];
        $catagory = $_POST['catagory'];
        $passwordEnc = md5("$password2");
        $log = new login(); //place where form value variables assigned to NULL

        //checking the database to make sure a user does not already exist with the same username
        $user_check_query = "SELECT * FROM users WHERE id='$id'LIMIT 1";
        $result_1 = mysqli_query($dbObj, $user_check_query);
        $user = mysqli_fetch_assoc($result_1); //can expect an error
  
        if ($user) { 
            if ($user['id'] === $id) {
                array_push($errors, "Username already exists");
            }
        }

        $sql = "INSERT INTO users (id, catagory, password) VALUES('$id', '$catagory', '$passwordEnc')";
        $result = $log->featuredLoad($dbObj, $sql);
        
        $_SESSION['id'] = $id;
        $_SESSION['success'] = "You are now logged in";
        //header("Location:../../index.php");
        header("Location:../views/login_page.php");//--------------------------after registration completed, redirected to login-----------------
        
    }
}$dbObj->closeConnection();

?>