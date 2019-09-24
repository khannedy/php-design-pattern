<?php

$gameEasy = new Game(new GameFactoryEasy());
$gameEasy->start();


$gameMedium = new Game(new GameFactoryMedium());
$gameMedium->start();


$gameHard = new Game(new GameFactoryHard());
$gameHard->start();