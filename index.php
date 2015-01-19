<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles.css" />
    </head>
    <body>
        <?php
        
            session_start();
            
            
            
            include 'model/classes/Concert.php';
            
            for ($i = 0; $i < 10; $i++) {
                $_SESSION['concerts'][$i] = new Concert("title".$i, "group".$i, date("d/m/y"));
            }
            
            include 'controls/mainController.php';
            
            session_destroy();
            
        ?>
    
    </body>
</html>
