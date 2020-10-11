<?php
// product_show.php <id>
require_once "bootstrap.php";

$id = isset($argv[1]) ? $argv[1] : null;
if (!$id)
{
    echo "Product Id is required.\n";
    exit(1);  
}

$product = $entityManager->find('Product', $id);
if ($product == null)
{
    echo "Product not found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());