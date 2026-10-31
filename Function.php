<?php

require_once "data/Person.php";

$adit = new Person("Aditya", "Kapuas");
$adit->name = "Aditya";
$adit->sayHello("Roma");

$runa = new Person("Runa", null);
$runa->name = "Runa";
$runa->sayHello(null);

$adit->info();
$runa->info();