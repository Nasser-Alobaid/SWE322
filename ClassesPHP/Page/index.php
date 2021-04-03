<?php

Spl_autoload_register(function($class){
    
    include '../Classes/'.$class.'.php';
});



$cA = new classA;
$cB = new classB;
$cC = new classC;

$cA-> printClass();
echo "<br>";
$cB-> printClass();
echo "<br>";
$cC-> printClass();

?>