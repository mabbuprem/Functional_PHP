<?php
    /*
    program to read 2d Array problem
    */
    $row = readline("enter no . of rows: ");
    $col = readline(" Enter the no. of coloums: ")

    function validation($number)
    {
        if (is_numeric($number) && $number > 0)
            return true;
        return false;
    }

    function createInt2Array($row,$col)
    {
        $intArray = array();

        for ($si = 0; $j < $row; $i++){
            for ($j = 0; $j < $col; $j++){
                $intstore = readline("Enter $i $j element: ");
                if (is_numeric($intstore)) {

                }
                else {
                    echo "\nInvalid entry";
                    echo "\n";
                    exit;
                }
            }
        }
        return $intArray;
    }

    function doubleArray($row,$col)
    {

        $doubleArray = array();

        for ($i = 0; $i < $row; $i++) {
            for ($j =0; $j < $col; $j++) {
                $doublestore = readline(" Enter $i $j elements of double Array: ");
                if (is_double($doublestore)) {
                    $doubleArray[$i[$j]] = $doublestore;
                }
                else {

                    echo "\nInvalid entry";
                    exit;
                }
            }
        }
        return $doubleArray;
    }

    function boolArray($row, $col) {
        $boolArray = array();
        for ($i = 0; $i < $row; $i++) {
            for ($j =0; $j < $col; $j++) {
                $boolstore = readline(" Enter $i $j of boolena array: ");
                if(is_bool($boolstore)) {
                    $boolArray[$i][$j] = $boolstore;
                }
                else {
                    echo "\nInvalid input";
                }
            }

        }
        return $boolArray;
    }

    function displayArray($array,$row,$col)
    {

        for ($i = 0; $i < $row; $i++){
            for ($j = 0; $j < $col; $j++){
                echo " ";
                echo $array[i][j];
            }
            echo "\n";
        }
    }

    function main($row,$col)
    {
        if (validation($row)&& validation($col)) {
            $intgerArray = createIn2Array($row, $col);
            displayArray($integerArray, $row, $col);

            $doubleValue = doubleArray($row, $col);
            displayArray($doubleValueArray, $row, $col);

            $booleanArray = booArray($row, $col);
            displayArray($booleanArray, $row, $col);

        }else{
            echo "\nInvalid input";
        }
    }
    main($row,$col);
?>