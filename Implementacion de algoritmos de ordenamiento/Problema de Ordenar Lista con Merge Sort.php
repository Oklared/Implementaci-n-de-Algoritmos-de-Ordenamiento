<?php
function mergeSort(array $arr): array {
    if (count($arr) <= 1) {
        return $arr;
    }

    $mid = count($arr) / 2;
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    return merge(mergeSort($left), mergeSort($right));
}

function merge(array $left, array $right): array {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    return array_merge($result, $left, $right);
}


$words = ["Jamon", "Queso", "Tomate", "Pan", "Ajo"];
echo "Lista original:\n";
print_r($words);

$sortedWords = mergeSort($words);
echo "\nLista ordenada:\n";
print_r($sortedWords);
?>
