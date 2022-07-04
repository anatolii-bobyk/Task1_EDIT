<?php

use Models\Item;
use Models\CalculateItemsPrice;

require_once 'filesInclude.php';

$item1 = new Item('A');
serialize($item1);
$item2 = new Item('B');
serialize($item2);
$item3 = new Item('C');
serialize($item3);
$item4 = new Item('D');
serialize($item4);


$items = array($item1, $item2, $item3, $item4, $item1, $item2, $item1, $item1);
$items2 = array($item3, $item3, $item3, $item3, $item3, $item3, $item3);
$items3 = array($item1, $item2,$item3, $item4);


//$items = array('A', 'B', 'C', 'D', 'A', 'B', 'A', 'A');
//$items2 = array('C', 'C', 'C', 'C', 'C', 'C', 'C');
//$items3 = array('A', 'B', 'C', 'D');

$objects = [
    $items, $items2, $items3
];

foreach ($objects as $object) {
    $calculateItemsPrice = new CalculateItemsPrice();
    $totalPrice = $calculateItemsPrice->calculateTotalPrice($object);
    echo 'Scanning ' . implode($object) . "\n";
    echo 'Total price is: $' . $totalPrice . "\n";
}

