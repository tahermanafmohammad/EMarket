<?php
namespace App\DTO;
class CarProps
{
    public string $name;
    public string $color;
    public int $cc;

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */

    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of cc
     */

    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set the value of cc
     *
     * @return  self
     */
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }
}