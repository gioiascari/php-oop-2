<?php
include_once __DIR__ . '/user.php';
include_once __DIR__ . '/creditCard.php';
include_once __DIR__ . '/product.php';



//Product
$dogBed = new Product ('DogBed4less', 40, 'Dog Bed', 'dog' );
$dogFood = new Product('VitaVeg', 15, 'Dog Croquettes', 'dog');
$catToy = new Product('AllCats', 10, 'Leaps & Bounds Fuzzy Mice', 'cat');

// var_dump($dogBed,$dogFood,$catToy);
//Shopping Cart
$cart = new ShoppingCart([], '', '');
$cart-> addToCart($dogBed);
$cart-> addToCart($catToy);
$cart-> totPayment();
$cart-> totCount();
$cart2 = new ShoppingCart([], '', '');
$cart2-> addToCart($catToy);
$cart2-> addToCart($dogFood);
$cart2-> totPayment();
$cart2-> totCount();






//Credit Card
$card1 = new CreditCard ('1234567890876532', '01-08',  666);
$card2 = new CreditCard ('0987654321368052', '',  333);
$card2->setExpiration('08-01');
$card3 = new CreditCard ('6574839201837465', '',  636);
$card2->setExpiration('06-01');



//User
$user1 = new Discount ('Gioia', 'Gonzales',  25, $card1, $dogBed, 'gonzales.gioia@libero.it');
$user2 = new User ('Davide', 'Fitzgerald',  24, $card3, $dogBed, 'fitzgerald_davide321@yahoo.it');
$user3 = new User ('Virginia', 'Lloyd',  19, $card2, '', 'lloyd_virg@gmail.com' );


$user1->getSales();
echo "<pre>";
var_dump($user1);
echo "</pre>";


?>

