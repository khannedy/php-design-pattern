<?php


class AnimalFactory
{

    public static function create($type): Animal
    {
        if ($type == "tiger") {
            return new Tiger2();
        } else if ($type == "cat") {
            return new Cat();
        } else if ($type == "dog") {
            return new Dog();
        }
    }

}