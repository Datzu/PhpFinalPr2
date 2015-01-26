<?php

    include '../model/classes/Concert.php';
    
    session_start();
    
    header('Location:../index.php');
    
    echo "<br>";
    echo "<a href='../index.php'><button>Return</button></a>";

?>