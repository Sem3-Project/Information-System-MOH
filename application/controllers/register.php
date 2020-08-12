<?php
//require 'errors.php'; 

require '../../framework/libraries/Model.php';
require '../models/table.php';
require '../models/login_table.php';

//session_start();
$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');

$message ="";
$tableName = null;

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

            function insert($tableName,$idname, $id){
              $query_insert = "INSERT INTO $tableName ($idname) VALUES ('$id')";
              return $query_insert;
            }

            $sql= "INSERT INTO users (id, catagory, password) VALUES('$id', '$catagory', '$passwordEnc')";
            $dbObj->doQuery($sql);
            if ($catagory == 'Patient-Mother'){
           
            $dbObj->doQuery(insert('investigations','id',$id));
            $dbObj->doQuery(insert('day1','id',$id));
            $dbObj->doQuery(insert('day2','id',$id));
            $dbObj->doQuery(insert('day3','id',$id));
            $dbObj->doQuery(insert('day4','id',$id));
            $dbObj->doQuery(insert('day5','id',$id));
            $dbObj->doQuery(insert('day6','id',$id));
            $dbObj->doQuery(insert('day7','id',$id));
            $dbObj->doQuery(insert('day8','id',$id));
            $dbObj->doQuery(insert('day9','id',$id));
            $dbObj->doQuery(insert('day10','id',$id));
            $dbObj->doQuery(insert('data','id',$id));
            $dbObj->doQuery(insert('data2','id',$id));
            $dbObj->doQuery(insert('hoscliniccare','id',$id));
            $dbObj->doQuery(insert('optionaldate','id',$id));
            $dbObj->doQuery(insert('usscan','id',$id));
            $dbObj->doQuery(insert('pg7','id',$id));
            $dbObj->doQuery(insert('table1','id',$id));
            $dbObj->doQuery(insert('table2','idNew',$id));
          
          }
            else{
              $dbObj->doQuery(insert('childdata','id',$id));
              $dbObj->doQuery(insert('childdata1','id',$id));
              $dbObj->doQuery(insert('childdata2','id',$id));
              $dbObj->doQuery(insert('childdata3','id',$id));
              $dbObj->doQuery(insert('childdata4','id',$id));
              $dbObj->doQuery(insert('childdata5','id',$id));
              $dbObj->doQuery(insert('optionaldate','id',$id));
              $dbObj->doQuery(insert('table3','idn',$id));
              $dbObj->doQuery(insert('table4','id',$id));
              $dbObj->doQuery(insert('table5','id',$id));
              $dbObj->doQuery(insert('table6','id',$id));
              $dbObj->doQuery(insert('table7','id',$id));
              $dbObj->doQuery(insert('table8','id',$id));
              $dbObj->doQuery(insert('table9','id',$id));
              $dbObj->doQuery(insert('table10','id',$id));
             
            }
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