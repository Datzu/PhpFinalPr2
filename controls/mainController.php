<?php

    include './views/showErrors.php';
    if (isset($_POST['submit'])) {
        if ($_POST['button'] == "add") {
            include './controls/addConcert.php';
            include './views/showConcerts.php';
        } elseif ($_POST['button'] == "delete") {
            include './controls/deleteConcert.php';
        } elseif ($_POST['button'] == "modify") {
            include './controls/modifyConcert.php';
        }
    } else {
        include './views/mainView.php';
        include './views/showConcerts.php';
    }
    
?>