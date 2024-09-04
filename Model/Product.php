<!-- classe genitore di: Food - Game - PetBed -->

<?php

class Product {
    public $name;
    public $price;
    public $img;
    public $category;
    public $type;

    public function __construct(string $_name, float $_price, string $_img, string $_category, string $_type){
        $this->name = $_name;
        $this->price = $_price;
        $this->img = $_img;
        $this->category = $_category;
        $this->type = $_type;
    }

}