<!-- classe figlia di Product -->

<?php

class Food extends Product {
    public $size;
    private $age;
    public $foodType;

    public function __construct(string $_name, float $_price, string $_img, string $_category, string $_type, $_size, $_age, $_foodType){
        parent::__construct($_name, $_price, $_img, $_category, $_type);
        $this->size = $_size;
        $this->setAge($_age);
        $this->foodType = $_foodType;
    }

    public function setAge($age){
        if(is_numeric($age) && $age > 100 ){
            throw new Exception ('A meno che non sia una tartaruga gigante, mi sa che hai sbagliato');
        } else if(is_numeric($age) && $age < 0){
            throw new Exception ('Valore non valido');
        }
        $this->age = $age;

    }

    public function printDescription(){
        echo "Cibo $this->foodType adatto per animale di taglia $this->size con età $this->age.";
    }

}