<?php

class Concert {
    private $id;
    private $title;
    private $group;
    private $date;
    private $city;
    private $location;

    public function __construct($id, $title, $group, $date, $city, $location) {
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
    
    public function delete() {
        unset($this);
    }

    public function show() {
        echo "[(Id: ".$this->id.") - "
                . "(Title: ".$this->title.") - "
                . "(Group: ".$this->group.") - "
                . "(Date: ".$this->date.") - "
                . "(City: ".$this->city.") - "
                . "(Location: ".$this->location.")]";
    }
    
    public function showButtons() {
        echo "<a href='./views/modifyConcert.php?id=".$this->id."'><input type='button' value='Modify'/></a>";
        echo "<a href='./views/deleteConcert.php?id=".$this->id."'><input type='button' value='Delete'/></a>";
    }
    
}
