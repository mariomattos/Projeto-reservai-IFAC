<?php
    //Classe Characteristic
    class Characteristic {
        //Atributos
        private $name;
        private $description;
        private $quantity;

        //Métodos

        //Método __construct ()
        public function __construct ($name, $description, $quantity) {
            $this->setName ($name);
            $this->setDescription ($description);
            $this->setQuantity ($quantity);
        }//Fim do método __construct ()

        //Método setName ()
        public function setName ($name) {
            $this->name = $name;
        }//Fim do método setName ()

        //Método getName ()
        public function getName () {
            return $this->name;
        }//Fim do método getName ()

        //Método setDescription ()
        public function setDescription ($description) {
            $this->description = $description;
        }//Fim do método setDescription ()

        //Método getDescription ()
        public function getDescription () {
            return $this->description;
        }//Fim do método getDescription()

        //Método setQuantity ()
        public function setQuantity ($quantity) {
            $this->quantity = $quantity;
        }//Fim do método setQuantity ()
        
        //Método getQuantity ()
        public function getQuantity () {
            return $this->quantity;
        }//Fim do método getQuantity ()
    }//Fim da Classe Characteristic
?>