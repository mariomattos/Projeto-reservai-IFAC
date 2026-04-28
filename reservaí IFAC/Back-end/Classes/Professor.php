<?php
    //Classe Professor ()
    class Professor extends Usuario {
        //Atributos
        protected $disciplina;
        
        //Método Construtor ()
        public function __construct ($matricula, $cpfUsuario, $dataNascimentoUsuario, $emailUsuario, $senhaUsuario, $disciplina) {
            parent::__construct ($matricula, $cpfUsuario, $dataNascimentoUsuario, $emailUsuario, $senhaUsuario);
            $this->setDisciplina ($disciplina);
        }//Fim do método Construtor ()

        //Método setDisciplina ()
        public function setDisciplina ($disciplina) {
            $this->disciplina = $disciplina;
        }//Fim do método setDisciplina ()

        //Método getDisciplina ()
        public function getDisciplina () {
            return $this->disciplina;
        }//Fim do método getDisciplina ()
    }//Fim da classe Professor ()
?>