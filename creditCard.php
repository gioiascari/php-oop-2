<?php
//Credit Card
    class CreditCard {
        private $number;
        private $expiration;
        private $cvv;

        public function __construct($number,$expiration, $cvv){
            $this-> setNumber($number);
            $this-> setExpiration($expiration);
            $this-> setCvv($cvv);
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
            if(is_numeric($number)== 16){
                $this->number = $number;
            }else{
                echo('Numero Carta errato');
            }
        }
    
        public function getCvv(){

            return $this->cvv;
        }
        public function setCvv($cvv){
            if(strlen($cvv)== 3){
                $this->cvv = $cvv;
            }else{
                echo('Numero cvv errato');
            }
          
        }
     

    }







?>