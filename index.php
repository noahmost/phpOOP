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
//            public $firstName = "default name";
//            public $lastName = "default color";
//            public $gender = "male";
//            public $price = 0;
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
        class Cat {
            public $name = "Rexxy";
            public $lastName = "Rex";
            public $gender = "male";
            public $love = "A lot";
            
            function showName(){
                return "{$this->name}" .
                "{$this->lastName}";
            }
        }
        $cat1 = new Cat();
        $cat1->name() = "Rexxy";
        $cat1->lastName() = "Rex";
        print "I named my cat {$cat1->showName()}.";
        
                class House {
            public $color = "blue";
            public $size = "120sqft";
            public $windows = "10";
            public $doors = "21";
            
            function showDoors(){
                return "{$this->doors}" .
                "{$this->windows}";
            }
        }
        $house1 = new House();
        $house1->doors() = "21";
        $house1->windows() = "10";
        print "My house has this amount of doors, {$house1->showDoors()}.";
        
                class Pool {
            public $size = "20ft";
            public $color = "red";
            public $fish = "55";
            public $depth = "10ft";
            
            function showDepth(){
                return "{$this->depth}" .
                "{$this->fish}";
            }
        }
        $pool1 = new Pool();
        $pool1->depth() = "10ft";
        $pool1->fish() = "55";
        print "My pool is this feet deep and has this many fish in it {$pool1->showDepth()}.";
        ?>
    </body>
</html>
