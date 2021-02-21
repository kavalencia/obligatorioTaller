<!DOCTYPE html>
<?php 
    ini_set('display_errors', 1);
    require_once 'function.php';

    $mySmarty = getSmarty();
    $mySmarty->display("login.tpl");
?>