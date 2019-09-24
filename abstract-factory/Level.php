<?php


interface Level
{

    function start();

}

class LevelEasy implements Level
{

    function start()
    {
        echo "Level Easy";
    }
}

class LevelMedium implements Level
{

    function start()
    {
        echo "Level Medium";
    }

}

class LevelHard implements Level
{

    function start()
    {
        echo "Level Hard";
    }

}