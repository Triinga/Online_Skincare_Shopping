<?php
session_start(); // fillon sesioni

// kontrollon nqs ka nje përdorues të loguar
if (isset($_SESSION['username'])) {
    echo "Përshëndetje " . $_SESSION['username'] . "!"; // shfaq emrin e përdoruesit
} else {
    echo "Ju lutem logoheni për të vazhduar"; // shfaq mesazhin nëse nuk ka përdorues të loguar
}

// ruajnë të dhënat në sesion
$_SESSION['cart'] = array(
    'produkt1' => array(
        'emri' => 'Krema anti-age',
        'cmimi' => 25.00,
        'sasia' => 1
    ),
    'produkt2' => array(
        'emri' => 'Loción hidratante',
        'cmimi' => 15.00,
        'sasia' => 2
    )
);

// lexojnë të dhënat nga sesioni
$shporta = $_SESSION['cart'];
echo "<br>";
echo "<br>Produktet në shportën tuaj:";
foreach ($shporta as $produkt) {
    echo "<br>" . $produkt['emri'] . " - " . $produkt['cmimi'] . " euro - sasia: " . $produkt['sasia'];
}
?>
