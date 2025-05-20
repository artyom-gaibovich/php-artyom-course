<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Solution.php';

$gadgets = [
    "phones" => ["apple" => "iPhone 12",
        "samsumg" => "Samsung S20",
        "nokia" => "Nokia 8.2"],
    "tablets" => ["lenovo" => "Lenovo Yoga Smart Tab",
        "samsung" => "Samsung Galaxy Tab S5",
        "apple" => "Apple iPad Pro"]
];


foreach ($gadgets as $gadget => $items) {
    foreach ($items as $key => $value) {
        echo $value;
    }
}
