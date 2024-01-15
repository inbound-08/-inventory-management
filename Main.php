<?php
// Main.php

require_once 'Product.php';
require_once 'Inventory.php';

$laptop = new Product(1, 'Laptop', 1200, 10);
$smartphone = new Product(2, 'Smartphone', 800, 20);

$inventory = new Inventory();
$inventory->addProduct($laptop);
$inventory->addProduct($smartphone);

$inventory->displayInventory();

// Update quantity of Laptop
$updatedQuantity = 15;
if ($inventory->updateProductQuantity(1, $updatedQuantity)) {
    echo "Quantity updated successfully!<br>";
} else {
    echo "Product not found.<br>";
}

$inventory->displayInventory();
?>
