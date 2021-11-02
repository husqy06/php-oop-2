<?php

    class Product {
        public $name;
        public $category;
        public $brand;
        public $description;
        public $price;
        public $id_product;

        function __construct($_name, $_category, $_brand, $_description, $_price, $_id_product)
        {
            $this->name = $_name;
            $this->category = $_category;
            $this->brand = $_brand;
            $this->description = $_description;
            $this->price = $_price;
            $this->id_product = $_id_product;
        }

        public function setName($_name) {
            $this->name = $_name;
        }
        public function getName() {
            return $this->name;
        }

        public function setCategory($_category) {
            $this->category = $_category;
        }
        public function getCategory() {
            return $this->category;
        }

        public function setBrand($_brand) {
            $this->brand = $_brand;
        }
        public function getBrand() {
            return $this->brand;
        }

        public function setDescription($_description) {
            $this->description = $_description;
        }
        public function getDescription() {
            return $this->description;
        }

        public function setPrice($_price) {
            $this->price = $_price;
        }
        public function getPrice() {
            return $this->price;
        }

        public function setIdProduct($_id_product) {
            $this->id_product = $_id_product;
        }
        public function getIdProduct() {
            return $this->id_product;
        }
    }
?>