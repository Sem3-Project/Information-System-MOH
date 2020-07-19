<?php 
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');

if (isset($_POST['deactivate'])) {

    if (empty($_POST['id'])) {
        echo '<script type="text/javascript">alert("Enter username!");</script>';
    }
    else{
        $id = $_POST['id'];
        $catagory = $_POST['catagory'];

        $sql= "DELETE FROM users WHERE id='$id'";
        $dbObj->doQuery($sql);

        echo '<script type="text/javascript">alert("Deactivated successfully!");</script>';
    }
}
?>

