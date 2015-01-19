<?php

    class AddButton extends Button {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function getButton() {
            return "<input type='button' />";
        }
        
    }

?>
