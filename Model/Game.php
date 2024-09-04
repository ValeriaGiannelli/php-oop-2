<!-- classe figlia di Product -->

<?php

class Game extends Product {
    private $gameType;

    public function __construct(string $_name, float $_price, string $_img, string $_category, string $_type, string $_gameType){
        parent::__construct($_name, $_price, $_img, $_category, $_type);
        $this->gameType = $_gameType;
    }
}