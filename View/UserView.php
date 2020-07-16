<?php

include_once('../Controller/UserController.php');
include_once('../Controller/TestController.php');

$test = new Test;

$user = new User('DUPONT', 'Gérard', 45, 'dupont.gerard@gmail.com');
$user2 = new user('Bob', 'L\'éponge', 4, 'bob@gmail.com');
$user3 = new user ('test', 'tata', 18, 'testtata');


echo $user.PHP_EOL;
echo Test::isValid($user).PHP_EOL;
echo $user2.PHP_EOL;
echo Test::isValid($user2).PHP_EOL;
echo $user3.PHP_EOL;
echo Test::isValid($user3).PHP_EOL;