<?php
//require_once 'User_1.php';
require '../models/table.php';
//require '../models/login_table.php';
require 'FolderProxy.php';
class Client{
    protected $user;
    function _construct($user){
        $this->user=$user;
    }
    public function folderAccess($user){
        $fold_proxy=new FolderProxy($user);
        $fold_proxy->permit($user);
    }

}



?>


