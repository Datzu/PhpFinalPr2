<?php

    include './model/classes/Concert.php';
    session_start();
    if (!isset($_SESSION['concerts'])) {
        $_SESSION['concerts'] = [];
    }
    for ($i = 0; $i < 5; $i++) {
        $id = 0;
        while (isset($_SESSION['concerts'][$id])) {
            $id++;
        }
        $_SESSION['concerts'][$id] = new Concert($id, "title".$id, "group".$id, "date".$id, "city".$id, "location".$id);
    }
    header("Location:index.php");

?>