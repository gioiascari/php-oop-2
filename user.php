<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce. 
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->
<?php


        class User {
            public $name;
            public $surname;
            public $age;
            public $creditCard=[];
            public $fiscalCode;
            public $email;
            private $password;
            public $sales;
        
          


            public function __construc($name, $surname, $email, $fiscalCode, $creditCard, $password){
                $name = $this->name;
                $surname = $this->surname;
                $creditCard[] = $this->creditCard;
                $fiscalCode = $this->fiscalCode;
                $password = $this->password;
            }
                   
        }
    

  
        

?>