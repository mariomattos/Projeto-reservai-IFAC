<?php
    //Classe Inventory
    class Inventory {
        //Atributos
        private $items; //Composição

        //Método construct
        public function __construct() {
            $this->item = array();
        }
        //Fim do método construct

        //Método addItems ()
        public function addItems (Item $item) {
            $this->items[] = $item;
        }//Fim do método addItems ()

        //Método getItems
        public function getItems () {
            return $this->items;
        }//Método getItems
    }//Fim da Classe Inventory
?>