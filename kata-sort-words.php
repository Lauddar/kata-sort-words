<?php

function sortWords($array)
{
    for ($i = 0; $i < sizeof($array); $i++) {
        for ($j = 0; $j < (sizeof($array) - $i - 1); $j++) {
            if (compareWords($array[$j], $array[$j + 1])) {
                $array = swap($array, $j, $j + 1);
            }
        }
    }
    return $array;
}

function compareWords($firstWord, $secondWord)
{
    // compare words length
    if (strlen($firstWord) > strlen($secondWord)) {
        return true;
        // if the words are the same length, sort them alphabetically
    } else if (strlen($firstWord) == strlen($secondWord)) {
        if (strcmp($firstWord, $secondWord) > 0) {
            return true;
        }
    }

    return false;
}


function swap($array, $posIni, $posFin)
{
    $largerWord = $array[$posIni];
    $array[$posIni] = $array[$posFin];
    $array[$posFin] = $largerWord;

    return $array;
}


$array1 = ['hola', 'as', 'PHP', 'estudiar'];
$array2 = ['chachi', 'supercaligfragilistipuesquialidoso', 'esternoclidomastoideo'];
$array3 = ['h', '', ' ', 'sopa', 'res'];
$array4 = ['h', 'manzana', 'coches', ' ', '', 'sopa', 'res'];

$newArray1 = sortWords($array1);
$newArray2 = sortWords($array2);
$newArray3 = sortWords($array3);
$newArray4 = sortWords($array4);

var_dump($newArray1);
echo "<br>";
var_dump($newArray1);
echo "<br><br>";
var_dump($array2);
echo "<br>";
var_dump($newArray2);
echo "<br><br>";
var_dump($array3);
echo "<br>";
var_dump($newArray3);
echo "<br><br>";
var_dump($array4);
echo "<br>";
var_dump($newArray4);
