<?php

    if (isset($_POST['delete'])) {
        unset($_SESSION['concerts'][$_POST['id']]);
        if (count($_SESSION['concerts']) == 0) {
            unset($_SESSION['concerts']);
        }
        
        header('Location:index.php');

        function showAllInfo() {
            echo "<pre>";
            print_r($_SESSION['concerts']);
            echo "</pre>";
            echo "<br>";
            echo "<a href='./index.php'><button>Return</button></a>";
        }
    } else {
        include './views/deleteConcert.php';
    }
    
?>