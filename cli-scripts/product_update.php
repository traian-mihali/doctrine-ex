<?php
// product_update.php <id> <new-name>
require_once "bootstrap.php";

$id = isset($argv[1]) ? $argv[1] : null;
$newName = isset($argv[2]) ? $argv[2] : null;

if (!$id)
{
    echo "Product Id is required.\n";
    exit(1);  
}

if (!$newName)
{
    echo "New product name is required.\n";
    exit(1);  
}

$product = $entityManager->find('Product', $id);

if ($product === null)
{
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName($newName);

$entityManager->flush();

