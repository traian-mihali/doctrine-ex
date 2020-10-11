<?php
// bug_close.php <bug_id>
require_once "bootstrap.php";

$bugId = isset($argv[1]) ? $argv[1] : null;

$bug = $entityManager->find("Bug", $bugId);

if(!$bug)
{
    echo "Bug not found.\n";
    exit(1);
}

$bug->close();

$entityManager->flush();