<?php
    //Classe Espaco
    class Espaco {
        //Atributos
        private $idEspaco;
        private $inventario; //Associação
        private $condicao; //Composição
        private $caracteristicas; //Composição

        //Métodos

        //Método construtor
        public function __construct ($idEspaco) {
            $this->setIdEspaco($idEspaco);
            $this->condicao = array();
            $this->caracteristicas = array();
        }//Fim do método construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setIdEspaco ()
        public function setIdEspaco ($idEspaco) {
            $this->idEspaco = $idEspaco;
        }//Fim do método setIdEspaco ()

        //Método getIdEspaco ()
        public function getIdEspaco () {
            return $this->idEspaco;
        }//Fim do método getIdEspaco ()

        //Método setInventario ()
        public function setInventario (Inventario $i) {
            //Passando a referência do objeto i
            $this->inventario = $i;
        }//Fim do método setInventario ()

        //Método getInventario ()
        public function getInventario () {
            return $this->inventario;
        }//Fim do método getInventario ()

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
    }//Fim da classe Espaco
?>