<?php
    //Classe Manutencao
    class Manutencao {
        //Atributos
        private $idManutencao;
        private $dataInicio;
        private $dataFimPrevista;
        private $tecnicoResponsavel;

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
            $this->idManutencao = $idManutencao;
        }//Fim do método setIdManutencao ()

        //Método getIdManutencao ()
        public function getIdManutencao () {
            return $this->idManutencao;
        }//Fim do método getIdManutencao ()

        //Método setDataInicio ()
        public function setDataInicio ($dataInicio) {
            $this->dataInicio = $dataInicio;
        }//Fim do método setDataInicio ()

        //Método getDataInicio ()
        public function getDataInicio () {
            return $this->dataInicio;
        }//Fim do método getDataInicio ()

        //Método setDataFimPrevista ()
        public function setDataFimPrevista ($dataFimPrevista) {
            $this->dataFimPrevista = $dataFimPrevista;
        }//Fim do método setDataFimPrevista ()

        //Método getDataFimPrevista ()
        public function getDataFimPrevista () {
            return $this->dataFimPrevista;
        }//Fim do método getDataFimPrevista ()

        //Método setTecnicoResponsavel ()
        public function setTecnicoResponsavel ($tecnicoResponsavel) {
            $this->tecnicoResponsavel = $tecnicoResponsavel;
        }//Fim do método setTecnicoResponsavel ()

        //Método getTecnicoResponsavel ()
        public function getTecnicoResponsavel () {
            return $this->tecnicoResponsavel;
        }//Fim do método getTecnicoResponsavel ()
    }//Fim da Classe Manutencao
?>