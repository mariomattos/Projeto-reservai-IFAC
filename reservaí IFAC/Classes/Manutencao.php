<?php
    //Classe Manutencao
    class Manutencao {
        //Atributos
        private $idManutencao;
        private $dataInicio;
        private $dataFimPrevista;
        private $tecnicoResponsavel;
        //Referência de memória
        private $condicao;

        //Métodos

        //Método construtor
        public function __construct ($idManutencao, $dataInicio, $dataFimPrevista, $tecnicoResponsavel) {
            $this->setIdManutencao($idManutencao);
            $this->setDataInicio($dataInicio);
            $this->setDataFimPrevista($dataFimPrevista);
            $this->setTecnicoResponsavel($tecnicoResponsavel);
        }//Fim do método construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setIdManutencao ()
        public function setIdManutencao ($idManutencao) {
            if (is_string($idManutencao)) {
                $this->idManutencao = $idManutencao;
            }
        }//Fim do método setIdManutencao ()

        //Método getIdManutencao ()
        public function getIdManutencao () {
            return $this->idManutencao;
        }//Fim do método getIdManutencao ()

        //Método setDataInicio ()
        public function setDataInicio ($dataInicio) {
            if (is_string($dataInicio)) {
                $this->dataInicio = $dataInicio;
            }
        }//Fim do método setDataInicio ()

        //Método getDataInicio ()
        public function getDataInicio () {
            return $this->dataInicio;
        }//Fim do método getDataInicio ()

        //Método setDataFimPrevista ()
        public function setDataFimPrevista ($dataFimPrevista) {
            if (is_string($dataFimPrevista)) {
                $this->dataFimPrevista = $dataFimPrevista;
            }
        }//Fim do método setDataFimPrevista ()

        //Método getDataFimPrevista ()
        public function getDataFimPrevista () {
            return $this->dataFimPrevista;
        }//Fim do método getDataFimPrevista ()

        //Método setTecnicoResponsavel ()
        public function setTecnicoResponsavel ($tecnicoResponsavel) {
            if (is_string($tecnicoResponsavel)) {
                $this->tecnicoResponsavel = $tecnicoResponsavel;
            }
        }//Fim do método setTecnicoResponsavel ()

        //Método getTecnicoResponsavel ()
        public function getTecnicoResponsavel () {
            return $this->tecnicoResponsavel;
        }//Fim do método getTecnicoResponsavel ()

        //Método setCondicao ()
        public function setCondicao (Condicao $c) {
            //Passando a referência
            $this->condicao = $c;
        }//Fim do método setCondicao ()

        //Método getCondicao ()
        public function getCondicao () {
            return $this->condicao;
        }//Fim do método getCondicao ()
    }//Fim da Classe Manutencao
?>