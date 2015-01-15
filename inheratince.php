<?php
class Beast {
    public $firstName;
    public $lastName;
    public $middleName;
    public $favoriteName;
    public $breed;
    public $size;
    function __construct($firstName, $lastName, $middleName, $favoriteName, $breed, $size) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->favoriteName = $favoriteName;
        $this->breed = $breed;
        $this->size = $size;
    }
    function displayName(){
        return "Hi my name is " . $this->firstName . $this->middleName . $this->lastName;
    }
}
class favoriteName extends Beast {
    function __construct($firstName, $lastName, $middleName, $favoriteName, $breed, $size, $type) {
        parent::__construct($firstName, $lastName, $middleName, $favoriteName, $breed, $size);
        $this->type= $type;
    }
    function displayFavoritename(){
        return "But my favorite name is " . $this->favoriteName;
    }
}
class breedSize extends Beast {
    function __construct($firstName, $lastName, $middleName, $favoriteName, $breed, $size, $flexzone) {
        parent::__construct($firstName, $lastName, $middleName, $favoriteName, $breed, $size);
        $this->flexzone = $flexzone;                                                                                            
    }
            function male6(){
        return "I am a " . $this->breed . "and I am " . $this->size . "tall.";
    }
}
$breed1 = new breedSize("Pablo", "Picasso", "noodles", "puppy", "male", "6ft");
print $breed1->breedSize;
class Legolegends {
    public $gangplank;
    public $ezreal;
    public $katarina;
    public $gold;
    public $diamond;
    public $items;
    function __construct($gangplank, $ezreal, $katarina, $gold, $diamond, $items) {
        $this->gangplank = $gangplank;
        $this->ezreal = $ezreal;
        $this->katarina = $katarina;
        $this->gold = $gold;
        $this->diamond = $diamond;
        $this->items = $items;
    }
    function showChampions(){
        return "These are my favorite champions in the game " . $this->ezreal . " and " . $this->gangplank;
    }
    
}
class Goldy extends Legolegends {
    function __construct($gangplank, $ezreal, $katarina, $gold, $diamond, $items, $poo) {
        parent::__construct($gangplank, $ezreal, $katarina, $gold, $diamond, $items);
        $this->poo = $poo;
        
    }
        function getGold(){
            return "You get" . $this->gold . "by killing minions.";
        }
    }
class Items extends Legolegends {
    function __construct($gangplank, $ezreal, $katarina, $gold, $diamond, $items, $poopoo) {
        parent::__construct($gangplank, $ezreal, $katarina, $gold, $diamond, $items);
        $this->poopoo = $poopoo;
    }
    function aquireItems(){
        return "You get" . $this->items . "by spending your gold in the shop";
    }
}
$goldy1 = new Goldy("Gangplank", "Ezreal", "Katarina", "Gold", "Diamond", "Items");
print $goldy1->showChampions();

class Pineapples {
    public $yellow;
    public $pointy;
    public $big;
    public $hawaii;
    public $nation;
    public $mcdonalds;
    function __construct($yellow, $pointy, $big, $hawaii, $nation, $mcdonalds) {
        $this->yellow = $yellow;
        $this->pointy = $pointy;
        $this->big = $big;
        $this->hawaii = $hawaii;
        $this->nation = $nation;
        $this->mcdonalds = $mcdonalds;
    }
    function showPineapple(){
        return "These are my favorite pineapples ever " . $this->pointy . " and " . $this->yellow;
    }
    
}
class BigL extends Pineapples {
        function __construct($yellow, $pointy, $big, $hawaii, $nation, $mcdonalds , $bking) {
            parent::__construct($yellow, $pointy, $big, $hawaii, $nation, $mcdonalds);
            $this->bking = $bking;
        }
    function getPineapple(){
            return "You get" . $this->mcdonalds . "by being good.";
        }
    }
class Mcdonalds extends Pineapples {
    function __construct($yellow, $pointy, $big, $hawaii, $nation, $mcdonalds, $chipotle) {
        parent::__construct($yellow, $pointy, $big, $hawaii, $nation, $mcdonalds);
        $this->chipotle = $chipotle;
    }
    function aquireNation(){
        return "You get" . $this->nation . "by eating pineapples";
    }
}
$mcdonalds1 = new Mcdonalds("yellow", "pointy", "big", "hawaii", "nation", "mcdonalds");
print $mcdonalds1->getPineapple();