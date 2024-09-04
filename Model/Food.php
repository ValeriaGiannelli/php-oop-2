<!-- classe figlia di Product -->

<?php

class Food extends Product {
    public $size;
    public $age;
    public $foodType;

    public function __construct(string $_name, float $_price, string $_img, string $_category, string $_type, $_size, $_age, $_foodType){
        parent::__construct($_name, $_price, $_img, $_category, $_type);
        $this->size = $_size;
        $this->age = $_age;
        $this->foodType = $_foodType;
    }

    public function printDescription(){
        echo "Cibo $this->foodType adatto per animale di taglia $this->size con età $this->age.";
    }

}