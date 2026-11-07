<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Aditya";
$manager->sayHello("Roma");

$vp = new VicePresident();
$vp->name = "Runa";
$vp->sayHello("Roma");