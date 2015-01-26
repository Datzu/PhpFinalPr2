<?php

    include '../model/classes/Concert.php';
    session_start();
    
    $correct = true;
    
    $title = $_POST['title'];
    $group = $_POST['group'];
    $date = $_POST['date'];
    $city = $_POST['city'];
    $location = $_POST['location'];
    
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
    if ($city == null) {
        $_SESSION['errors']['city'] = "Wrong city!";
        $correct = false;
    }
    if ($location == null) {
        $_SESSION['errors']['location'] = "Wrong location!";
        $correct = false;
    }
    if (isset($_SESSION['concerts'])) {
        echo "Total concerts: ".count($_SESSION['concerts'])."<br>";
        foreach ($_SESSION['concerts'] as $concert) {
            if (($concert->getTitle() === $title) && ($concert->getGroup() === $group) && ($concert->getDate() === $date)) {
                $_SESSION['errors']['inserted'] = "This concert is already inserted!";
                $correct = false;
            }
        }
    }
    if ($correct) {
        if (!isset($_SESSION['concerts'])) {
            $_SESSION['concerts'][0] = new Concert(0, $title, $group, $date, $city, $location);
        } else {
            $id = 0;
            while (isset($_SESSION['concerts'][$id])) {
                $id++;
            }
            $_SESSION['concerts'][$id] = new Concert($id, $title, $group, $date, $city, $location);
        }
    }
    header("Location:../index.php");
    // echo "<a href='../index.php'><button>Return</button></a>";
    
    function debugObject($concert) {
        echo "---<br>";
        echo "title: ".$title."/".$concert->getTitle()."<br>";
        echo "group: ".$group."/".$concert->getGroup()."<br>";
        echo "date: ".$date."/".$concert->getDate()."<br>";
        echo ($concert->getTitle() == $title)."/";
        echo ($concert->getGroup() == $group)."/";
        echo ($concert->getDate() == $date)."<br>";
        echo "---<br>";
        echo "<br><a href='../index.php'><button>Return</button></a>";
    }
    
?>