<?php
    //Classe Student ()
    class Student extends User {
        //Atributos
        protected $educationLevel;

        //Método __construct ()
        public function __construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword, $educationLevel) {
            parent::__construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword);
            $this->setEducationLevel($educationLevel);
        }//Fim do método __construct ()

        //Método setEducationLevel ()
        public function setEducationLevel ($educationLevel) {
            $this->educationLevel = $educationLevel;
        }//Fim do método setEducationLevel ()

        //Método getEducationLevel ()
        public function getEducationLevel () {
            return $this->educationLevel;
        }//Fim do método getEducationLevel ()
    }//Fim da Classe Student
?>