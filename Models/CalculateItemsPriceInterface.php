<?php

namespace Models;

interface CalculateItemsPriceInterface
{
    public function calculateTotalPrice(array $items): float;

    public function calculateItemPriceWithDiscount(int $itemQuantity, int $discountQuantity, float $discountPrice, float $itemPrice): float;

    public function calculateItemPrice(int $itemQuantity, float $itemPrice): float;

}