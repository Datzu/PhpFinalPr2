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
            $_SESSION['concerts'][0] = new Concert("titulo1", "los chunguitos", "01/01/10");
            include 'controls/mainController.php';  
            session_destroy();
        ?>
    
    </body>
</html>
