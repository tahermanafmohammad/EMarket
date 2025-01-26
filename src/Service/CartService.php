<?php

namespace App\Service;
use App\DTO\Props\CartDto;
use App\DTO\Props\ProductDto;
use App\DTO\Props\CartItemDto;

class CartService
{

    public function __construct(public CartDto $cartDto)
    {
    }

    public function addProduct(ProductDto $productDto, int $quantitiy): CartItemDto
    {

        $cartItemDto = $this->findCartItem($productDto->getId());

        if ($cartItemDto === null) {
            $cartItemDto = new CartItemDto($productDto, 0);
            $this->cartDto->items[] = $cartItemDto;
        }

        $cartItemDto->increaseQuantity($quantitiy);

        return $cartItemDto;
    }

    public function findCartItem(int $productId): mixed
    {

        foreach ($this->cartDto->items as $item) {

            if ($item->getProduct()->getId() === $productId) {
                return $item->getProduct();
            }
        }

        return null;
    }

    public function removeProduct(ProductDto $productDto): void
    {

        foreach ($this->cartDto->items as $index => $item) {

            if ($item->getProduct()->getId() === $productDto->getId()) {
                unset($this->items[$index]);
                break;
            }
        }
    }

    public function totalQuantitiy(): float
    {
        $sum = 0;

        foreach ($this->cartDto->items as $item) {
            $sum += $item->getQuantitiy();
        }

        return $sum;
    }

    public function totalprice(): float
    {
        $totalSum = 0;

        foreach ($this->cartDto->items as $item) {
            $totalSum += $item->getQuantitiy() * $item->getproduct()->getPrice();
        }

        return $totalSum;
    }
}

