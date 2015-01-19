<?php
    
    for ($i = 0; $i < count($_SESSION['concerts']); $i++) {
        echo $_SESSION['concerts'][$i]->show()."<br>";
    }

?>