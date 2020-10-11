<?php
// bug_create.php <reporter_id> <engineer_id> <product_ids>
require_once "bootstrap.php";

$reporterId = isset($argv[1]) ? $argv[1] : null;
$engineerId = isset($argv[2]) ? $argv[2] : null;
$productIds = isset($argv[3]) ? explode(",", $argv[3]) : [];

$reporter = $entityManager->find("User",$reporterId);
$engineer = $entityManager->find("User", $engineerId);

if (!$reporter || !$engineer)
{
    echo "No reporter and/or engineer found for the given id(s).\n";
    exit(1);
}

$bug = new Bug();
$bug->setDescription("Bug description.");
$bug->setCreated(new DateTime("now"));
$bug->setStatus("OPEN");

foreach ($productIds as $productId)
{
    $product = $entityManager->find("Product", $productId);
    $bug->assignToProduct($product);
}

$bug->setReporter($reporter);
$bug->setEngineer($engineer);

$entityManager->persist($bug);
$entityManager->flush();

echo "Bug Created. ID: " . $bug->getId() . "\n";

