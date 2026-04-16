<?php
    //Classe Condicao
    class Condicao {
        //Atributos
        private $idCondicao;
        private $estadoConservacao;
        private $observacaoGeral;
        private $dataUltimaVistoria;

        //Métodos

        //Método construtor
        public function __construct ($idCondicao, $estadoConservacao, $observacaoGeral, $dataUltimaVistoria) {
            $this->setIdCondicao($idCondicao);
            $this->setEstadoConservacao($estadoConservacao);
            $this->setObservacaoGeral($observacaoGeral);
            $this->setDataUltimaVistoria($dataUltimaVistoria);
        }//Fim do método construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setIdCondicao ()
        public function setIdCondicao ($idCondicao) {
            if (is_string($idCondicao)) {
                $this->idCondicao = $idCondicao;
            }
        }//Fim do método setIdCondicao ()

        //Método getIdCondicao ()
        public function getIdCondicao () {
            return $this->idCondicao;
        }//Fim do método getIdCondicao ()

        //Método setEstadoConservacao ()
        public function setEstadoConservacao ($estadoConservacao) {
            if (is_string($estadoConservacao)) {
                $this->estadoConservacao = $estadoConservacao;
            }
        }//Fim do método setEstadoConservacao ()

        //Método getEstadoConservacao ()
        public function getEstadoConservacao () {
            return $this->estadoConservacao;
        }//Fim do método getEstadoConservacao ()

        //Método setObservacaoGeral ()
        public function setObservacaoGeral ($observacaoGeral) {
            if (is_string($observacaoGeral)) {
                $this->observacaoGeral = $observacaoGeral;
            }
        }//Fim do método setObservacaoGeral ()

        //Método getObservacaoGeral ()
        public function getObservacaoGeral () {
            return $this->observacaoGeral;
        }//Fim do método getObservacaoGeral ()

        //Método setDataUltimaVistoria ()
        public function setDataUltimaVistoria ($dataUltimaVistoria) {
            if (is_string($dataUltimaVistoria)) {
                $this->dataUltimaVistoria = $dataUltimaVistoria;
            }
        }//Fim do método setDataUltimaVistoria ()

        //Método getDataUltimaVistoria ()
        public function getDataUltimaVistoria () {
            return $this->dataUltimaVistoria;
        }//Fim do método getDataUltimaVistoria ()
    }//Fim da Classe Condicao
?>