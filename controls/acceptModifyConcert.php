<?php

    include '../model/classes/Concert.php';
    session_start();
    
    $_SESSION['concerts'][$_GET['id']]->setTitle($_SESSION['tmp']['title']);
    $_SESSION['concerts'][$_GET['id']]->setGroup($_SESSION['tmp']['group']);
    $_SESSION['concerts'][$_GET['id']]->setDate($_SESSION['tmp']['date']);
    $_SESSION['concerts'][$_GET['id']]->setCity($_SESSION['tmp']['city']);
    $_SESSION['concerts'][$_GET['id']]->setLocation($_SESSION['tmp']['location']);
    
    header("Location:../index.php");
    
?>