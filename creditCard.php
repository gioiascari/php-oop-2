<?php
//Credit Card
    class CreditCard {
        private $expiration;
        private $number;
        private $cvv;

        public function __construct($expiration, $number, $cvv){
            $expiration = $this->expiration;
            $number = $this-> number;
            $cvv = $this-> cvv;
        }

        public function getExpiration(){
            return $this->expiration;
        }
        public function setExpiration(){
            return $this->expiration;
        }
        
        public function getNumber(){
            return $this->number;
        }
        public function setNumber(){
            if(strlen($number)== 16){
                $number = $this->number;
            }else{
                echo('Numero Carta errato');
            }
        }
    
        public function getCvv(){

            return $this->cvv;
        }
        public function setCvv($cvv){
            if(strlen($cvv)== 3){
                $cvv = $this->cvv;
            }else{
                echo('Numero cvv errato');
            }
          
        }
     

    }







?>