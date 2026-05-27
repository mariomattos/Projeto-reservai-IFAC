<?php
    //Classe Space
    class Space {
        //Atributos
        private $spaceId;
        private $spaceCondition;
        private $spaceName;
        private $spaceDescription;
        //Referência de memória
        private $bookings; //Agregação
        private $items; //Agregação

        //Métodos

        //Método __construct ()
        public function __construct ($spaceId, $spaceCondition, $spaceName, $spaceDescription) {
            $this->setSpaceId($spaceId);
            $this->setSpaceCondition($spaceCondition);
            $this->setSpaceName($spaceName);
            $this->setSpaceDescription($spaceDescription);
            $this->bookings = array();
            $this->item = array();
        }//Fim do método __construct ()

        //Método setSpaceId ()
        public function setSpaceId ($spaceId) {
            $this->spaceId = $spaceId;
        }//Fim do método setSpaceId ()

        //Método getSpaceId ()
        public function getSpaceId () {
            return $this->spaceId;
        }//Fim do método getSpaceId ()

        //Método setSpaceCondition ()
        public function setSpaceCondition ($spaceCondition) {
            $this->spaceCondition = $spaceCondition;
        }//Fim do método setSpaceCondition ()

        //Método getSpaceCondition ()
        public function getspaceCondition () {
            return $this->spaceCondition;
        }//Fim do método getSpaceCondition ()

        //Método setSpaceName ()
        public function setSpaceName ($spaceName) {
            $this->spaceName = $spaceName;
        }//Fim do método setSpaceName ()

        //Método getSpaceName ()
        public function getSpaceName () {
            return $this->spaceName;
        }//Fim do método getSpaceName ()

        //Método setSpaceDescription ()
        public function setSpaceDescription ($spaceDescription) {
            $this->spaceDescription = $spaceDescription;
        }//Fim do método setSpaceDescription ()

        //Método getSpaceDescription ()
        public function getSpaceDescription () {
            return $this->spaceDescription;
        }//Fim do método getSpaceDescription ()

        //Método addBookings ()
        public function addBookings (Booking $b) {
            $this->bookings[] = $b;
        }//Fim do método addBookings ()

        //Método getBookings ()
        public function getBookings () {
            return $this->bookings;
        }//Fim do método getBookings ()

        //Método addItems ()
        public function addItems (Item $i) {
            $this->items[] = $i;
        }//Fim do método addItems ()

        //Método getItem ()
        public function getItems () {
            return $this->items;
        }//Fim do método getItem ()
    }//Fim da Classe Space
?>