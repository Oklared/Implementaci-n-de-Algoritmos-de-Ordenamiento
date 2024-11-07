<?php
function insertionSort(array $arr): array {
    for ($i = 1; $i < count($arr); $i++) {
        $key = $arr[$i];
        $j = $i - 1;

    while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

$names = ["Jaquelin", "Alexandro", "Xavier", "Marlon", "Donald"];
echo "Lista original:\n";
print_r($names);

$sortedNames = insertionSort($names);
echo "\nLista ordenada alfabéticamente:\n";
print_r($sortedNames);
?>
