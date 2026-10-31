<?php

require_once "data/Person.php";

$adit = new Person();
$adit->name = "Aditya";
$adit->sayHello("Roma");

$runa = new Person();
$runa->name = "Runa";
$runa->sayHello(null);