<?php


interface Enemy
{

    function start();

}

class EnemyEasy implements Enemy
{

    function start()
    {
        echo "Enemy Easy";
    }
}

class EnemyMedium implements Enemy
{

    function start()
    {
        echo "Enemy Medium";
    }
}

class EnemyHard implements Enemy
{

    function start()
    {
        echo "Enemy Hard";
    }
}