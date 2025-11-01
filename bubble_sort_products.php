<?php

$products = [
    ["name" => "Laptop", "price" => 85000],
    ["name" => "Headphones", "price" => 5000],
    ["name" => "Keyboard", "price" => 2500],
    ["name" => "Smartphone", "price" => 45000],
    ["name" => "Mouse", "price" => 1500]
];

function bubbleSortProducts(&$products) {
    $n = count($products);

    for ($i = 0; $i < $n - 1; $i++) {
        $swapped = false;

        for ($j = 0; $j < $n - $i - 1; $j++) {
            
            if ($products[$j]['price'] > $products[$j + 1]['price']) {

                $temp = $products[$j];
                $products[$j] = $products[$j + 1];
                $products[$j + 1] = $temp;
                $swapped = true;
            }
        }

        if (!$swapped) break;
    }
}

echo "<h3>Original Product List:</h3>";
foreach ($products as $p) {
    echo "{$p['name']} - Rs {$p['price']}<br>";
}

bubbleSortProducts($products);

echo "<h3>Sorted by Price (Low → High):</h3>";

foreach ($products as $p) {
    echo "{$p['name']} - Rs {$p['price']}<br>";
}
?>
