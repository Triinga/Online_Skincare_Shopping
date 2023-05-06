<?php
// Vendos një Cookies për të ruajtur preferencat e përdoruesit
$user_preferences = array(
    'language' => 'english',
    'currency' => 'USD',
    'skin_type' => 'oily'
);
$user_preferences_json = json_encode($user_preferences);
setcookie('user_preferences', $user_preferences_json, time() + (86400 * 30), "/"); // Ruaj Cookies për 30 ditë

// Vendos një Cookies për të ruajtur produktet në shportën e blerjeve
$shopping_cart = array(
    array(
        'product_id' => 1234,
        'product_name' => 'Moisturizer',
        'quantity' => 2,
        'price' => 15.99
    ),
    array(
        'product_id' => 5678,
        'product_name' => 'Cleanser',
        'quantity' => 1,
        'price' => 9.99
    )
);
$shopping_cart_json = json_encode($shopping_cart);
setcookie('shopping_cart', $shopping_cart_json, time() + (86400 * 30), "/"); // Ruaj Cookies për 30 ditë

// Lexo Cookies dhe shfaq informacionin në website
if(isset($_COOKIE['user_preferences'])) {
  $user_preferences = json_decode($_COOKIE['user_preferences'], true);
  echo "Preferencat e përdoruesit janë: <br/>";
  foreach ($user_preferences as $key => $value) {
    echo $key . ": " . $value . "<br/>";
  }
}

if(isset($_COOKIE['shopping_cart'])) {
  $shopping_cart = json_decode($_COOKIE['shopping_cart'], true);
  echo "Produktet në shportën e blerjeve janë: <br/>";
  foreach ($shopping_cart as $product) {
    echo "ID: " . $product['product_id'] . "<br/>";
    echo "Emri: " . $product['product_name'] . "<br/>";
    echo "Sasia: " . $product['quantity'] . "<br/>";
    echo "Cmimi: $" . $product['price'] . "<br/><br/>";
  }
}
?>
