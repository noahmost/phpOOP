<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//            class Dog {
//            public $firstName;
//            public $lastName;
//            public $breed;
//            function __construct($title, $firstName, $lastName, $breed){
//                $this->firstName = $firstName;
//                $this->lastName = $lastName;
//                $this->breed = $breed;
//            }
//            
//            function getName(){
//                return "{$this->firstName}" .
//                "{$this->lastName}";
//            }
//        }
//            $dog1 = new Dog();
//            $dog1->firstName() = "Rex";
//            $dog1->lastName() =  "Brown";
//            print "The dogs name is {$dog1->getName()}.";
        
//        EXAMPLE 1
        
        class Cat {
            public $name;
            public $lastName;
            public $gender;
            public $love;
            
            function __construct($name, $lastName, $gender, $love) {
                $this->name = $name;
                $this->lastName = $lastName;
                $this->gender = $gender;
                $this->love = $love;
            }
            
            function showName(){
                return "{$this->name}" .
                "{$this->lastName}";
            }
        }
        $cat1 = new Cat("Rex", "Rek'sai", "male", "mucho love");
        print "I named my cat {$cat1->showName()}.";
                
//                EXAMPLE 2
                class House {
            public $color;
            public $size;
            public $windows;
            public $doors;
            
            function __construct($color, $size, $windows, $doors) {
                $this->color = $color;
                $this->size = $size;
                $this->windows = $windows;
                $this->doors = $doors;
            }
            
            function showDoors(){
                return "{$this->doors}" .
                "{$this->windows}";
            }
        }
        $house1 = new House("blue", "120sqft", "21", "45");
        print "My house has this amount of doors, {$house1->showDoors()}.";
        
//        EXAMPLE 3
                class Pool {
            public $size;
            public $color;
            public $fish;
            public $depth;
            
            function __construct($size, $color, $fish, $depth) {
                $this->size = $size;
                $this->color = $color;
                $this->fish = $fish;
                $this->depth = $depth;
            }
            
            function showDepth(){
                return "{$this->depth}" .
                "{$this->fish}";
            }
        }
        $pool1 = new Pool("59yrds", "purple", "49", "21ft");
        print "My pool is this feet deep and has this many fish in it {$pool1->showDepth()}.";
        ?>
    </body>
</html>
