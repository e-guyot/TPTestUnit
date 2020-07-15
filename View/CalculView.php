<?php

include_once('../Controller/CalculController.php');
include_once('../Controller/TestController.php');

$test = new Test;
$calcul = new Calcul;

echo 'Calcul :';
echo '2+2='.$calcul->add(2,2);

echo 'Test Unitaire :';
echo $test->verifCalcul($calcul->add(2,2), 4);