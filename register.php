<!DOCTYPE html>
<?php 
    ini_set('display_errors', 1);
    require_once 'function.php';
    error_reporting(E_ERROR);
       
    $mySmarty = getSmarty();   
    $mySmarty->display("register.tpl");
?>