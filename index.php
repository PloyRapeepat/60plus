<?php
ob_start();
session_start();
include('include/db.php');

    if(empty($_GET['p'])){
        $page='./module/home/home.php';
    }else{
        $page='./module/'.$_GET['p'].'.php';
    }

include('template/main.php');