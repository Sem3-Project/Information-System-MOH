<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';
require '../models/login_table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');

$message ="";

//change password

if (isset($_POST['new_password'])) {
    $id = $_POST['id'];
    $password1 = $_POST['new_pass'];
    $password2 = $_POST['new_pass_c'];
    $passwordEnc = md5("$password2");

    $pass = new login();
    $result1 = $pass->load($dbObj, $id);

    if (empty($_POST['id']) || empty($_POST['new_pass']) || empty($_POST['new_pass_c']) ) {
        $message = "Please fill all fields";
    }
    else if ($_POST['new_pass'] != $_POST['new_pass_c']) {
        $message = "The two passwords do not match";
    }

    else{
        $sql_query = "UPDATE `users` SET `password`= '$passwordEnc' WHERE `id` ='$id'";
        $dbObj->doQuery($sql_query);
        header('location:../views/login_page.php');
    }
}
?>