<?php

include_once "Colorable.php";

class Square extends Rectangle implements Colorable
{
    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function howToColor()
    {
        return "Color all four sides..";
    }
}