<?php

require_once 'Unit.php';

class Elf extends Unit
{
    /**
     * @var int
     */
    protected $speed = 5;

    /**
     * @return void
     */
    public function attack() : void
    {
        echo "A l'attaque !";
    }
}