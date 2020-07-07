<?php

session_start();

//include 'application/controllers/login.php';
//require 'application/controllers/login.php';

// if(isset($_GET['message'])){
//     echo $_GET['message'];
// }

//echo $id;
//entry-point file
// $john=new login($id,$passwordEnc,$catagory);
// $c=new Client($john); 
// $c->folderAccess($john);
echo '<br><br>';
//echo "Welcome";
//home page should be here
//require 'application/views/login_page.php';
if(isset($_POST['edit'])){
    
    //<a href="configure_id_for_usersettings.php" onclick="return allowLibrarianOnly()">
}
?>

<html>
    <head>
        <title>Home</title>

    </head>
    <body>
        <div>
            <br><br>
            <form action="">
                
                <button type="submit" name="edit" value="edit">Edit clinic details</button><br><br>
                <button type="submit" name="report" value="report">View Reports</button><br><br>
                <button type="submit" name="date" value="date">Visit date confirmation</button><br><br>
            </form>
        </div>
    </body>
</html>