<?php
include_once('Shape.php');
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$shape[0] = new Circle('Circle01', 3);
$shape[1] = new Cylinder('Cylinder01', 3, 4);
$shape[2] = new Rectangle('Rectangle01', 3,4);
$shape[3] = new Square('Square01', 4);

foreach ($shape as $item) {

    if ($item instanceof Colorable) {
        echo $item->howToColor()."<br/>";
    }
    else {
        echo $item->show() . "<br/>";
        echo "Area: " . $item->calculateArea() . "<br/>";
        echo "Perimeter: " . $item->calculatePerimeter() . '<br />';
    }
}