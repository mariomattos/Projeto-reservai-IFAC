<?php
    //Classe Administrador ()
    class Administrador extends Usuario {
        //Atributos
        protected $numeroDeAcesso;

        //Método Construtor ()
        public function __construct ($matricula, $cpfUsuario, $dataNascimentoUsuario, $emailUsuario, $senhaUsuario, $numeroDeAcesso) {
            parent::__construct ($matricula, $cpfUsuario, $dataNascimentoUsuario, $emailUsuario, $senhaUsuario);
            $this->setNumeroDeAcesso($numeroDeAcesso);
        }//Fim do método Construtor ()

        //Método setNumeroDeAcesso ()
        public function setNumeroDeAcesso ($numeroDeAcesso) {
            $this->numeroDeAcesso = $numeroDeAcesso;
        }//Fim do método setNumeroDeAcesso ()

        //Método getNumeroDeAcesso ()
        public function getNumeroDeAcesso () {
            return $this->numeroDeAcesso;
        }//Fim do método getNumeroDeAcesso ()
    }//Fim da classe Administrador ()
?>