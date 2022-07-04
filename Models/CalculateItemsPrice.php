<?php

namespace Models;

require_once 'CalculateItemsPriceInterface.php';

class CalculateItemsPrice implements CalculateItemsPriceInterface
{

//    private array $items;
//
//    public function __construct(array $items) {
//        $this->items = $items;
//    }

    /**
     * @param array $items
     * @return float
     */
    public function calculateTotalPrice(array $items): float
    {
        $totalPrice = 0;
        $keyValueArray = array_count_values($items);
        foreach ($items as $item) {
//            switch ($item->getItemName()) {
            switch ($item) {
                case 'A':
                    $totalPrice = $totalPrice + $this->calculateItemPriceWithDiscount($keyValueArray['A'], 4, 7, 2);
                    break;
                case 'B':
                    $totalPrice = $totalPrice + $this->calculateItemPrice($keyValueArray['B'], 12);
                    break;
                case 'C':
                    $totalPrice = $totalPrice + $this->calculateItemPriceWithDiscount($keyValueArray['C'], 6, 6, 1.25);
                    break;
                case 'D':
                    $totalPrice = $totalPrice + $this->calculateItemPrice($keyValueArray['D'], 0.15);
                    break;
                default:
                    echo "No such item name" . "\n";
            }
        }
        return $totalPrice;
    }

    /**
     * @param int $itemQuantity
     * @param int $discountQuantity
     * @param float $discountPrice
     * @param float $itemPrice
     * @return float
     */
    public function calculateItemPriceWithDiscount(int $itemQuantity, int $discountQuantity, float $discountPrice, float $itemPrice): float
    {
        $discountItemsPrice = ($itemQuantity / $discountQuantity) * $discountPrice;
        $itemsPrice = ($itemQuantity % $discountQuantity) * $itemPrice;

        return $discountItemsPrice + $itemsPrice;
    }

    /**
     * @param int $itemQuantity
     * @param float $itemPrice
     * @return float
     */
    public function calculateItemPrice(int $itemQuantity, float $itemPrice): float
    {
        return $itemQuantity * $itemPrice;
    }


}