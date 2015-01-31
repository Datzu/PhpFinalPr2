<?php
    echo "<br>";
    if (isset($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $message) {
            echo $message."<br>";
        }
        unset($_SESSION['errors']);
    }

?>