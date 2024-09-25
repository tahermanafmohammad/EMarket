<?php

namespace App\service;
class product
{
    private $id = 0;
    private $title = "";
    private $price = 0;
    private $avilableQuantity = 0;

    public function __construct($id, $title, $price, $avilableQuantity)
    {
        $this->id = $id;
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
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function addTocart(cart $cart, int $quantity)
    {
        return $cart->addProduct($this, $quantity);
    }

    public function removefromCart(cart $cart)
    {
        return $cart->removeProduct($this);
    }
}