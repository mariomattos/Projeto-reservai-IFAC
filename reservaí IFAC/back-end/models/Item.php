<?php
    //Classe Item
    class Item {
        //Atributos
        private $itemId;
        private $characteristics; //Composição
        //Métodos

        //Método construct
        public function __construct ($itemId) {
            $this->setItemId($itemId);
            $this->characteristics = array();
        }//Fim do método construct

        //Método setItemId ()
        public function setItemId ($itemId) {
            $this->itemId = $itemId;
        }//Fim do método setItemId ()

        //Método getItemId ()
        public function getItemId () {
            return $this->itemId;
        }//Fim do método ItemId ()

        //Método addCharacteristics ()
        public function addCharacteristics($name, $description, $quantity) {
            $this->characteristics[] = new Characteristics ($name, $description, $quantity);
        }//Fim do método addCharacteristics()

        //Método getCharacteristics ()
        public function getCharacteristics () {
            return $this->characteristics;
        }//Fim do método getCharacteristics ()
    }//Fim da Classe Item
?>