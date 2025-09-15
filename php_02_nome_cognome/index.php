<?php
// $users = [
//     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
//     ['name' => 'Giulia', 'surname' => 'Rossi', 'gender' => 'F'],
//     ['name' => 'Luca', 'surname' => 'Bianchi', 'gender' => 'M'],
//     ['name' => 'Sam', 'surname' => 'Verdi', 'gender' => 'NB']
// ];

// foreach ($users as $user) {
//     if ($user['gender'] === 'M'){
//         $saluta= "Buongiorno Sig " . $user['name'] . " " . $user['surname'] . "\n";
//     }elseif ($user['gender'] === 'F'){
//         $saluta= "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
//     }else{
//         $saluta= "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
//     }
//     echo $saluta;
// };
// $numeri = [42, 87, 15, 63, 29, 94, 8, 76, 51, 33];
// $somma = 0;
// foreach($numeri as $numero) {
//    if($numero % 2 === 0) { 
//     $somma += $numero;
//    }
// };
// echo "La somma dei numeri pari è: " . $somma;

for ($i = 1; $i <= 100; $i++) {
    if (($i % 3 === 0 && $i % 5 === 0)) {
        echo "HACKADEMY" . "\n";
    }elseif ($i % 5 === 0) {
        echo "JAVASCRIPT" . "\n";
    }elseif ($i % 3 === 0) {
        echo "PHP" . "\n";
    }else{
        echo $i . "\n";
    }
}