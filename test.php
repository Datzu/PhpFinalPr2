<?php

    include './model/classes/Concert.php';
    session_start();
    for ($i = 0; $i < 10; $i++) {
        $_SESSION['concerts'][$i] = new Concert($i, "title1"+$i, "group"+$i, "date"+$i);
    }
    header("Location:index.php");

?>