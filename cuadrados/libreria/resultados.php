<?php

    class Resultados{

        private $lado1;
        private $lado2;
        private $base1;
        private $altura1;
        private $base2;
        private $altura2;
        public $areaRect;
        public $areaTri;
        public $areaCua;


        public function __construct(Numero $lado1,Numero $lado2, Numero $base1, Numero $altura1, Numero $base2, Numero $altura2) {
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
            $this->base1 = $base1;
            $this->base2 = $base2;
            $this->altura1 = $altura1;
            $this->altura2 = $altura2;
        }

        public function arearect(){
            $this->areaRect = $this->base1->getValor() * $this->altura1->getValor();
            return $this->areaRect;
        }
        public function areaTri(){
            $this->areaTri = ($this->base2->getValor() * $this->altura2->getValor())/2;
            return $this->areaTri;
        }
        public function areaCua(){
            $this->areaCua = $this->lado1->getValor() * $this->lado2->getValor();
            return $this->areaCua;
        }
    }


?>