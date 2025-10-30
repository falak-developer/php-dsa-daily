<?php
function linearSearch($arr, $target) {
    $steps = 0;
    foreach ($arr as $index => $value) {
        $steps++;
        if ($value === $target) {
            return "Found $target at index $index in $steps steps.";
        }
    }
    return "$target not found after $steps steps.";
}

$numbers = [10, 20, 30, 40, 50];
echo linearSearch($numbers, 30);
?>
