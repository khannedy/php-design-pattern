<?php


class EmployeeFactory
{

    static function createManager($name): Employee
    {
        return new Employee($name, "Manager", 10000000);
    }

    static function createStaff($name): Employee
    {
        return new Employee($name, "Staff", 5000000);
    }

}