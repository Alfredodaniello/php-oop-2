<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Traits/City.php";


class Kennel extends Product {
    use City;
}

?>