<?php
// bug_show.php <id>
require_once "bootstrap.php";

$bugId = isset($argv[1]) ? $argv[1] : null;
if (!$bugId)
{
    echo "Bug Id is required.\n";
    exit(1);
}

$bug = $entityManager->find("Bug", $bugId);
if (!$bug)
{
    echo "Bug not found.\n";
    exit(1);
}

echo "Bug: " . $bug->getDescription() . "\n";
echo "Engineer: " . $bug->getEngineer()->getName() . "\n";