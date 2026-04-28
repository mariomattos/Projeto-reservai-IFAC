<?php
    //Classe Inventario
    class Inventario {
        //Atributos
        private $item; //Agregação

        //Método construtor
        public function __construct() {
            $this->item = array();
        }

        //Método addItem ()
        public function addItem (Item $i) {
            $this->item[] = $i;
        }//Fim do método addItem ()

        public function getItem () {
            return $this->item;
        }
    }//Fim da Classe Inventario
?>