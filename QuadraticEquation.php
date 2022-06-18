<?php
/*
    Program to find Roots of Quadratic Equation
*/
class QuadraticProgram
{

    static function quadratic($a, $b, $c)
    {
        $delta = $b * $b - 4 * $a * $c;
        $delta = abs($delta);
        $root1 = (-$b + sqrt($delta)) / (2 * $a);
        $root2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "The Root 1 =" . round($root1,2) . "\n";
        echo "The Root 2 =" . $root2 . "\n";
    }
}

$a = readline("Enter the value for a:");
$b = readline("Enter the Value for b:");
$c = readline("Enter the Value for c:");
if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
    QuadraticProgram::quadratic($a, $b, $c);
} else {
    echo "Not a valid input";
}