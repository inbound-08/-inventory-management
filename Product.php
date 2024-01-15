<?php
// Product.php

class Product {
    private $productId;
    private $productName;
    private $price;
    private $quantity;

    public function __construct($productId, $productName, $price, $quantity) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function displayProduct() {
        echo "Product ID: " . $this->productId . "<br>";
        echo "Product Name: " . $this->productName . "<br>";
        echo "Price: $" . $this->price . "<br>";
        echo "Quantity: " . $this->quantity . "<br><br>";
    }
}
?>
