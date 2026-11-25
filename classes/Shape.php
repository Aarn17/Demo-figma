<?php

class Shape
{
    public string $color;
    public int $x;
    public int $y;

    public function __construct(string $color, int $x, int $y)
    {
        $this->color = $color;
        $this->x = $x;
        $this->y = $y;
    }
}
