<!-- classe figlia di Product -->

<?php

class PetBed extends Product {
    private $width;
    private $height;
    private $depth;

    public function __construct(string $_name, float $_price, string $_img, string $_category, string $_type, int $_width, int $_height, int $_depth){
        parent::__construct($_name, $_price, $_img, $_category, $_type);

        $this->setDimensions($_width, $_height, $_depth);
    }

    public function setDimensions($width, $height, $depth){
        // funzione
        if($width < 0 || $height < 0 || $depth < 0){
            throw new Exception('Il valore inserito non è valido');
        }

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