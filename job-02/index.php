<?php

require_once 'Product.php';

$newProduct = new Product(1, 't-shirt', ['newProduct'], 1000, 'A beautiful T-shirt', 10, new DateTime(), new DateTime(), 1);

$id = $newProduct->getId();
$name = $newProduct->getName();
$photos = $newProduct->getPhotos();
$price = $newProduct->getPrice();
$description = $newProduct->getDescription();
$quantity = $newProduct->getQuantity();
$createdAt = $newProduct->getCreatedAt();
$updatedAt = $newProduct->getUpdatedAt();
$categoryId = $newProduct->getCategoryId();
var_dump($id, $name, $photos, $price, $description, $quantity, $createdAt, $updatedAt, $categoryId);
?>