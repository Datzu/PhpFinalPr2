<?php

    echo "You have ".count($_SESSION['concerts'])." concerts.<br>";
    
    foreach ($_SESSION['concerts'] as $concert) {
        echo $concert->show()."<br>";
    }
    
?>