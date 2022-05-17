<?php
include_once __DIR__ . '/index.php';

    class ShoppingCart {
        public $products;
        public $totProducts;
        public $totEuro;

        public function addToCart(){
            $this->products = $products;
        }
        public function totCount(){
            return $this->totProducts = count($this->products);
        }
        function totPayment(){
            foreach($this->products as $key){
                $this->totEuro += $key->price;
            }
        }
    }


?>