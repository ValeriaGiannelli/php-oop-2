<!-- classe figlia di Product -->

<?php

class Game extends Product {
    private $gameType;

    public function __construct(string $_name, float $_price, string $_img, string $_category, string $_type, string $_gameType){
        parent::__construct($_name, $_price, $_img, $_category, $_type);
        $this->setGame($_gameType);
    }

    public function setGame($gameType){
        if(strlen($gameType) < 3){
            throw new Exception('La parola che hai scritto: '. $gameType . ' è sbagliata. Deve essere almeno di 3 caratteri');
        }
        $this->gameType = $gameType;
    }


    public function getGame(){
        return $this->gameType;
    }
}