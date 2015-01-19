<?php

class Concert {
    private $title;
    private $group;
    private $date;

    public function __construct($title, $group, $date) {
        $this->title = $title;
        $this->group = $group;
        $this->date = $date;
    }
    
    public function modifyDate($date) {
        $this->date = $date;
    }
    
    public function delete() {
        unset($this);
    }
    
    public function show() {
        echo "[(Title: ".$this->title.") - (Group: ".$this->group.") - (Date: ".$this->date.")]";
    }
    
}
