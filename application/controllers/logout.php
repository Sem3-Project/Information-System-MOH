<?php
require 'login.php';


    session_destroy(); 
    unset($_SESSION['id']); 
    header("location: ../views/login_page.php"); 


?>