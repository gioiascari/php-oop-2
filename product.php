<?php

    class Product {
        public $brand;
        public $price;
        public $name;
        public $category;

        public function __construct($brand, $price, $name, $category){
            $brand = $this->brand;
            $price = $this->price;
            $name = $this->name;
            $category = $this->category;
        }
        
    }


?>