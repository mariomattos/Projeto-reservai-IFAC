<?php
    //Classe Reserva
    class Reserva {
        //Atributos
        private $idReserva;
        private $horarioReserva;
        private $dataReserva;
        //Referência de memória
        private $usuario; //Associação

        //Métodos

        //Método construtor
        public function __construct ($idReserva, $horarioReserva, $dataReserva) {
            $this->setIdReserva ($idReserva);
            $this->setHorarioReserva ($horarioReserva);
            $this->setDataReserva ($dataReserva);
        }//Fim do método construtor

        //Método setIdReserva ()
        public function setIdReserva ($idReserva) {
            $this->idReserva = $idReserva;    
        }//Fim do método setIdReserva ()

        //Método getIdReserva ()
        public function getIdReserva () {
            return $this->idReserva;
        }//Fim do método getIdReserva ()

        //Método setHorarioReserva ()
        public function setHorarioReserva ($horarioReserva) {
            $this->horarioReserva = $horarioReserva;
        }//Fim do método setHorarioReserva ()

        //Método getHorarioReserva ()
        public function getHorarioReserva () {
            return $this->horarioReserva;
        }//Fim do método getHorarioReserva ()

        //Método setDataReserva ()
        public function setDataReserva ($dataReserva) {
            $this->dataReserva = $dataReserva;
        }//Fim do método setDataReserva ()

        //Método getDataReserva ()
        public function getDataReserva () {
            return $this->dataReserva;
        }//Fim do método getDataReserva ()

        //Método setUsuario ()
        public function setUsuario (Usuario $u) {
        //Passando a referência do objeto u
            $this->usuario = $u;
        }//Fim do método setUsuario ()

        //Método getUsuario ()
        public function getUsuario () {
            return $this->usuario;
        }//Fim do método getUsuario ()
    }//Fim da classe Reserva
?>