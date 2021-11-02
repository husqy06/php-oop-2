<?php

    trait Card {
        protected $card_number;
        protected $validthru;
        protected $ccv;
        protected $iban;

        public function setCardNumber($_card_number) {
            $this->card_number = $_card_number;
        }

        public function setValidthru($_validthru) {
            if(strtotime($_validthru) < 1420066800) {
                throw new Exception('Carta di credito scaduta');
            } else {
                 $this->validthru = $_validthru;
            }
        }

        public function setCcv($_ccv) {
            $this->ccv = $_ccv;

        }

        public function setIban($_iban) {
            $this->iban = $_iban;
        }
    }

?>