<?php

$customer = new Customer("1", "Eko", "echo.khannedy@gmail.com");

$facade = new CustomerFacade();


$json = $facade->toJson($customer);