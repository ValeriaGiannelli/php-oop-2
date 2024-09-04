<!-- classe figlia di Product -->

<?php

class Food extends Product {
    public $size;
    public $age;
    public $foodType;

    public function __construct(string $_name, float $_price, string $_img, Category $_category, ProductType $_type, $_foodType){
        parent::__construct($_name, $_price, $_img, $_category, $_type);
        $this->foodType = $_foodType;
    }

}