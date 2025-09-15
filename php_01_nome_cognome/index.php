<?php
// $Integer = 36;
// $Float = 181.5;
// $String = "Giovanni";
// $Boolean = true;
// var_dump($Integer, $Float, $String, $Boolean);
// const Integer = 36;
// const Float = 181.5;    
// const String = "Giovanni";
// const Boolean = true;
// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perché";
// $text7 = "bevuto";
// $text8 = "tutto";
// $frase = "$text1 $text2 $text3 $text4 $text5 $text2 $text7 $text8";
// echo $frase;
$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
    'Nel',
    'di',
    'nostra',
    'vita',
    'mi',
    'cammin',
    'una',
    'selva',
    'chè',
    'la',
    'via',
    'smarrita',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            'E'
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['fortuna']
    ],
    'fine' => '!'
];

$results =
    $words1[6] . " " .
    $words1[18][3][0] . " " .
    $words1[7] . " " .
    $words1[11] . " " .
    $words1[8] . " " .
    $words1[9] . " " .
    $words1[10] . " " .
    $words1[18][4] . " " .
    $words1[18][5] . " " .
    $words1[12] . " " .
    $words1[13] . " " .
    $words1[18][0] . ", " .
    $words1[14] . " " .
    $words1[15] . " " .
    $words1[19] . " " .
    $words1[16] . " " .
    $words1[18][1] . " " .
    $words1[17] . ".";

echo $results; 