<?php
class Model
{
    function __construct()
    {
     
        $pdo = new PDO('mysql:host=localhost; port=8080; dbname=moh','root','');
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
}
?>