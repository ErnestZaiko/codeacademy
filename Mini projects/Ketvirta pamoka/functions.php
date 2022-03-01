<?php 

//////////////////////////////////////////////////////////

$productArray = [
    'name' => 'Batai',
    'price' => '12',
    'shop-working-hours' => '9.00 - 18.00'
];

$productPrice = 12;
$discount = 20;

$productPrice2 = 13;
$discount2 = 30;

$finalPrice = getFinalPrice($productPrice, $discount);
$finalPrice2 = getFinalPrice($productPrice2, $discount2);;

echo '<div class="price">'.$finalPrice. '</div>';
echo '<div class="price">'.$finalPrice2. '</div>';

function getFinalPrice($price, $discount){
    $finalPriceWithoutTaxes = $price * ((100 - $discount)/100);
    $finalPriceWithTaxes = getPriceWithTax($finalPriceWithoutTaxes);
    return $finalPriceWithTaxes;
}

function getPriceWithTax($price){
    return $price * 1.21;
}

//////////////////////////////////////////////////////////

$userEmail = 'ernest.zaiko@gmail.com';
$userEmail = 'ernest.zaiko@gmail.com';

function clearEmail($email){
    return trim(strtolower($email));
}
function isEmailValid($email){
    if(strpos($email, '@')) {
        return true;
    } else {
            return false;
    }
}
if(isEmailValid($userEmail)){
    echo clearEmail($userEmail);
} else {
    echo 'Invalid email';
}
//////////////////////////////////////////////////////////