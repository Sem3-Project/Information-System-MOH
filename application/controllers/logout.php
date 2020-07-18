<?php

if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['id']); 
    header("location: ../views/login_page.php"); 
}

?>