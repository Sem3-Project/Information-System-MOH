<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>

<?php 
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');

if (isset($_POST['deactivate'])) {

    if (empty($_POST['id'])) {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Enter username!","error");';
        echo '}, 200);</script>';
    }
    else{
        $id = $_POST['id'];
        $catagory = $_POST['catagory'];

        $sql= "DELETE FROM users WHERE id='$id'";
        $dbObj->doQuery($sql);

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Success!","Successfully deactivated!","success");';
        echo '}, 200);</script>';      
    }
}
?>

