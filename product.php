<?php

class Product {
    public $name;
    public $price;
    public $description;
    public $image;

    public function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }
}

?>