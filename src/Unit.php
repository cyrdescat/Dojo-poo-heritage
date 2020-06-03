<?php


class Unit
{
    const ALLOWED_DIRECTIONS = ["right", "left", "top", "bottom"];

    /**
     * @var int
     */
    protected $pv;

    /**
     * @var array
     */
    protected $position = ["x" => 0, "y" => 0];

    /**
     * @var int
     */
    protected $speed = 1;


    /**
     * @param string $direction
     * @return $this
     */
    public function walk(string $direction) : Unit
    {
        if (in_array($direction, self::ALLOWED_DIRECTIONS)) {
            switch ($direction) {
                case "right":
                    $this->position["x"] += $this->speed;
                    break;
                case "left":
                    $this->position["x"] -= $this->speed;
                    break;
                case "top":
                    $this->position["y"] += $this->speed;
                    break;
                case "bottom":
                    $this->position["y"] -= $this->speed;
                    break;
            }
        }
        return $this;
    }

    public function __toString()
    {
        $str = "The unit's position is x = " . $this->position['x'] . ", y = " . $this->position['y'] . "<br>" . PHP_EOL;
        return $str;
    }

}