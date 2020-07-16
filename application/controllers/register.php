<?php
//require 'errors.php'; 

require '../../framework/libraries/Model.php';
require '../models/table.php';
require '../models/login_table.php';

//session_start();
$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');
//$db = mysqli_connect('localhost', 'root', '', 'moh');

$message ="";

//Register user
if (isset($_POST['save'])) {
        $id = $_POST['id'];
        $password1 = $_POST['password_1'];
        $password2 = $_POST['password_2'];
        $catagory = $_POST['catagory'];
        $passwordEnc = md5("$password2");
        $message = "Registration completed successfully";
        $member_status = "active"; //useful in deactivation------------
        
        $tempmember = new login();
        $result1 = $tempmember->load($dbObj, $id);

        if ($result1) {
            ?> <style>div.alert{display:inline-block;}</style><?php
            $msg = "Username already exists. Please select another username..!!";
        }
       // $log = new login(); //place where form value variables assigned to NULL

          //checking the database to make sure a user does not already exist with the same username
        //  $user_check_query = "SELECT * FROM users WHERE id='$id'LIMIT 1";


    else if (empty($_POST['id']) || empty($_POST['password_1']) || empty($_POST['password_2']) || empty($_POST['catagory'])) {
        $message = "Please fill all fields";
    }
    else if ($_POST['password_1'] != $_POST['password_2']) {
        $message = "The two passwords do not match";
    }
    //else{
        // $id = $_POST['id'];
        // $password1 = $_POST['password_1'];
        // $password2 = $_POST['password_2'];
        // $catagory = $_POST['catagory'];
        // $passwordEnc = md5("$password2");
      //  $log = new login(); //place where form value variables assigned to NULL
       

        //checking the database to make sure a user does not already exist with the same username
        //$user_check_query = "SELECT * FROM users WHERE id='$id'LIMIT 1";
        //$result_1 = mysqli_query($dbObj, $user_check_query);
        // $result_1 = $log -> featuredLoad($dbObj, $user_check_query);
        // if (mysqli_num_rows($result_1) > 0) {
        //     //  <style>div.alert{display:inline-block;}</style>
        //     $message = "This NIC number already exists. Please enter correct NIC number..!!";
    
        else{

            $sql= "INSERT INTO users (id, catagory, password) VALUES('$id', '$catagory', '$passwordEnc')";
            $dbObj->doQuery($sql);
            if ($catagory == 'Patient-Mother'){
            $sql2 = "INSERT INTO investigations (id) VALUES ('$id')";
            $dbObj->doQuery($sql2);}
    //         $query = "INSERT INTO users (id, catagory, password) 
  	// 		  VALUES('$id', '$catagory', '$passwordEnc')";
  	// mysqli_query($db, $query);
          
            // $qr = mysql_query("INSERT INTO users(username, emailid, password) values('".$username."','".$emailid."','".$password."')") or die(mysql_error());  
         //$sql = "INSERT INTO users (id, catagory, password) VALUES('$id', '$catagory', '$passwordEnc')";
         //$result = $login->featuredLoad($dbObj, $sql);
            //$member = new table();
      
        //$logindata=array("id"=>$id, "password"=>$passwordEnc);

      /*  $login = new login();
        $logindata = array("id" => $id, "password" => $passwordEnc, "catagory" => $catagory);
       
                $login->bind($logindata);
                
              
                $login->insert($dbObj);
                $msg = "Registered successfully.!";

                  //$member->bind($data);
                //$member->insert($dbObj);
                
               $_POST=array(); */
                //header("Location:../views/home.php");
        }
      // $user = mysqli_fetch_assoc($result_1); //can expect an error
  
        // if ($user) { 
        //     if ($user['id'] === $id) {
        //         array_push($errors, "Username already exists");
        //     }
        // }

        


        // $sql = "INSERT INTO users (id, catagory, password) VALUES('$id', '$catagory', '$passwordEnc')";
        // $result = $log->featuredLoad($dbObj, $sql);
        
        // $_SESSION['id'] = $id;
        // $_SESSION['success'] = "You are now logged in";
        //header("Location:../../index.php");
        //header("Location:../../views/login_page.php");//--------------------------after registration completed, redirected to login-----------------
        //header("Location:../../index.php");
    
    //echo $message;
}//$dbObj->closeConnection();

?>