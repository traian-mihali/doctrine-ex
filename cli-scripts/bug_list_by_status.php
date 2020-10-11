<?php
// bug_list_by_status <bug_status>
require_once "bootstrap.php";

$status = isset($argv[1]) ? $argv[1] : null;

$bugs = $entityManager->getRepository('Bug')->findBy(['status' => $status]);

foreach($bugs as $bug)
{
    echo $bug->getDescription() . " - " . $bug->getCreated()->format("d.m.Y") . "\n";
    echo "  Reported by: " . $bug->getReporter()->getName() . "\n";
    echo "  Assigned to: " . $bug->getEngineer()->getName() . "\n";
    foreach ($bug->getProducts() as $product)
        echo "  Platform: " . $product->getName() . "\n";
    echo "\n";
}