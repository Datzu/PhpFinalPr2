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
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setGroup($group) {
        $this->group = $group;
    }
    
    public function setDate($date) {
        $this->date = $date;
    }
    
    public function setCity($city) {
        $this->city = $city;
    }
    
    public function setLocation($location) {
        $this->location = $location;
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
                . "(Location: ".$this->location.")] ";
        echo $this->showButtons();
    }
    
    public function showButtons() {
        echo "<form action='index.php' method='post'>";
        echo "<input type='text' name='id' value='$this->id' hidden /><input type='text' name='button' value='delete' hidden /><input type='submit' name='submit' value='Delete'/></a> ";
        echo "</form>";
        echo "<form action='index.php' method='post'>";
        echo "<input type='text' name='id' value='$this->id' hidden /><input type='text' name='modify' value='0' hidden /><input type='text' name='button' value='modify' hidden /><input type='submit' name='submit' value='Modify'/></a>";
        echo "</form>";
    }
    
}
