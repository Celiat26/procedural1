<?php

echo "Les boucles";

echo "<hr/>";

for($i = 0; $i < 10; $i++) {
    echo $i;

}

//1ere étape je donne la valeur de i 
//2eme étape je vérifie que la condition est toujours vrai

echo "<hr/>";

$j = 0;
while($j < 100) {
    echo $j;
    echo "<br/>";
    $j++;
}


$z = 0;

do {
    echo $z;
    $z++;
} while ($z <30);
?>