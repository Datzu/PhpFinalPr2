<?php

    include '../model/classes/Concert.php';
    
    session_start();
    
    unset($_SESSION['concerts'][$_GET['id']]);
    if (count($_SESSION['concerts']) == 0) {
        unset($_SESSION['concerts']);
    }
    
    header('Location:../index.php');

    function showAllInfo() {
        echo "<pre>";
        print_r($_SESSION['concerts']);
        echo "</pre>";
        echo "<br>";
        echo "<a href='../index.php'><button>Return</button></a>";
    }

?>