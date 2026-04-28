<?php
    //Classe Usuario
    class Usuario {
        //Atributos
        private $matricula;
        private $cpfUsuario;
        private $dataNascimentoUsuario;
        private $caracteristicas; //Composição

        //Métodos

        //Método Construtor
        public function __construct ($matricula, $cpfUsuario, $dataNascimentoUsuario) {
            $this->setMatricula ($matricula);
            $this->setCpfUsuario ($cpfUsuario);
            $this->setDataNascimentoUsuario ($dataNascimentoUsuario);
            $this->caracteristicas = array();
        }//Fim do método Construtor

        //Método setMatricula ()
        public function setMatricula ($matricula) {
            $this->matricula = $matricula;
        }//Fim do Método setMatricula ()

        //Método getMatricula ()
        public function getMatricula () {
            return $this->matricula;
        }//Fim do Método getMatricula ()

        //Método setCpfUsuario ()
        public function setCpfUsuario ($cpfUsuario) {
            $this->cpfUsuario = $cpfUsuario;
        }//Fim do Método setCpfUsuario ()

        //Método getCpfUsuario ()
        public function getCpfUsuario () {
            return $this->cpfUsuario;
        }//Fim do Método getCpfUsuario ()

        //Método setDataNascimentoUsuario ()
        public function setDataNascimentoUsuario ($dataNascimentoUsuario) {
            $this->dataNascimentoUsuario = $dataNascimentoUsuario;
        }//Fim do Método setDataNascimentoUsuario ()

        //Método getDataNascimentoUsuario ()
        public function getDataNascimentoUsuario () {
            return $this->dataNascimentoUsuario;
        }//Fim do Método getDataNascimentoUsuario ()

        //Método addCaracteristicas
        public function addCaracteristicas($nome, $descricao, $quantidade) {
            $this->caracteristicas[] = new Caracteristicas ($nome, $descricao, $quantidade);
        }//Fim do método addCaracteristicas()

        public function getCaracteristicas () {
            return $this->caracteristicas;
        }
    }//Fim da Classe Usuario
?>