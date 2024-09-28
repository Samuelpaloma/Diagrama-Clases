<?php

    class Resultados{
        private $valorDia;
        private $diasTrab;
        public $arl;
        public $pension;
        public $salud;
        public $sueldo;
        public $descuento;
        public $pagoTotal;


        public function __construct(Numero $valorDia, Numero $diasTrab) {
            $this->valorDia = $valorDia;
            $this->diasTrab = $diasTrab;
        }

        public function sueldo(){
            $this->sueldo = $this->diasTrab->getNumero() * $this->valorDia->getNumero();
            return $this->sueldo;
        }

        public function pension(){
            $this->pension = $this->sueldo * 0.16;
            return $this->pension;
        }

        public function salud(){
            $this-> salud = $this->sueldo * 0.12;
            return $this-> salud;
        }

        public function arl(){
            $this->arl = $this->sueldo * 0.052;
            return $this->arl;
        }

        public function descuento(){
            $this->descuento = $this->sueldo + $this->pension + $this->arl;
            return $this->descuento;
        }

        public function pagoTotal(){
            $this->pagoTotal = $this->sueldo - $this->descuento;
            return $this->pagoTotal;
        }

    }




?>