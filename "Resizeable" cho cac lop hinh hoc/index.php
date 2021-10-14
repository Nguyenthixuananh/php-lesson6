<?php
include_once ('Circle.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new Circle('Circle XA', 5);
echo 'Circle area: ' . $circle->getArea() . '<br />';

$rectangle = new Rectangle('Rectangle XA', 6 , 9);
echo 'Rectangle area: ' . $rectangle->getArea() . '<br />';

$square = new Square('Square XA', 8 );
echo 'Square area: ' . $square->getArea() . '<br />';

$arrayShape = [$circle,$rectangle,$square];
foreach ($arrayShape as $item){
    echo "My size is: ".$item->getSize()."<br>";
}
foreach ($arrayShape as $item){
    $item->reSize(rand(1,100));
}
//$arrayShape = [$circle,$rectangle,$square];
foreach ($arrayShape as $item) {
    echo "My new size is: " . $item->getSize() . "<br>";
}
