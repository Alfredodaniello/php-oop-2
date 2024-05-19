<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Traits/City.php";

class Game extends Product {
    use City;
}

?>