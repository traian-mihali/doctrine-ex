<?php
// product_create.php <name>
require_once "bootstrap.php";

$newProductName = isset($argv[1]) ? $argv[1] : null;

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";