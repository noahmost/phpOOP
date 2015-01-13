<?php

class Pablo{
    public $age;
    public $size;
    public $hair;
    
    function __construct($age, $size, $hair) {
        $this->age = $age;
        $this->size = $size;
        $this->hair = $hair;
    }
    
    function showAge(){
        return "{$this->age}";
    }
    function hairSize(){
        return "{$this->hair}" .
        "{$this->size}";
    }
}
$pablo1 = new Pablo("13", " 6ft", " yellow and");
print "Pablo is {$pablo1->showAge()}. He has this color hair and is this tall {$pablo1->hairSize()}.";