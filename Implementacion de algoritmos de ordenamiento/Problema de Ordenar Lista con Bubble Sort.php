<?php
function OrdernarLista(array $arr): array {
    $n = count($arr);
    do {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($arr[$i] < $arr[$i + 1]) {
             
                [$arr[$i], $arr[$i + 1]] = [$arr[$i + 1], $arr[$i]];
                $swapped = true;
            }
        }
        $n--;
    } while ($swapped);
    
    return $arr;
}


$numbers = [5, -4, 2, -3, 1, 6, -8, 9, 10];
echo "Lista de números original\n";
print_r($numbers);

$sortedNumbers = OrdernarLista($numbers);
echo "\nLista de números ordenada:\n";
print_r($sortedNumbers);
?>
