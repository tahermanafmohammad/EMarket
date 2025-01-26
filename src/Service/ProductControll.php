<?php

namespace App\Service;
use App\DTO\Props\ProductDto;

class ProductControll
{

    public function Product1(): ProductDto
    {
        $product1 = new ProductDto(1, 'iphone', 1000, 10);

        return $product1;
    }

    public function Product2(): ProductDto
    {
        $product2 = new ProductDto(2, 'mouse', 400, 10);

        return $product2;
    }
}