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
            public $email;
             function __construct($name, $surname, $age, $creditCard, $email){
                $this->name = $name;
                $this->surname = $surname ;
                $this->creditCard []= $creditCard;
                $this->email = $email;
                $this->age = $age;
            }
                   
        }
        class Discount extends User{
            private $password;
            protected $sales;
          
            function __construct($name, $surname, $age, $creditCard,$password,  $email){
              parent::__construct($name, $surname, $age, $creditCard, $email);
              $this->password = $password;
              
            }
          
            public function getSales(){
              if($this->password){
                $this->sales = 20;
              } else {
                echo 'Registrati per ottenere il tuo sconto!:)';
              }
            }

            } 
?>