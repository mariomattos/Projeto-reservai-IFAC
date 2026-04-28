<?php
    //Classe Usuario
    class Usuario {
        //Atributos
        private $matricula;
        private $cpfUsuario;
        private $dataNascimentoUsuario;
        private $emailUsuario;
        private $senhaUsuario;
        private $caracteristicas; //Composição

        //Métodos

        //Método Construtor
        public function __construct ($matricula, $cpfUsuario, $dataNascimentoUsuario, $emailUsuario, $senhaUsuario) {
            $this->setMatricula ($matricula);
            $this->setCpfUsuario ($cpfUsuario);
            $this->setDataNascimentoUsuario ($dataNascimentoUsuario);
            $this->setEmailUsuario ($emailUsuario);
            $this->setSenhaUsuario ($senhaUsuario);
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

        //Método setEmailUsuario ()
        public function setEmailUsuario ($emailUsuario) {
            $this->emailUsuario = $emailUsuario;
        }//Fim do Método setEmailUsuario ()

        //Método getEmailUsuario ()
        public function getEmailUsuario () {
            return $this->emailUsuario;
        }//Fim do Método getEmailUsuario ()

        //Método setSenhaUsuario ()
        public function setSenhaUsuario ($senhaUsuario) {
            $this->senhaUsuario = $senhaUsuario;
        }//Fim do Método setSenhaUsuario ()

        //Método getSenhaUsuario ()
        public function getSenhaUsuario () {
            return $this->senhaUsuario;
        }//Fim do Método getSenhaUsuario ()

        //Método addCaracteristicas
        public function addCaracteristicas($nome, $descricao, $quantidade) {
            $this->caracteristicas[] = new Caracteristicas ($nome, $descricao, $quantidade);
        }//Fim do método addCaracteristicas()

        public function getCaracteristicas () {
            return $this->caracteristicas;
        }
    }//Fim da Classe Usuario
?>