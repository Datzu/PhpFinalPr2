<?php

    include '../model/classes/Concert.php';
    session_start();
    
    $correct = true;
    
    $title = $_POST['title'];
    $group = $_POST['group'];
    $date = $_POST['date'];
    
    if ($title == null) {
        $_SESSION['errors']['title'] = "Wrong title!";
        $correct = false;
    }
    if ($group == null) {
        $_SESSION['errors']['group'] = "Wrong group!";
        $correct = false;
    }
    if ($date == null) {
        $_SESSION['errors']['date'] = "Wrong date!";
        $correct = false;
    }
    foreach ($_SESSION['concerts'] as $concert) {
        if (($concert->getTitle() == $title) && ($concert->getGroup() == $group) && ($concert->getDate() == $date)) {
            $_SESSION['errors']['date'] = "This concert is already inserted!";
            $correct = false;
        }
    }
    if ($correct) {
        if (!isset($_SESSION['concerts'])) {
            $_SESSION['concerts'][0] = new Concert(0, $title, $group, $date);
        } else {
            $_SESSION['concerts'][count($_SESSION['concerts'])] = new Concert(count($_SESSION['concerts']), $title, $group, $date);
        }
    }
    header("Location:../index.php");
    
?>