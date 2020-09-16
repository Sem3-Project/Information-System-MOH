<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>

<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';
require '../models/login_table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');


//change password

if (isset($_POST['new_password'])) {
    $id = $_POST['id'];
    $password1 = $_POST['new_pass'];
    $password2 = $_POST['new_pass_c'];
    $passwordEnc = md5("$password2");

    $pass = new login();
    $result1 = $pass->load($dbObj, $id);

    if (empty($_POST['id']) || empty($_POST['new_pass']) || empty($_POST['new_pass_c']) ) {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","කරුණාකර අවශ්‍ය සියලු තොරතුරු ඇතුළත් කරන්න\nPlease enter all required details","error");';
        echo '}, 200);</script>';
    }
    else if ($_POST['new_pass'] != $_POST['new_pass_c']) {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","මුරපද දෙක නොගැලපේ\nTwo passwords do not match","error");';
        echo '}, 200);</script>';
    }

    else{
        $sql_query = "UPDATE `users` SET `password`= '$passwordEnc' WHERE `id` ='$id'";
        $dbObj->doQuery($sql_query);
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Success!","මුරපදය යාවත්කාලීන කිරීම සාර්ථකයි\nPassword updated successfully","success");';
        echo '}, 200);</script>';
    }
}
?>