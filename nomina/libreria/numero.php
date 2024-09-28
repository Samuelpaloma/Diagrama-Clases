<?php

    class Numero{
        private $numero;


        public function __construct($numero) {
            $this->numero = $numero;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function getNumero(){
            return $this->numero;
        }
    }


?>