<?php
    //Classe Aluno ()
    class Aluno extends Usuario {
        //Atributos
        protected $nivelDeEnsino;

        //Método Construtor ()
        public function __construct ($matricula,$cpfUsuario, $dataNascimentoUsuario, $emailUsuario, $senhaUsuario, $nivelDeEnsino) {
            parent::__construct ($matricula,$cpfUsuario, $dataNascimentoUsuario, $emailUsuario, $senhaUsuario);
            $this->setNivelDeEnsino($nivelDeEnsino);
        }//Fim do método Construtor ()

        //Método setNivelDeEnsino ()
        public function setNivelDeEnsino ($nivelDeEnsino) {
            $this->nivelDeEnsino = $nivelDeEnsino;
        }//Fim do método setNivelDeEnsino ()

        //Método getNivelDeEnsino ()
        public function getNivelDeEnsino () {
            return $this->nivelDeEnsino;
        }//Fim do método getNivelDeEnsino ()
    }//Fim da Classe Aluno
?>