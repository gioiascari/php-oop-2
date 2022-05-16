<?php

    class Product {
        public $brand;
        public $price;
        public $name;
        public $category;

        public function __construct($brand, $price, $name, $category){
            $this->brand = $brand ; 
            $this->price = $price;
            $this->name = $name;
            $this->category = $category;
            //se inserisco il dato in questa maniera qua sotto, in 'new product' mi darà risultato 'null'
            // $category = $this->category;
        }
        
    }


?>


