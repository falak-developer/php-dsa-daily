<?php
function insertionSort(&$arr) {
    $n = count($arr);

    for ($next = 1; $next < $n; $next++) {
        $key = $arr[$next];
        $prev = $next - 1;
        while ($prev >= 0 && $arr[$prev] > $key) {
            $arr[$prev + 1] = $arr[$prev];
            $prev--;
        }
        $arr[$prev + 1] = $key;
    }
}

$arr = [12, 11, 13, 5, 6];
echo "Original Array: " . implode(", ", $arr) . "<br>";

insertionSort($arr);
echo "Sorted Array: " . implode(", ", $arr);
?>
