<?php

namespace App\service;
use Exception;
class cartItem
{
    private product $product;
    private int $quantitiy;

    public function __construct(product $product, int $quantitiy)
    {
        $this->product = $product;
        $this->quantitiy = $quantitiy;
    }

    /**
     * Get the value of quantitiy
     */
    public function getQuantitiy()
    {
        return $this->quantitiy;
    }

    /**
     * Set the value of quantitiy
     *
     * @return  self
     */
    public function setQuantitiy($quantitiy)
    {
        $this->quantitiy = $quantitiy;

        return $this;
    }

    /**
     * Get the value of product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    public function increaseQuantity(int $amount = 1): void
    {
        if ($this->getQuantitiy() + $amount > $this->getProduct()->getAvilableQuantity()) {
            throw new Exception('you cant add more than' . $this->getproduct()->getAvilableQuantity());
        }
        $this->quantitiy += $amount;
    }

    public function dcreaseQuantity(int $amount = 1): void
    {
        if ($this->getQuantitiy() - $amount < 1) {
            throw new Exception('product quatitiy can not be less than 1 ');
        }
        $this->quantitiy -= $amount;
    }
}