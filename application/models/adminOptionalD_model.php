<?php
require '../controllers/login.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');

$id = "";
$date1 = "";
$date2 = "";
$curdate = date("Y-m-d");

//get data from the form
function getData()
{
    $data = array();
    $data[0] = $_POST['id'];
    $data[1] = $_POST['date1'];
    $data[2] = $_POST['date2'];
    return $data;
}

$adminod = new table();

if (isset($_POST['Insert'])) {
    $info = getData();

    $update_query = "UPDATE `optionaldate` SET `id`='$info[0]',`date1`='$info[1]',`date2`='$info[2]' WHERE id='$info[0]'";
    if (!empty($info[0])){
    if ($info[1] > $curdate && $info[2] > $curdate) {
        try {
            $pdate_result = $adminod->featuredLoad($dbObj, $update_query);
            if ($pdate_result) {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Success!","Data saved successfully!","success");';
                echo '}, 200);</script>';
            }
        } catch (Exception $ex) {
            echo ("<p style='color:black; font-size: 30px; background-color:white;'>" . "error in update" . $ex->getMessage() . "</p>");
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Error!","Error in update!","error");';
            echo '}, 200);</script>';
        }
    }
    else{
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Please Select Valid Dates!","error");';
        echo '}, 200);</script>';
    }
}
else{
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal("Error!","Please Select Valid Patient ID!","error");';
    echo '}, 200);</script>';
}

}


