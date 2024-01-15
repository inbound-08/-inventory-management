<?php
// Inventory.php

class Inventory {
    private $products;

    public function __construct() {
        $this->products = array();
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function displayInventory() {
        echo "Inventory:<br>";
        foreach ($this->products as $product) {
            $product->displayProduct();
        }
    }

    public function getProductById($productId) {
        foreach ($this->products as $product) {
            if ($product->getProductId() == $productId) {
                return $product;
            }
        }
        return null;
    }

    public function updateProductQuantity($productId, $quantity) {
        $product = $this->getProductById($productId);
        if ($product !== null) {
            $product->setQuantity($quantity);
            return true;
        }
        return false;
    }
}
?>
