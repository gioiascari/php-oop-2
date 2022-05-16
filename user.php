<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce. 
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->
<?php
 include_once __DIR__  . '/creditCard.php';

        class User {
            public $name;
            public $surname;
            public $age;
            public $creditCard=[];
            public $fiscalCode;
            public $email;
    
            public function __construct($name, $surname, $email, $fiscalCode, $creditCard){
                $name = $this->name;
                $surname = $this->surname;
                $creditCard[] = $this->creditCard;
                $fiscalCode = $this->fiscalCode;
                
                
            }
                   
        }
        class Discount extends User {
            private $password;
            protected $sales;

            public function __construct($name, $surname, $email, $fiscalCode, $creditCard, $password){
                $name = $this->name;
                $surname = $this->surname;
                $creditCard[] = $this->creditCard;
                $fiscalCode = $this->fiscalCode;
                $password = $this->password;
                
            }
            
            public function getSales(){
                if($this->password){
                    $this->sales = 20;
                    echo( $this->sales);
                }else{
                    echo('Registrati ed ottieni il tuo sconto!:)');
                }
            }


        }
    

  
        

?>