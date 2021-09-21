<?php
class SearchField {
    public $label;
    public $field;
    
    function __construct($label, $field){
        $this->label = $label;
        $this->field = $field;
    }

}