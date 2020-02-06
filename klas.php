<?php

echo "Wie zit er in je klas?" . "\n";
$vraag = readline("");

$arry = explode(" ", $vraag);

echo "De studenten in de klas zijn: " . "\n";

foreach ($arry as $value){
    echo $value . "\n";
}