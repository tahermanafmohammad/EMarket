<?php

namespace App\service;

use PhpParser\Node\Stmt\Echo_;

class cart
{
    private $items = [];
    /**
     * Get the value of item
     */

    public function getItem()
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

    public function addProduct(product $product, int $quantitiy): mixed
    {
        $cartItem = $this->findCartItem($product->getId());
        if ($cartItem === null) {
            $cartItem = new cartItem($product, 0);
            $this->items[] = $cartItem;
        }
        $cartItem->increaseQuantity($quantitiy);
        return $cartItem;
    }

    public function findCartItem(int $productId): mixed
    {
        foreach ($this->items as $item) {
            if ($item->getProduct()->getId() === $productId) {
                return $item->getProduct();
            }
        }
        return null;
    }

    public function removeProduct(product $product): void
    {
        foreach ($this->items as $index => $item) {
            if ($item->getProduct()->getId() === $product->getId()) {
                unset($this->items[$index]);
                break;
            }
        }
    }

    public function totalQuantitiy(): float|int
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantitiy();
        }
        return $sum;
    }

    public function totalprice(): float|int
    {
        $totalSum = 0;
        foreach ($this->items as $item) {
            $totalSum += $item->getQuantitiy() * $item->getproduct()->getPrice();
        }
        return $totalSum;
    }

    // public function eachprice(): string
    // {
    //     $x = "";
    //     foreach ($this->items as $item) {
    //         $i = $item->getproduct()->getTitle();
    //         $x .= "  " . $i . "=" . $item->getQuantitiy() * $item->getproduct()->getPrice();
    //     }
    //     return $x;
    // }

    public function eachprice()
    {
        $x = [];
        $i = 0;
        foreach ($this->items as $item) {
            $T = $item->getproduct()->getTitle();
            $P = $item->getQuantitiy() * $item->getproduct()->getPrice();
            $x[$i] = $T . "=" . $P;
            $i++;
        }
        $ee = $x;
        return $ee;
    }
}

