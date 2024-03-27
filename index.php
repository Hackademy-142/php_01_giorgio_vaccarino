<?php

//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$evenSum = 0;
$evenN = 0;

foreach($array as $el){
    if($el % 2 == 0){
        $evenSum += $el;
        $evenN++;
    };
};
//echo $evenSum/$evenN;

//Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere Esempio array = $users = [ ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'], ];
$users = [ ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'], ['name' => 'Pi', 'surname' => 'Puto', 'gender' => 'F'], ['name' => 'Ppp', 'surname' => 'P', 'gender' => 'N/D'] ];

foreach($users as $user){
    if($user['gender'] == "F"){
        echo "Buongiorno Sig.ra $user[name] $user[surname]\n"; //string interpolation non necessitiamo delle virgolette nelle paremtesi quadre
    } elseif($user["gender"] == "M"){
        echo "Buongiorno Sig. $user[name] $user[surname]\n";
    } else {
        echo "Buongiorno $user[name] $user[surname]\n";
    };
};

//Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".
// for($i = 1; $i <= 100; $i++){
//     switch($i) {
//         case $i % 3 == 0 && $i % 5 == 0:
//             echo "HACKADEMY\n";
//             break;
//         case $i % 3 == 0:
//             echo "PHP\n";
//             break;
//         case $i % 5 == 0:
//             echo "JAVASCRIPT\n";
//             break;
//         default:
//             echo "$i\n";
//     };
// };

?>