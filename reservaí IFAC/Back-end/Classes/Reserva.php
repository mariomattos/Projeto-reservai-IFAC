<?php
    //Classe Reserva
    class Reserva {
        //Atributos
        private $idReserva;
        private $horarioReserva;
        private $espaco; //Agregação
        private $usuario; //Agregação

        //Métodos

        //Método construtor
        public function __construct ($idReserva, $horarioReserva) {
            $this->setIdReserva ($idReserva);
            $this->setHorarioReserva ($horarioReserva);
        }//Fim do método construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

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

        //Método setEspaco ()
        public function setEspaco (Espaco $e) {
        //Passando a referência do objeto e
            $this->espaco = $e;
        }//Fim do método setEspaco ()

        //Método getEspaco ()
        public function getEspaco () {
            return $this->espaco;
        }//Fim do método getEspaco ()

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