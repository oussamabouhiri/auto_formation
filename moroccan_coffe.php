<?php

$tea_price = 10;
$order_quantity = 5;
$customer_type = "student";
$discount = 0.20;

$base_price = $tea_price * $order_quantity;
$final_price = $base_price;


if ($customer_type == "student") {
    $final_price = $final_price - ($final_price * $discount);
}


if ($order_quantity > 5) {
    $final_price = $final_price - ($order_quantity * 1);
}

echo "The final price is: " . $final_price . " DH";

?>