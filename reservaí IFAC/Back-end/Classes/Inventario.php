<?php
    //Classe Inventario
    class Inventario {
        //Atributos
        private $idInventario;
        private $item; //Agregação

        //Métodos

         //Método Construtor
        public function __construct ($idInventario) {
            $this->setIdInventario ($idInventario);
            $this->item = array();
        }//Fim do Método Construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setIdInventario ()
        public function setIdInventario ($idInventario) {
            $this->idInventario = $idInventario;
        }//Fim do método setIdInventario

        //Método getIdInventario ()
        public function getIdInventario () {
            return $this->idInventario;
        }//Fim do método getIdInventario ()

        //Método addItem ()
        public function addItem (Item $i) {
            $this->item[] = $i;
        }//Fim do método addItem ()

        public function getItem () {
            return $this->item;
        }//Fim do método getItem ()
    }//Fim da Classe Inventario
?>