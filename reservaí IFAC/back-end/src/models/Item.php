<?php
    //Classe Item
    class Item {
        //Atributos
        private $itemId;
        private $itemName;
        private $itemDescription;
        private $itemQuantity;
        //Métodos

        //Método __construct ()
        public function __construct ($itemId, $itemName, $itemDescription, $itemQuantity) {
            $this->setItemId($itemId);
            $this->setItemName($itemName);
            $this->setItemDescription($itemDescription);
            $this->setItemQuantity($itemQuantity);
        }//Fim do método __construct ()

        //Método setItemId ()
        public function setItemId ($itemId) {
            $this->itemId = $itemId;
        }//Fim do método setItemId ()

        //Método getItemId ()
        public function getItemId () {
            return $this->itemId;
        }//Fim do método ItemId ()

        //Método setItemName ()
        public function setItemName ($itemName) {
            $this->itemName = $itemName;
        }//Fim do método setItemName ()

        //Método getItemName ()
        public function getItemName () {
            return $this->itemName;
        }//Fim do método getItemName ()

        //Método setItemDescription ()
        public function setItemDescription ($itemDescription) {
            $this->itemDescription = $itemDescription;
        }//Fim do método setItemDescription ()

        //Método getItemDescription ()
        public function getItemDescription () {
            return $this->itemDescription;
        }//Fim do método getItemDescription ()

        //Método setItemQuantity ()
        public function setItemQuantity ($itemQuantity) {
            $this->itemQuantity = $itemQuantity;
        }//Fim do método setItemQuantity ()

        //Método getItemQuantity ()
        public function getItemQuantity () {
            return $this->itemQuantity;
        }//Fim do método getItemQuantity ()
    }//Fim da Classe Item
?>