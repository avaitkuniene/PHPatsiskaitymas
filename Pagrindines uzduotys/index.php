<?php

//1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
//*/

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];
echo ' '. PHP_EOL;
echo 'Pirma uzduotis, pirmas budas' . PHP_EOL;
function exercises1($number)
{
    $total = 0;
    foreach ($number as $key => $value){
        if ($value % 2 == 0) {
            $total += $value;
        }
    }
    return $total;


}
printf(exercises1($numbers));

echo ' '. PHP_EOL;
echo 'Pirma uzduotis, antras budas' . PHP_EOL;

$numbers2 = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function excercise1($number) {
    return $number % 2 == 0;
}

$evenNumbers = array_filter($numbers2, "excercise1");
$sum = array_sum($evenNumbers);

printf($sum);
echo ' '. PHP_EOL;

/*
 2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
*/
echo ' '. PHP_EOL;
echo 'Antra uzduotis' . PHP_EOL;

$numbers3 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];

function exercises2($number)
{
    return array_reduce($number, function (int $sum, array $array) {
        foreach ($array as $value)
            $sum *= $value;
        return $sum;
    },
        1);
}
echo exercises2($numbers3);
echo ' '. PHP_EOL;

//3. Masyve $vacations turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
// Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
// Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
//

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"

echo ' '. PHP_EOL;
echo 'Trecia uzduotis' . PHP_EOL;

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function exercises3(array $vacations)
{
    $trips = [];

    foreach($vacations as $vacation) {
        if ($vacation['price'] == null) continue;
        if (!array_key_exists($vacation['destination'], $trips)) {
            $trips[$vacation['destination']] = [
                'titles' => [$vacation['title']],
                'total' => $vacation['price'] * $vacation['tourists'],
            ];
        } else {
            array_push($trips[$vacation['destination']]['titles'], $vacation['title']);
            $trips[$vacation['destination']]['total'] += $vacation['price'] * $vacation['tourists'];
        }
    }

    foreach($trips as $destination => $data) {
        echo("Destination \"" . $destination . "\".\n");
        echo("Titles: ");
        echo(implode(", ", array_map(
            function (string $title): string {
                return "\"" . $title . "\"";
            },
            $data['titles']
        )));
        echo("\n");
        echo("Total: " . $data['total'] . "\n");
        echo("************\n");
    }

    // Cia prijungiau ir 4 uzduoti :)


    $file = 'text.txt';
    $information = file_get_contents($file);
    $information .= json_encode($trips);
    file_put_contents($file, $information);
}
exercises3($holidays);


echo ' '. PHP_EOL;
///*
// 4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
//*/

function exercises4()
{

}


