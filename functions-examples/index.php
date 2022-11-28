<?php
// Dichiarazione
$global_var = "Ciao";

function sayHello($name) {
    $inner_var = "Ciao ";
    echo $inner_var . $name;
}

// Esecuzione (chiamata, invocazione)
sayHello("Giovanni");

// Array filter
$my_numbers = [1, 56, 3, 14, 16, 7];
// Filtrare array per ottenere solo i numeri pari
// function isEven($number) {
//     return $number % 2 === 0;
// }
// $even_numbers = array_filter($my_numbers, "isEven");
// 
// var_dump($even_numbers);

$even_numbers = array_filter($my_numbers, fn ($num) => $num % 2 === 0);
var_dump($even_numbers);
