<?php

    trait Address {
        public $street;
        public $house_number;
        public $city;
        public $country;
        public $zip_code;

        public function setStreet($_street) {
            $this->street = $_street;
        }
        public function getStreet() {
            return $this->street;
        }

        public function setHouseNumber($_house_number) {
            $this->house_number = $_house_number;
        }
        public function getHouseNumber() {
            return $this->house_number;
        }

        public function setCity($_city) {
            $this->city = $_city;
        }
        public function getCity() {
            return $this->city;
        }

        public function setCountry($_country) {
            $this->country = $_country;
        }
        public function getCountry() {
            return $this->country;
        }

        public function setZipCode($_zip_code) {
            $this->zip_code = $_zip_code;
        }
        public function getZipCode() {
            return $this->zip_code;
        }
    }

?>