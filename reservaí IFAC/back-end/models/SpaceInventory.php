<?php
    //Classe SpaceInventory
    class SpaceInventory {
        //Atributos
        private $idSpaceInventory;
        //Referência de memória
        private $items; //Composição

        //Método __construct ()
        public function __construct($idSpaceInventory) {
            $this->setIdSpaceInventory ($idSpaceInventory);
            $this->item = array ();
        }//Fim do método __construct ()

        //Método setIdSpaceInventory ()
        public function setIdSpaceInventory ($idSpaceInventory) {
            $this->idSpaceInventory = $idSpaceInventory;
        }//Fim do método setIdSpaceInventory ()

        //Método getIdSpaceInventory ()
        public function getIdSpaceInventory () {
            return $this->idSpaceInventory;
        }//Fim do método getIdSpaceInventory ()
        
        //Método addItems ()
        public function addItems (Item $item) {
            $this->items[] = $item;
        }//Fim do método addItems ()

        //Método getItems
        public function getItems () {
            return $this->items;
        }//Fim do método getItems
    }//Fim da Classe SpaceInventory
?>