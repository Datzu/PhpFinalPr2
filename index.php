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
        
            include 'model/classes/Concert.php';
            session_start();
            
            echo "<a href='closeSession.php'><button>Close session</button></a>";
            echo "<a href='test.php'><button>Cuando el delete no va... ¡pulsa este botón! AKA Botón del pánico</button></a>";
            echo "<br>";
            include 'controls/mainController.php';
            
        ?>
    
    </body>
</html>
