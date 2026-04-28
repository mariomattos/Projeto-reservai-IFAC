<?php
    //Classe Item
    class Item {
        //Atributos
        private $condicao;
        private $caracteristicas; //Composição

        //Métodos

        //Método construtor
        public function __construct ($condicao) {
            $this->setCondicao ($condicao);
            $this->caracteristicas = array();
        }//Fim do método construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setCondicao ()
        public function setCondicao ($condicao) {
            $this->condicao = $condicao;
        }//Fim do método setCondicao ()

        //Método getCondicao ()
        public function getCondicao () {
            return $this->condicao;
        }//Fim do método getCondicao ()

        //Método addCaracteristicas ()
        public function addCaracteristicas($nome, $descricao, $quantidade) {
            $this->caracteristicas[] = new Caracteristicas ($nome, $descricao, $quantidade);
        }//Fim do método addCaracteristicas()

        //Método getCaracteristicas ()
        public function getCaracteristicas () {
            return $this->caracteristicas;
        }//Fim do método getCaracteristicas ()
    }//Fim da Classe Item
?>