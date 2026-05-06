<?php
    //Classe Space
    class Space {
        //Atributos
        private $spaceId;
        private $condition;
        //Referência de memória
        private $bookings; //Agregação
        private $items; //Agregação
        private $characteristics; //Composição

        //Métodos

        //Método Construct
        public function __construct ($spaceId, $condition) {
            $this->setSpaceId($spaceId);
            $this->setCondition($condition);
            $this->bookings = array();
            $this->characteristics = array();
            $this->item = array();
        }//Fim do método Construct

        //Método setSpaceId ()
        public function setSpaceId ($spaceId) {
            $this->spaceId = $spaceId;
        }//Fim do método setEspaceId ()

        //Método getSpaceId ()
        public function getSpaceId () {
            return $this->spaceId;
        }//Fim do método getSpaceId ()

        //Método setCondition ()
        public function setCondition ($condition) {
            $this->condition = $condition;
        }//Fim do método setCondition ()

        //Método getCondition ()
        public function getCondition () {
            return $this->condition;
        }//Fim do método getCondition ()

        //Método addBookings ()
        public function addBookings (Booking $b) {
            //Passando a referência do objeto b
            $this->bookings[] = $b;
        }//Fim do método addBookings ()

        //Método getBookings ()
        public function getBookings () {
            return $this->bookings;
        }//Fim do método getBookings ()

        //Método addItems ()
        public function addItems (Item $i) {
            //Passando a referência do objeto i
            $this->items[] = $i;
        }//Fim do método addItems ()

        //Método getItem ()
        public function getItems () {
            return $this->items;
        }//Fim do método getItem ()

        //Método addCharacteristics ()
        public function addCharacteristics($name, $description, $quantity) {
            $this->characteristics[] = new Characteristics ($name, $description, $quantity);
        }//Fim do método addCharacteristics()

        //Método getCharacteristics ()
        public function getCharacteristics () {
            return $this->characteristics;
        }//Fim do método getCharacteristics ()
    }//Fim da classe Space
?>