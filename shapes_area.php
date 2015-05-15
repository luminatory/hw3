<?php
function triangleArea($l, $r, $angle ){
	echo $area = ($l * $r * sin(deg2rad($angle)))/2;
}
echo "<br />";
echo "Triangle area is equal to  ";
triangleArea(10, 30, 20);

function circleArea($r){
	$pi = pi();
	echo $area = $pi *  pow($r, 2);
}
echo "<br />";
echo "Circle area is equal to  ";
circleArea(30);

function rectangleArea($a, $b){
	echo $area = $a * $b;
}
echo "<br />";
echo "Rectangle area is equal to  ";
rectangleArea(7, 15);

function trapezoidArea($a, $b, $height){
	echo $area = ($a +$b)/2 * $height;
}
echo "<br />";
echo "Trapezoid area is equal to  ";
trapezoidArea(6, 5, 10);