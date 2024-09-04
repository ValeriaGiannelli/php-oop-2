<!-- classe genitore di: Food - Game - PetBed -->

<?php

class Product {
    public $name;
    protected $price;
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

    // funzione per cambiare il prezzo
    public function setPrice($price){
        // varie modifiche
        // restituisco il prezzo
        $this->price = $price;
    }

    // funzione per usare il prezzo
    public function getPrice(){
        return $this->price;
    }

}