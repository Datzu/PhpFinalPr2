<?php

class Concert {
    private $id;
    private $title;
    private $group;
    private $date;

    public function __construct($id, $title, $group, $date, $city, $location) {
        echo $id;
        $this->id = $id;
        $this->title = $title;
        $this->group = $group;
        $this->date = $date;
        $this->city = $city;
        $this->location = $location;
    }
    
    public function modifyDate($date) {
        $this->date = $date;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getGroup() {
        return $this->group;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function getCity() {
        return $this->city;
    }
    
    public function getLocation() {
        return $this->location;
    }


    public function show() {
        include_once './views/addButtons.php';
        echo "[(Id: ".$this->id.") - "
                . "(Title: ".$this->title.") - "
                . "(Group: ".$this->group.") - "
                . "(Date: ".$this->date.") - "
                . "(City: ".$this->city.") - "
                . "(Location: ".$this->location.")]";
        echo getButton($this->id);
    }
    
}
