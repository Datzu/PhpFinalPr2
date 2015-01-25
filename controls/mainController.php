<?php
    include 'views/showErrors.php';
    include 'views/addConcert.php';
    if (isset($_SESSION['concerts'])) {
        include './views/showConcerts.php';
    } else {
        echo "No concerts.";
    }
?>