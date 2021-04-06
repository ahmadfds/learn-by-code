<?php

require __DIR__.'/Person.php';
require __DIR__.'/PersonDecorator.php';
require __DIR__.'/Swordsman.php';
require __DIR__.'/Spearman.php';
require __DIR__.'/ArmorWearer.php';

//
// int people
//
$person1 = new Person();
$person2 = new Person();

//
// make them fighters
//
$fighter1 = new Swordsman(new ArmorWearer($person1));
$fighter2 = new Spearman(new ArmorWearer($person2));



//
// fight
//
while($fighter1->getHealth() > 0 && $fighter2->getHealth() > 0) {
    $fighter1->setHealth($fighter1->getHealth() - ($fighter2->getStrength() - $fighter1->getArmor()));
    $fighter2->setHealth($fighter2->getHealth() - ($fighter1->getStrength() - $fighter2->getArmor()));
}

echo "Fighter 1 Health: {$fighter1->getHealth()}\n";
echo "Fighter 2 Health: {$fighter2->getHealth()}\n";