<?php
require("Forme.php");
require("Sphere.php");
require("Cylindre.php");
require("PaveDroit.php");
require("Cube.php");


$formes = [
    new Sphere(4),
    new Sphere(10),
    new Cylindre(3,15),
    new Cylindre(10, 8),
    new PaveDroit(10, 7, 5),
    new PaveDroit(15, 8, 4),
    new Cube(4),
    new Cube(10)
];




echo PHP_EOL.PHP_EOL."Affichage des formes en utilisant _toString". PHP_EOL;

foreach($formes as $forme){
    echo $forme . PHP_EOL;
}




echo PHP_EOL.PHP_EOL."Résultat de comparaison de différentes formes". PHP_EOL;

echo $formes[1]->comparerAvec($formes[3]);
echo PHP_EOL;
echo $formes[2]->comparerAvec($formes[4]);
echo PHP_EOL;
echo $formes[5]->comparerAvec($formes[6]);




echo PHP_EOL.PHP_EOL."Tri de tableau selon superficie + volume en ordre decroissant". PHP_EOL;
function ordonner($instance1, $instance2)
{
    return $instance1->comparerAvec($instance2) * -1;
}





usort($formes, 'ordonner');

foreach($formes as $forme){
    echo ($forme->obtenirSuperficie() + $forme->obtenirVolume() ) . PHP_EOL;
}