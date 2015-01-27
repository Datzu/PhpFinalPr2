<?php

    include '../model/classes/Concert.php';
    
    session_start();
    
    $concert = $_SESSION['concerts'][$_GET['id']];
    
    $correct = true;
    
    $title = $_POST['title'];
    $group = $_POST['group'];
    $date = $_POST['date'];
    $city = $_POST['city'];
    $location = $_POST['location'];
    
    if ($title == null) {
        $_SESSION['errors']['title'] = "Error while modifing the title!";
        $correct = false;
    }
    if ($group == null) {
        $_SESSION['errors']['group'] = "Error while modifing the group!";
        $correct = false;
    }
    if ($date == null) {
        $_SESSION['errors']['date'] = "Error while modifing the date!";
        $correct = false;
    }
    if ($city == null) {
        $_SESSION['errors']['city'] = "Error while modifing the city!";
        $correct = false;
    }
    if ($location == null) {
        $_SESSION['errors']['location'] = "Error while modifing the location!";
        $correct = false;
    }
    
    if ($correct) {
        $_SESSION['tmp']['id'] = $concert->getId();
        $_SESSION['tmp']['title'] = $title;
        $_SESSION['tmp']['group'] = $group;
        $_SESSION['tmp']['date'] = $date;
        $_SESSION['tmp']['city'] = $city;
        $_SESSION['tmp']['location'] = $location;
        header('Location:../views/acceptModifyConcert.php');
    } else {
        header('Location:../index.php');
    }
    
    
    
    /*
    echo "<br>";
    echo "<a href='../index.php'><button>Return</button></a>";
     * */

?>