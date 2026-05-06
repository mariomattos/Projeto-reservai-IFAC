<?php
    //Classe Characteristics
    class Characteristics {
        //Atributos
        private $name;
        private $description;
        private $quantity;

        //Métodos

        //Método Construct
        public function __construct ($name, $description, $quantity) {
            $this->setName ($name);
            $this->setDescription ($description);
            $this->setQuantity ($quantity);
        }//Fim do Método Construct

        //Método setName ()
        public function setName ($name) {
            $this->name = $name;
        }//Fim do Método setName ()

        //Método getName ()
        public function getName () {
            return $this->name;
        }//Fim do Método getName ()

        //Método setDescription ()
        public function setDescription ($description) {
            $this->description = $description;
        }//Fim do Método setDescription ()

        //Método getDescription ()
        public function getDescription () {
            return $this->description;
        }//Fim do Método getDescription()

        //Método setQuantity ()
        public function setQuantity ($quantity) {
            $this->quantity = $quantity;
        }//Fim do Método setQuantity ()
        
        //Método getQuantity ()
        public function getQuantity () {
            return $this->quantity;
        }//Fim do Método getQuantity ()
    }//Fim da Classe Characteristics
?>