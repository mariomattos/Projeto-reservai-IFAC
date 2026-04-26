<?php
    //Classe Item
    class Item {
        //Atributos
        private $idItem;
        private $condicao; //Composição
        private $caracteristicas; //Composição

        //Métodos

        //Método construtor
        public function __construct ($idItem) {
            $this->setIdItem($idItem);
            $this->condicao = array();
            $this->caracteristicas = array();
        }//Fim do método construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setIdItem ()
        public function setIdItem ($idItem) {
            $this->idItem = $idItem;
        }//Fim do método setIdItem ()

        //Método getIdItem ()
        public function getIdItem () {
            return $this->idItem;
        }//Fim do método getIdItem ()

        //Método addCondicao ()
        public function addCondicao($idCondicao, $estadoConservacao, $observacaoGeral, $dataUltimaVistoria) {
            $this->condicao[] = new Condicao ($idCondicao, $estadoConservacao, $observacaoGeral, $dataUltimaVistoria);
        }//Fim do método addCondicao ()

        //Método getCondicao ()
        public function getCondicao () {
            return $this->condicao;
        }//Fim do método getCondicao ()

        //Método addCaracteristicas ()
        public function addCaracteristicas($id, $nome, $descricao, $quantidade) {
            $this->caracteristicas[] = new Caracteristicas ($id, $nome, $descricao, $quantidade);
        }//Fim do método addCaracteristicas()

        //Método getCaracteristicas ()
        public function getCaracteristicas () {
            return $this->caracteristicas;
        }//Fim do método getCaracteristicas ()
    }//Fim da Classe Item
?>