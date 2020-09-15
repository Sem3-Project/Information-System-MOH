<?php

require '../../framework/libraries/Model.php';
require '../models/table.php';
require '../models/login_table.php';


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
        

        $member_status = "active"; 

        $tempmember = new login();
        $result1 = $tempmember->load($dbObj, $id);

        if ($result1) {
            ?> <style>div.alert{display:inline-block;}</style><?php
            echo '<script type="text/javascript">alert("Username already exists. Please select another username..!")</script>';
           
        }

    else if (empty($_POST['id']) || empty($_POST['password_1']) || empty($_POST['password_2']) || empty($_POST['catagory'])) {
        echo '<script type="text/javascript">alert("Please fill all fields!")</script>';

    }
    else if ($_POST['password_1'] != $_POST['password_2']) {
        echo '<script type="text/javascript">alert("The two passwords do not match!")</script>';

    }
        
        else{

          echo '<script type="text/javascript">alert("Registration completed successfully!")</script>';

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
    
        }
     
}

?>