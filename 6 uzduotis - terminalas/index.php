<?php

//6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, sudaugintų
//tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad
//terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
//*/
//
////  php index.php  3 5 -->> Jūsų skaičius: 225

if (is_numeric($argv[1]) === false && is_numeric($argv[2]) === false ||
    is_numeric($argv[1]) === false && is_numeric($argv[2]) ||
    is_numeric($argv[1]) && is_numeric($argv[2]) === false) {
    echo "Prasau irasykite ne raides, o skaicius" . PHP_EOL;
    exit(1);
}

$number = (int)$argv[1];
$number2 = (int)$argv[2];
$rezultatas = ($number * $number2)**2;
echo "Skaiciu " . $number . ', ' . $number2 . " sandauga ir kvadratas yra lygus: " . $rezultatas . PHP_EOL;