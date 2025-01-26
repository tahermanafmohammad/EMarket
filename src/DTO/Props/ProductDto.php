<?php

namespace App\DTO\Props;

class ProductDto
{

    private int $Id = 0;
    private string $title = "";
    private float $price = 0;
    private int $avilableQuantity = 0;

    public function __construct(int $id, string $title, float $price, int $avilableQuantity)
    {
        $this->Id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->avilableQuantity = $avilableQuantity;
    }

    /**
     * Get the value of avilableQuantity
     */
    public function getAvilableQuantity()
    {
        return $this->avilableQuantity;
    }

    /**
     * Set the value of avilableQuantity
     *
     * @return  self
     */
    public function setAvilableQuantity($avilableQuantity)
    {
        $this->avilableQuantity = $avilableQuantity;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->Id = $id;

        return $this;
    }
}