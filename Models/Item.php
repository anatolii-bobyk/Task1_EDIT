<?php

namespace Models;

class Item
{
    /**
     * @var string
     */
    private string $itemName;

    /**
     * @param string $itemName
     */
    public function __construct(string $itemName)
    {
        $this->itemName = $itemName;
    }

    /**
     * @return string
     */
    public function getItemName(): string
    {
        return $this->itemName;
    }

    /**
     * @param string $itemName
     */
    public function setItemName(string $itemName): void
    {
        $this->itemName = $itemName;
    }


}