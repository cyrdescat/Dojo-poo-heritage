<?php

require_once 'Unit.php';

class Soldier extends Unit
{
    /**
     * @var int
     */
    protected $speed = 2;

    /**
     * @return void
     */
    public function attack() : void
    {
        echo "A l'attaque !";
    }
}