<?php
include_once "Resizeable.php";
include_once "Shape.php";
class Circle extends Shape implements Resizeable
{
public $radius;

    /**
     * @param $radius
     */
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }
    public function getArea() {
        return pi()*pow($this->radius,2);
    }

    public function reSize($percent)
    {
        $this->setRadius($percent*$this->getRadius());
    }

    public function getSize()
    {
        return $this->getRadius();
    }


}