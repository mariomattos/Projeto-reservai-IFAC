<?php
    //Classe Item
    class Item {
        //Atributos
        private $numPatrimonio;
        private $marcaEquipamento;
        private $modeloEquipamento;
        //Referências de memória
        private $inventario;
        private $condicao;

        //Métodos

        //Método construtor
        public function __construct ($numPatrimonio, $marcaEquipamento, $modeloEquipamento) {
            $this->setNumPatrimonio($numPatrimonio);
            $this->setMarcaEquipamento($marcaEquipamento);
            $this->setModeloEquipamento($modeloEquipamento);
        }//Fim do método construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setNumPatrimonio ()
        public function setNumPatrimonio ($numPatrimonio) {
            if (is_string($numPatrimonio)) {
                $this->numPatrimonio = $numPatrimonio;
            }
        }//Fim do método setNumPatrimonio ()

        //Método getNumPatrimonio ()
        public function getNumPatrimonio () {
            return $this->numPatrimonio;
        }//Fim do método getNumPatrimonio ()

        //Método setMarcaEquipamento ()
        public function setMarcaEquipamento ($marcaEquipamento) {
            if (is_string($marcaEquipamento)) {
                $this->marcaEquipamento = $marcaEquipamento;
            }
        }//Fim do método setMarcaEquipamento ()

        //Método getMarcaEquipamento ()
        public function getMarcaEquipamento () {
            return $this->marcaEquipamento;
        }//Fim do método getMarcaEquipamento ()

        //Método setModeloEquipamento ()
        public function setModeloEquipamento ($modeloEquipamento) {
            if (is_string($modeloEquipamento)) {
                $this->modeloEquipamento = $modeloEquipamento;
            }
        }//Fim do método setModeloEquipamento ()

        //Método getModeloEquipamento ()
        public function getModeloEquipamento () {
            return $this->modeloEquipamento;
        }//Fim do método getModeloEquipamento ()

        //Método setInventario ()
        public function setInventario (Inventario $i) {
            //Passando a referência
            $this->inventario = $i;
        }//Fim do método setInventario ()

        //Método getInventario ()
        public function getInventario () {
            return $this->inventario;
        }//Fim do método getInventario ()

        //Método setCondicao ()
        public function setCondicao (Condicao $c) {
            //Passando a referência
            $this->condicao = $c;
        }//Fim do método setCondicao ()

        //Método getCondicao ()
        public function getCondicao () {
            return $this->condicao;
        }//Fim do método getCondicao ()
    }//Fim da Classe Item
?>