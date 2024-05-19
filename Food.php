<?php 

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Traits/City.php";

class Food extends Product {
    use City;
    public $ingredients;
    public $calories;
    public $brand;
}

?>