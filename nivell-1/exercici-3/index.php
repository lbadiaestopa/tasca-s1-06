<?php

require_once 'exercici-3.php';

$cinema1 = new Cinema("Verdi", [new Movie("Inception")]);

$cinema2 = clone $cinema1;

$cinema2->movies[0]->title = "Changed";

echo $cinema1->movies[0]->title;

?>