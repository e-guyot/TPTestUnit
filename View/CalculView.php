<?php

include_once('../Controller/CalculController.php');
include_once('../Controller/TestController.php');

$test = new Test;
$calcul = new Calcul;

echo 'Calcul :'.PHP_EOL;
echo '2+2='.$calcul->add(2,2).PHP_EOL;
echo '2-2='.$calcul->sub(2,2).PHP_EOL;
echo '2*2='.$calcul->mul(2,2).PHP_EOL;
echo '2/2='.$calcul->div(2,2).PHP_EOL;

echo 'Test Unitaire :'.PHP_EOL;
// test déjà avant même de rentrer dans la fonction si c'est un entier
echo $test->verifCalcul($calcul->add(2,2), 4).PHP_EOL;
echo $test->verifCalcul($calcul->add(2,2), 2).PHP_EOL;
echo $test->verifCalcul($calcul->sub(2,2), 2).PHP_EOL;
echo $test->verifCalcul($calcul->sub(2,2), 0).PHP_EOL;
echo $test->verifCalcul($calcul->mul(2,2), 0).PHP_EOL;
echo $test->verifCalcul($calcul->mul(2,2), 4).PHP_EOL;
echo $test->verifCalcul($calcul->div(2,2), 1).PHP_EOL;
echo $test->verifCalcul($calcul->div(2,2), 0).PHP_EOL;