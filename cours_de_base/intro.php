<?php 

$prenom = 'Célia'; // string

//key = value

//Affiche moi la valeur que contient la variable $prenom

echo 'Hello ' . $prenom;

// La concaténation s'effectue avec un . => relie deux chaines de caractères

echo "<br/>";

echo "hello $prenom";

//Integer => nombre entier

$note = 15;

echo "J'ai eu une note de {$note} sur 20";

//Float => Nombre décimal 

echo "<br/>";

$note2 = 16.5;

echo "j'ai une deuxième note de {$note2} sur 20";

$moyenne = (15 + 16.5) / 2;

echo "<br/>";

echo "Ma moyenne est de {$moyenne}";


//----------------------------------------------------------------------------


// Exercice 1 : Créer 3 variables 
// La premiere => ville : Paris
// La deuxième => Population : 2millions
//Afficher la phrase "il y a à paris , 2millions d'habitants

$ville = 'Paris';
$population = 2;

echo "<br/>";

echo "Il y a à {$ville}; {$population} millions d'habitants";

//-----------------------------------------------------------------------------

// Boolean

$conditionVraie = true;
$conditionFausse = false;

// Array simple

echo "<hr/>";
echo "<br/>";

$eleves = ['Gilles', 'Sélim'];

//Un tableau commence à l'index zero

echo $eleves[0];


$eleves[] = 'Mohammed';

echo $eleves[2];

//Tableau associatif

$classe = [
    0 => 'Gilles',
    1 => 'Sélim',
    2 => 'Lionel',
    3 => 'Célia'
];

//$key => $value

echo "<br/>";

echo $classe[0];

$villeDeFrance = [
    'Paris' => 20000000,
    'Lyon' => 10000,
];

echo $villeDeFrance['Paris'];

echo "<br/>";
echo "<hr/>";



foreach($eleves as $value) {
    echo "<pre>";
    echo $value;
    echo "</pre>";
}


echo "<hr/>";

foreach($villeDeFrance as $key => $value) {
    echo "La ville de {$key} contient {$value} d'habitants.";
}



?>
