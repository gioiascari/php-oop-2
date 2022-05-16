<?php
include_once __DIR__ . '/user.php';
include_once __DIR__ . '/creditCard.php';
include_once __DIR__ . '/product.php';

//Product
$dogBed = new Product ('DogBed4less', 40, 'Dog Bed', 'dog' );
$dogFood = new Product('VitaVeg', 15, 'Dog Croquettes', 'dog');
$catToy = new Product('AllCats', 10, 'Leaps & Bounds Fuzzy Mice', 'cat');

var_dump($dogBed,$dogFood,$catToy);

//Credit Card
$card1 = new CreditCard ('1234567890876532', '',  666);
$card2 = new CreditCard ('0987654321368052', '',  333);
$card3 = new CreditCard ('6574839201837465', '',  636);

var_dump($card1,$card2,$card3);

//User
$user1 = new user ('Gioia', 'Gonzales',  25, $card1, 'GNZGIO97E56L737N', 'gonzales.gioia@libero.it');
$user2 = new user ('Davide', 'Fitzgerald',  24, $card3, 'FTZDVD99E56E633D', 'fitzgerald_davide321@yahoo.it');
$user3 = new user ('Virginia', 'Lloyd',  19, $card2, 'LLYVGN03H46F858U', 'lloyd_virg@gmail.com' );

var_dump($user1,$user2,$user3);

?>

