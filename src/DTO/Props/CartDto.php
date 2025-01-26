<?php

namespace App\DTO\Props;

class CartDto
{
    public array $items = [];
    /**
     * Get the value of item
     */

    public function getItem(): array
    {
        return $this->items;
    }

    /**
     * Set the value of item
     *
     * @return  self
     */
    public function setItem($item)
    {
        $this->items = $item;

        return $this;
    }
}