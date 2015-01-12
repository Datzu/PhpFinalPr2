<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Concert
 *
 * @author Carlos
 */
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
}
