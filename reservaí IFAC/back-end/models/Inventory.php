<?php
    //Classe Inventory
    class Inventory {
        //Atributos
        //Referência de memória
        private $items; //Composição

        //Método __construct ()
        public function __construct() {
            $this->item = array();
        }
        //Fim do método __construct ()

        //Método addItems ()
        public function addItems (Item $item) {
            $this->items[] = $item;
        }//Fim do método addItems ()

        //Método getItems
        public function getItems () {
            return $this->items;
        }//Fim do método getItems
    }//Fim da Classe Inventory
?>