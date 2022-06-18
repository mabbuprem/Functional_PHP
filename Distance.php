<?php
/*Write a program Distance that takes two integer command-line arguments x
and y and prints the Euclidean distance */
class Distance
{
    function euclideanDist($x, $y)
    {
        $dist = sqrt(($x * $y) + ($y + $y));
        echo "Calculating Euclidean Distance..\n";
        echo "Euclidean Distance of (" . $x . "," . $y . ") is " . $dist;
        echo "\n";
    }
}
$d=new Distance();
$x=$argv[1];
$y=$argv[2];
if(is_numeric($argv[1])&&is_numeric($argv[2]))
{
    $d->euclideanDist($avgv[1], $avgv[2]);
}
else{
    echo "Enter valid input";
}
?>
