<?php
    require_once 'card.php';

    class Order extends User {
        use Card;

        public $order_number;
        public $number_of_product;
        private $discount;
        
        function __construct($_name, $_surname, $_email, $_subscription, $_birth_date, $_order_number, $_number_of_product, $_discount, $_street, $_house_number, $_city, $_country, $_zip_code)
        {
            parent::__construct($_name, $_surname, $_email, $_subscription, $_birth_date,);
            $this->order_number = $_order_number;
            $this->number_of_product = $_number_of_product;
            $this->discount = $_discount;
            $this->birth_date = $_birth_date;
            $this->street = $_street;
            $this->house_number = $_house_number;
            $this->city = $_city;
            $this->country = $_country;
            $this->zip_code = $_zip_code;
        }

        public function setOrderNumber($_order_number) {
            $this->order_number = $_order_number;
        }
        public function getOrderNumber() {
            return $this->order_number;
        }

        public function setSurname($_surname) {
            $this->surname = $_surname;
        }
        public function getSurname() {
            return $this->surname;
        }

        public function setDiscount($_discount) {
            if($this->subscription == true) {
                $this->discount = 50;
            } else {
                $this->discount = $_discount;
            }
        }
        public function getDiscount() {
            return $this->discount;
        }
    }
?>