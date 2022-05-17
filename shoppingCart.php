<?php
include_once __DIR__ . '/index.php';

    class ShoppingCart {
        public $products;
        public $totProducts;
        public $totEuro;
        //Aggiunge al carrello
        public function addToCart($products){
            $this->products[] = $products;
        }
        public function totCount(){
            return $this->totProducts = count($this->products);
        }
        //Pagamento totale
        function totPayment(){
            foreach($this->products as $key){
                $this->totEuro += $key->price;
            }
        }
    }


?>