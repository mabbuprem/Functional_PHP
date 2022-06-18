<?php
$triplet = array(1, -1, 2, -3, 5, -4, 3);
$n = count($triplet);

function findTriplets($triplet, $n)
{
    $triplets = 0;
    echo "the distance triplets are: ";
    for ($i = 0; $i < $n - 2; $i++) {
        for ($j = $i + 1; $j < $n - 1; $j++) {
            for ($k = $j + 1; $k < $n; $k++){
                if ($triplet[$i] + $triplet[$j] + $triplet[$k] == 0) {
                    $triplets++;
                    echo "\n";
                    echo $triplet[$i], " ";
                    echo $triplet[$j], " ";
                    echo $triplet[$k];
                }
               
            }
        }
    }
    echo "\nnumber of distict triplets are: " . $triplets;
            
}
// calling findTriplets method by passing parameters.
findTriplets($triplet, $n);
