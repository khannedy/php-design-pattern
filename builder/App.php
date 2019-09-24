<?php

$customer1 = (new CustomerBuilder())
    ->setFistName("Eko")
    ->setPhone("12131")
    ->setAge(30)
    ->build();

$customer2 = (new CustomerBuilder())
    ->setFistName("Eko")
    ->setAddress("Jakarta")
    ->setPhone("12131")
    ->setAge(30)
    ->build();

$customer3 = (new CustomerBuilder())
    ->setFistName("Eko")
    ->setLastName("Kurniawan")
    ->setPhone("12131")
    ->setAge(30)
    ->build();

$customer4 = (new CustomerBuilder())
    ->setFistName("Eko")
    ->setLastName("Kurniawan")
    ->setPhone("12131")
    ->setAge(30)
    ->setHobby("Reading")
    ->build();