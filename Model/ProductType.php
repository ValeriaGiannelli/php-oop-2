<!-- classe composition -->
<!-- classe per definire il tipo di articolo -->


<?php
class ProductType {
    public $name;

    public function __contruct($_name){
        $this->name = $_name;
    }
}