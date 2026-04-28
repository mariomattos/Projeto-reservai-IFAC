<?php
    //Classe Espaco
    class Espaco {
        //Atributos
        private $idEspaco;
        private $condicao;
        private $inventario; //Composição
        private $caracteristicas; //Composição

        //Métodos

        //Método construtor
        public function __construct ($idEspaco, $condicao) {
            $this->setIdEspaco($idEspaco);
            $this->setCondicao($condicao);
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

        //Método setCondicao ()
        public function setCondicao ($condicao) {
            $this->condicao = $condicao;
        }//Fim do método setCondicao ()

        //Método getCondicao ()
        public function getCondicao () {
            return $this->condicao;
        }//Fim do método getCondicao ()

        //Método setInventario ()
        public function setInventario (Inventario $i) {
            //Passando a referência do objeto i
            $this->inventario = $i;
        }//Fim do método setInventario ()

        //Método getInventario ()
        public function getInventario () {
            return $this->inventario;
        }//Fim do método getInventario ()

        //Método addCaracteristicas ()
        public function addCaracteristicas($nome, $descricao, $quantidade) {
            $this->caracteristicas[] = new Caracteristicas ($nome, $descricao, $quantidade);
        }//Fim do método addCaracteristicas()

        //Método getCaracteristicas ()
        public function getCaracteristicas () {
            return $this->caracteristicas;
        }//Fim do método getCaracteristicas ()
    }//Fim da classe Espaco
?>