<?php

$store1 = new Store("Toko X", "Jakarta", "Indonesia", "Gadget");

$store2 = $store1->clone();
$store2->setName("Toko Z");

$store3 = $store1->clone();
$store3->setName("Toko X");
$store3->setCity("Bandung");

$store4 = $store3->clone();
$store4->setName("Toko W");
$store4->setCategory("Fashion");