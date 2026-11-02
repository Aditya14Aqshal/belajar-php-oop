<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Aditya";
$manager->sayHello("Runa");

$vp = new VicePresident();
$vp->name = "Roma";
$vp->sayHello("Runa");