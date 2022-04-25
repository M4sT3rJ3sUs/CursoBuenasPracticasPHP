<?php
class Manzano {
        private $manzanas = [];
        public function getManzanas() {
            return $this->manzanas;
        }
        public function cuentas() {
            return count($this->manzano->getManzanas());
        }
    }

    class ContadorDeManzanas {
        private $manzano;
        public function __contsruct(Manzano $manzano) {
            $this->manzano = $manzano;
        }
        public function cuantas() {
            return $this->manzano->cuentas();
        }
    }