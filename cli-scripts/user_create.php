<?php
// user_create.php <name>
require_once "bootstrap.php";

$newUsername = isset($argv[1]) ? $argv[1] : null;

$user = new User();
$user->setName($newUsername);

$entityManager->persist($user);
$entityManager->flush();

echo "User created. Id: " . $user->getId() . "\n";