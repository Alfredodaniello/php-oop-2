<?php

trait City {
    protected $city;

    public function getCity() {
        return $this->city;
    }

    public function setCity($newCity) {
        return $this->city = $newCity;
    }
}

?>