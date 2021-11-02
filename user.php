<?php
    require_once 'address.php';

    class User {
        use Address;

        public $name;
        public $surname;
        public $email;
        public $subscription;
        public $birth_date;
        
        function __construct($_name, $_surname, $_email, $_subscription = false, $_birth_date)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
            $this->subscription = $_subscription;
            $this->birth_date = $_birth_date;
        }
        
        public function setName($_name) {
            $this->name = $_name;
        }
        public function getName() {
            return $this->name;
        }

        public function setSurname($_surname) {
            $this->surname = $_surname;
        }
        public function getSurname() {
            return $this->surname;
        }

        public function setEmail($_email) {
            $this->email = $_email;
        }
        public function getEmail() {
            return $this->email;
        }

        public function setSubscription($_subscription) {
            $this->subscription = $_subscription;
        }
        public function getSubscription() {
            return $this->subscription;
        }
    }

?>