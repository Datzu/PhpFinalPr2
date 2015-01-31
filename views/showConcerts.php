<?php

    if (isset($_SESSION['concerts'])) {
        echo "<br>";
        foreach ($_SESSION['concerts'] as $concert) {
            echo $concert->show();
        }
    } else {
        echo "<br>You have 0 concerts.<br>";
    }
    
?>