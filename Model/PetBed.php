<!-- classe figlia di Product -->

<?php

class PetBed extends Product {
    public $width;
    private $height;
    private $depth;

    public function __construct(string $_name, float $_price, string $_img, string $_category, string $_type, int $_width, int $_height, int $_depth){
        parent::__construct($_name, $_price, $_img, $_category, $_type);
        $this->width = $_width;
        $this->height = $_height;
        $this->depth = $_depth;
    }

    public function setDimension($width, $height, $depth){
        // funzione
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    public function getDimensionWidth(){
        return $this->width;
    }

    public function getDimensionHeight(){
        return $this->height;
    }

    public function getDimensionDepth(){
        return $this->depth;
    }

    public function printDimension(){
        echo "Larghezza: $this->width cm - Profondità: $this->depth cm - Altezza: $this->height cm";
    }
}