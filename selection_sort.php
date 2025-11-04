<?php
function selectionSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}

$arr = [64, 25, 12, 22, 11];
echo "Original Array: " . implode(", ", $arr) . "<br>";
$sorted = selectionSort($arr);
echo "Sorted Array: " . implode(", ", $sorted);
?>
