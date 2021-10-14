<?php
include_once "ComparableCircle.php";

$circleOne = new ComparableCircle(8, 'circleOne');
$circleTwo = new ComparableCircle(2, 'circleTwo');
$circleThree = new ComparableCircle(4, 'circleThree');

$test1 = $circleOne->compareTo($circleTwo);
echo "Comparable: ".$test1."<br/>";
$test2 = $circleTwo->compareTo($circleThree);
echo "Comparable: ".$test2."<br/>";
$test3 = $circleOne->compareTo($circleThree);
echo "Comparable: ".$test3;