<?php
    ini_set('display_errors', 1);
    require_once 'function.php';

    session_start();
    logout();
    header('location:index.php');

