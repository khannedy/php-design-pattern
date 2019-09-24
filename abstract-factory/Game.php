<?php


class Game
{

    /**
     * @var Level
     */
    private $level;

    /**
     * @var Arena
     */
    private $arena;

    /**
     * @var Enemy
     */
    private $enemy;

    public function __construct(GameFactory $gameFactory)
    {
        $this->level = $gameFactory->createLevel();
        $this->arena = $gameFactory->createArena();
        $this->enemy = $gameFactory->createEnemy();
    }

    function start()
    {
        $this->level->start();
        $this->arena->start();
        $this->enemy->start();
    }

}