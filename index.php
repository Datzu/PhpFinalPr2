<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles.css" />
    </head>
    <body>
        <a href='closeSession.php'><button>Close session</button></a><a href='index.php'><button>HOME</button></a>
        <?php
            include './model/classes/Concert.php';
            session_start();
            include 'controls/mainController.php';
        ?>
    </body>
</html>
