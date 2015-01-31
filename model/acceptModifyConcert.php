
<?php
    $_SESSION['concerts'][$_POST['id']]->setTitle($_SESSION['tmp']['title']);
    $_SESSION['concerts'][$_POST['id']]->setGroup($_SESSION['tmp']['group']);
    $_SESSION['concerts'][$_POST['id']]->setDate($_SESSION['tmp']['date']);
    $_SESSION['concerts'][$_POST['id']]->setCity($_SESSION['tmp']['city']);
    $_SESSION['concerts'][$_POST['id']]->setLocation($_SESSION['tmp']['location']);

    header("Location:./index.php");
?>