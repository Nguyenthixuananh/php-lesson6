<?php

include_once "Resizeable.php";
include_once "Shape.php";
class Rectangle extends Shape implements Resizeable
{
public $width;
public $height;

    /**
     * @param $width
     * @param $height
     */
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width*$this->height;
    }

    public function reSize($percent)
    {
        $this->setWidth($percent*$this->getWidth());
        $this->setHeight($percent*$this->getHeight());
    }

    public function getSize()
    {
        return $this->getWidth().", ".$this->getHeight();
    }


}